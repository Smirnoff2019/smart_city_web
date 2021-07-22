<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PointTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable ('point_tag')) {
            Schema::create('point_tag', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('point_id');
                $table->foreign('point_id')->references('id')->on('points');
                $table->unsignedBigInteger('tag_id');
                $table->foreign('tag_id')->references('id')->on('tags');

                $table->timestamps();
            });
        }
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
