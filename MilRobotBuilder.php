<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace \xampp\htdocs\robots;

use \xampp\htdocs\robots\Parts\Robots;

class MilRobotBuilder implements BuilderInterface
{
    /**
     * @var Parts\MilRobot
     */
    private $milrobot;
    public function addHead()
    {
        $this->milrobot->setPart('Head', new Parts\Head());
       
    }
    public function addBody()
    {
        $this->milrobot->setPart('Body', new Parts\Body());
    }
    public function addWheel()
    {
        $this->milrobot->setPart('LeftCaterpillar', new Parts\Wheel());
        $this->milrobot->setPart('RightCaterpillar', new Parts\Wheel());
      
    }
    public function createRobot()
    {
        $this->milrobot = new Parts\MilRobot();
    }
    public function getRobot(): Robots
    {
        return $this->milrobot;
    }

   }