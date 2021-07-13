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
    public static function getCount()
    {
        return Idea::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("count(case when status_id = 1 then 1 end) as ouvert")
            ->selectRaw("count(case when status_id = 2 then 1 end) as examination")
            ->selectRaw("count(case when status_id = 3 then 1 end) as encours")
            ->selectRaw("count(case when status_id = 4 then 1 end) as implementation")
            ->selectRaw("count(case when status_id = 5 then 1 end) as clos")
            ->first()
            ->toArray();
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
