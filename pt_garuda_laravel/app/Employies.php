<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\Admin\EmployeController;

class Employies extends Model
{
  protected $table ="employies";
  protected $fillable = ['nama_karyawan', 'status_karyawan', 'foto_karyawan', 'alamat_karyawan', 'email_karyawan',
  'divisi', 'tanggal_masuk'];
}
