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

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertEquals(150, $product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertEquals(200, $product->calculatePrice());
    }
}
