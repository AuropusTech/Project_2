<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headmen', function (Blueprint $table) {
            $table->id();
            $table->string('headmenArticleName',20);
            $table->string('headmenFname',50);
            $table->string('headmenLname',50);
            $table->string('headmenPosition',100);
            $table->string('headmanStatus',30);

            
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
        Schema::dropIfExists('headmen');
    }
}
