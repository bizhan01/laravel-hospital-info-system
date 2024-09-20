<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('ss_id');
            $table->timestamps();
            $table->foreign('staff_id')
                ->references('id')
                ->on('staffs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ss_id')
                ->references('id')
                ->on('service_sections')
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
        Schema::dropIfExists('service_staffs');
    }
}
