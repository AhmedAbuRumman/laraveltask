<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitziensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citziens', function (Blueprint $table) {
            
            $table->bigIncrements('citzien_id');
            $table->string('citzien_fullname');
            $table->enum('citzien_gender', ['male','female']);
            $table->string('citzien_city');
            $table->string('citzien_nid');
            $table->string('citzien_address');
            $table->string('citzien_mobile');
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
        Schema::dropIfExists('citziens');
    }
}
