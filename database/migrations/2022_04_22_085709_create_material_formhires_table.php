<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialFormhiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_formhires', function (Blueprint $table) {
            $table->id();

            $table->string('hireScopeName',100);
            $table->string('hireScopeDesc',100);

            

            $table->unsignedBigInteger('req_formhire_id')->nullable();
            

            $table->timestamps();


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
        Schema::dropIfExists('material_formhires');
    }
}
