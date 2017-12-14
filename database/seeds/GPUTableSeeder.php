<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GPUTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rawJson = file_get_contents('http://spectize.com/GPU-Detail.json');
        $decoded = json_decode($rawJson, true);

        for ($i = 0; $i < sizeof($decoded); $i++) {
            $data = $decoded[$i]['result']['extractorData']['data'][0]['group'][0];

            array_key_exists('details', $data) ? $details = json_encode($data['details'], true) : $details = '[{"text": "unknown"}]';
            array_key_exists('floating_point_performance', $data) ? $fpp = json_encode($data['floating_point_performance'], true) : $fpp = '[{"text": "unknown"}]';
            array_key_exists('memory_clock', $data) ? $memoryClock = json_encode($data['memory_clock'], true) : $memoryClock = '[{"text": "unknown"}]';
            array_key_exists('length', $data) ? $length = json_encode($data['length'], true) : $length = '[{"text": "unknown"}]';

            DB::table('gpus')->insert([
                'uuid' => str_random(6),
                'slug' => \Quabyte\Support\Helper::sluggify($data['name'][0]['text']),
                'gpu_clock' => array_key_exists('GPU_clock', $data) ? $data['GPU_clock'][0]['text'] : 'unknown',
                'rops' => array_key_exists('ROPs', $data) ? $data['ROPs'][0]['text'] : 'unknown',
                'tdp' => array_key_exists('TDP', $data) ? $data['TDP'][0]['text'] : 'unknown',
                'tmus' => array_key_exists('TMUs', $data) ? $data['TMUs'][0]['text'] : 'unknown',
                'architecture' => array_key_exists('architecture', $data) ? $data['architecture'][0]['text'] : 'unknown',
                'bandwidth' => array_key_exists('bandwidth', $data) ? $data['bandwidth'][0]['text'] : 'unknown',
                'board_number' => array_key_exists('board_number', $data) ? $data['board_number'][0]['text'] : 'unknown',
                'boost_clock' => array_key_exists('boost_clock', $data) ? $data['boost_clock'][0]['text'] : 'unknown',
                'bus_interface' => array_key_exists('bus_interface', $data) ? $data['bus_interface'][0]['text'] : 'unknown',
                'bus_width' => array_key_exists('bus_width', $data) ? $data['bus_width'][0]['text'] : 'unknown',
                'compute_units' => array_key_exists('compute_units', $data) ? $data['compute_units'][0]['text'] : 'unknown',
                'cores' => array_key_exists('cores', $data) ? $data['cores'][0]['text'] : 'unknown',
                'details' => $details,
                'die_size' => array_key_exists('die_size', $data) ? $data['die_size'][0]['text'] : 'unknown',
                'direct_x' => array_key_exists('direct_x', $data) ? $data['direct_x'][0]['text'] : 'unknown',
                'floating_point_performance' => $fpp,
                'gpu_variant' => array_key_exists('gpu_variant', $data) ? $data['gpu_variant'][0]['text'] : 'unknown',
                'graphics_processor' => array_key_exists('graphics_processor', $data) ? $data['graphics_processor'][0]['text'] : 'unknown',
                'image_source' => array_key_exists('image', $data) ? $data['image'][0]['src'] : 'unknown',
                'length' => $length,
                'memory_bus' => array_key_exists('memory_bus', $data) ? $data['memory_bus'][0]['text'] : 'unknown',
                'memory_clock' => $memoryClock,
                'memory_size' => array_key_exists('memory_size', $data) ? $data['memory_size'][0]['text'] : 'unknown',
                'memory_type' => array_key_exists('memory_type', $data) ? $data['memory_type'][0]['text'] : 'unknown',
                'name' => array_key_exists('name', $data) ? $data['name'][0]['text'] : 'unknown',
                'openCL' => array_key_exists('openCL', $data) ? $data['openCL'][0]['text'] : 'unknown',
                'openGL' => array_key_exists('openGL', $data) ? $data['openGL'][0]['text'] : 'unknown',
                'outputs' => array_key_exists('outputs', $data) ? $data['outputs'][0]['text'] : 'unknown',
                'pixel_rate' => array_key_exists('pixel_rate', $data) ? $data['pixel_rate'][0]['text'] : 'unknown',
                'power_connectors' => array_key_exists('power_connectors', $data) ? $data['power_connectors'][0]['text'] : 'unknown',
                'process_size' => array_key_exists('process_size', $data) ? $data['process_size'][0]['text'] : 'unknown',
                'production_status' => array_key_exists('production_status', $data) ? $data['production_status'][0]['text'] : 'unknown',
                'released' => array_key_exists('released', $data) ? $data['released'][0]['text'] : 'unknown',
                'shader_model' => array_key_exists('shader_model', $data) ? $data['shader_model'][0]['text'] : 'unknown',
                'shading_units' => array_key_exists('shading_units', $data) ? $data['shading_units'][0]['text'] : 'unknown',
                'slot_width' => array_key_exists('slot_width', $data) ? $data['slot_width'][0]['text'] : 'unknown',
                'texture_rate' => array_key_exists('texture_rate', $data) ? $data['texture_rate'][0]['text'] : 'unknown',
                'transistors' => array_key_exists('transistors', $data) ? $data['transistors'][0]['text'] : 'unknown'
            ]);
        }
    }
}
