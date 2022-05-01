<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rule;

class Product extends Model
{
    use HasFactory;

    public function rules()
    {
        return $this->belongsToMany(Rule::class);
    }
}
