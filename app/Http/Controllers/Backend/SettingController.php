<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   public function index(){
    $setting = Setting::first();
    return view('Backend.Page.Setting.index',compact('setting'));
   }

   public function create(){
    return view('Backend.Page.Setting.create');
   }

   public function store(Request $request){


    $setting =  new Setting();
    $setting->nav_color = $request->nav_color;
    if($request->hasFile('logo')){
        $logo = $request->file('logo');
        $newLogo = $logo->hashName();
        $logo->move('logo',$newLogo);
        $setting->logo = "logo/$newLogo";
    }
    $setting->save();
    toast('Setting Inserted','success');
    return redirect()->back();

   }

   public function edit($id){
    $settings = Setting::findOrFail($id);
    return view('Backend.Page.Setting.edit',compact('settings'));
   }

   public function update(Request $request,$id){
    $setting = Setting::findOrFail($id);
    $setting->nav_color = $request->nav_color;
    if($request->hasFile('logo')){
        $logo = $request->file('logo');
        $newLogo = $logo->hashName();
        $logo->move('logo',$newLogo);
        $setting->logo = "logo/$newLogo";
    }
    $setting->update();
    toast('Setting Inserted','success');
    return redirect()->back();
   }

}
