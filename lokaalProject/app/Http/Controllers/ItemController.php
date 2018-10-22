<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Session\Store;

class ItemController extends Controller
{
    public function getItems(Store $session){

        $item = new Item();
        $items = $item->getItems($session);
        return view('content.index', ['items' => $items]);

    }

}
