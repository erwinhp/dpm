<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dpms extends Model
{
  protected $table = "dpm";
public $timestamps= false;
protected $fillable = ['idpel','nama','alamat','tarif','daya','rbm','stand','datever'];
}
