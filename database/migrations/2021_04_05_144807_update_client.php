<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client', function (Blueprint $table) {

            // $table->unsignedBigInteger('manager_id')->unsigned()->nullable();

            // $table->foreign('manager_id')->references('id')->on('managers');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
 
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
