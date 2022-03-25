<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;

class SettingController extends Controller
{

    public function general()
    {
        $id = 1;
        $general_setting = GeneralSetting::find($id);
        return view('admin/settings/general', [
            'general_setting' => $general_setting
        ]);
    }
    public function saveGeneral()
    {
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string'],
            /*  'address_2' => ['string'], */
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->address_1 = request('address_1');
        $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->state = request('state');
        $general_setting->zipcode = request('zipcode');
        $general_setting->phone_number = request('phone_number');
        $general_setting->save();

        return redirect('admin/settings/general');
    }
    public function delete($id)
    {
        $general_setting = GeneralSetting::find($id);
        $general_setting->delete();
        return redirect('admin/settings/general');
    }
}
