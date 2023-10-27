<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class WelcomeController extends Controller
{
    public function IndexOtherPage(Request $request)
    {
        $data = [];
        $slide = [];
        switch ($request->path()) {
            case 'Glass-Fabrics': 
                $data = Content::where('id',6)->first();
                $slide = [
                    asset('images/slides/page-06/ภาพหัว Page .jpg')
                ];
                break;
            case 'Silica-Fabrics': 
                $data = Content::where('id',7)->first();
                $slide = [
                    asset('images/slides/page-07/Pic-1.jpg')
                ];
                break;
            case 'Ceramic-Fabrics': 
                $data = Content::where('id',8)->first();
                break;
            case 'Silicone-Coated-Fabrics': 
                $data = Content::where('id',9)->first();
                $slide = [
                    asset('images/slides/page-09/Header.JPG')
                ];
                break;
            case 'PTFE-Coated-Fabrics': 
                $data = Content::where('id',10)->first();
                $slide = [
                    asset('images/slides/page-10/Header.jpg')
                ];
                break;
            case 'Hi-Temp-Fabric-Tape': 
                $data = Content::where('id',11)->first();
                $slide = [
                    asset('images/slides/page-11/Header.jpg')
                ];
                break;
            case 'Flexible-Joint-Ducts': 
                $data = Content::where('id',12)->first();
                $slide = [
                    asset('images/slides/page-12/Header.jpg')
                ];
                break;
            case 'Welding-Blanket-Fire-Blanket': 
                $data = Content::where('id',13)->first();
                $slide = [
                    asset('images/slides/page-13/Header.jpg')
                ];
                break;
            case 'Removable-Insulation': 
                $data = Content::where('id',14)->first(); // 15
                $slide = [
                    asset('images/slides/page-15/Header.jpg')
                ];
                break;
            case 'Insulation-Accessories': 
                $data = Content::where('id',15)->first();
                break;
            case 'Hi-Temp-Sewing-Thread': 
                $data = Content::where('id',16)->first();
                break;
            case 'Temporary-Work-Shop': 
                $data = Content::where('id',17)->first();
                break;
            case 'Fiber-Blanket': 
                $data = Content::where('id',18)->first();
                break;
        }

        return view('other',[
            'data' => $data,
            'slide'=> $slide,
            'path' => $request->path(),
            'title'=> 'OTHER',
            'style'=> '1'
        ]);
    }

    public function index(Request $request) {
        return view('index',[
            'path' => $request->path()
        ]);
    }

    // 1 - 5
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

    // 6 - 18
    public function GlassFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',6)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function SilicaFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',7)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function CeramicFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',8)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function SiliconeCoatedFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',9)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function PTFECoatedFabrics(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',10)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function HiTempFabricTape(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',11)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function FlexibleJointDucts(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',12)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function WeldingBlanketFireBlanket(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',13)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function RemovableInsulation(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',14)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function InsulationAccessories(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',15)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function HiTempSewingThread(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',16)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function TemporaryWorkShop(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',17)->first(),
            'title'=> $request->path(),
            'style'=> '1'
        ]);
    }

    public function FiberBlanket(Request $request)
    {
        return view('ma.content-edit',[
            'data' => Content::where('id',18)->first(),
            'title'=> $request->path(),
            'style'=> '1'
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
}
