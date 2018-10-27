<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $item = new Item([
            'title' => 'Boardgames',
            'content' => 'Gloomhaven'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Gitaren',
            'content' => 'Les Paul'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'React',
            'content' => 'React content'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Angular',
            'content' => 'Angular content'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Laravel',
            'content' => 'Laravel online documentatie is geweldig!'
        ]);
        $item->save();

    }
}
