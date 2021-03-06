<?php

namespace App\Http\Controllers;

use App\Item;
use App\Like;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //
    public function getIndex()
    {
        $items = Item::orderBy('created_at', 'desc')->paginate(2);
        return view('content.index',['items' => $items]);
    }

    public function getItem($id){

        $item = Item::where('id', $id)->with('likes')->first();
//        $item = DB::table('items')->where('id', $id)->first();
        return view('content.item',['item' => $item]);

    }
    public function getLikeItem($id){

        $item = Item::where('id', $id)->first();
        $like = new Like();
        $item->likes()->save($like);
//        $item = DB::table('items')->where('id', $id)->first();
        return redirect()->back();

    }

    public function postCreateItem(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);

        $item = new Item([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        $item->save();

        return redirect()->route('admin.index');
    }

    public function postUpdateItem(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);
        //Haal aan te passen item op uit DB
        $item = Item::find($request->input('id'));
        //Pas waarden aan
        $item->title = $request->input('title');
        $item->content = $request->input('content');
        //Save het item
        $item->save();

        //tags opslagen
//        $item->tags()->detach();
//        $item->tags()->attach($request->input('tags'));
        $item->tags()->sync(
            $request->input('tags') === null
                ? ''
                : $request->input('tags'));


        return redirect()->route('admin.index');
    }

}
