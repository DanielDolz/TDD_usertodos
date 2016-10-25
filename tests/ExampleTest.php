<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // /todos-> Mostra els todos de l'usuari logat
        $user = factory(\App\User::class);
        $task = factory(\App\Task::class);

        $user->addTask($task);
        $this->actingAs($user)
             ->visit('/tasks')
             ->see($task->name);
    }
}
