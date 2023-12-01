<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_table extends Model
{
   public $table = 'student_data';
   public $primaryKey = 'id';
   public $incrementing = true;
   public $timestamps=false;
}
