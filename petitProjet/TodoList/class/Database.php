<?php

use PDO;
use DateTime;

class Database
{
    public $db;


    public function __construct(string $filename)
    {
        $this->connectToDb('localhost','root','');
    }

    private function connectToDb(string $env = "localhost",string $dbName ='todolist', string $user = "root", $pass = "") 
    {
        $env = strtolower($env);
        try {
            $this->db = new PDO("mysql:host=$env;dbname=$dbName", $user, $pass,array(
                PDO::ATTR_PERSISTENT => true));
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        return $this;
    }
    
    public function addTask(string $title, DateTime $date)
    {

        $title = $_POST['title'];
        $date = date('Y-m-d H:i:s');

        $query = "INSERT INTO `todos`(`title`, `date_time`) VALUES ($title,$date)";
        $this->exec($query);
    }

    private function exec(string $query): void
    {
        $this->db->prepare($query);
        $this->db->exec($query);
    }



}