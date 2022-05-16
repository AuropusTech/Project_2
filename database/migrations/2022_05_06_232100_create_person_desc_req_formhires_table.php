<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonDescReqFormhiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_desc_req_formhires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('HireListScopeUserId')->nullable();
            $table->string('HireListScopeType',30);
            

            $table->unsignedBigInteger('req_formhire_id')->nullable();
            

            $table->timestamps();

            $table->foreign('HireListScopeUserId')->references('id')->on('users');
            $table->foreign('req_formhire_id')->references('id')->on('req_formhires')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_desc_req_formhires');
    }
}
