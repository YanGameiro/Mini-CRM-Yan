<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'email',
        'website',
        'logo'
    ];

    protected $table = 'companies';

    public function employee(){
        return $this->hasMany(Employee::class, 'company_id');
    }
}
