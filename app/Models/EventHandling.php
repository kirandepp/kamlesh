<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHandling extends Model
{
    use HasFactory;
    protected $table = 'event_handling';
    public $timestamps = true;
}
