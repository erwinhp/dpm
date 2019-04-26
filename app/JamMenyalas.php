<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamMenyalas extends Model
{
  protected $table = "jamMenyala";
  public $timestamps= false;
  protected $fillable = ['idpel','daya','stand','totaljam','datever','dateverakhir'];
  }
