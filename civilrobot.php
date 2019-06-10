<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;
require_once("robotFactory.php");
require_once("robots.php");
class GetCivilRobotName extends CreateRobot
{  
    public function GetRobotName1()
            { 
        $name= "";
        for ($i=0; $i<3; $i++)
    {   $letters=mb_strtoupper($this->letters);
        $randLetters= rand(0,26);
        $name .= $letters [$randLetters];
    } 
$name1 ="";
for ($j=0; $j<4; $j++)
{
$randNumbers = rand(0,9);
$name1 .=$this->numbers[$randNumbers];
$name1;
}
    $fp = fopen("Civil_Robots_Name.txt", "a");
     echo 'Civil_Robots_Name is: ' . $newname= $name.$name1 . "\n";
     $test = fwrite($fp, $newname);
     if ($test)
     {
         echo 'Name was saved '."\n";
     }
 else {
         echo 'ERROR'."\n";    
     }
     fclose($fp);
       }
             public function ResetName()
       {
           $fp = fopen("Civil_Robots_Name.txt", 'a'); //Открываем файл в режиме записи
        $reset= ftruncate($fp, 0);
        if (isset($reset))
     {
         echo 'Name was deleted '."\n";
     }
 else {
         echo 'ERROR'."\n";    
     }
}
public function RebootName()
{$name= "";
        for ($i=0; $i<3; $i++)
    {   $letters=mb_strtoupper($this->letters);
        $randLetters= rand(0,26);
        $name .= $letters [$randLetters];
    } 
$name1 ="";
for ($j=0; $j<4; $j++)
{
$randNumbers = rand(0,9);
$name1 .=$this->numbers[$randNumbers];
$name1;
}
    $fp = fopen("Civil_Robots_Name.txt", "a");
     echo 'Civil_Robots_Name is: ' . $newname= $name.$name1 . "\n";
     $test = fwrite($fp, $newname);
     if ($test)
     {
         echo 'New Name was saved '."\n";
     }
 else {
         echo 'ERROR'."\n";    
     }
     fclose($fp);
       }
 }

class CivilRobot implements Robot{
    
public function Run()
{
     return 'I can Run';
}
public function Sing()
{
    return 'I can Sing';
}
public function Dance()
{
    return 'I can Dance';
}
}

