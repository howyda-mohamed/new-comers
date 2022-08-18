<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table="notifications";
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','title','description','created_at');
    }
   
}
