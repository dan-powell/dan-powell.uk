<?php

namespace Database\Seeders;

use App\Models\Ai52\Piece;
use App\Models\Ai52\Theme;
use Illuminate\Database\Seeder;

class Ai52Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = Theme::factory()
            ->count(20)
            ->create();

        foreach($themes as $theme) {
            Piece::factory()
                ->count(rand(1,6))
                ->state([
                    'theme_id' => $theme->id,
                ])
                ->create();
        }

    }
}
