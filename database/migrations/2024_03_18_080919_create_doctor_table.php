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
        Schema::create('doctor', function (Blueprint $table) {
            $table->id(); 
            $table-> foreignId('specialist_id')->nullable()->index 
            ('fk_doctor_to_specialist'); 
            $table->string('name'); 
            $table->string('fee'); 
            $table->longtext('photo')->nullable(); 
            $table->timestamps(); 
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
};
