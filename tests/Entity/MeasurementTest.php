<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MeasurementTest extends TestCase
{
    public static function dataGetFahrenheit(): array
    {
        return [
            ['0', '32'],
            ['-100', '-148'],
            ['100', '212'],
            ['0.5','32.9'],
            ['36.6','97.88'],
            ['-273.15','-459.67'],
            ['-89.2','-128.56'],
            ['-40','-40'],
            ['56.7','134.06'],
            ['5500','9932']
        ];
    }

    #[DataProvider('dataGetFahrenheit')]
    public function testGetFahrenheit(string $celsius, string $expectedFahrenheit): void
    {
        $measurement = new Measurement();
        $measurement->setCelsius($celsius);
        $this->assertSame($expectedFahrenheit, $measurement->getFahrenheit());
    }    
}
