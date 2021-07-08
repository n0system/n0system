<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    // function getColorClasses()
    // {

    //     $allStatuses = [
    //         'Ouvert' => 'bg-gray-200',
    //         'Examination' => 'bg-purple text-white',
    //         'En cours' => 'bg-yellow text-white',
    //         'Mis en place' => 'bg-green text-white',
    //         'Clos' => 'bg-red text-white',
    //     ];
    //     return $allStatuses[$this->name];
    // }
}
