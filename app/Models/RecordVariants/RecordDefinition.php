<?php

namespace App\Models\RecordVariants;

use App\Models\RecordVariants\Numeric\DecimalRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecordDefinition extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'title',
    'description'
  ];

  public function decimalRecords()
  {
    return $this->hasMany(DecimalRecord::class, 'record_definition_id');
  }
}
