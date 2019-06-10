<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;
abstract class CreateRobot {

 public $letters= "abcdefghijklmnopqrstuvwxyz";
 public $numbers="0123456789";
 protected function GetRobotName1() 
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
 return  $name. $name1. "\n";
}  
private function RebootName()
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
}}

