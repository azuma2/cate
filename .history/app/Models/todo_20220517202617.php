<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cate;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['cate_id', 'content'];

    public static $rules = array(
        'cate_id' => 'required',
        'content' => 'required|max:20',
    );

    public function cate(){ 
        return $this->belongsTo('App\Models\cate');
    }


}