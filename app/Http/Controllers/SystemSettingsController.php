<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SystemSettings;

class SystemSettingsController extends Controller
{
    public function index(SystemSettings $system)
    {
        $currencies = ['&#36;','&#8361;','&#8364;', '&#8377;', '&#8358;', '&#165;'];
        return view('settings.index', compact('system', 'currencies'));
    }


    public function updateSystemSettings(Request $request, SystemSettings $system)
    {
        $this->validate($request, [
            'clinic_name' => 'required',
            'address' => 'required',
            'footer' => 'required',
            'logo' => 'nullable|file|image',
            'favicon' => 'nullable|file|image',

        ]);

        $logo = '';
        if ($request->hasFile('logo')) {
            $logo = time() . '.' . $request->logo->extension();
            $request->file('logo')->storeAs('public/system', $logo);
            
        }
        $favicon = '';
        if ($request->hasFile('favicon')) {
            $favicon = time() . '.' . $request->favicon->extension();
            $request->file('favicon')->storeAs('public/system', $favicon);
            
        }

        $system->clinic_name = $request->clinic_name;
        $system->logo = $logo;
        $system->favicon = $favicon;
        $system->address = $request->address;
        $system->footer = $request->footer;
        $system->save();
        return redirect()->route('app.settings.index')->with('System Settings Has Been Updated');
    }
}
