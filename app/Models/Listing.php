<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter ($query , $filters){
        //check if the tags querry exists
        if ($filters) {
                $query->where('tags','like','%'. $filters . '%');
        }
    }

    public function scopeSearch ($query , $search){
           if ($search) {
            $query->where('title','like','%'. $search . '%')
                    ->orwhere('location','like','%'. $search . '%')
                    ->orwhere('tags' , 'like','%'. $search . '%');
    }
    }
}
