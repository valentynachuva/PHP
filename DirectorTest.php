<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;
use xampp\htdocs\robots\Parts\MilRobot;
use xampp\htdocs\robots\Parts\CivilRobot;
use xampp\htdocs\robots\Parts\MilRobotBuilder;
use xampp\htdocs\robots\Parts\CivilRobotBuilder;
use xampp\htdocs\robots\Director;

class DirectorTest 
{
    public function testCanBuildCivilRobot()
    {
    $civilRobotBuilder = new CivilRobotBuilder();
    $newRobot = (new Director())->build($civilRobotBuilder);
    $this->assertInstanceOf(CivilRobot::class, $newRobot);
    }
    public function testCanBuildMilRobot()
    {
    $milRobotBuilder = new MilRobotBuilder();
    $newRobot1 = (new Director())->build($milRobotBuilder);
    $this->assertInstanceOf(MilRobot::class, $newRobot1);
    }
}