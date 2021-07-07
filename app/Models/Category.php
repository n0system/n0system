<?php

namespace App\Models;

use App\Http\Controllers\IdeaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function ideas()
    {
        return $this->hasMany(IdeaController::class);
    }
}
