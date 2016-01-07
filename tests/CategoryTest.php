<?php

use Techademia\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
{
    public function testSeeInDatabase()
    {
        Category::create(['title' => 'robotics']);

        $this->seeInDatabase('categories', ['title' => 'robotics']);
    }
}
