<?php

namespace DVelazquez\Timing\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timing extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['time', 'task', 'description', 'date', 'customer_id', 'type_id'];
}
