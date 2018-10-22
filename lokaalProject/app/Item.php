<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'content'];

    public function getItems($session)
    {
        if (!$session->has('items')) {
            $this->createDummyData($session);
        }
        return $session->get('items');
    }

    public function createDummyData ($session)
    {
        $items = [
            [ 'id' => 1, 'title' => 'Gitaar', 'content' => 'Vintage Les Paul van 1965'],
            [ 'id' => 2, 'title' => 'Boardgame', 'content' => 'Food Chain Magnate in perfecte staat!'],
            [ 'id' => 3, 'title' => 'Auto', 'content' => 'Audi A4, 2018, 10.000 km']

        ];
        $session->put('items', $items);
    }
}
