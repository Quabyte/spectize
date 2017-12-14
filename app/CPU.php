<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
    protected $table = 'cpus';

    protected $fillable = [
        'uuid', 'slug', 'core_count', 'thread_count', 'SMP_count_of_cpus', 'base_clock',
        'boost', 'brand_image_source', 'image_source', 'cache_l1', 'cache_l2', 'cache_l3',
        'codename', 'die_size', 'features', 'frequency', 'integrated_graphics', 'market',
        'memory_support', 'multiplier', 'name', 'package', 'process_size', 'production_status',
        'released', 'socket', 'tCaseMax', 'tdp', 'transistors', 'turbo_clock', 'voltage'
    ];

    protected $hidden = [
        'uuid',
        'slug'
    ];
}
