<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = file_get_contents("../site_config/databaseuser.txt");
        $this->password = file_get_contents("../site_config/databasepassword.txt");
        $this->databasename = file_get_contents("../site_config/databasename.txt");
    }
}
