<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new Tag(['name' => 'Muziekinstrumenten']);
        $tag->save();
        $tag = new Tag(['name' => 'Javascript']);
        $tag->save();
        $tag = new Tag(['name' => 'Lesmateriaal']);
        $tag->save();
        $tag = new Tag(['name' => 'Tutorial']);
        $tag->save();
        $tag = new Tag(['name' => 'Boek']);
        $tag->save();
    }
}
