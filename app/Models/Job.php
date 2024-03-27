<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model {
//associate with the model table
protected $table = 'job_listings';
//are allowed for mass assign
protected $fillable = ['title','salary'];
}
