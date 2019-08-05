<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class insertcartest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new car;
        $car->Make='Ford';
        $car->Model='Mustang';
        $car->Year=2000;
        $car->save();

        $this->assertDatabaseHas('cars', [
            'Make' => 'Ford',
            'Model' => 'Mustang',
            'Year' => 2000]);
    }
}
