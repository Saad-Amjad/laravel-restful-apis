<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example of books list api.
     *
     * @return void
     */
    public function test_books_list_api()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        $response = $this->get('/api/v1/books');
        $response->assertStatus(200);
    }
}
