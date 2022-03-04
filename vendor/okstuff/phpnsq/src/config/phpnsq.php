<?php

return [
    "nsq" => [
        "nsqd_addrs" => [
            "120.79.167.138:4150",
        ],
        "lookupd_addrs" => [
            "120.79.167.138:4161",//only support http protocol
        ],
        "lookupd_switch" => true,//recommend to use lookupd
        "logdir" => "/tmp",
        "auth_secret" => "12345678",
        "auth_switch" => false,
        //FIXME:
        // "tls_config" => [
        //     "local_cert" => "/home/vagrant/docker/nsqio/certs/client.pem",
        //     "local_pk" => "/home/vagrant/docker/nsqio/certs/client.key",
        //     "cafile" => "/home/vagrant/docker/nsqio/certs/ca.pem",
        //     "passphrase" => "test", //if your cert has a passphrase
        //     "cn_match" => "test",
        //     "peer_fingerprint" => "sha256",
        // ],
    ],
];
