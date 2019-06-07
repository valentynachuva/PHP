<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;
class RobotFactory{
    public function createMilRobot($name):Robot{
        return new createMilRobot ($name);
    }
    public function createCivilRobot($name):Robot{
        return new createCivilRobot ($name);
    }
}