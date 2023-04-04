<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Post as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function getById($id){
        return Post::where([
            'id' => $id,
        ])->first();
    }

    protected $table="Posts"; 
    public $timestamps= false;
    protected $primaryKey = 'no_rekening'; 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'no_rekening',
        'nama',
        'alamat',
        'jenis_tabungan',
        'saldo',
    ];
}
