<?php


class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "tymobile";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        mysqli_set_charset($this->con, 'utf8');
        return $this->con;
    }
    public function query($sql)
    {
        if($this->con->query($sql)==true) return true;
        return false;

    }
    public function real_escape_string($string){
        return $this->con->real_escape_string($string);
    }
    public function error(){
        return $this->con->error;
    }
    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
