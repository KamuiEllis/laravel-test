<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Cat extends Model
{

    use Searchable;
    use HasFactory;
    

    protected $fillable = [
        'name',
        'description',
        'color',
        'location',
        'age',
        'breed',

    ];

    public function toSearchableArray()
    {
        return ['name' => $this->name, 'breed' => $this->breed];
    }
}
