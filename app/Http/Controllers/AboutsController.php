<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Abouts;
use App\Models\Settings;
use App\Models\HomeAbouts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutsData=Abouts::latest()->first();
        $FAQData=FAQ::where('status','public')->orderBy('id','ASC')->get();
        $settingsData=Settings::latest()->first();
        return view('front.pages.about-us',compact('aboutsData','FAQData','settingsData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $aboutsData=Abouts::latest()->first();
        return view('back.pages.single.abouts', compact('aboutsData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Abouts::find(1);
        $data->title = $request->input('title');
        $data->sort_desc = $request->input('sort_desc');
        $data->global_presence = $request->input('global_presence');
        if ($request->hasFile('image')) {
            $thumb_image=$request->file('image');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->save('images/settings/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX24-tech_'.$name_gen;
            $data['image']= $final_upload;
        }
        if ($request->hasFile('bg_image')) {
            $thumb=$request->file('bg_image');
            $name_gene = uniqid().'.'.$thumb->getClientOriginalExtension();
            Image::make($thumb)->save('images/settings/MoreX24-tech_'.$name_gene);
            $upload = 'images/settings/MoreX24-tech_'.$name_gene;
            $data['bg_image']= $upload;
        }
        $data->update();
        return redirect()->back()->with('status','Data Updated Successfully!');
    }
    public function chooseus(Request $request)
    {
        $data = Abouts::find(1);
        $data->title_02 = $request->input('title_02');
        $data->sort_desc_02 = $request->input('sort_desc_02');
        if ($request->hasFile('image_02')) {
            $thumb_image=$request->file('image_02');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->save('images/settings/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX24-tech_'.$name_gen;
            $data['image_02']= $final_upload;
        }
        if ($request->hasFile('image_03')) {
            $thumb_image=$request->file('image_03');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->save('images/settings/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX24-tech_'.$name_gen;
            $data['image_03']= $final_upload;
        }
        $data->update();
        return redirect()->back()->with('status','Data Updated Successfully!');
    }
    public function faqAbouts(Request $request)
    {
        $data = Abouts::find(1);
        $data->faq_title = $request->input('faq_title');
        if ($request->hasFile('faq_bg_image')) {
            $thumb_image=$request->file('faq_bg_image');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->save('images/settings/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX24-tech_'.$name_gen;
            $data['faq_bg_image']= $final_upload;
        }
        $data->update();
        return redirect()->back()->with('status','Data Updated Successfully!');
    }
}
