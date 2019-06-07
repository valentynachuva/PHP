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
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateMilRobot()
    {
        $factory = new RobotFactory();
        $robot = $factory->createMilRobot(150);

        $this->assertInstanceOf(MilRobot::class, $robot);
    }

    public function testCancreateCivilRobot()
    {
        $factory = new RobotFactory();
        $robot = $factory->createCivilRobot(150);

        $this->assertInstanceOf(CivilRobot::class, $robot);
    }

    public function testCanGetMilrobotName()
    {
        $factory = new RobotFactory();
        $robot = $factory->createMilRobot(150);

    
    }

    public function testCanGetCivilRobotName()
    {
        $factory = new ProductFactory();
        $robot = $factory->createShippableProduct(150);
    }
}
