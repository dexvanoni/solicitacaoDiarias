<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
  protected $connection = 'pgsql';
  protected $table = 'tb_os_diarias';
}
