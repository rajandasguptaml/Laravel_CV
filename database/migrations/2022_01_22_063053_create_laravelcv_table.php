<?php

use App\Models\laravelcv;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelcvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 
    {
        Schema::create('laravelcv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('designation');
            $table->string('email');
            $table->string('phone');
            $table->string('profile');
            $table->string('skills');
            $table->string('technical');
            $table->string('exp');
            $table->string('results');
            $table->string('year');
            $table->string('school');
            $table->string('college');
            $table->string('university');
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
        Schema::dropIfExists('laravelcv');
    }
}
