<?php
require_once 'requires.php';
class User
{
    private $name;
    private $logTitle;
    private $logDescription;
    
    function __construct($row,$conn)
    {
        $this->name = $row['userName'];
        $this->logTitle = $row['title'];
        $this->logDescription = $row['description'];
        
    } 
    function getName()
    {
        return $this->name;
    }
    function getLogTitle()
    {
        return $this->logTitle;
    }
    function getLogDescription()
    {
        return $this->logDescription;
    }
}
?>