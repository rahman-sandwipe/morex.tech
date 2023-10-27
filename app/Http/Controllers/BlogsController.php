<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articleData=Article::latest()->get();
        return view('back.pages.article.index',compact('articleData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $serviceData=Service::where(['status'=>'active'])->get();
        return view('back.pages.article.add-new',compact('serviceData'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Article;
        $data->headline         = $request->input('headline');
        $data->article_author   = Auth::user()->id;
        $data->article_cat      = $request->input('article_cat');
        $data->content          = $request->input('content');
        $data->status           = $request->input('status');
        $data->meta_tags        = $request->input('meta_tags');
        $data->meta_desc        = $request->input('meta_desc');
        if ($request->hasFile('thumbnail')) {
            $thumb_image=$request->file('thumbnail');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(1100,600)->save('images/article/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/article/MoreX24-tech_'.$name_gen;
            $data['thumbnail']= $final_upload;
        }
        $data->save();
        return redirect()->route('admin.articleIndex')->with('success','Data successfully inserted!');
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
        $articleData=Article::find($id);
        $serviceData=Service::where(['status'=>'active'])->get();
        if($articleData){
            return view('back.pages.article.edit',compact('articleData','serviceData'));
        }else{
            return back()->with('error','Data not found');
        }
    }

    /** Update the specified resource in storage. */
    public function update(Request $request, string $id)
    {
        $data = Article::find($id);
        $data->headline         = $request->input('headline');
        $data->article_author   = Auth::user()->id;
        $data->article_cat      = $request->input('article_cat');
        $data->content          = $request->input('content');
        $data->status           = $request->input('status');
        $data->meta_tags        = $request->input('meta_tags');
        $data->meta_desc        = $request->input('meta_desc');
        if ($request->hasFile('thumbnail')) {
            $thumb_image=$request->file('thumbnail');
            $name_gen = uniqid().'.'.$thumb_image->getClientOriginalExtension();
            Image::make($thumb_image)->resize(1100,600)->save('images/article/MoreX24-tech_'.$name_gen);
            $final_upload = 'images/article/MoreX24-tech_'.$name_gen;
            $data['thumbnail']= $final_upload;
        }
        $data->update();
        return redirect()->route('admin.articleIndex')->with('status','Data Updated Successfully!');
    }
    
    /** Update the specified resource in status. */
    public function status(string $id)
    {
        $getStatus = Article::select('status')->where('id', $id)->first();
        if($getStatus->status=='Public'){
            $status = 'Private';
        }else{
            $status = 'Public';
        }
        Article::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $articleData=Article::with('user')->where(['status'=>'Public'])->latest()->paginate('9');
        return view('front.pages.blogs', compact('articleData'));
    }
}
