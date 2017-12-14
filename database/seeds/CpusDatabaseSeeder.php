<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rawJson = file_get_contents('http://spectize.dev/CPU-Detail.json');
        $decoded = json_decode($rawJson, true);

        for ($i = 0; $i < sizeof($decoded); $i++) {
            $data = $decoded[$i]['result']['extractorData']['data'][0]['group'][0];

            DB::table('cpus')->insert([
                'uuid' => str_random(6),
                'slug' => \Quabyte\Support\Helper::sluggify($data['name'][0]['text']),
                'core_count' => array_key_exists('#of_cores', $data) ? $data['#of_cores'][0]['text'] : 'unknown',
                'thread_count' => array_key_exists('#of_threads', $data) ? $data['#of_threads'][0]['text'] : 'unknown',
                'SMP_count_of_cpus' => array_key_exists('SMP#of_CPUs', $data) ? $data['SMP#of_CPUs'][0]['text'] : 'unknown',
                'base_clock' => array_key_exists('SMP#of_CPUs', $data) ? $data['base_clock'][0]['text'] : 'unknown',
                'boost' => array_key_exists('boost', $data) ? $data['boost'][0]['text'] : 'unknown',
                'brand_image_source' => array_key_exists('brand_image', $data) ? $data['brand_image'][0]['src'] : 'unknown',
                'image_source' => array_key_exists('image', $data) ? $data['image'][0]['src'] : 'unknown',
                'cache_l1' => array_key_exists('cache_l1', $data) ? $data['cache_l1'][0]['text'] : 'unknown',
                'cache_l2' => array_key_exists('cache_l2', $data) ? $data['cache_l2'][0]['text'] : 'unknown',
                'cache_l3' => array_key_exists('cache_l3', $data) ? $data['cache_l3'][0]['text'] : 'unknown',
                'codename' => array_key_exists('codename', $data) ? $data['codename'][0]['text'] : 'unknown',
                'die_size' => array_key_exists('die_size', $data) ? $data['die_size'][0]['text'] : 'unknown',
                'features' => array_key_exists('features', $data) ? $data['features'][0]['text'] : 'unknown',
                'frequency' => array_key_exists('frequency', $data) ? $data['frequency'][0]['text'] : 'unknown',
                'integrated_graphics' => array_key_exists('integrated_graphics', $data) ? $data['integrated_graphics'][0]['text'] : 'unknown',
                'market' => array_key_exists('market', $data) ? $data['market'][0]['text'] : 'unknown',
                'memory_support' => array_key_exists('memory_support', $data) ? $data['memory_support'][0]['text'] : 'unknown',
                'multiplier' => array_key_exists('multiplier', $data) ? $data['multiplier'][0]['text'] : 'unknown',
                'name' => array_key_exists('name', $data) ? $data['name'][0]['text'] : 'unknown',
                'package' => array_key_exists('package', $data) ? $data['package'][0]['text'] : 'unknown',
                'process_size' => array_key_exists('process_size', $data) ? $data['process_size'][0]['text'] : 'unknown',
                'production_status' => array_key_exists('production_status', $data) ? $data['production_status'][0]['text'] : 'unknown',
                'released' => array_key_exists('released', $data) ? $data['released'][0]['text'] : 'unknown',
                'socket' => array_key_exists('socket', $data) ? $data['socket'][0]['text'] : 'unknown',
                'tCaseMax' => array_key_exists('tCaseMax', $data) ? $data['tCaseMax'][0]['text'] : 'unknown',
                'tdp' => array_key_exists('tdp', $data) ? $data['tdp'][0]['text'] : 'unknown',
                'transistors' => array_key_exists('transistors', $data) ? $data['transistors'][0]['text'] : 'unknown',
                'turbo_clock' => array_key_exists('turbo_clock', $data) ? $data['turbo_clock'][0]['text'] : 'unknown',
                'voltage' => array_key_exists('voltage', $data) ? $data['voltage'][0]['text'] : 'unknown',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
