<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolioData=Portfolio::latest()->get();
        return view('back.pages.projects.index',compact('portfolioData'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.projects.add-new');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Portfolio;
        $data->project_name = $request->input('project_name');
        $data->domain_link = $request->input('domain_link');
        $data->project_screenshot = $request->input('project_screenshot');
        $data->project_display = $request->input('project_display');
        if ($request->hasFile('brand_logo')) {
            // open an image file
            $thumb_image=$request->file('brand_logo');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(250,80)->save('images/portfolios/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/portfolios/MoreX24-tech_'.$name_gen;
            $data['brand_logo']= $final_upload;
            //  ///open an image file
        }
        if ($request->hasFile('project_src')) {
            $thumb_image=$request->file('project_src');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(400,600)->save('images/portfolios/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/portfolios/MoreX24-tech_'.$name_gen;
            $data['project_src']= $final_upload;
        }
        $data->save();
        return redirect()->back()->with('status','Data Updated Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projectData=Portfolio::find($id);
        if($projectData){
            return view('back.pages.projects.edit',compact('projectData'));
        }else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Portfolio::find($id);
        $data->project_name = $request->input('project_name');
        $data->domain_link = $request->input('domain_link');
        $data->project_screenshot = $request->input('project_screenshot');
        $data->project_display = $request->input('project_display');
        if ($request->hasFile('brand_logo')) {
            $thumb_image=$request->file('brand_logo');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(250,80)->save('images/portfolios/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/portfolios/MoreX24-tech_'.$name_gen;
            $data['brand_logo']= $final_upload;
        }
        if ($request->hasFile('project_src')) {
            $thumb_image=$request->file('project_src');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(400,600)->save('images/portfolios/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/portfolios/MoreX24-tech_'.$name_gen;
            $data['project_src']= $final_upload;
        }
        $data->update();
        return redirect()->route('admin.projectIndex')->with('status','Data Updated Successfully!');
    }
    public function ProjectDisplay(string $id)
    {
        $getStatus = Portfolio::select('project_display')->where('id', $id)->first();
        if($getStatus->project_display=='public'){
            $project_display = 'private';
        }else{
            $project_display = 'public';
        }
        Portfolio::where('id', $id)->update(['project_display'=>$project_display]);
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show()
    {
        $projectData=Portfolio::where('project_display','public')->latest()->paginate('8');
        return view('front.pages.project',compact('projectData'));
    }
}
