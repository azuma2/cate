<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;

class Cate extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required|max:10',
    );

    public function todo(){ 
        return $this->belongsTo('App\Models\todo');
    }


}