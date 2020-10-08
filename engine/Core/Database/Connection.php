<?php

namespace Engine\Core\Database;

use \PDO;

class Connection
{
    private $link;

    /**
     * Connection constructor.
     *
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return $this
     */
    private function connect()
    {
       //$config = require_once "config.php";
        $config = [
            'host'=>'localhost',
            'db_name'=>'php_db',
            'username'=>'root',
            'password'=>'root',
            'charset'=>'utf8'
        ];

       $dns = 'mysql:host'.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

       $this->link = new PDO($dns,$config['username'],$config['password']);

       return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql)
    {
        $sth = $this->link->prepare($sql);

        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false)
        {
            return [];
        }

        return $result;

    }
}