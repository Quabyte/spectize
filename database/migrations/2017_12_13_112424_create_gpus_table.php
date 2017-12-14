<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('uuid')->unique();
            $table->string('slug');

            $table->string('gpu_clock');
            $table->string('rops');
            $table->string('tdp');
            $table->string('tmus');
            $table->string('architecture');
            $table->string('bandwidth');
            $table->string('board_number');
            $table->string('boost_clock');
            $table->string('bus_interface');
            $table->string('bus_width');
            $table->string('compute_units');
            $table->string('cores');

            $table->jsonb('details');

            $table->string('die_size');
            $table->string('direct_x');
            $table->jsonb('floating_point_performance');
            $table->string('gpu_variant');
            $table->string('graphics_processor');

            $table->string('image_source');
            $table->jsonb('length');

            $table->string('memory_bus');
            $table->jsonb('memory_clock');
            $table->string('memory_size');
            $table->string('memory_type');

            $table->string('name');
            $table->string('openCL');
            $table->string('openGL');
            $table->string('outputs');
            $table->string('pixel_rate');
            $table->string('power_connectors');
            $table->string('process_size');
            $table->string('production_status');
            $table->string('released');
            $table->string('shader_model');
            $table->string('shading_units');
            $table->string('slot_width');
            $table->string('texture_rate');
            $table->string('transistors');

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
        Schema::dropIfExists('gpus');
    }
}
