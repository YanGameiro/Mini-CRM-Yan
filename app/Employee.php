<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //protected $guarded = ['id'];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_id'
    ];

    protected $table = 'employees';

    public function company(){
        return $this->belongsTo(Company::class, 'id');
    }
}
