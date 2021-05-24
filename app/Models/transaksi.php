<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
	public $timestamps = false;
    protected $fillable = ['idmakanan', 'idorang', 'idtoko', 'tanggaltransaksi', 'tanggalpengambilan', 'jumlah', 'totalharga'];
}
