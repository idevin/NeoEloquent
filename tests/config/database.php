<?php

return array(

    'default' => 'default',

    'connections' => array(

        'neo4j' => array(
            'driver' => 'neo4j',
            'host' => 'instance0',
            'port' => 7474,
            'user' => 'neo4j',
            'password' => 'dev'
        ),

        'default' => array(
            'driver' => 'neo4j',
            'host' => 'instance0',
            'port' => 7474,
            'user' => '',
            'password' => ''
        )
    )
);
