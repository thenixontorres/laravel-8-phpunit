<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_set_name_in_lower_case()
    {
        $post = new Post;
        $post->name = 'Proyecto en php';
        $this->assertEquals('proyecto en php', $post->name);    
    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'Proyecto en php';
        $this->assertEquals('proyecto-en-php', $post->slug);    
    }
}
