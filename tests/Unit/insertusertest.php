<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class insertusertest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()

    {
        $user = new User();
        $user->name = 'sugam';
        $user->email = 'sugam@gmail.com';
        $user->password = 'password';
        $this->assertTrue($user->save());

        $this->assertDatabaseHas('users', [
            'name' => 'sugam',
            'email' => 'sugam@gmail.com']);

    }

}
