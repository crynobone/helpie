<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('case_id')->index();
            $table->unsignedInteger('user_id')->nullable()->index();

            $this->unsignedBigInteger('stream_id');
            $this->string('stream_type');

            $table->string('code')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $this->index(['stream_id', 'stream_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('actions');
    }
}
