<?php

namespace Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Check if tags store
     * @return void
     */
    public function test_store(): void
    {
        $this->withoutExceptionHandling();
        $this->post('/tags', [
           'name' => 'PHP'
        ])->assertRedirect('/');

        $this->assertDatabaseHas('tags', ['name' => 'PHP']);
    }

    /**
     * Check if name filed is correctly validated
     * @return void
     */
    public function test_store_validate_empty_name()
    {
        $this->post('/tags', [
            'name' => null
        ])->assertSessionHasErrors('name');
    }

    /**
     * Check if tag was deleted
     * @return void
     */
    public function test_delete_tag()
    {
        $this->withoutExceptionHandling();
        $tag = Tag::factory()->create();

        $this->delete("/tags/{$tag->id}")->assertRedirect('/');

        $this->assertDatabaseMissing('tags', ['id' => $tag->id]);
    }

    /**
     * Check if tag id not exists
     * @return void
     */
    public function test_delete_not_exists()
    {
       $this->delete("/tags/100000")->assertStatus(404);
    }

}
