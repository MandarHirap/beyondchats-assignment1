<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'BeyondChats launches new AI chat platform',
            'content' => 'BeyondChats has introduced a new AI-powered chat platform for businesses.',
            'source' => 'BeyondChats Blog',
            'published_at' => Carbon::now()->subDays(1),
        ]);

        Article::create([
            'title' => 'AI in customer support is growing fast',
            'content' => 'AI adoption in customer support has increased by 40% in 2024.',
            'source' => 'Tech News',
            'published_at' => Carbon::now()->subDays(2),
        ]);
    }
}