<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;
//associate with the model table
protected $table = 'job_listings';
//are allowed for mass assign
protected $fillable = ['title','salary'];

public function employer()
{
    return $this->belongsTo(Employer::class);
}
}
