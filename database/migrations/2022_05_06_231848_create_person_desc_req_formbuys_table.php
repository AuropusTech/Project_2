<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonDescReqFormbuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_desc_req_formbuys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyListDescUserId')->nullable();
            $table->string('buyListDescType',30);

            $table->unsignedBigInteger('req_formbuy_id')->nullable();
            

            $table->timestamps();

            
            $table->foreign('buyListDescUserId')->references('id')->on('users');
            $table->foreign('req_formbuy_id')->references('id')->on('req_formbuys')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_desc_req_formbuys');
    }
}
