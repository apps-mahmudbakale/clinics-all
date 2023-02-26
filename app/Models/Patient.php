<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospital_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'religion_id',
        'occupation',
        'marital_status',
        'state_of_residence',
        'lga_of_residence',
        'state_of_origin',
        'residential_address',
        'next_of_kin_name',
        'next_of_kin_relation',
        'next_of_kin_phone',
        'next_of_kin_address',
        'hmo_id',
        'dependent',
        'principal_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
