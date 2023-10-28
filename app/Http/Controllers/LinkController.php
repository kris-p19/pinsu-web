<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ma.link',[
            'title' => 'ลิงค์เชื่อมโยง',
            'f'     => Link::where('id',1)->first(),
            'i'     => Link::where('id',2)->first(),
            'l'     => Link::where('id',3)->first()
        ]);
    }

    
    public function update(Request $request, Link $link)
    {
        $table = Link::where('id',1)->update([
            'urls' => $request->facebook
        ]);
        $table = Link::where('id',2)->update([
            'urls' => $request->instagram
        ]);
        $table = Link::where('id',3)->update([
            'urls' => $request->line
        ]);

        if ($table) {
            return back()->with('status','Success! ' . date('Y-m-d H:i:s'));
        }
    }
}
