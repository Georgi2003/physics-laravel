<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Magnitude extends Model
{
    protected $table = 'magnitudes'; 
    protected $primaryKei = 'id';
    public $incrementing = true;
    public $timestamps = false;

    use SoftDeletes;

    public function units()
    {
    	return $this->hasMany('App\Models\Unit');
    	return $this->hasMany('App\Models\Formula');
    }
}
