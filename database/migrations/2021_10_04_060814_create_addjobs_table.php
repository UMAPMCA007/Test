<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addjobs', function (Blueprint $table) {
            $table->id();
            $table->string("job_number")->unique();
            $table->string("Customer")->nullable();
            $table->json("part_number");
            $table->json("description")->nullable();
            $table->json("serial_number")->nullable();
            $table->json("tsn")->nullable();
            $table->json("tso")->nullable();
            $table->string("work_details")->nullable();
            $table->string("po_number")->nullable();
            $table->string("upload_po")->nullable();
            $table->string("notes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addjobs');
    }
}
