<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostFlayer extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','duration','prices', 'img'];

    public function reservationForms()
    {
        return $this->hasMany(ReservationForm::class);
    }
}
