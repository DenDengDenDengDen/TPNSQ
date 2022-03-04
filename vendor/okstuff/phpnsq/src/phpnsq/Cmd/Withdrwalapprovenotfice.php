<?php
/**
 * 提币申请消息监听
 * @author Yongxuan <42215216@qq.com>
 * @copyright Zhice
 */
namespace OkStuff\PhpNsq\Cmd;

use OkStuff\PhpNsq\Stream\Message;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Withdrwalapprovenotfice extends Base
{
    CONST COMMAND_NAME = 'phpnsq:sub2';

    public function configure()
    {
        $this->setName(self::COMMAND_NAME)
            ->addArgument("topic", InputArgument::REQUIRED, "The topic you want to subscribe")
            ->addArgument("channel", InputArgument::REQUIRED, "The channel you want to subscribe")
            ->setDescription('subscribe new notification.')
            ->setHelp("This command allows you to subscribe notifications...");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $phpnsq = self::$phpnsq;
        $phpnsq->setTopic($input->getArgument("topic"))
            ->setChannel($input->getArgument("channel"))
            ->subscribe($this, function (Message $message) use ($phpnsq, $output) {
                $subArr = $message->toArray();
                $resArr = $subArr['body'];
				$bodyArr = json_decode($subArr['body'], true);
				//判断是否为该系统数据
				if($bodyArr['sysId'] == 'TEST'){
					//操作数据库
                    $db = mysqli_connect('127.0.0.1','wh','zy1gN6WnkDnhPH9f','WH');
					if($bodyArr['coinId'] == 102){
						//判断hash是否重复
						$res = mysqli_query($db, "select * from tp_usdt_log where hash='{$bodyArr['hash']}'");
						if(!mysqli_fetch_array($res)){
							//hash不重复则进行操作
							$user_id = $bodyArr['userId'];
							$quantity = $bodyArr['quantity'];
							$hash = $bodyArr['hash'];
							$timestamp = $bodyArr['timestamp'];
							$type = 2;
							$info = '提币到账';
							$status = 1;
							
							mysqli_query($db, "UPDATE tp_usdt_log SET status=1 ,hash='{$hash}',timestamp='{$timestamp}' WHERE id = {$bodyArr['mark']} AND type=2 AND status=0 AND user_id={$user_id} AND quantity='{$quantity}'");
							
							mysqli_close($db);
						}
					}
				}

                $phpnsq->getLogger()->info("READ", $message->toArray());
            });
        //excuted every five seconds.
        $this->addPeriodicTimer(5, function () use ($output) {
            $memory    = memory_get_usage() / 1024;
            $formatted = number_format($memory, 3) . 'K';
            $output->writeln(date("Y-m-d H:i:s") . " ############ Current memory usage: {$formatted} ############");


            //$userInfo = $GLOBALS['db']->query("select blance from ecs_users where user_id=".$_SESSION['user_id']);
            //var_dump($userInfo);
        });
        $this->runLoop();
    }
}