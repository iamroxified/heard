<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BlogImageDeliveryTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_uploaded_blog_image_is_saved_and_served_to_the_blog(): void
    {
        Storage::fake('public');

        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)
            ->post(route('admin.blog.store'), [
                'title' => 'Image delivery test',
                'category' => 'Industry Insight',
                'featured_image' => UploadedFile::fake()->image('cover.jpg'),
                'excerpt' => 'Testing uploaded blog image delivery.',
                'content' => '<p>Test content</p>',
                'author' => 'Test Author',
                'published_at' => '2026-10-23',
                'status' => 'published',
            ])
            ->assertRedirect(route('admin.blog.index'));

        $post = BlogPost::where('slug', 'image-delivery-test')->firstOrFail();
        $imagePath = $post->featured_image_path;

        $this->assertNotEmpty($imagePath);
        Storage::disk('public')->assertExists($imagePath);

        $imageUrl = route('media.show', ['path' => $imagePath]);

        $this->get($imageUrl)
            ->assertOk()
            ->assertHeader('Content-Type', 'image/jpeg');

        $this->get(route('blog'))
            ->assertOk()
            ->assertSee($imageUrl, false);
    }

    public function test_media_route_does_not_serve_files_outside_upload_directories(): void
    {
        $this->get(route('media.show', ['path' => 'private/credentials.txt']))
            ->assertNotFound();

        $this->get(route('media.show', ['path' => 'blog/../private/credentials.txt']))
            ->assertNotFound();
    }
}
