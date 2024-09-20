<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('parent_name')->nullable();
            $table->string('age')->nullable();
            $table->string('gender');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('nurse_name')->nullable();
            $table->string('code')->nullable();
            $table->string('entry_date')->nullable();
            $table->string('exit_date')->nullable();
            $table->string('examinations')->nullable();
            $table->string('agree_letter')->nullable();
            $table->string('exit_form')->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
