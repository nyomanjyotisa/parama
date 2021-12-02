<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('token');
            $table->string('edit_token');
            $table->string('template')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('video')->nullable();
            $table->string('drive')->nullable();
            $table->string('qr')->nullable();
            $table->string('qr_edit')->nullable();
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
        Schema::dropIfExists('tokens');
    }
}
