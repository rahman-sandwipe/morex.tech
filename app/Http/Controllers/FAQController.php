<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqData=FAQ::latest()->get();
        return view('back.pages.faq.index',compact('faqData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.faq.add-new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new FAQ;
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.FAQIndex')->with('status','New FAQ Successfully Updated!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faqData=FAQ::find($id);
        if($faqData){
            return view('back.pages.faq.edit',compact('faqData'));
        }else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FAQ::find($id);
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->status = $request->input('status');
        $data->update();
        return redirect()->route('admin.FAQIndex')->with('status','New FAQ Successfully Updated!');
    }

    public function status(string $id)
    {
        $getStatus = FAQ::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        FAQ::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }
}
