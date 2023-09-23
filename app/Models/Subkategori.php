<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
  use HasFactory;
  protected $table = 'subkategori';

  protected $guarded = ['id'];

  public $timestamps = true;
}
