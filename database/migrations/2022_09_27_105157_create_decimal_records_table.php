<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('decimal_records', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreignId('record_definition_id')->constrained();

      $table->decimal('data', 16, 4)->nullable();

      $table->softDeletes();
      $table->timestamps();

      $table->index('data');
      $table->index('created_at');
      $table->index(['data', 'created_at']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('decimal_records');
  }
};
