<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $table = 'makanan';
	public $timestamps = false;
    protected $fillable = ['namamakanan','harga'];
}
