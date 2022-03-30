<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    public $timestamps = true;


    protected $fillable = [
        'nama',
        'created_at'
    ];

    public function product()
    {
        return $this->hasMany('App\Products');
    }
}
