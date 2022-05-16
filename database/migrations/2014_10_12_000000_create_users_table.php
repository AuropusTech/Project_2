<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id('id',4);

            $table->string('articleName',20);

            $table->string('fname',50);
            $table->string('lname',50);

            $table->string('position',30);

            $table->string('sysRole',20);
            $table->string('email',50);
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();


            
            $table->unsignedBigInteger('deptCode')->nullable();






            $table->rememberToken();
            $table->timestamps();


            $table->foreign('deptCode')->references('id')->on('depts')->onDelete('cascade')->onUpdate('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
