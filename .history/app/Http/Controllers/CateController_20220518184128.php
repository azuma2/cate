<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateController extends Controller
{
    public function index()
    {
        $cates = Cate::all();
        return view('cate', ['items' => $items, 'cates' => $cates]);
    }


    public function create(Request $request)
    {
        $param = ['content' => $request->content,];
        
        $this->validate($request, Cate::$rules);
        DB::insert('insert into cates (content) values (:content)', $param);
        return view('cate');
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'content' => $request->content,
        ];
        $items = $this->item->get();
        $this->validate($request, Cate::$rules);
        DB::update('update cates set content =:content where id =:id', $param);
        return redirect('/cate');
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from cates where id =:id', $param);
        return redirect('/cate');
    }

}