<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table="locations";
    protected $fillable = [
        'title',
        'sub_title',
        'location',
        'phone',
        'image',
        'email',
        'created_at',
        'updated_at'
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','title','sub_title','location','phone','image','email');
    }
    public function getImageAttribute($val)
    {
        return($val !== NULL) ? asset($val) : "";
    }
}
