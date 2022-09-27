<?php

namespace App\Models\RecordVariants\Numeric;

use App\Models\RecordVariants\RecordDefinition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DecimalRecord extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'record_definition_id',
    'data',
  ];

  public function definition()
  {
    return $this->belongsTo(RecordDefinition::class, 'record_definition_id');
  }
}
