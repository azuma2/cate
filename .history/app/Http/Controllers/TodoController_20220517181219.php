<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        $items = DB::select('select * from todos');
        return view('index', ['items' => $items]);
    }

    public function index2()
    {
        $item2s = Cate::all();
        $item2s = DB::select('select * from cates');
        return view('index', ['item2s' => $items]);
    }

    public function create(Request $request)
    {
        $param = ['content' => $request->content,];
        $this->validate($request, Todo::$rules);

        DB::insert('insert into todos (content) values (:content)', $param);
        return redirect('/');
    }

    public function update(Request $request)
    {
         $param = [
            'id' => $request->id,
            'content' => $request->content,
            
        ];
        $this->validate($request, Todo::$rules);
        DB::update('update todos set content =:content where id =:id', $param);
        return redirect('/');
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from todos where id =:id', $param);
        return redirect('/');
    }



}