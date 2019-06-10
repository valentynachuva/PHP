<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots\Test;

use xampp\htdocs\robots\milrobot;
use xampp\htdocs\robots\robotFactory;
use xampp\htdocs\robots\civilrobot;
//use PHPUnit\Framework\TestCase;

class AbstractFactoryTest 
{
   
    public function testCanCreateMilRobot()
    {
        $factory = new RobotFactory();
        $robot = $factory->createMilRobot();

        $this->assertInstanceOf(MilRobot::class, $robot);
    }
 public function testCanGetMilRobotName()
    {
        $GetName = new GetName;
    echo $GetName->GetRobotName();
    }
    public function testCancreateCivilRobot()
    {
        $factory = new RobotFactory();
        $robot = $factory->createCivilRobot();

        $this->assertInstanceOf(CivilRobot::class, $robot);
    }
          public function testCanGetCivilRobotName()
    {
        $GetName1 = new GetName;
    echo $GetName1->GetRobotName();
    }
}
