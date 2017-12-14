<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('uuid')->unique();
            $table->string('slug');

            $table->integer('core_count');
            $table->integer('thread_count');
            $table->integer('SMP_count_of_cpus');

            $table->string('base_clock');
            $table->string('boost');

            $table->string('brand_image_source');
            $table->string('image_source');

            $table->string('cache_l1');
            $table->string('cache_l2');
            $table->string('cache_l3');

            $table->string('codename');
            $table->string('die_size');

            $table->string('features');
            $table->string('frequency');
            $table->string('integrated_graphics');
            $table->string('market');
            $table->string('memory_support');
            $table->string('multiplier');
            $table->string('name');
            $table->string('package');
            $table->string('process_size');
            $table->string('production_status');
            $table->string('released');
            $table->string('socket');
            $table->string('tCaseMax');
            $table->string('tdp');
            $table->string('transistors');
            $table->string('turbo_clock');
            $table->string('voltage');

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
        Schema::dropIfExists('cpus');
    }
}
