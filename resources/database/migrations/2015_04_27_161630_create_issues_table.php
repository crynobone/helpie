<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable()->index();
            $table->unsignedInteger('assignee_id')->nullable()->index();
            $table->unsignedInteger('category_id')->nullable()->index();

            $table->string('title');
            $table->text('content');

            $table->string('token')->nullable();
            $table->json('meta')->nullable();
            $table->string('status')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('cases');
    }
}
