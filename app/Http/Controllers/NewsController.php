<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(Request $request) 
    {
        if (!empty($request->id)) {
            return view('news',[
                'path' => $request->path(),
                'data' => News::where('id','!=',$request->id)->orderBy('created_at','desc')->get(),
                'read' => News::where('id',$request->id)->first()
            ]);
        }
        return view('news',[
            'path' => $request->path(),
            'data' => News::orderBy('created_at','desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $table = new News;
        $table->subject_th = $request->subject_th;
        $table->content_th = $request->content_th;
        $table->subject_en = $request->subject_en;
        $table->content_en = $request->content_en;
        if (!empty($request->file('picture'))) {
            $file = [];
            foreach ($request->file('picture') as $key => $value) {
                $image = $value;
                $imageName = $key . date('Ymd') . time(). mt_rand(10000,99999) . '.' . $image->extension();
                $image->move(public_path('images/news'), $imageName);
                array_push($file, $imageName);
            }
            $table->picture = json_encode($file);
        }
        $table->save();
        if ($table) {
            return back()->with('status','Success!');
        }
    }

    public function update(Request $request)
    {
        $file = !empty(News::where('id',$request->id)->first()->picture)?json_decode(News::where('id',$request->id)->first()->picture):[];
        if (!empty($request->file('picture'))) {
            foreach ($request->file('picture') as $key => $value) {
                $image = $value;
                $imageName = $key . date('Ymd') . time(). mt_rand(10000,99999) . '.' . $image->extension();
                $image->move(public_path('images/news'), $imageName);
                array_push($file, $imageName);
            }
            News::where('id',$request->id)->update([
                'picture' => json_encode($file)
            ]);
        }
        
        $table = News::where('id',$request->id)->update([
            'subject_th' => $request->subject_th,
            'content_th' => $request->content_th,
            'subject_en' => $request->subject_en,
            'content_en' => $request->content_en,
            'picture' => json_encode($file)
        ]);
        if ($table) {
            return back()->with('status','Success!');
        }
    }
    
}
