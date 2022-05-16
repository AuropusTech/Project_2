<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialFormbuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_formbuys', function (Blueprint $table) {

            $table->id();
            $table->string('materialName',100);
            $table->string('materialDesc',100);
            $table->integer('materialCount');
            $table->float('materialPrice');
            $table->float('materialBudget');


            $table->unsignedBigInteger('req_formbuy_id')->nullable();
            
            $table->timestamps();

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
        Schema::dropIfExists('material_formbuys');
    }
}
