<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    protected $table = 'alamat';
	public $timestamps = false;
    protected $fillable = ['jalan','kabupatenkota', 'provinsi'];
}
