<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace \xampp\htdocs\robots;
use \xampp\htdocs\robots\Parts\Robots;
interface BuilderInterface
{
    public function createRobot();
    public function addWheel();
    public function addHead();
    public function addBody();
    public function getRobot(): Robots;
}