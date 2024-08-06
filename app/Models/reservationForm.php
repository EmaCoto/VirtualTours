<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'post_flayer_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function PostFlayer()
    {
        return $this->belongsTo(PostFlayer::class);
    }
}
