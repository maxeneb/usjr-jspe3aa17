<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey = 'progid';
    protected $fillable = ['progid', 'progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    public function college() {
        return $this->belongsTo(College::class, 'progcollid', 'collid');
    }

    public function department() {
        return $this->belongsTo(Department::class, 'progcolldeptid', 'deptid');
    }
}
