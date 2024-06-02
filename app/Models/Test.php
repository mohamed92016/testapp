<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;


class Test extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function questions(){
        
        return $this->hasMany(Question::class);
    }

    public function getActive(){
       return $this-> is_active == 0 ? 'غير متاح' : 'متاح';
    }
}
