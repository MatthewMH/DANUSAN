<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simpanan extends Model
{
    use HasFactory;

    protected $table = 'simpanan';
	public $timestamps = false;
    protected $fillable = ['idorang','idtoko'];
}
