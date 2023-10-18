<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class addHostel extends Model
{
    protected $fillable = ['name', 'location', 'hostel_manager_name','phone','mobile_number', 'email', 'hostel_rent'];


}
