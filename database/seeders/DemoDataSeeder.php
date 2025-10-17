<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        // Get admin user
        $admin = User::first();

        // Create Categories
        $categories = [
            ['name' => 'Berita Kegiatan', 'slug' => 'berita-kegiatan'],
            ['name' => 'Pengumuman', 'slug' => 'pengumuman'],
            ['name' => 'Artikel', 'slug' => 'artikel'],
        ];

        foreach ($categories as $cat) {
            $cat['is_active'] = true;
            Category::create($cat);
        }

        // Create Posts
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'category_id' => rand(1, 3),
                'user_id' => $admin->id,
                'title' => "Berita Demo $i: Kegiatan Pramuka di Kampus",
                'slug' => "berita-demo-$i-kegiatan-pramuka-di-kampus",
                'excerpt' => "Ini adalah ringkasan berita demo ke-$i tentang kegiatan pramuka",
                'content' => "<p>Ini adalah konten lengkap berita demo ke-$i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>",
                'status' => 'published',
                'is_featured' => $i <= 3,
                'published_at' => now()->subDays(rand(1, 30)),
                'views' => rand(10, 500),
            ]);
        }

        // Create Events
        for ($i = 1; $i <= 5; $i++) {
            Event::create([
                'title' => "Event Demo $i",
                'slug' => "event-demo-$i",
                'description' => "Deskripsi event demo ke-$i",
                'location' => "Kampus UIN",
                'start_date' => now()->addDays($i * 7),
                'end_date' => now()->addDays($i * 7 + 1),
                'status' => 'upcoming',
            ]);
        }
    }
}
