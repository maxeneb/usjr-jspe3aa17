<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'studid';
    protected $fillable = ['studid', 'studfirstname', 'studlastname', 'studmidname', 'studprogid', 'studcollid', 'studyear'];
    
    public function college() {
        return $this->belongsTo(College::class, 'studcollid', 'collid');
    }
}
