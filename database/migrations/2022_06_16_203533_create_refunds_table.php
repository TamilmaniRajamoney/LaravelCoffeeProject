<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('refunds', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->string('reference');
    //         $table->integer('user_id');
    //         $table->string('service');
    //         $table->string('phone_number')->nullable();
    //         $table->decimal('amount');
    //         $table->string('status')->nullable();
    //         $table->nullableMorphs('subject');
    //         $table->timestamp('executed_at')->nullable();
    //         $table->timestamps();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //     Schema::dropIfExists('refunds');
    // }
}
