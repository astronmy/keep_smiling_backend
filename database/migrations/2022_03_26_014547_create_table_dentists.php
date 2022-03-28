<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDentists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->id();
            $table->string("name", 120)->nullable(false);
            $table->string("surname", 120)->nullable(false);
            $table->enum('gender', ['male', 'female', 'non binary'])->nullable(false);
            $table->string('email')->unique();
            $table->foreignId('country_id')->constrained('countries');
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
        Schema::dropIfExists('dentists');
    }
}
