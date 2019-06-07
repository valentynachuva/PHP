<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace xampp\htdocs\robots;
class MilRobot implements Robot{
    private $name;
    public function __construct($name) {
        $this->name=$name;
        ;
    }
 public function getname();
public function resetname();
public function rebootname();
}