<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
     /**
     * Display a active status listing of the resource.
     */
    public function index()
    {
        $serviceData=Service::latest()->get();
        return view('back.pages.service.index', compact('serviceData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'thumbnail'     => 'required',
            'headline'      => 'required',
            'sort_desc'     => 'required',
            'status'        => 'nullable|in:active,inactive',
        ]);
        // ======= store data ======= //
        $data=$request->all();
        // open an image file
        $thumb_image=$request->file('thumbnail');
        $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
        Image::make($thumb_image)->resize(1200,700)->save('images/moreX_'.$name_gen);
        $final_upload = 'images/moreX_'.$name_gen;
        $data['thumbnail']= $final_upload;
        //  ///open an image file
        $status=Service::create($data);
        if($status){
            if($request->status=='active')
                return redirect()->route('admin.activeservice')->with('success','data successfully inserted!');
            else{
                return redirect()->route('admin.inactiveservice')->with('success','data successfully inserted!');
            }
        }else{
            return back()->with('error','Something Was Wrong! Data is Failed!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service=Service::find($id);
        if($service){
            return view('back.pages.service.edit', compact('service'));
        }else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service=Service::find($id);
        if($service){
            $data=$request->all();
            // open an image file
            if ($request->hasFile('thumbnail')){
                $thumb_image=$request->file('thumbnail');
                $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
                Image::make($thumb_image)->resize(1200,700)->save('images/moreX_'.$name_gen);
                $final_upload = 'images/moreX_'.$name_gen;
                $data['thumbnail']= $final_upload;
            }
            //  ///open an image file
            $status=$service->fill($data)->save();
            if($status){
                if($request->status=='active')
                    return redirect()->route('admin.activeservice')->with('success','data successfully inserted!');
                else{
                    return redirect()->route('admin.inactiveservice')->with('success','data successfully inserted!');
                }
            }else{
                return back()->with('error','Something Was Wrong! Data is Failed!');
            
            }
            }else{
                return back()->with('error','Data not found!');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('services')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Status changes the form for existing a oll resource.
     */
    public function status(string $id)
    {
        $getStatus = Service::select('status')->where('id', $id)->first();
        if($getStatus->status=='active'){
            $status = 'inactive';
        }else{
            $status = 'active';
        }
        Service::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }


    /**
     * Display a active status listing of the resource.
     */
    public function show()
    {
        $serviceData=Service::where(['status'=>'active'])->latest()->paginate('8');
        $projectData=Portfolio::where(['project_display'=>'public'])->latest()->get();
        return view('front.pages.service', compact('projectData','serviceData'));
    }
}
