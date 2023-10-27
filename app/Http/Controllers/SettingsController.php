<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    // Project Info 
    public function SettingsView()
    {
        $Settings=Settings::latest()->first();
        return view('back.pages.settings.settings', compact('Settings'));
    }
    public function SettingUpdate(Request $request)
    {
        $data = Settings::find(1);
        $data->project_name = $request->input('project_name');
        $data->project_tagline = $request->input('project_tagline');
        $data->author_name = $request->input('author_name');
        $data->author_email = $request->input('author_email');
        $data->author_phone = $request->input('author_phone');
        $data->meta_tags = $request->input('meta_tags');
        $data->meta_desc = $request->input('meta_desc');
        $data->copyright_text = $request->input('copyright_text');

        if ($request->hasFile('fevicon')) {
            // open an image file
            $thumb_image=$request->file('fevicon');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(67,67)->save('images/settings/MoreX-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX-tech_'.$name_gen;
            $data['fevicon']= $final_upload;
            //  ///open an image file
        }
        if ($request->hasFile('logo')) {
            // open an image file
            $thumb=$request->file('logo');
            $name = uniqid().'.'.$thumb->getClientOriginalExtension();
            Image::make($thumb)->resize(300,67)->save('images/settings/MoreX-tech_'.$name);
            $upload = 'images/settings/MoreX-tech_'.$name;
            $data['logo']= $upload;
            //  ///open an image file
        }
        $data->update();
        return redirect()->back()->with('status','Project Info Updated Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
