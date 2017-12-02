<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;
use App\category;
class PostsTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function post_count()
    {
    		$count= Post::find(1);
    		$this->assertEquals('the-blog-of-djodjo', $count->slug);
    }
}
