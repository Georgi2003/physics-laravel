<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formula extends Model
{
    protected $primaryKei = 'id';
    public $timestamps = false;

    use SoftDeletes;

    public function magnitude()
    {
    	return $this->belongsTo('App\Models\Magnitude');
    }
}
