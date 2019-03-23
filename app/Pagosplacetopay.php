<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagosplacetopay extends Model
{
	protected $table = 'pagosplacetopays';
    protected $fillable = ['reference', 'sesion', 'description', 'moneda', 'monto', 'status'];
}
