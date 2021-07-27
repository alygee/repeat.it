<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create()->each(function ($user) {
            $bundles = $user->bundles()->saveMany(\App\Models\Bundle::factory()->count(10)->make());

            $bundles->each(function ($bundle) {
                $this->create_card($bundle, false);
                $this->create_card($bundle, true);
            });
        });
    }

    private function create_card($bundle, $hidden)
    {
        $card = $bundle->cards()->save(\App\Models\Card::factory()->make([
          'hidden' => $hidden
        ]));
        $card->word()->save(\App\Models\Word::factory()->make());
    }
}
