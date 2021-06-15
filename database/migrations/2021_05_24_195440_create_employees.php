<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->nullable(false); //employee's id
            $table->string('last_name',20)->nullable(false); //employee's surname
            $table->string('name',20)->nullable(false);//employee's name
            $table->string('fathers_name',20)->nullable(false);//
            $table->date('birthday')->nullable();
            $table->date('date_in')->default(Carbon::now());
            $table->string('email',50);
            $table->string('photo')->nullable();
            $table->integer('position_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->text('note')->nullable();
            $table->boolean('is_visual')->default(true);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
