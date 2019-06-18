<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace \xampp\htdocs\robots;

use \xampp\htdocs\robots\Parts\Robots;
/**
 * Director is part of the builder pattern. It knows the interface of the builder
 * and builds a complex object with the help of the builder
 *
 * You can also inject many builders instead of one to build more complex objects
 */
class Director
{
    public function build(BuilderInterface $builder): Robots
    {
        $builder->createRobot();
        $builder->addHead();
        $builder->addBody();
        $builder->addWheel();
        return $builder->getRobot();
    }
}