<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace \xampp\htdocs\robots;

use \xampp\htdocs\robots\Parts\Robots;

class CivilRobotBuilder implements BuilderInterface
{
    /**
     * @var Parts\CivilRobot
     */
    private $civilrobot;
    public function addHead()
    {
        $this->civilrobot->setPart('Head', new Parts\Head());
    }
    public function addBody()
    {
        $this->civilrobot->setPart('Body', new Parts\Body());
    }
    public function addWheel()
    {
        $this->civilrobot->setPart('wheel1', new Parts\Wheel());
        $this->civilrobot->setPart('wheel2', new Parts\Wheel());
        $this->civilrobot->setPart('wheel3', new Parts\Wheel());
        $this->civilrobot->setPart('wheel4', new Parts\Wheel());
    }
    public function createRobot()
    {
        $this->civilrobot = new Parts\CivilRobot();
    }
    public function getRobot(): Robots
    {
        return $this->civilrobot;
    }
}