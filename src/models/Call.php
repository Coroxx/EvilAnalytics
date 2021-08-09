<?php

namespace coroxx\evilanalytics\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = ['user_agent', 'route', 'ip', 'session_id', 'device', 'country'];
}