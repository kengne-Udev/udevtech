<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'status' => '0'
    ];

    public function scopeStatus($query) {
        return $query->where('status', 1)->get();
    }

    public function entreprise() {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes) {

        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions() {
        return [
            '0' => 'Not Available',
            '1' => 'Available For Job',
            '2' => 'Waiting'
        ];
    }


}
