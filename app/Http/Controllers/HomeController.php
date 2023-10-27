<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\HomeAbouts;
use App\Models\HomeSection;
use App\Models\Workprocess;
use Illuminate\Http\Request;
use App\Models\SecondSection;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeBanners=HomeSection::latest()->first();
        $homeAbouts=HomeAbouts::latest()->first();
        $homeWorkprocess=Workprocess::latest()->first();
        $homeContacts=Contact::latest()->first();
        $brandCollection=Portfolio::where(['project_display'=>'public'])->latest()->get();
        return view('front.pages.home',compact('homeBanners','homeAbouts','homeWorkprocess','homeContacts','brandCollection'));
    }
    // Home Banner Section //
    public function homeBanners()
    {
        $HomeSettings=HomeSection::latest()->first();
        return view('back.pages.home.home-banners', compact('HomeSettings'));
    }
    public function updatehomeBanners(Request $request)
    {
        $data = HomeSection::find(1);
        $data->sub_title = $request->input('sub_title');
        $data->title = $request->input('title');
        $data->sort_desc = $request->input('sort_desc');
        $data->button_contact = $request->input('button_contact');
        $data->button_blog = $request->input('button_blog');
        
        if ($request->hasFile('image')) {
            // open an image file
            $thumb_image=$request->file('image');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(1000,1000)->save('images/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/MoreX24-tech_'.$name_gen;
            $data['image']= $final_upload;
            //  ///open an image file
        }
        if ($request->hasFile('shape_image')) {
            // open an image file
            $thumb=$request->file('shape_image');
            $name = uniqid().'.'.$thumb->getClientOriginalExtension();
            Image::make($thumb)->resize(1000,1000)->save('images/MoreX24-tech_'.$name);
            $upload = 'images/MoreX24-tech_'.$name;
            $data['shape_image']= $upload;
            //  ///open an image file
        }
        $data->update();
        return redirect()->back()->with('status','Home Page First Section Data Updated Successfully!');
    }
    


    // Home Abouts Section //
    public function homeAbouts()
    {
        $homeAbouts=homeAbouts::latest()->first();
        return view('back.pages.home.home-abouts', compact('homeAbouts'));
    }
    public function updateHomeAbouts(Request $request)
    {
        $data = HomeAbouts::find(1);
        $data->title = $request->input('title');
        $data->sort_desc = $request->input('sort_desc');
        $data->button = $request->input('button');
        if ($request->hasFile('image')) {
            // open an image file
            $thumb_image=$request->file('image');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(800,1000)->save('images/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/MoreX24-tech_'.$name_gen;
            $data['image']= $final_upload;
            //  ///open an image file
        }
        $data->update();
        return redirect()->back()->with('status','Home Page First Section Data Updated Successfully!');
    }
    public function Workprocess(){
        $Workprocess=Workprocess::latest()->first();
        return view('back.pages.home.work-process', compact('Workprocess'));
    }
    public function updateWorkprocess(Request $request){
        $data = Workprocess::find(1);
        
        $data->title = $request->input('title');
        $data->sort_desc = $request->input('sort_desc');
        if ($request->hasFile('bg_image')) {
            // open an image file
            $thumb_image=$request->file('bg_image');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->save('images/settings/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/settings/MoreX24-tech_'.$name_gen;
            $data['bg_image']= $final_upload;
            //  ///open an image file
        }
        $data->update();
        return redirect()->back()->with('status','Home Page Workprocess Info Updated Successfully!');
    }
    public function updateWorkprocessOne(Request $request){
        $data = Workprocess::find(1);
        $data->title_01 = $request->input('title_01');
        $data->sort_desc_01 = $request->input('sort_desc_01');
        $data->update();
        return redirect()->back()->with('status','Home Page Workprocess Info Updated Successfully!');
    }
    public function updateWorkprocessTwo(Request $request){
        $data = Workprocess::find(1);
        $data->title_02 = $request->input('title_02');
        $data->sort_desc_02 = $request->input('sort_desc_02');
        $data->update();
        return redirect()->back()->with('status','Home Page Workprocess Info Updated Successfully!');
    }
    public function updateWorkprocessThree(Request $request){
        $data = Workprocess::find(1);
        $data->title_03 = $request->input('title_03');
        $data->sort_desc_03 = $request->input('sort_desc_03');
        $data->update();
        return redirect()->back()->with('status','Home Page Workprocess Info Updated Successfully!');
    }
    public function updateWorkprocessFour(Request $request){
        $data = Workprocess::find(1);
        $data->title_04 = $request->input('title_04');
        $data->sort_desc_04 = $request->input('sort_desc_04');
        $data->update();
        return redirect()->back()->with('status','Home Page Workprocess Info Updated Successfully!');
    }


    // Home Banner Section //
    public function homeContacts()
    {
        $dataContacts=Contact::latest()->first();
        return view('back.pages.single.contacts', compact('dataContacts'));
    }
    public function updatehomeContacts(Request $request)
    {
        $data = Contact::find(1);
        $data->address = $request->input('address');
        $data->addresstwo = $request->input('addresstwo');
        $data->phone = $request->input('phone');
        $data->number = $request->input('number');
        $data->email = $request->input('email');
        $data->webmail = $request->input('webmail');
        $data->location = $request->input('location');
        $data->update();
        return redirect()->back()->with('status','Contact us data updated successfully!');
    }
}
