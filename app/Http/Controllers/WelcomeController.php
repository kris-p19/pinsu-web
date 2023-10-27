<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class WelcomeController extends Controller
{
    public function IndexOtherPage(Request $request)
    {
        return view('other',[
            'path' => $request->path()
        ]);
    }

    public function index(Request $request) {
        return view('index',[
            'path' => $request->path()
        ]);
    }

    public function home(Request $request) {
        return view('ma.content-edit',[
            'data' => Content::where('id',1)->first(),
            'title'=> 'หน้าหลัก',
            'style'=> '1'
        ]);
    }

    public function company(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',2)->first(),
            'title'=> 'หน้าบริษัท',
            'style'=> '1'
        ]);
    }

    public function product(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',3)->first(),
            'title'=> 'หน้าสินค้า',
            'style'=> '1'
        ]);
    }

    public function contact(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',4)->first(),
            'title'=> 'หน้าติดต่อเรา',
            'style'=> '1'
        ]);
    }

    public function footer(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',5)->first(),
            'title'=> 'ส่วนท้ายเว็บ / Footer',
            'style'=> '1'
        ]);
    }

    public function GlassFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function SilicaFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function CeramicFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function SiliconeCoatedFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function PTFECoatedFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function HiTempFabricTape(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function FlexibleJointDucts(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function WeldingBlanketFireBlanket(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function RemovableInsulation(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function InsulationAccessories(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function HiTempSewingThread(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function TemporaryWorkShop(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function FiberBlanket(Request $request)
    {
        return view('ma.content-edit',[
            'data' => ''
        ]);
    }

    public function post1(Request $request)
    {
        $table = Content::where('id',$request->id)->update([
            'content_th' => $request->content_th,
            'content_en' => $request->content_en
        ]);
        if ($table) {
            return back()->with('status','Success! ' . date('Y-m-d H:i:s'));
        }
    }

    public function post2(Request $request)
    {
        dd($request->all());
    }
}
