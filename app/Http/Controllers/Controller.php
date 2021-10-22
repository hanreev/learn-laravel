<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        $geojson = '{"type": "POINT", "coordinates": [1, 1]}';
        DB::table('jalan')->insert([
            'nama' => 'Point A',
            'geom' => DB::raw("st_geomfromgeojson('$geojson')")
        ]);
    }
}
