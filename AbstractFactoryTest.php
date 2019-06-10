<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;

require_once("milrobot.php");
require_once("civilrobot.php");

        $GetRobotName = new GetMilRobotName();
   echo $GetRobotName->GetRobotName1();
   $GetRobotName->ResetName();
   echo $GetRobotName->RebootName();
    echo (MilRobot::Run()."\n");
   echo (MilRobot::Sing()."\n");
    echo (MilRobot::Fire()."\n");
   
        $GetRobotName1 = new GetCivilRobotName();
  echo $GetRobotName1->GetRobotName1();
 $GetRobotName1->ResetName();
  echo $GetRobotName1->GetRobotName1();
       echo (CivilRobot::Run()."\n");
   echo (CivilRobot::Sing()."\n");
    echo (CivilRobot::Dance()."\n");
  

