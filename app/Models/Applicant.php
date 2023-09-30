<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $table = 'applicant_table';

    protected $fillable =
    ['first_name',
     'middle_name',
     'last_name',
     'birthdate',
     'gender',
     'cellphone_no',
     'address',];
}
