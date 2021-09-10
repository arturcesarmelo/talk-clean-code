<?php

namespace NKey\Test;

use RedeVistorias\Api\Model\Money;
use PHPUnit\Framework\TestCase;
use \Mockery;

abstract class BaseTest extends TestCase
{
    private static $faker;

    protected static function faker()
    {
        if (is_null(self::$faker)) {
            self::$faker = \Faker\Factory::create('pt_BR');
        }
        return self::$faker;
    }
}