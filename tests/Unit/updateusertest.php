<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class updateusertest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(5);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ['name' => 'Steve Smith']);

    }
}
