<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'gender',
        'email',
        'country_id',
    ];    
    public function country(){
        return $this->belongsTo(Country::class, "country_id");
    }
}
