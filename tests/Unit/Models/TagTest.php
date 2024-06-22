<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    /**
     * Check if model return slug
     * @return void
     */
    public function test_slug(): void
    {
        $tag = new Tag();
        $tag->name = 'Proyecto en Laravel';

        $this->assertEquals('proyecto-en-laravel', $tag->slug);
    }
}
