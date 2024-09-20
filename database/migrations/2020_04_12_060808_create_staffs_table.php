<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('parent_name')->nullable();
            $table->string('education_level', 32);
            $table->string('gender', 32);
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('salary')->nullable();
            $table->string('position')->nullable();
            $table->string('job_time')->nullable();
            $table->string('code')->nullable();
            $table->string('photo')->nullable();
            $table->string('diploma')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('guaranty_letter')->nullable();
            $table->string('accuracy_form')->nullable();
            $table->string('permit')->nullable();
            $table->integer('user_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
