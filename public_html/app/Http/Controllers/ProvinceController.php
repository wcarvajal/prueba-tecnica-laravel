<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\City;

class ProvinceController extends Controller
{
    public function index()
    {
        $arrayProvinces = [];
        $provinces = DB::table('provinces')
                    ->select()
                    ->get();
        
        foreach($provinces as $key => $province){
            $arrayProvinces[$key]['id'] = $province->id;
            $arrayProvinces[$key]['desc'] = $province->description;
        }

        return view('provinces', compact('arrayProvinces'));
    }

    public function store(Request $request)
    {
        $newNameProvince = $request->get('description');

        $newProvince= new Province;
        $newProvince->description = $newNameProvince;
        $newProvince->save();

        $response = ['status' => 'ok'];
 
        return $response;
    }

    public function update(Request $request)
    {
        $idPrince = $request->get('id');
        $newProvince = $request->get('description');

        $affected = DB::table('provinces')
              ->where('id', $idPrince)
              ->update(['description' => $newProvince]);
        
        $response = ['status' => 'ok'];
        
        return $response;
    }

    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $deleted = DB::table('provinces')->where('id', '=', $id)->delete();

        $response = ['status' => 'ok'];
        return $response;
    }

}
