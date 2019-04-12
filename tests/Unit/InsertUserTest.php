<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUserTest()
    {
        $user = new User;
        $user->name = 'Captain America';
        $user->email = 'cap@marvel.com';
        $user->password = 'jlkzTRuefhweiuf';
        $this->assertTrue($user->save());
    }
}
