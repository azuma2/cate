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
        $cates = Cate::all();
        return view('index', ['items' => $items, 'cates' => $cates]);
    }


    public function create(Request $request)
    {
        $param = ['content' => $request->content,];
        $this->validate($request, Todo::$rules);

        $param2 = ['content' => $request->content,];
        $this->validate($request, Cate::$rules);


        DB::insert('insert into todos (content) values (:content)', $param);
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