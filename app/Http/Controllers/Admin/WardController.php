<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Models\Ward;
use App\Models\WardTranslation;
use App\Models\ProvinceTranslation;
use App\Models\DistrictTranslation;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');
        $ward = WardTranslation::where('locale', $locale)->orderBy('ward_id', 'DESC')->get();
        return view('admin.ward.index', compact('ward'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locale = Session::get('locale');
        $province = ProvinceTranslation::where('locale', $locale)->get();
        return view('admin.ward.create', compact('province'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->province_id;
        $province = ProvinceTranslation::where('id', $request->province_id)->first();
        $province_ids = ProvinceTranslation::where('province_id', $province->province_id)->get();
        foreach ($province_ids as $key => $province_id) {
            if ($province_id->locale == 'vi') $province_id_vi = $province_id->id;
            if ($province_id->locale == 'en') $province_id_en = $province_id->id;
            if ($province_id->locale == 'cn') $province_id_cn = $province_id->id;
        }

        $district = DistrictTranslation::where('id', $request->district_id)->first();
        $district_ids = DistrictTranslation::where('district_id', $district->district_id)->get();
        foreach ($district_ids as $key => $district_id) {
            if ($district_id->locale == 'vi') $district_id_vi = $district_id->id;
            if ($district_id->locale == 'en') $district_id_en = $district_id->id;
            if ($district_id->locale == 'cn') $district_id_cn = $district_id->id;
        }

        $datas = $request->all();
        $data = new Ward();
        $data->user_id = Auth::User()->id;
        $data->status = 'true';
        $data->fill([
            'en' => [
                'name' => $datas['name:en'],
                'province_id' => $province_id_en,
                'district_id' => $district_id_en,
            ],
            'vi' => [
                'name' => $datas['name:vi'],
                'province_id' => $province_id_vi,
                'district_id' => $district_id_vi,
            ],
            'cn' => [
                'name' => $datas['name:cn'],
                'province_id' => $province_id_cn,
                'district_id' => $district_id_cn,
            ]
        ]);
        $data->save();
        return redirect('admin/ward')->with('success','updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces = ProvinceTranslation::get();
        $Ward = WardTranslation::where('Ward_id', $id)->get();
        return view('admin.Ward.edit', compact('Ward', 'provinces', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        foreach ($request->id as $key => $value) {
            $data = WardTranslation::find($value);
            $data->name = $request->name[$key];
            $data->province_id = $request->province_id[$key];
            $data->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
