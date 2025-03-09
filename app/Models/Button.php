<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $table = 'buttons_data';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'link', 'color', 'date_created', 'last_updated'];
}

