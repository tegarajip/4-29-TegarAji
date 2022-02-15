<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts',function(blueprint $table){
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('pesan');
            $table->timestamps();
        });
    }

}
