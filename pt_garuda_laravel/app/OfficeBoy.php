<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeBoy extends Model
{
    protected $table = 'office_boys';
    protected $fillable = ['nama', 'status', 'foto', 'alamat', 'email', 'tanggal_masuk'];
}
