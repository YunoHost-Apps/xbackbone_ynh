<?php

return array(
    'base_url' => 'https://__DOMAIN____PATH__',
    'db' => array (
        'connection' => 'mysql',
        'dsn' => 'host=localhost;port=3306;dbname=__DB_NAME__',
        'username' => '__DB_NAME__',
        'password' => '__DB_PWD__',
    ),

    'storage'  => array(
        'driver' => 'local',
        'path'   => '__DATA_DIR__',
    ),

    'ldap' => array(
        'enabled' => true,
        'schema' => 'ldap',
        'host' => 'localhost',
        'port' => 389,
        'base_domain' => 'ou=users,dc=yunohost,dc=org',
        'search_filter' => '(&(|(objectclass=posixAccount))(|(uid=????)(mail=????))(permission=cn=__APP__.main,ou=permission,dc=yunohost,dc=org))',
    ),
);
