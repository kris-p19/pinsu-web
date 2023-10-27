<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content_th')->nullable();
            $table->text('content_en')->nullable();
            $table->timestamps();
        });

        DB::table('contents')->insert([
            [
                'content_th' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">Out quality and service will help boost the <u style="color:red;">Energy</u> in your production.</p>
                                    <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด จำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fabrics / Ceramic Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) ผ้าและวัสดุสำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น เรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>     
                                </div>',
                'content_en' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">Out quality and service will help boost the <u style="color:red;">Energy</u> in your production.</p>
                                    <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด จำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fabrics / Ceramic Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) ผ้าและวัสดุสำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น เรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>     
                                </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">
                                        Keep creating the great things, just leave <u style="color:red;">the small Heat</u> problems to us.
                                    </p>
                                    <p style="font-size:20px;text-align:justify;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด ดำเนินการนำเข้าและจำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fiber Fabrics / Ceramic Fiber Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) สำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนความร้อนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น และเรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>
                                    <p style="font-size:20px;text-align:justify;margin-top:20px;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        ผลิตภัณฑ์ทุกตัวของบริษัทเป็นผลิตภัณฑ์ที่ปราศจาก Asbestos (Asbestos Free / Non-Asbestos) ซึ่งเป็นที่ไว้วางใจสำหรับลูกค้าด้วยดีเสมอมา และ บริษัทเองจะยังคงยึดมั่นกับความตั้งใจที่จะส่งมอบ
                                        <u>“สินค้าที่ดี มีคุณภาพ พร้อมทั้งการจัดส่งและบริการที่ดีให้กับลูกค้าตลอดไป”</u>
                                    </p>
                                </div>',
                'content_en' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">
                                        Keep creating the great things, just leave <u style="color:red;">the small Heat</u> problems to us.
                                    </p>
                                    <p style="font-size:20px;text-align:justify;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด ดำเนินการนำเข้าและจำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fiber Fabrics / Ceramic Fiber Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) สำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนความร้อนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น และเรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>
                                    <p style="font-size:20px;text-align:justify;margin-top:20px;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        ผลิตภัณฑ์ทุกตัวของบริษัทเป็นผลิตภัณฑ์ที่ปราศจาก Asbestos (Asbestos Free / Non-Asbestos) ซึ่งเป็นที่ไว้วางใจสำหรับลูกค้าด้วยดีเสมอมา และ บริษัทเองจะยังคงยึดมั่นกับความตั้งใจที่จะส่งมอบ
                                        <u>“สินค้าที่ดี มีคุณภาพ พร้อมทั้งการจัดส่งและบริการที่ดีให้กับลูกค้าตลอดไป”</u>
                                    </p>
                                </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">
                                        Our quality and service can boost the <u style="color:red;">Energy</u> in your production.
                                    </p>
                                    <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด จำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fabrics / Ceramic Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) ผ้าและวัสดุสำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น เรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>
                                </div>',
                'content_en' => '<div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">
                                        Our quality and service can boost the <u style="color:red;">Energy</u> in your production.
                                    </p>
                                    <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                                        บริษัท พินซู จำกัด จำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fabrics / Ceramic Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) ผ้าและวัสดุสำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น เรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                                    </p>
                                </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="panel-body text-center" style="background-color: #ffd966;color:green;min-height:300px;padding:30px;">
                                    <h1 style="font-size:50px;">บริษัท พินซู จำกัด</h1>
                                    <p style="font-size:20px;">
                                        212/26 หมู่ 7 ถ. บ้านกล้วย-ไทรน้อย ต.พิมลราช อ.บางบัวทอง จ.นนทบุรี 11110
                                        <br>Pinsu Co., Ltd.
                                        <br>212/26  Moo 7, Ban Kluai Sai Noi Road, Tambon Phimonrat,
                                        <br>Amphoe Bang Bua thong, Nonthaburi 11110, Thailand
                                        <br>
                                        <br>Tel :   <a href="tel:0882434656">+66(0)88-243 4656</a> / 
                                                    <a href="tel:0829195356">+66(0)82-919 5356</a> / 
                                                    <a href="tel:020634564">+66(0)2063 4564</a>  
                                        <br>Fax :   <a href="tel:020634564">+66(0)2063 4564</a> 
                                        <br>Email:  <a href="mailto:contact@pinsu.co.th">contact@pinsu.co.th</a> /
                                                    <a href="mailto:pinsu@pinsu.co.th">pinsu@pinsu.co.th</a>
                                    </p>
                                </div>',
                'content_en' => '<div class="panel-body text-center" style="background-color: #ffd966;color:green;min-height:300px;padding:30px;">
                                    <h1 style="font-size:50px;">บริษัท พินซู จำกัด</h1>
                                    <p style="font-size:20px;">
                                        212/26 หมู่ 7 ถ. บ้านกล้วย-ไทรน้อย ต.พิมลราช อ.บางบัวทอง จ.นนทบุรี 11110
                                        <br>Pinsu Co., Ltd.
                                        <br>212/26  Moo 7, Ban Kluai Sai Noi Road, Tambon Phimonrat,
                                        <br>Amphoe Bang Bua thong, Nonthaburi 11110, Thailand
                                        <br>
                                        <br>Tel :   <a href="tel:0882434656">+66(0)88-243 4656</a> / 
                                                    <a href="tel:0829195356">+66(0)82-919 5356</a> / 
                                                    <a href="tel:020634564">+66(0)2063 4564</a>  
                                        <br>Fax :   <a href="tel:020634564">+66(0)2063 4564</a> 
                                        <br>Email:  <a href="mailto:contact@pinsu.co.th">contact@pinsu.co.th</a> /
                                                    <a href="mailto:pinsu@pinsu.co.th">pinsu@pinsu.co.th</a>
                                    </p>
                                </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="container">
                                    <div class="row" style="padding-top:20px;padding-bottom:20px;">
                                        <div class="col-md-12">
                                            <hr style="width:100%;height:40px;background:#e2efd9;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fabrics / ผ้าทนความร้อน</b></h3>
                                                    <ul>
                                                        <li><a href="/Glass-Fabrics">Glass Fabrics / ผ้าใยแก้ว</a></li>
                                                        <li><a href="/Silica-Fabrics">Silica Fabrics / ผ้าซิลิก้า</a></li>
                                                        <li><a href="/Ceramic-Fabrics">Ceramic Fabrics / ผ้าเซรามิค</a></li>
                                                        <li><a href="/Silicone-Coated-Fabrics">Silicone Coated Fabrics / ผ้าเคลือบซิลิโคน</a></li>
                                                        <li><a href="/PTFE-Coated-Fabrics">PTFE Coated Fabrics / ผ้าเคลือบ PTFE</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Fabrics.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Hi-Temp-Fabric-Tape"><h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fiber Tape / Gasket เทปพันท่อ / ปะเก็น</b></h3></a>
                                                    <ul>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Glass Fiber Tape / เทปใยแก้ว</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Ceramic Fiber Tape / เทปเซรามิค</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Basalt Fiber Tape / เทปใยหิน</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Gasket / ปะเก็น</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Fiber Tape.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Removable-Insulation"><h3 style="margin-top:0px;"><b style="color:#015f01;">Removable Insulations / ฉนวนความร้อนแบบถอดได้</b></h3></a>
                                                    <ul>
                                                        <li><a href="/Removable-Insulation">ฉนวนเตาอบอุตสาหกรรม</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มเครื่องฉีดพลาสติก</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้ม Heater</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มท่อ Boiler</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนเทอร์ไบน์ (Turbine Insulation)</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Removable Insulation .jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Flexible-Joint-Ducts">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Flexible Joint / Expansion Joint 
                                                                Fabric Expansion Joint / 
                                                                Flexible Duct Connector 
                                                                ข้อต่อท่อลมร้อน/เย็น (แบบยืดหดได้)
                                                            </b>
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Flexible Joint.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Welding-Blanket-Fire-Blanket">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Welding Blanket / Welding Curtain      
                                                                ผ้ากันสะเก็ดไฟ 
                                                                Fire Blanket / ผ้าห่มดับไฟ 
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟแบบประหยัด / งานเบา</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟสำหรับงานเชื่อม / ตัดโลหะ</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟชนิดไม่คัน</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ม่านกรองแสงสะเก็ดไฟงานเชื่อม</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Welding Blankets.JPG" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Hi-Temp-Sewing-Thread">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Hi-Temp Sewing Thread ด้ายทนความร้อน
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">PTFE Sewing Thread / ด้าย PTFE</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Aramid Sewing Thread / Kevlar Thread ด้ายเคฟล่า / ด้ายอารามิด</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Glass Fiber Sewing Thread / ด้ายใยแก้ว</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Stainless Steel Sewing Thread / ด้ายสแตนเลส</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Carbon Fiber Sewing Thread / ด้ายคาร์บอน</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Silica Fiber Sewing Thread / ด้ายซิลิก้า</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Sewing Thread.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Insulation-Accessories">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Insulation Fasteners วัสดุยึดฉนวน
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Insulation-Accessories">Insulation Pins / หมุดยึดฉนวน / เข็มยึดฉนวน</a></li>
                                                        <li><a href="/Insulation-Accessories">Stainless Steel Hook / ตะขอสแตนเลส ยึด-เกี่ยวฉนวน</a></li>
                                                        <li><a href="/Insulation-Accessories">Lacing Anchors</a></li>
                                                        <li><a href="/Insulation-Accessories">Stud Welding Pins</a></li>
                                                        <li><a href="/Insulation-Accessories">SS D-Ring</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/ACCESS.JPG" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Fiber-Blanket">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Fiber Blanket / ฉนวนแบบแผ่น
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Fiber-Blanket">Glass Wool (Glass Needled Mat)</a></li>
                                                        <li><a href="/Fiber-Blanket">(Bio-Soluble) Ceramic Fiber Blanket</a></li>
                                                        <li><a href="/Fiber-Blanket">ฉนวนเซรามิคชนิดปิดผิว</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Fiber Blanket.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Temporary-Work-Shop">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Work Tents
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Temporary-Work-Shop">เต็นท์ผ้าใบ</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Work Tent.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                'content_en' => '<div class="container">
                                    <div class="row" style="padding-top:20px;padding-bottom:20px;">
                                        <div class="col-md-12">
                                            <hr style="width:100%;height:40px;background:#e2efd9;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fabrics / ผ้าทนความร้อน</b></h3>
                                                    <ul>
                                                        <li><a href="/Glass-Fabrics">Glass Fabrics / ผ้าใยแก้ว</a></li>
                                                        <li><a href="/Silica-Fabrics">Silica Fabrics / ผ้าซิลิก้า</a></li>
                                                        <li><a href="/Ceramic-Fabrics">Ceramic Fabrics / ผ้าเซรามิค</a></li>
                                                        <li><a href="/Silicone-Coated-Fabrics">Silicone Coated Fabrics / ผ้าเคลือบซิลิโคน</a></li>
                                                        <li><a href="/PTFE-Coated-Fabrics">PTFE Coated Fabrics / ผ้าเคลือบ PTFE</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Fabrics.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Hi-Temp-Fabric-Tape"><h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fiber Tape / Gasket เทปพันท่อ / ปะเก็น</b></h3></a>
                                                    <ul>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Glass Fiber Tape / เทปใยแก้ว</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Ceramic Fiber Tape / เทปเซรามิค</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Basalt Fiber Tape / เทปใยหิน</a></li>
                                                        <li><a href="/Hi-Temp-Fabric-Tape">Gasket / ปะเก็น</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Fiber Tape.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Removable-Insulation"><h3 style="margin-top:0px;"><b style="color:#015f01;">Removable Insulations / ฉนวนความร้อนแบบถอดได้</b></h3></a>
                                                    <ul>
                                                        <li><a href="/Removable-Insulation">ฉนวนเตาอบอุตสาหกรรม</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มเครื่องฉีดพลาสติก</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้ม Heater</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนหุ้มท่อ Boiler</a></li>
                                                        <li><a href="/Removable-Insulation">ฉนวนเทอร์ไบน์ (Turbine Insulation)</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Removable Insulation .jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Flexible-Joint-Ducts">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Flexible Joint / Expansion Joint 
                                                                Fabric Expansion Joint / 
                                                                Flexible Duct Connector 
                                                                ข้อต่อท่อลมร้อน/เย็น (แบบยืดหดได้)
                                                            </b>
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Flexible Joint.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Welding-Blanket-Fire-Blanket">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Welding Blanket / Welding Curtain      
                                                                ผ้ากันสะเก็ดไฟ 
                                                                Fire Blanket / ผ้าห่มดับไฟ 
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟแบบประหยัด / งานเบา</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟสำหรับงานเชื่อม / ตัดโลหะ</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ผ้ากันสะเก็ดไฟชนิดไม่คัน</a></li>
                                                        <li><a href="/Welding-Blanket-Fire-Blanket">ม่านกรองแสงสะเก็ดไฟงานเชื่อม</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Welding Blankets.JPG" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Hi-Temp-Sewing-Thread">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Hi-Temp Sewing Thread ด้ายทนความร้อน
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">PTFE Sewing Thread / ด้าย PTFE</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Aramid Sewing Thread / Kevlar Thread ด้ายเคฟล่า / ด้ายอารามิด</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Glass Fiber Sewing Thread / ด้ายใยแก้ว</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Stainless Steel Sewing Thread / ด้ายสแตนเลส</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Carbon Fiber Sewing Thread / ด้ายคาร์บอน</a></li>
                                                        <li><a href="/Hi-Temp-Sewing-Thread">Silica Fiber Sewing Thread / ด้ายซิลิก้า</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Hi-Temp Sewing Thread.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Insulation-Accessories">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Insulation Fasteners วัสดุยึดฉนวน
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Insulation-Accessories">Insulation Pins / หมุดยึดฉนวน / เข็มยึดฉนวน</a></li>
                                                        <li><a href="/Insulation-Accessories">Stainless Steel Hook / ตะขอสแตนเลส ยึด-เกี่ยวฉนวน</a></li>
                                                        <li><a href="/Insulation-Accessories">Lacing Anchors</a></li>
                                                        <li><a href="/Insulation-Accessories">Stud Welding Pins</a></li>
                                                        <li><a href="/Insulation-Accessories">SS D-Ring</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/ACCESS.JPG" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Fiber-Blanket">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Fiber Blanket / ฉนวนแบบแผ่น
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Fiber-Blanket">Glass Wool (Glass Needled Mat)</a></li>
                                                        <li><a href="/Fiber-Blanket">(Bio-Soluble) Ceramic Fiber Blanket</a></li>
                                                        <li><a href="/Fiber-Blanket">ฉนวนเซรามิคชนิดปิดผิว</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Fiber Blanket.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <a href="/Temporary-Work-Shop">
                                                        <h3 style="margin-top:0px;">
                                                            <b style="color:#015f01;">
                                                                Work Tents
                                                            </b>
                                                        </h3>
                                                    </a>
                                                    <ul>
                                                        <li><a href="/Temporary-Work-Shop">เต็นท์ผ้าใบ</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <img src="/images/footers/Work Tent.jpg" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // 6 - 19
            [ // 6
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Glass Fabrics / Fiberglass Fabrics / Glass Fiber Fabrics</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าใยแก้ว</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG43.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเป็นผ้าที่ทำมาจากเส้นใยแก้ว (Glass Yarn) 
                        ที่มีคุณสมบัติในการทนความร้อนสูง ทอออกมาเป็นผืนมีความหนาและความกว้างตามความต้องการและความเหมาะสมในการใช้งาน 
                        ผ้าใยแก้วถูกนำเอาไปใช้ในหลายๆอุตสาหกรรม ไม่ว่าจะเป็นการเสริมความแข็งแรงซีเมนต์ 
                        (Glass Fiber Reinforced Concrete or GFRC) โครงสร้างในอุตสาหกรรมก่อสร้าง 
                        เสริมความแข็งแรงของชิ้นส่วนพลาสติก
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG50-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        (Glass Fiber Reinforced Plastic)ในอุตสาหกรรมพลาสติกและอุตสาหกรรมยานยนต์ ผ้าใยแก้ว 
                        (Glass Fiber Fabrics / Glass Fabrics) ยังเป็นที่นิยมนำเอาไปใช้เป็นฉนวนความร้อนในรูปแบบต่าง ๆ 
                        อาทิเช่น เป็นวัสดุประกอบฉนวนทนความร้อน 
                        ฉนวนรักษาความร้อน (Insulation Jacket/Insulation scale-down) 
                        ผ้ากันสะเก็ดไฟ (Welding Blanket ) ผ้าทนไฟ (Fire-Proof Blanket) 
                        ผ้าทนความร้อน (Thermal Insulation Fabrics / Heat Protective Fabrics) 
                        ที่ใช้กันอย่างแพร่หลายในอุตสาหกรรม และ โรงงานต่างๆ ในบ้านเรา
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG100-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        บริษัท พินซู จำกัด นำเข้าและจำหน่ายผ้าใยแก้วสำหรับงานฉนวนทนความร้อน (Thermal Insulation / Heat Insulation) 
                        ฉนวนกันความร้อน ผ้ากันสะเก็ดไฟ (Welding Blanket / Welding Curtain) 
                        ผ้าทนไฟ (Fire Resistant Fabrics and Blanket) 
                        ผ้าทนความร้อน ม่านกันความร้อน / ม่านทนความร้อน (Thermal Curtain) 
                        ที่ใช้ในอุตสาหกรรมต่างๆ
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4" style="margin-bottom:20px;">
                    <img src="/images/slides/page-06/FG176-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-4" style="margin-bottom:20px;">
                    <img src="/images/slides/page-06/FG300-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG18</th>
                                <td>0.18MM</td>
                                <td>1000MM</td>
                                <td>100M/200M</td>
                            </tr>
                            <tr>
                                <th>FG43</th>
                                <td>0.43MM</td>
                                <td>1000MM</td>
                                <td>50M</td>
                            </tr>
                            <tr>
                                <th>FG50</th>
                                <td>0.50MM</td>
                                <td>1000MM</td>
                                <td>100M</td>
                            </tr>
                            <tr>
                                <th>FG100</th>
                                <td>1MM</td>
                                <td>1000MM</td>
                                <td>50M</td>
                            </tr>
                            <tr>
                                <th>FG176</th>
                                <td>1.76MM</td>
                                <td>1000MM</td>
                                <td>25M / 50M</td>
                            </tr>
                            <tr>
                                <th>FG300</th>
                                <td>3MM</td>
                                <td>1000MM</td>
                                <td>30M</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Glass Fabrics / Fiberglass Fabrics / Glass Fiber Fabrics</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าใยแก้ว</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG43.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเป็นผ้าที่ทำมาจากเส้นใยแก้ว (Glass Yarn) 
                        ที่มีคุณสมบัติในการทนความร้อนสูง ทอออกมาเป็นผืนมีความหนาและความกว้างตามความต้องการและความเหมาะสมในการใช้งาน 
                        ผ้าใยแก้วถูกนำเอาไปใช้ในหลายๆอุตสาหกรรม ไม่ว่าจะเป็นการเสริมความแข็งแรงซีเมนต์ 
                        (Glass Fiber Reinforced Concrete or GFRC) โครงสร้างในอุตสาหกรรมก่อสร้าง 
                        เสริมความแข็งแรงของชิ้นส่วนพลาสติก
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG50-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        (Glass Fiber Reinforced Plastic)ในอุตสาหกรรมพลาสติกและอุตสาหกรรมยานยนต์ ผ้าใยแก้ว 
                        (Glass Fiber Fabrics / Glass Fabrics) ยังเป็นที่นิยมนำเอาไปใช้เป็นฉนวนความร้อนในรูปแบบต่าง ๆ 
                        อาทิเช่น เป็นวัสดุประกอบฉนวนทนความร้อน 
                        ฉนวนรักษาความร้อน (Insulation Jacket/Insulation scale-down) 
                        ผ้ากันสะเก็ดไฟ (Welding Blanket ) ผ้าทนไฟ (Fire-Proof Blanket) 
                        ผ้าทนความร้อน (Thermal Insulation Fabrics / Heat Protective Fabrics) 
                        ที่ใช้กันอย่างแพร่หลายในอุตสาหกรรม และ โรงงานต่างๆ ในบ้านเรา
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <img src="/images/slides/page-06/FG100-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        บริษัท พินซู จำกัด นำเข้าและจำหน่ายผ้าใยแก้วสำหรับงานฉนวนทนความร้อน (Thermal Insulation / Heat Insulation) 
                        ฉนวนกันความร้อน ผ้ากันสะเก็ดไฟ (Welding Blanket / Welding Curtain) 
                        ผ้าทนไฟ (Fire Resistant Fabrics and Blanket) 
                        ผ้าทนความร้อน ม่านกันความร้อน / ม่านทนความร้อน (Thermal Curtain) 
                        ที่ใช้ในอุตสาหกรรมต่างๆ
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4" style="margin-bottom:20px;">
                    <img src="/images/slides/page-06/FG176-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
                <div class="col-md-4" style="margin-bottom:20px;">
                    <img src="/images/slides/page-06/FG300-B.jpg" class="img-responsive" style="width:100%;object-fit:scale-down;height:300px;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG18</th>
                                <td>0.18MM</td>
                                <td>1000MM</td>
                                <td>100M/200M</td>
                            </tr>
                            <tr>
                                <th>FG43</th>
                                <td>0.43MM</td>
                                <td>1000MM</td>
                                <td>50M</td>
                            </tr>
                            <tr>
                                <th>FG50</th>
                                <td>0.50MM</td>
                                <td>1000MM</td>
                                <td>100M</td>
                            </tr>
                            <tr>
                                <th>FG100</th>
                                <td>1MM</td>
                                <td>1000MM</td>
                                <td>50M</td>
                            </tr>
                            <tr>
                                <th>FG176</th>
                                <td>1.76MM</td>
                                <td>1000MM</td>
                                <td>25M / 50M</td>
                            </tr>
                            <tr>
                                <th>FG300</th>
                                <td>3MM</td>
                                <td>1000MM</td>
                                <td>30M</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Silica Fiber Fabrics / Silica Fabrics / Silica Cloth</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าซิลิก้า</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        ผ้าซิลิก้า (Silica Fiber Fabrics) เป็นผ้าที่มีคุณสมบัติหลายอย่าง 
                        ซึ่งรวมทั้งคุณสมบัติในการนำพาความร้อนต่ำ ทนทานต่อความร้อนได้ดีกว่าผ้าประเภทอื่นๆ อาทิเช่น 
                        ผ้าอารามิด (Aramid Fabrics) 
                        ผ้าใยแก้ว (Glass Fiber Fabrics) 
                        ผ้าบะซอลต์ (Basalt Fiber Fabrics) 
                        ผ้าคาร์บอน (Carbon Fiber Fabrics) เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <img src="/images/slides/page-07/Pic-2.jpg" style="max-width:100%;width:300px;object-fit:scale-down;float:right;">
                    <p style="font-size:20px;display:contents;float:left;">
                        ผ้าซิลิก้า (Silica Cloth/Silica Fabric) เหมาะกับการที่จะนำเอาไปใช้ประโยชน์กับงานที่เกี่ยวข้องกับความร้อนสูง 
                        ผ้าซิลิก้าที่นำเอามาใช้ในอุตสาหกรรมโดยทั่วๆไปในบ้านเรา ถือได้ว่าเป็นผ้าซิลิก้าเกรดอุตสาหกรรม (Industrial Grade Silica Fiber Fabrics) 
                        ซึ่งมี Tensile Strength สูง กว่าผ้าซิลิก้าเกรด Aerospace หรือ เกรด Shrinkage Controlled ไม่ฉีกขาดง่าย 
                        เหมาะสำหรับนำมาตัดเย็บงานฉนวนแบบถอดได้ เย็บเป็นผ้ากันสะเก็ดไฟ 
                        ผ้าซิลิก้าสามารถทนความร้อนและใช้งานได้อย่างต่อเนื่องกับความร้อนที่ประมาณ 980°C 
                        โดยที่คุณสมบัติต่างๆยังคงเดิม ในขณะเดียวกันผ้าซิลิก้าจะยังคงรักษาลักษณะความเป็นผ้าที่ยังคงใช้งานได้เมื่อสัมผัสกับอุณหภูมิที่สูงถึงประมาณ 1200°C 
                        โดยที่คุณสมบัติด้านอื่นๆอาจลดลงไปบ้าง 
                        (ที่มา - U.S. International Trade and Commission)
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        ประโยชน์ของผ้าซิลิก้า คือ สามารถนำมาทำเป็นผ้ากันสะเก็ดไฟ (Welding Blankets)
                        สำหรับงานเชื่อมโลหะ/งานตัดโลหะ/งานเจียร์โลหะ (Welding Blankets) ได้เป็นอย่างดี 
                        ใช้เป็นผ้ากันไฟ (Fireproof Blankets) ใช้เป็นส่วนประกอบฉนวนหุ้มท่อ (Pipe Insulation / Pipe Coverings / Hose Coverings) 
                        ฉนวนทนความร้อนแบบถอดได้ (Removable Insulation Jacket / Removable Insulation Cover) ในโรงไฟฟ้า โรงน้ำตาล โรงงานปิโตรเคมี 
                        และโรงงานต่างๆที่จำเป็นต้องใช้ประโยชน์จากพลังงานความร้อน เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FS70-V2</th>
                                <td>Vermiculite Coated<br>(เคลือบเวอร์มิคูไลท์)</td>
                                <td>0.7MM</td>
                                <td>920MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th>FS137-V2</th>
                                <td>Vermiculite Coated<br>(เคลือบเวอร์มิคูไลท์)</td>
                                <td>1.37MM</td>
                                <td>920MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th><u>FS80-S2</u></th>
                                <td>Silicone Coated<br>(เคลือบซิลิโคน)</td>
                                <td>0.8MM</td>
                                <td>920MM/1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-3.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Silica Fiber Fabrics / Silica Fabrics / Silica Cloth</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าซิลิก้า</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        ผ้าซิลิก้า (Silica Fiber Fabrics) เป็นผ้าที่มีคุณสมบัติหลายอย่าง 
                        ซึ่งรวมทั้งคุณสมบัติในการนำพาความร้อนต่ำ ทนทานต่อความร้อนได้ดีกว่าผ้าประเภทอื่นๆ อาทิเช่น 
                        ผ้าอารามิด (Aramid Fabrics) 
                        ผ้าใยแก้ว (Glass Fiber Fabrics) 
                        ผ้าบะซอลต์ (Basalt Fiber Fabrics) 
                        ผ้าคาร์บอน (Carbon Fiber Fabrics) เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <img src="/images/slides/page-07/Pic-2.jpg" style="max-width:100%;width:300px;object-fit:scale-down;float:right;">
                    <p style="font-size:20px;display:contents;float:left;">
                        ผ้าซิลิก้า (Silica Cloth/Silica Fabric) เหมาะกับการที่จะนำเอาไปใช้ประโยชน์กับงานที่เกี่ยวข้องกับความร้อนสูง 
                        ผ้าซิลิก้าที่นำเอามาใช้ในอุตสาหกรรมโดยทั่วๆไปในบ้านเรา ถือได้ว่าเป็นผ้าซิลิก้าเกรดอุตสาหกรรม (Industrial Grade Silica Fiber Fabrics) 
                        ซึ่งมี Tensile Strength สูง กว่าผ้าซิลิก้าเกรด Aerospace หรือ เกรด Shrinkage Controlled ไม่ฉีกขาดง่าย 
                        เหมาะสำหรับนำมาตัดเย็บงานฉนวนแบบถอดได้ เย็บเป็นผ้ากันสะเก็ดไฟ 
                        ผ้าซิลิก้าสามารถทนความร้อนและใช้งานได้อย่างต่อเนื่องกับความร้อนที่ประมาณ 980°C 
                        โดยที่คุณสมบัติต่างๆยังคงเดิม ในขณะเดียวกันผ้าซิลิก้าจะยังคงรักษาลักษณะความเป็นผ้าที่ยังคงใช้งานได้เมื่อสัมผัสกับอุณหภูมิที่สูงถึงประมาณ 1200°C 
                        โดยที่คุณสมบัติด้านอื่นๆอาจลดลงไปบ้าง 
                        (ที่มา - U.S. International Trade and Commission)
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        ประโยชน์ของผ้าซิลิก้า คือ สามารถนำมาทำเป็นผ้ากันสะเก็ดไฟ (Welding Blankets)
                        สำหรับงานเชื่อมโลหะ/งานตัดโลหะ/งานเจียร์โลหะ (Welding Blankets) ได้เป็นอย่างดี 
                        ใช้เป็นผ้ากันไฟ (Fireproof Blankets) ใช้เป็นส่วนประกอบฉนวนหุ้มท่อ (Pipe Insulation / Pipe Coverings / Hose Coverings) 
                        ฉนวนทนความร้อนแบบถอดได้ (Removable Insulation Jacket / Removable Insulation Cover) ในโรงไฟฟ้า โรงน้ำตาล โรงงานปิโตรเคมี 
                        และโรงงานต่างๆที่จำเป็นต้องใช้ประโยชน์จากพลังงานความร้อน เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FS70-V2</th>
                                <td>Vermiculite Coated<br>(เคลือบเวอร์มิคูไลท์)</td>
                                <td>0.7MM</td>
                                <td>920MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th>FS137-V2</th>
                                <td>Vermiculite Coated<br>(เคลือบเวอร์มิคูไลท์)</td>
                                <td>1.37MM</td>
                                <td>920MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th><u>FS80-S2</u></th>
                                <td>Silicone Coated<br>(เคลือบซิลิโคน)</td>
                                <td>0.8MM</td>
                                <td>920MM/1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-3.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-07/Combine-4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '',
                'content_en' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Silicone Coated Glass Fabrics / Silicone Coated Fiberglass Fabrics</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าใยแก้วเคลือบซิลิโคน</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเป็นผ้าที่มีคุณสมบัติในการทนความร้อนสูง (≤ 500°C) 
                        ทนสารเคมี มีการนำความร้อนต่ำ ถูกนำเอาไปใช้ในหลายๆอุตสาหกรรม 
                        แต่ด้วยความที่ผ้าใยแก้วผลิตมาจากเส้นใยที่ทนทานต่อการขีดข่วนได้ไม่ดีนัก 
                        การเคลือบด้วยซิลิโคนชนิดที่ไม่ติดไฟ ไม่ลามไฟจึงช่วยให้ผ้าใยแก้วมีคุณสมบัติเพิ่มขึ้น 
                        ทนต่อการขีดข่วนได้ดี มีความยืดหยุ่นสูง ง่ายต่อการใช้งาน 
                        จึงเหมาะกับการนำเอาไปใช้กับงานที่ต้องการการทนความร้อนสูง กันน้ำ และ ลมร้อนด้วย
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="/images/slides/page-09/Pic-1.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-6">
                    <img src="/images/slides/page-09/Pic-2.jpg" style="width:100%;">
                </div>
                <div class="col-md-6">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเคลือบซิลิโคน (Silicone Coated Glass Fabrics) 
                        สามารถนำเอาไปใช้เป็นผ้าม่านกันสะเก็ดไฟงานเชื่อมโลหะ งานตัดโลหะ งานเจียร์โลหะ เป็นผ้าม่านกันความร้อน 
                        ใช้เป็นแผ่นซิลิโคนปิดผิวใยฉนวน Rockwool / ฉนวนใยแก้วหุ้มท่อร้อน ฉนวนหุ้มท่อบอยเลอร์ แผ่นรองกันความร้อน 
                        ใช้ประกอบเป็นฉนวนหุ้มวาล์ว ฉนวนแบบถอดได้ (Removable Insulation Cover / Removable Insulation Jacket) 
                        ตัดเย็บเป็นท่อ Sleeve หุ้มสายไฟ และม่านก้นความร้อนเป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-09/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG45-S2</th>
                                <td>เคลือบซิลิโคน 2 ด้าน</td>
                                <td>0.45mm</td>
                                <td>1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th>FG90-S2</th>
                                <td>เคลือบซิลิโคน 2 ด้าน</td>
                                <td>0.90MM</td>
                                <td>1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-09/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Silicone Coated Glass Fabrics / Silicone Coated Fiberglass Fabrics</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ผ้าใยแก้วเคลือบซิลิโคน</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเป็นผ้าที่มีคุณสมบัติในการทนความร้อนสูง (≤ 500°C) 
                        ทนสารเคมี มีการนำความร้อนต่ำ ถูกนำเอาไปใช้ในหลายๆอุตสาหกรรม 
                        แต่ด้วยความที่ผ้าใยแก้วผลิตมาจากเส้นใยที่ทนทานต่อการขีดข่วนได้ไม่ดีนัก 
                        การเคลือบด้วยซิลิโคนชนิดที่ไม่ติดไฟ ไม่ลามไฟจึงช่วยให้ผ้าใยแก้วมีคุณสมบัติเพิ่มขึ้น 
                        ทนต่อการขีดข่วนได้ดี มีความยืดหยุ่นสูง ง่ายต่อการใช้งาน 
                        จึงเหมาะกับการนำเอาไปใช้กับงานที่ต้องการการทนความร้อนสูง กันน้ำ และ ลมร้อนด้วย
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="/images/slides/page-09/Pic-1.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-6">
                    <img src="/images/slides/page-09/Pic-2.jpg" style="width:100%;">
                </div>
                <div class="col-md-6">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเคลือบซิลิโคน (Silicone Coated Glass Fabrics) 
                        สามารถนำเอาไปใช้เป็นผ้าม่านกันสะเก็ดไฟงานเชื่อมโลหะ งานตัดโลหะ งานเจียร์โลหะ เป็นผ้าม่านกันความร้อน 
                        ใช้เป็นแผ่นซิลิโคนปิดผิวใยฉนวน Rockwool / ฉนวนใยแก้วหุ้มท่อร้อน ฉนวนหุ้มท่อบอยเลอร์ แผ่นรองกันความร้อน 
                        ใช้ประกอบเป็นฉนวนหุ้มวาล์ว ฉนวนแบบถอดได้ (Removable Insulation Cover / Removable Insulation Jacket) 
                        ตัดเย็บเป็นท่อ Sleeve หุ้มสายไฟ และม่านก้นความร้อนเป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-09/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG45-S2</th>
                                <td>เคลือบซิลิโคน 2 ด้าน</td>
                                <td>0.45mm</td>
                                <td>1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                            <tr>
                                <th>FG90-S2</th>
                                <td>เคลือบซิลิโคน 2 ด้าน</td>
                                <td>0.90MM</td>
                                <td>1500MM</td>
                                <td>50M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-09/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>ผ้า PTFE / ผ้าเทฟล่อน (Teflon) - PTFE Coated Fabrics</b></u>
                    </h3>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="/images/slides/page-10/Pic-1.png" class="img-responsive" style="width:100%;float:left;">
                    </div>
                    <p style="font-size:20px;display:contents;float:left;">
                        ผ้า PTFE (Polytetrafluoroethylene) ของเราเป็นผ้า PTFE
                        ที่เสริมความแข็งแรงด้วยผ้าใยแก้ว สามารถทนอุณหภูมิได้ถึง 300°C เป็นผ้าที่มีความทนทานต่อการขีดข่วนและฉีกขาดได้ดี
                        กันน้ำ เหมาะสำหรับที่จะนำเอาไปใช้เป็นแผ่นกันความร้อน แผ่นรองเครื่องฮีตซีล (Heat Sealing Plate) 
                        เป็นส่วนประกอบฉนวนแบบถอดได้ (Removable Insulation Jacket/Cover) 
                        สำหรับเครื่องฉีดพลาสติก (Plastic Extruder / Plastic Injection Molding Machine) 
                        ฉนวนนอกอาคารหุ้มวาล์ว/ฉนวนหุ้มท่อ/ฉนวนหุ้มหน้าแปลนเป็นท่อลมร้อน Expansion Joint
                        เป็นม่านกันความร้อน อีกทั้งยังสามารถใช้เป็นผ้ากันสะเก็ดไฟงานเชื่อมโลหะ งานตัดโลหะ ได้อีกด้วย
                    </p>
                    <br>
                    <p style="font-size:20px;margin-top:20px;">
                        <b>PTFE</b> (Polytetrafluoroethylene) มีคุณสมบัติในการทนทานต่อปัจจัยของสภาพแวดล้อมได้ดี 
                        ทนสารเคมีต่างๆได้ดี ด้วยเหตุนี้ผ้าใยแก้วเคลือบด้วย PTFE (PTFE Coated Fabrics) จึงสามารถใช้กับงาน Out-door ได้เป็นอย่างดี และ 
                        งานฉนวนแบบถอดได้ที่ติดตั้งนอกอาคาร(Out-Door Insulation Jacket) จึงนิยมใช้ผ้าเคลือบ PTFE เป็นส่วนประกอบ
                    </p>
                </div>
            </div>
            
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-2.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG8-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.08mm</td>
                                <td>1000mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG12-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.12mm</td>
                                <td>1200mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG25-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.25mm</td>
                                <td>1000mm/1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG38-P2</th>
                                <td>Teflon Coated (สองด้าน)-Anti-Static</td>
                                <td>0.38mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG45-P2</th>
                                <td>PTFE Coated (สองด้าน)</td>
                                <td>0.45mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG100-P2</th>
                                <td>PTFE Coated (สองด้าน)</td>
                                <td>1.00mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        นอกจากนี้แล้วเรายังมี <u><b>ผ้าเทฟล่อน (Teflon หรือ Food Grade PTFE) สำหรับใช้ในอุตสาหกรรมอาหาร</b></u> 
                        ด้วย ใช้เป็นถาดรองขนมปังในเตาอบ 
                        ทำเป็นสายพานลำเลียง ใช้เป็นม่านกันความร้อนหน้าเตา 
                        ใช้เป็นแผ่นรองกันเปื้อนสำหรับเตาแก๊สในครัวเรือนเป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <img src="/images/slides/page-09/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเคลือบเทฟล่อน(Teflon) หรือ Food Grade PTFE 
                        มีลักษณะผิวมัน ลื่น ไม่เกาะติดง่าย ทนต่อการขีดข่วนได้ดีและสามารถเช็ดทำความสะอาดได้ง่าย 
                        สามารถทนอุณหภูมิได้ถึง 300°C และมีความยืดหยุ่นดี ง่ายต่อการนำเอาไปใช้งาน
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-4.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-5.jpg" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>ผ้า PTFE / ผ้าเทฟล่อน (Teflon) - PTFE Coated Fabrics</b></u>
                    </h3>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="/images/slides/page-10/Pic-1.png" class="img-responsive" style="width:100%;float:left;">
                    </div>
                    <p style="font-size:20px;display:contents;float:left;">
                        ผ้า PTFE (Polytetrafluoroethylene) ของเราเป็นผ้า PTFE
                        ที่เสริมความแข็งแรงด้วยผ้าใยแก้ว สามารถทนอุณหภูมิได้ถึง 300°C เป็นผ้าที่มีความทนทานต่อการขีดข่วนและฉีกขาดได้ดี
                        กันน้ำ เหมาะสำหรับที่จะนำเอาไปใช้เป็นแผ่นกันความร้อน แผ่นรองเครื่องฮีตซีล (Heat Sealing Plate) 
                        เป็นส่วนประกอบฉนวนแบบถอดได้ (Removable Insulation Jacket/Cover) 
                        สำหรับเครื่องฉีดพลาสติก (Plastic Extruder / Plastic Injection Molding Machine) 
                        ฉนวนนอกอาคารหุ้มวาล์ว/ฉนวนหุ้มท่อ/ฉนวนหุ้มหน้าแปลนเป็นท่อลมร้อน Expansion Joint
                        เป็นม่านกันความร้อน อีกทั้งยังสามารถใช้เป็นผ้ากันสะเก็ดไฟงานเชื่อมโลหะ งานตัดโลหะ ได้อีกด้วย
                    </p>
                    <br>
                    <p style="font-size:20px;margin-top:20px;">
                        <b>PTFE</b> (Polytetrafluoroethylene) มีคุณสมบัติในการทนทานต่อปัจจัยของสภาพแวดล้อมได้ดี 
                        ทนสารเคมีต่างๆได้ดี ด้วยเหตุนี้ผ้าใยแก้วเคลือบด้วย PTFE (PTFE Coated Fabrics) จึงสามารถใช้กับงาน Out-door ได้เป็นอย่างดี และ 
                        งานฉนวนแบบถอดได้ที่ติดตั้งนอกอาคาร(Out-Door Insulation Jacket) จึงนิยมใช้ผ้าเคลือบ PTFE เป็นส่วนประกอบ
                    </p>
                </div>
            </div>
            
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-2.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">TREATMENT</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FG8-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.08mm</td>
                                <td>1000mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG12-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.12mm</td>
                                <td>1200mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG25-P2</th>
                                <td>Teflon Coated (สองด้าน)- Food Grade</td>
                                <td>0.25mm</td>
                                <td>1000mm/1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG38-P2</th>
                                <td>Teflon Coated (สองด้าน)-Anti-Static</td>
                                <td>0.38mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG45-P2</th>
                                <td>PTFE Coated (สองด้าน)</td>
                                <td>0.45mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                            <tr>
                                <th>FG100-P2</th>
                                <td>PTFE Coated (สองด้าน)</td>
                                <td>1.00mm</td>
                                <td>1500mm</td>
                                <td>50m/Roll</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        นอกจากนี้แล้วเรายังมี <u><b>ผ้าเทฟล่อน (Teflon หรือ Food Grade PTFE) สำหรับใช้ในอุตสาหกรรมอาหาร</b></u> 
                        ด้วย ใช้เป็นถาดรองขนมปังในเตาอบ 
                        ทำเป็นสายพานลำเลียง ใช้เป็นม่านกันความร้อนหน้าเตา 
                        ใช้เป็นแผ่นรองกันเปื้อนสำหรับเตาแก๊สในครัวเรือนเป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <img src="/images/slides/page-09/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        ผ้าใยแก้วเคลือบเทฟล่อน(Teflon) หรือ Food Grade PTFE 
                        มีลักษณะผิวมัน ลื่น ไม่เกาะติดง่าย ทนต่อการขีดข่วนได้ดีและสามารถเช็ดทำความสะอาดได้ง่าย 
                        สามารถทนอุณหภูมิได้ถึง 300°C และมีความยืดหยุ่นดี ง่ายต่อการนำเอาไปใช้งาน
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-4.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-10/Pic-5.jpg" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Multi-Purpose Hi-Temp Woven Fiber Tape</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>เทปผ้าทนอุณหภูมิสูงอเนกประสงค์</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด จำหน่ายเทปผ้าทนความร้อนที่ผลิตมาจากเส้นใยซึ่งมีคุณสมบัติในการทนทานต่ออุณหภูมิสูงได้โดยที่ไม่ติดไฟและไม่ลามไฟทอรวมกันออกมาเป็นผืนผ้าที่มีลักษณะหน้ากว้างไม่เกิน 30 เซนติเมตร 
                        สามารถทนอุณหภูมิได้ตั้งแต่ 350˚C จนถึง 1200˚C  โดยจำแนกออกมาเป็นเทปผ้าชนิดต่างๆและเรียกชื่อตามชนิดของเส้นใยที่ใช้ในการทอ 
                        คือ เทปใยแก้ว(Glass Tape หรือ Glass Fiber Tape) 
                        เทปเซรามิคหรือเทปใยเซรามิค (Ceramic Tape / Ceramic Fiber Tape)
                    </p>
                    <p style="font-size:20px;margin-top:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เทปผ้าทนความร้อนชนิดต่างๆนี้สามารถนำเอาไปใช้เป็นผ้าพันท่อไอเสีย(Exhaust Pipe) 
                        ฉนวนพันท่อไอเสียของเครื่องจักรทั้งในอุตสาหกรรม และ ทั่วๆไป ท่อดักลมร้อนขนาดเล็ก 
                        ท่อไอน้ำร้อนจาก Boiler และยังสามารถใช้เป็นซีล (Seal)หรือปะเก็น(Gasket) 
                        กับเตาอุตสาหกรรมต่างๆ อาทิเช่น เตาอบ / เตาหลอม ปะเก็นหน้าแปลน ปะเก็นท่อดักทนความร้อนต่างๆได้อีกด้วย 
                        เทปผ้าทนความร้อนสูงที่บริษัท พินซู จำกัดจำหน่ายมีดังต่อไปนี้
                    </p>
                </div>
            </div>
            
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <h4 style="font-size:25px;"><b><u>Glass Fiber Tape / Glass Tape (เทปใยแก้ว)</u></b><br>สำหรับอุณหภูมิ 350C° - 550°C</h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>TG20</th>
                                <td>0.2MM</td>
                                <td>50MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG300</th>
                                <td>3MM</td>
                                <td>25MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG500</th>
                                <td>5MM</td>
                                <td>50MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG1000</th>
                                <td>10MM</td>
                                <td>50MM - 100MM</td>
                                <td>15M/30M ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;"><b><u>เทปใยแก้วชนิดปิดผิว</u></b></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b>
                            Silica Fiber Tape (เทปซิลิก้า)
                            <br>สำหรับอุณหภูมิ 980°C - 1000°C
                        </b>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-3.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b>
                            <u>Ceramic Fiber Tape / Ceramic Tape (เทปใยเซรามิค/เทปเซรามิค)</u>
                            <br>สำหรับอุณหภูมิถึง 1200°C
                        </b>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>TC300</th>
                                <td>3MM</td>
                                <td>25MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>Tadpole Tape</u></b>
                    </p>
                    <p style="font-size:25px;">
                        Tadpole Tape ถือได้ว่าเป็นปะเก็นอีกประเภทหนึ่งที่ใช้สำหรับ seal 
                        หรือปิดขอบประตูเตาอบอุตสาหกรรม เตาหลอมโลหะต่างๆ  บริษัท พินซู จำกัด 
                        ผลิตและจำหน่าย Tadpole Tape ทนความร้อนสูงที่ทำจากใยแก้ว (Glass Fiber) 
                        ใยเซรามิก (Ceramic Fiber) พร้อมทั้งใส้ฉนวน (Bulk) 
                        แบบต่างๆและหลายขนาดตามความต้องการของลูกค้า
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-5.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือก (Gasket) ทนความร้อน</u></b>
                    </p>
                    <p style="font-size:25px;">
                        ปะเก็นเชือกทนความร้อนใช้สำหรับ seal หรือปิดขอบประตูเตาอบอุตสาหกรรม
                        เตาหลอมโลหะต่างๆ ใช้งานคล้ายกับ Tadpole Tape
                        หรือแม้แต่จะใช้เป็นปะเก็นหน้าแปลนท่อโลหะหรือวาล์วทนความร้อนต่างๆก็ได้เช่นกัน
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือกใยแก้ว</u></b> (Fiber Glass Rope /Glass  Fiber Rope)
                    </p>
                    <p style="font-size:25px;">
                        ใช้กับอุณหภูมิที่ไม่เกิน 550°C
                        <br>ขนาด: Dia 5mm -  Dia 40mm
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือกเซรามิค</u></b> (Ceramic Fiber Rope / Ceramic Rope)
                    </p>
                    <p style="font-size:25px;">
                        ใช้กับอุณหภูมิถึง 1200°C
                        <br>ขนาด: Dia 5mm -  Dia 40mm
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-7.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u><b>Multi-Purpose Hi-Temp Woven Fiber Tape</b></u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>เทปผ้าทนอุณหภูมิสูงอเนกประสงค์</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด จำหน่ายเทปผ้าทนความร้อนที่ผลิตมาจากเส้นใยซึ่งมีคุณสมบัติในการทนทานต่ออุณหภูมิสูงได้โดยที่ไม่ติดไฟและไม่ลามไฟทอรวมกันออกมาเป็นผืนผ้าที่มีลักษณะหน้ากว้างไม่เกิน 30 เซนติเมตร 
                        สามารถทนอุณหภูมิได้ตั้งแต่ 350˚C จนถึง 1200˚C  โดยจำแนกออกมาเป็นเทปผ้าชนิดต่างๆและเรียกชื่อตามชนิดของเส้นใยที่ใช้ในการทอ 
                        คือ เทปใยแก้ว(Glass Tape หรือ Glass Fiber Tape) 
                        เทปเซรามิคหรือเทปใยเซรามิค (Ceramic Tape / Ceramic Fiber Tape)
                    </p>
                    <p style="font-size:20px;margin-top:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เทปผ้าทนความร้อนชนิดต่างๆนี้สามารถนำเอาไปใช้เป็นผ้าพันท่อไอเสีย(Exhaust Pipe) 
                        ฉนวนพันท่อไอเสียของเครื่องจักรทั้งในอุตสาหกรรม และ ทั่วๆไป ท่อดักลมร้อนขนาดเล็ก 
                        ท่อไอน้ำร้อนจาก Boiler และยังสามารถใช้เป็นซีล (Seal)หรือปะเก็น(Gasket) 
                        กับเตาอุตสาหกรรมต่างๆ อาทิเช่น เตาอบ / เตาหลอม ปะเก็นหน้าแปลน ปะเก็นท่อดักทนความร้อนต่างๆได้อีกด้วย 
                        เทปผ้าทนความร้อนสูงที่บริษัท พินซู จำกัดจำหน่ายมีดังต่อไปนี้
                    </p>
                </div>
            </div>
            
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <h4 style="font-size:25px;"><b><u>Glass Fiber Tape / Glass Tape (เทปใยแก้ว)</u></b><br>สำหรับอุณหภูมิ 350C° - 550°C</h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>TG20</th>
                                <td>0.2MM</td>
                                <td>50MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG300</th>
                                <td>3MM</td>
                                <td>25MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG500</th>
                                <td>5MM</td>
                                <td>50MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                            <tr>
                                <th>TG1000</th>
                                <td>10MM</td>
                                <td>50MM - 100MM</td>
                                <td>15M/30M ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;"><b><u>เทปใยแก้วชนิดปิดผิว</u></b></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b>
                            Silica Fiber Tape (เทปซิลิก้า)
                            <br>สำหรับอุณหภูมิ 980°C - 1000°C
                        </b>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-3.jpg" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b>
                            <u>Ceramic Fiber Tape / Ceramic Tape (เทปใยเซรามิค/เทปเซรามิค)</u>
                            <br>สำหรับอุณหภูมิถึง 1200°C
                        </b>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <table class="table table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">ITEM</th>
                                <th class="text-center">THICKNESS</th>
                                <th class="text-center">WIDTH</th>
                                <th class="text-center">LENGTH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>TC300</th>
                                <td>3MM</td>
                                <td>25MM - 100MM</td>
                                <td>30M/ROLL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>Tadpole Tape</u></b>
                    </p>
                    <p style="font-size:25px;">
                        Tadpole Tape ถือได้ว่าเป็นปะเก็นอีกประเภทหนึ่งที่ใช้สำหรับ seal 
                        หรือปิดขอบประตูเตาอบอุตสาหกรรม เตาหลอมโลหะต่างๆ  บริษัท พินซู จำกัด 
                        ผลิตและจำหน่าย Tadpole Tape ทนความร้อนสูงที่ทำจากใยแก้ว (Glass Fiber) 
                        ใยเซรามิก (Ceramic Fiber) พร้อมทั้งใส้ฉนวน (Bulk) 
                        แบบต่างๆและหลายขนาดตามความต้องการของลูกค้า
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-5.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือก (Gasket) ทนความร้อน</u></b>
                    </p>
                    <p style="font-size:25px;">
                        ปะเก็นเชือกทนความร้อนใช้สำหรับ seal หรือปิดขอบประตูเตาอบอุตสาหกรรม
                        เตาหลอมโลหะต่างๆ ใช้งานคล้ายกับ Tadpole Tape
                        หรือแม้แต่จะใช้เป็นปะเก็นหน้าแปลนท่อโลหะหรือวาล์วทนความร้อนต่างๆก็ได้เช่นกัน
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือกใยแก้ว</u></b> (Fiber Glass Rope /Glass  Fiber Rope)
                    </p>
                    <p style="font-size:25px;">
                        ใช้กับอุณหภูมิที่ไม่เกิน 550°C
                        <br>ขนาด: Dia 5mm -  Dia 40mm
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <b><u>ปะเก็นเชือกเซรามิค</u></b> (Ceramic Fiber Rope / Ceramic Rope)
                    </p>
                    <p style="font-size:25px;">
                        ใช้กับอุณหภูมิถึง 1200°C
                        <br>ขนาด: Dia 5mm -  Dia 40mm
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-11/Pic-7.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Pipe Expansion Joint / Air Duct Expansion Joint / Flexible Duct Connector Flexible Hose / Flexible Joint
                            </b>
                        </u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ข้อต่อท่อลมร้อน (ท่อลมเย็น) แบบยืดหยุ่นได้</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 1.png" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้อต่อท่อลมร้อน(และเย็น) แบบยืดหยุ่นได้
                        (Expansion Joint / Flexible Joint / Flexible Duct Connector)
                        ช่วยในเรื่องของการรับแรงสั่นสะเทือนและการขยายตัวที่เกิดขึ้นกับระบบท่อที่เชื่อมต่อเข้ากับส่วนต่างๆของเครื่องจักร อาทิเช่น ท่อลม 
                        Blower (Blower Expansion Joint) ท่อไอเสียของเทอร์ไบน์ (Turbine Exhaust) เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ท่อลม (ท่อลมร้อน / ท่อลมเย็น) 
                        หากมีการสั่นสะเทือนและขยับตัวมากๆจากการทำงานของเครื่องจักร 
                        แรงสั่นสะเทือนนั้นสามารถทำให้ท่อที่ได้ยึดติดตั้งไว้อย่างแข็งแรงด้วยอุปกรณ์ซัพพอร์ตแบบต่าง ๆ 
                        เกิดการขยับตัวและสร้างความเสียหายที่รุนแรงได้ ฉะนั้นตรงจุดของท่อลมที่มีการสั่นสะเทือน 
                        ตัวต่อท่อเพื่อรับแรงสั่นสะเทือนและการขยับตัว (Expansion Joint) ของท่อต่าง ๆ 
                        จึงเป็นตัวเลือกหนึ่งที่สำคัญในการที่จะแก้ไขปัญหาและป้องกันความเสียหายที่อาจเกิดขึ้นได้จากการสั่นสะเทือนของท่อลมและท่อต่าง ๆ ในโรงงาน
                    </p>
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด ผลิตและจำหน่าย 
                        Fabric Expansion Joint (ข้อต่อท่อลมร้อน / ข้อต่อท่อลมเย็น) 
                        Flexible Hose (ท่อยืดหด/ท่อย่น) 
                        ตามขนาดและรูปแบบที่ลูกค้าต้องการสำหรับอุณหภูมิที่เหมาะสม
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-6">
                    <img src="/images/slides/page-12/Pic - 5.png" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-6">
                    <img src="/images/slides/page-12/Pic - 4.png" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 8.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 9.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 10.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 11.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 12.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 13.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 14.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 15.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 16.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 17.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 18.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 19.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 20.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 21.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Pipe Expansion Joint / Air Duct Expansion Joint / Flexible Duct Connector Flexible Hose / Flexible Joint
                            </b>
                        </u>
                    </h3>
                    <h4 class="text-left" style="font-size:25px;">
                        <u>ข้อต่อท่อลมร้อน (ท่อลมเย็น) แบบยืดหยุ่นได้</u>
                    </h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 1.png" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้อต่อท่อลมร้อน(และเย็น) แบบยืดหยุ่นได้
                        (Expansion Joint / Flexible Joint / Flexible Duct Connector)
                        ช่วยในเรื่องของการรับแรงสั่นสะเทือนและการขยายตัวที่เกิดขึ้นกับระบบท่อที่เชื่อมต่อเข้ากับส่วนต่างๆของเครื่องจักร อาทิเช่น ท่อลม 
                        Blower (Blower Expansion Joint) ท่อไอเสียของเทอร์ไบน์ (Turbine Exhaust) เป็นต้น
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 4.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ท่อลม (ท่อลมร้อน / ท่อลมเย็น) 
                        หากมีการสั่นสะเทือนและขยับตัวมากๆจากการทำงานของเครื่องจักร 
                        แรงสั่นสะเทือนนั้นสามารถทำให้ท่อที่ได้ยึดติดตั้งไว้อย่างแข็งแรงด้วยอุปกรณ์ซัพพอร์ตแบบต่าง ๆ 
                        เกิดการขยับตัวและสร้างความเสียหายที่รุนแรงได้ ฉะนั้นตรงจุดของท่อลมที่มีการสั่นสะเทือน 
                        ตัวต่อท่อเพื่อรับแรงสั่นสะเทือนและการขยับตัว (Expansion Joint) ของท่อต่าง ๆ 
                        จึงเป็นตัวเลือกหนึ่งที่สำคัญในการที่จะแก้ไขปัญหาและป้องกันความเสียหายที่อาจเกิดขึ้นได้จากการสั่นสะเทือนของท่อลมและท่อต่าง ๆ ในโรงงาน
                    </p>
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด ผลิตและจำหน่าย 
                        Fabric Expansion Joint (ข้อต่อท่อลมร้อน / ข้อต่อท่อลมเย็น) 
                        Flexible Hose (ท่อยืดหด/ท่อย่น) 
                        ตามขนาดและรูปแบบที่ลูกค้าต้องการสำหรับอุณหภูมิที่เหมาะสม
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-6">
                    <img src="/images/slides/page-12/Pic - 5.png" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-6">
                    <img src="/images/slides/page-12/Pic - 4.png" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 8.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 9.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 10.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 11.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 12.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 13.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 14.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 15.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 16.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 17.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 18.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 19.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 20.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-12/Pic - 21.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Welding Blanket (ผ้ากันสะเก็ดไฟ)
                            </b>
                        </u>
                    </h3>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ผ้ากันสะเก็ดไฟ (Welding Blanket) 
                        เป็นวัสดุที่ใช้สำหรับป้องกันลูกสะเก็ดไฟจากงานตัดโลหะ งานเชื่อมโลหะ 
                        และงานเจียร์โลหะไม่ให้กระเด็นไปในบริเวณที่มีวัสดุหรืออุปกรณ์ต่างๆที่ติดไฟได้ง่ายจนเกิดประกายไฟและสร้างความเสียหายได้ 
                        ใช้คลุมเครื่องจักรและอุปกรณ์ต่างๆที่ยากต่อการโยกย้ายเมื่อจำเป็นต้องทำกิจกรรมเกี่ยวกับการตัด/เชื่อม/เจียร์โลหะในบริเวณนั้น ๆ 
                        ซึ่งมีพื้นที่การทำงานจำกัดเพื่อไม่ให้เกิดความเสียหายจากสะเก็ดไฟที่จะตกสัมผัสได้
                        นอกเหนือจากนี้แล้วผ้ากันสะเก็ดไฟยังสามารถนำไปใช้เป็นผ้ากันไฟ <b>(Fire Proof Blanket)</b> 
                        หรือผ้าห่มดับไฟ <b>(Fire Blanket)</b> สำหรับมีไว้ประจำครัวเรือน ห้างร้าน ห้างสรรพสินค้า อาคาร และ สำนักงานต่าง ๆ 
                        เพื่อป้องกันและแก้ไขปัญหาอัคคีภัยเล็ก ๆ น้อย ๆ เบื้องต้นที่เกิดขึ้นได้อีกด้วย
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ผ้ากันสะเก็ดไฟ (Welding Blanket) 
                        ถือได้ว่าเป็นอุปกรณ์ที่จำเป็นอย่างยิ่งสำหรับงานตัดโลหะ/งานเชื่อมโลหะ/งานเจียร์โลหะ 
                        โดยเฉพาะการทำงานในบริเวณที่มีวัสดุและอุปกรณ์ต่างๆที่ติดไฟได้ง่ายวางอยู่
                        <u>
                            สมาคมส่งเสริมความปลอดภัยและอนามัยในการทำงาน (ประเทศไทย) ในพระราชูปถัมภ์ฯ 
                            (Safety And Health At Work Promotion Association Thailand) 
                            Under Patronage (SHAWPAT) ได้กำหนดมาตรการความปลอดภัยในการทำงานเกี่ยวกับการตัดเชื่อมโลหะไว้ว่า 
                            “ก่อนที่จะทำการเชื่อมตัดด้วยไฟฟ้าหรือแก๊สทุกครั้ง ผู้ปฏิบัติงานต้องทำการตรวจสอบบริเวณโดยรอบ 
                            จะต้องไม่มีวัสดุที่ติดไฟได้อยู่ในรัศมีที่สะเก็ดไฟจากการปฏิบัติงานจะกระเด็นไปถึง 
                            ทั้งนี้ให้รวมถึงการเชื่อมในที่สูงที่สะเก็ดไฟจะตกลงไปได้โดยให้ทำการเคลื่อนย้ายวัสดุที่ติดไฟดังกล่าวออกไป 
                            หรือจัดหาวัสดุที่ไม่ติดไฟ (Fire Proof Blanket) ปิดกั้น จะต้องเคลื่อนย้ายสารที่สามารถติดไฟได้ให้พ้นบริเวณที่ประกายไฟจากการเชื่อมสามารถกระเด็นไปถึง 
                            ควรจัดให้มีอุปกรณ์วัสดุที่ไม่ติดไฟปิดกั้นบริเวณพื้นที่ที่ปฏิบัติงานเพื่อป้องกันประกายไฟหรือสะเก็ดไฟกระเด็นไปตกบริเวณสารไวไฟ/วัสดุติดไฟหรือกระเด็นถูกผู้ที่อยู่ใกล้เคียง”
                        </u>
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-2.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด 
                        ผลิตและจำหน่ายผ้ากันสะเก็ดไฟหลายชนิดตามความเหมาะสมและความต้องการของลูกค้า
                        ไม่ว่าจะนำไปใช้ในงานเบา(เป็นม่านกันสะเก็ดไฟ) หรือใช้ในงานหนัก
                        (เป็นผ้ารองลูกสะเก็ดไฟงานเชื่อม งานตัด งานเจียร์)
                        <br>
                        <br>
                        <u style="color:red;">
                            ท่านลูกค้าที่มีความสนใจและต้องการใช้ผ้ากันสะเก็ดไฟแบบเร่งด่วน ทางเรายินดีพร้อมให้บริการ
                        </u>
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-5.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-6.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-7.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-8.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ม่านกันไฟ / ม่านกันความร้อน</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-9.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ม่านกันสะเก็ดไฟชนิดโปร่งแสง (ม่านกรองแสงงานเชื่อม)</b></u></p>
                    <p style="font-size:25px;">&nbsp; &nbsp; &nbsp; &nbsp; นอกเหนือจากผ้ากันสะเก็ดไฟและผ้ากันไฟแล้ว บริษัท พินซู จำกัด ยังจำหน่ายม่านกรองแสงงานเชื่อมหรือม่านกันสะเก็ดไฟชนิดโปร่งแสงอีกด้วย ม่านกรองแสงงานเชื่อมโดยปกติแล้วจะเป็นที่นิยมสำหรับช่างเชื่อมที่จำเป็นจะต้องเชื่อมงานในบริเวณที่มีคนอื่นๆปฏิบัติงานอยู่ข้างๆ เพราะม่านกรองแสงงานเชื่อมจะช่วยลดปริมาณของแสง UV และช่วยลดอันตรายที่อาจเกิดขึ้นกับสายตาของผู้อื่นที่ต้องสัมผัสกับแสงจากการเชื่อมงานของผู้เชื่อม</p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-10.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        ม่านกรองแสงงานเชื่อมผลิตจากวัสดุที่ไม่ติดไฟและไม่ลามไฟ ด้วยเหตุนี้ม่านกรองแสงงานเชื่อมจึงไม่เพียงแค่ป้องกันสายตาของผู้ที่อยู่ใกล้ๆบริเวณที่มีการเชื่อมงานเท่านั้น แต่ยังช่วยป้องกันลูกสะเก็ดไฟงานเชื่อมไม่ให้กระเด็นไปโดนผู้อื่นที่อยู่ข้างๆหรือบริเวณใกล้ๆที่มีวัสดุไวไฟอยู่อีกด้วย หลายคนอาจจะคิดว่าเพียงแค่เราไม่ต้องมองแสงจากการเชื่อมของช่างที่เชื่อมอยู่ใกล้ๆก็ปลอดภัยพอแล้ว ความจริงก็คือถ้าดวงตาเราได้สัมผัสกับแสง UV จากงานเชื่อมเพียงชั่วพริบตาเดียว ดวงตาเราก็สามารถที่จะได้รับอันตรายได้
                    </p>
                    <p style="font-size:25px;">
                        ม่านกรองแสงงานเชื่อมหรือม่านกันสะเก็ดไฟชนิดโปร่งแสง (See-Through Welding Screen)ยังมีประโยชน์ช่วยให้ผู้เชื่อมงานได้มองเห็นความเคลื่อนไหวด้านนอกและในขณะเดียวกันก็ช่วยให้ผู้อื่นมองเห็นว่ามีการเชื่อมงานอยู่ในบริเวณนั้นด้วย
                    </p>
                    <p style="font-size:25px;">
                        บริษัท พินซู จำกัด จำหน่ายม่านกรองแสงงานเชื่อม / ม่านกันสะเก็ดไฟงานเชื่อมชนิดโปร่งแสง (สีส้ม / สีเขียวเข้ม / สีเหลือง) ตามขนาดที่ลูกค้าต้องการ    
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-11.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Welding Blanket (ผ้ากันสะเก็ดไฟ)
                            </b>
                        </u>
                    </h3>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ผ้ากันสะเก็ดไฟ (Welding Blanket) 
                        เป็นวัสดุที่ใช้สำหรับป้องกันลูกสะเก็ดไฟจากงานตัดโลหะ งานเชื่อมโลหะ 
                        และงานเจียร์โลหะไม่ให้กระเด็นไปในบริเวณที่มีวัสดุหรืออุปกรณ์ต่างๆที่ติดไฟได้ง่ายจนเกิดประกายไฟและสร้างความเสียหายได้ 
                        ใช้คลุมเครื่องจักรและอุปกรณ์ต่างๆที่ยากต่อการโยกย้ายเมื่อจำเป็นต้องทำกิจกรรมเกี่ยวกับการตัด/เชื่อม/เจียร์โลหะในบริเวณนั้น ๆ 
                        ซึ่งมีพื้นที่การทำงานจำกัดเพื่อไม่ให้เกิดความเสียหายจากสะเก็ดไฟที่จะตกสัมผัสได้
                        นอกเหนือจากนี้แล้วผ้ากันสะเก็ดไฟยังสามารถนำไปใช้เป็นผ้ากันไฟ <b>(Fire Proof Blanket)</b> 
                        หรือผ้าห่มดับไฟ <b>(Fire Blanket)</b> สำหรับมีไว้ประจำครัวเรือน ห้างร้าน ห้างสรรพสินค้า อาคาร และ สำนักงานต่าง ๆ 
                        เพื่อป้องกันและแก้ไขปัญหาอัคคีภัยเล็ก ๆ น้อย ๆ เบื้องต้นที่เกิดขึ้นได้อีกด้วย
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ผ้ากันสะเก็ดไฟ (Welding Blanket) 
                        ถือได้ว่าเป็นอุปกรณ์ที่จำเป็นอย่างยิ่งสำหรับงานตัดโลหะ/งานเชื่อมโลหะ/งานเจียร์โลหะ 
                        โดยเฉพาะการทำงานในบริเวณที่มีวัสดุและอุปกรณ์ต่างๆที่ติดไฟได้ง่ายวางอยู่
                        <u>
                            สมาคมส่งเสริมความปลอดภัยและอนามัยในการทำงาน (ประเทศไทย) ในพระราชูปถัมภ์ฯ 
                            (Safety And Health At Work Promotion Association Thailand) 
                            Under Patronage (SHAWPAT) ได้กำหนดมาตรการความปลอดภัยในการทำงานเกี่ยวกับการตัดเชื่อมโลหะไว้ว่า 
                            “ก่อนที่จะทำการเชื่อมตัดด้วยไฟฟ้าหรือแก๊สทุกครั้ง ผู้ปฏิบัติงานต้องทำการตรวจสอบบริเวณโดยรอบ 
                            จะต้องไม่มีวัสดุที่ติดไฟได้อยู่ในรัศมีที่สะเก็ดไฟจากการปฏิบัติงานจะกระเด็นไปถึง 
                            ทั้งนี้ให้รวมถึงการเชื่อมในที่สูงที่สะเก็ดไฟจะตกลงไปได้โดยให้ทำการเคลื่อนย้ายวัสดุที่ติดไฟดังกล่าวออกไป 
                            หรือจัดหาวัสดุที่ไม่ติดไฟ (Fire Proof Blanket) ปิดกั้น จะต้องเคลื่อนย้ายสารที่สามารถติดไฟได้ให้พ้นบริเวณที่ประกายไฟจากการเชื่อมสามารถกระเด็นไปถึง 
                            ควรจัดให้มีอุปกรณ์วัสดุที่ไม่ติดไฟปิดกั้นบริเวณพื้นที่ที่ปฏิบัติงานเพื่อป้องกันประกายไฟหรือสะเก็ดไฟกระเด็นไปตกบริเวณสารไวไฟ/วัสดุติดไฟหรือกระเด็นถูกผู้ที่อยู่ใกล้เคียง”
                        </u>
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-2.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท พินซู จำกัด 
                        ผลิตและจำหน่ายผ้ากันสะเก็ดไฟหลายชนิดตามความเหมาะสมและความต้องการของลูกค้า
                        ไม่ว่าจะนำไปใช้ในงานเบา(เป็นม่านกันสะเก็ดไฟ) หรือใช้ในงานหนัก
                        (เป็นผ้ารองลูกสะเก็ดไฟงานเชื่อม งานตัด งานเจียร์)
                        <br>
                        <br>
                        <u style="color:red;">
                            ท่านลูกค้าที่มีความสนใจและต้องการใช้ผ้ากันสะเก็ดไฟแบบเร่งด่วน ทางเรายินดีพร้อมให้บริการ
                        </u>
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="/images/slides/page-13/Pic-3.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-4.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-5.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-6.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-7.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-8.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ม่านกันไฟ / ม่านกันความร้อน</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-9.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ม่านกันสะเก็ดไฟชนิดโปร่งแสง (ม่านกรองแสงงานเชื่อม)</b></u></p>
                    <p style="font-size:25px;">&nbsp; &nbsp; &nbsp; &nbsp; นอกเหนือจากผ้ากันสะเก็ดไฟและผ้ากันไฟแล้ว บริษัท พินซู จำกัด ยังจำหน่ายม่านกรองแสงงานเชื่อมหรือม่านกันสะเก็ดไฟชนิดโปร่งแสงอีกด้วย ม่านกรองแสงงานเชื่อมโดยปกติแล้วจะเป็นที่นิยมสำหรับช่างเชื่อมที่จำเป็นจะต้องเชื่อมงานในบริเวณที่มีคนอื่นๆปฏิบัติงานอยู่ข้างๆ เพราะม่านกรองแสงงานเชื่อมจะช่วยลดปริมาณของแสง UV และช่วยลดอันตรายที่อาจเกิดขึ้นกับสายตาของผู้อื่นที่ต้องสัมผัสกับแสงจากการเชื่อมงานของผู้เชื่อม</p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-10.JPG" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        ม่านกรองแสงงานเชื่อมผลิตจากวัสดุที่ไม่ติดไฟและไม่ลามไฟ ด้วยเหตุนี้ม่านกรองแสงงานเชื่อมจึงไม่เพียงแค่ป้องกันสายตาของผู้ที่อยู่ใกล้ๆบริเวณที่มีการเชื่อมงานเท่านั้น แต่ยังช่วยป้องกันลูกสะเก็ดไฟงานเชื่อมไม่ให้กระเด็นไปโดนผู้อื่นที่อยู่ข้างๆหรือบริเวณใกล้ๆที่มีวัสดุไวไฟอยู่อีกด้วย หลายคนอาจจะคิดว่าเพียงแค่เราไม่ต้องมองแสงจากการเชื่อมของช่างที่เชื่อมอยู่ใกล้ๆก็ปลอดภัยพอแล้ว ความจริงก็คือถ้าดวงตาเราได้สัมผัสกับแสง UV จากงานเชื่อมเพียงชั่วพริบตาเดียว ดวงตาเราก็สามารถที่จะได้รับอันตรายได้
                    </p>
                    <p style="font-size:25px;">
                        ม่านกรองแสงงานเชื่อมหรือม่านกันสะเก็ดไฟชนิดโปร่งแสง (See-Through Welding Screen)ยังมีประโยชน์ช่วยให้ผู้เชื่อมงานได้มองเห็นความเคลื่อนไหวด้านนอกและในขณะเดียวกันก็ช่วยให้ผู้อื่นมองเห็นว่ามีการเชื่อมงานอยู่ในบริเวณนั้นด้วย
                    </p>
                    <p style="font-size:25px;">
                        บริษัท พินซู จำกัด จำหน่ายม่านกรองแสงงานเชื่อม / ม่านกันสะเก็ดไฟงานเชื่อมชนิดโปร่งแสง (สีส้ม / สีเขียวเข้ม / สีเหลือง) ตามขนาดที่ลูกค้าต้องการ    
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <img src="/images/slides/page-13/Pic-11.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Removable Insulation Jackets
                            </b>
                        </u>
                    </h3>
                    <h4 class="text-left" style="font-size: 25px;"><u>ฉนวนทนความร้อนแบบถอดได้ (ฉนวนถอดได้)</u></h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เมื่อพูดถึงการบำรุงรักษาเครื่องจักรและอุปกรณ์ต่าง ๆ
                        หลาย ๆ โรงงานมีความจำเป็นที่จะต้องตรวจเช็คบ่อยครั้งในแต่ละรอบปีเพื่อหาจุดชำรุดของชิ้นส่วนและอุปกรณ์
                        หากพบเจอก็สามารถถอดเปลี่ยนได้ทันท่วงทีเพื่อป้องกันไม่ให้เกิดความเสียหายต่อเครื่องจักรและส่งผลกระทบต่อกระบวนการผลิต
                        สำหรับเครื่องจักรและอุปกรณ์ใดที่จำเป็นจะต้องหุ้มฉนวนเอาไว้เพื่อช่วยในเรื่องของการรักษาพลังงานและป้องกันความร้อน
                        ฉนวนที่หุ้มไปแล้วสามารถรื้อถอดและใส่เข้าไปใหม่ได้หรือที่เรียกกันว่า 
                        “ฉนวนแบบถอดได้ (Removable Insulation Jacket/Cover)” 
                        จึงเป็นสิ่งที่โรงงานต่างๆนึกถึงและให้ความสำคัญเป็นอันดับแรก
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                        <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">Keep creating the great things, just leave <u style="color:red;">the small Heat</u> problems to us.</p>
                        <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                            บริษัท พินซู จำกัด นอกเหนือจากจำหน่ายผ้าทนความร้อน ผ้ากันความร้อน ผ้ากันสะเก็ดไฟแล้ว
                            ยังให้บริการตัดเย็บและจำหน่ายฉนวนทนความร้อนแบบถอดได้ / ฉนวนกันความร้อนแบบถอดได้ (ฉนวนถอดได้) 
                            Removable Insulation Jacket อาทิเช่น ฉนวนหุ้มวาล์ว เสื้อหุ้มวาล์ว ( valve insulation jacket) 
                            ฉนวนหม้อต้มอุตสาหกรรม (Industrial Boiler)
                            ฉนวนเตาเผาอุตสาหกรรม ฉนวนสำหรับเตาหลอมอุตสาหกรรม 
                            ฉนวนเตาอบอุตสาหกรรม (Industrial Furnace / Industrial Oven) 
                            ฉนวนหุ้มฮีตเตอร์ / ตัวกำเนิดความร้อน (Heater Insulation)
                            ฉนวนเครื่องฉีดพลาสติก (Plastic Extruder Machine)
                            ฉนวนเครื่องปั่นไฟ/ฉนวนเครื่องกำเนิดไฟฟ้า (Power Generator/ Turbine)
                            ฉนวน Turbine เป็นต้น
                        </p>     
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">ตัวอย่างงานฉนวนที่เราได้ติดตั้งและส่งมอบให้กับลูกค้า</p>
                    <p style="font-size:25px;"><u><b>ฉนวนหุ้มเครื่องฉีดพลาสติก (Insulation Jacket for Plastic Extruder)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>Pre-Insulated Heating Pads (Heater - ฮีตเตอร์พร้อมฉนวนในตัว)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ฉนวนหุ้มเครื่องฉีดพลาสติก (Insulation Jacket for Plastic Extruder)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-005.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-06.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-04.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-05.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนแบบถอดได้สำหรับหุ้มวาล์วและหุ้มท่อ / เสื้อหุ้มวาล์วแบบถอดได้ (Removable Insulation Covers or Jackets for valves and pipes) 
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-5.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-5-01.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-005.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-006.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-007.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-008.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-009.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-010.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-0010.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มเตาอบอุตสาหกรรม (Removable Insulation for Industrial Ovens)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-011.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-012.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-012-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-013.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-014.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-015.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-016.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-017.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-018.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-019.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-020.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-021.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-022.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-023.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มเทอร์ไบน์ (Turbine s Exhaust)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-01.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-02.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-03.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                แผ่นฉนวนสำเร็จสำหรับหุ้มเทอร์ไบน์
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-025.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนแบบถอดได้สำหรับห้อง Clean Room / โรงงานผลิตอาหาร
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-026.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-027.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-028.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-029.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มบอยเลอร์ / หุ้มฮีตเตอร์ (ท่อ Boiler / Heater)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp;  &nbsp;  &nbsp;  &nbsp; นอกเหนือจากฉนวนแบบถอดได้ (Removable Insulation Covers / Jackets) 
                        แล้ว ทางบริษัท พินซู จำกัด ยังให้บริการประกอบและติดตั้งฉนวนที่ไม่สามารถถอดเปลี่ยนได้ อาทิเช่น 
                        ฉนวนที่ผิดผิวด้วยอลูมิเนียม (Aluminium Cladding) หรือ สแตนเลส อีกด้วย
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนอลูมิเนียมหุ้มท่อ Exhaust เครื่อง Generator
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-006.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'content_en' => '<div class="row">
                <div class="col-md-12">
                    <h3 class="text-left">
                        <u>
                            <b>
                                Removable Insulation Jackets
                            </b>
                        </u>
                    </h3>
                    <h4 class="text-left" style="font-size: 25px;"><u>ฉนวนทนความร้อนแบบถอดได้ (ฉนวนถอดได้)</u></h4>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <p style="font-size:20px;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เมื่อพูดถึงการบำรุงรักษาเครื่องจักรและอุปกรณ์ต่าง ๆ
                        หลาย ๆ โรงงานมีความจำเป็นที่จะต้องตรวจเช็คบ่อยครั้งในแต่ละรอบปีเพื่อหาจุดชำรุดของชิ้นส่วนและอุปกรณ์
                        หากพบเจอก็สามารถถอดเปลี่ยนได้ทันท่วงทีเพื่อป้องกันไม่ให้เกิดความเสียหายต่อเครื่องจักรและส่งผลกระทบต่อกระบวนการผลิต
                        สำหรับเครื่องจักรและอุปกรณ์ใดที่จำเป็นจะต้องหุ้มฉนวนเอาไว้เพื่อช่วยในเรื่องของการรักษาพลังงานและป้องกันความร้อน
                        ฉนวนที่หุ้มไปแล้วสามารถรื้อถอดและใส่เข้าไปใหม่ได้หรือที่เรียกกันว่า 
                        “ฉนวนแบบถอดได้ (Removable Insulation Jacket/Cover)” 
                        จึงเป็นสิ่งที่โรงงานต่างๆนึกถึงและให้ความสำคัญเป็นอันดับแรก
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12">
                    <div class="panel-body" style="background-color: #f4f4f4;min-height:300px;padding:30px;">
                        <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">Keep creating the great things, just leave <u style="color:red;">the small Heat</u> problems to us.</p>
                        <p style="font-size:20px;text-align:justify;float:left;display:contents;">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
                            บริษัท พินซู จำกัด นอกเหนือจากจำหน่ายผ้าทนความร้อน ผ้ากันความร้อน ผ้ากันสะเก็ดไฟแล้ว
                            ยังให้บริการตัดเย็บและจำหน่ายฉนวนทนความร้อนแบบถอดได้ / ฉนวนกันความร้อนแบบถอดได้ (ฉนวนถอดได้) 
                            Removable Insulation Jacket อาทิเช่น ฉนวนหุ้มวาล์ว เสื้อหุ้มวาล์ว ( valve insulation jacket) 
                            ฉนวนหม้อต้มอุตสาหกรรม (Industrial Boiler)
                            ฉนวนเตาเผาอุตสาหกรรม ฉนวนสำหรับเตาหลอมอุตสาหกรรม 
                            ฉนวนเตาอบอุตสาหกรรม (Industrial Furnace / Industrial Oven) 
                            ฉนวนหุ้มฮีตเตอร์ / ตัวกำเนิดความร้อน (Heater Insulation)
                            ฉนวนเครื่องฉีดพลาสติก (Plastic Extruder Machine)
                            ฉนวนเครื่องปั่นไฟ/ฉนวนเครื่องกำเนิดไฟฟ้า (Power Generator/ Turbine)
                            ฉนวน Turbine เป็นต้น
                        </p>     
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">ตัวอย่างงานฉนวนที่เราได้ติดตั้งและส่งมอบให้กับลูกค้า</p>
                    <p style="font-size:25px;"><u><b>ฉนวนหุ้มเครื่องฉีดพลาสติก (Insulation Jacket for Plastic Extruder)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-2.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>Pre-Insulated Heating Pads (Heater - ฮีตเตอร์พร้อมฉนวนในตัว)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-3-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;"><u><b>ฉนวนหุ้มเครื่องฉีดพลาสติก (Insulation Jacket for Plastic Extruder)</b></u></p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-4-005.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-06.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-04.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-05.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนแบบถอดได้สำหรับหุ้มวาล์วและหุ้มท่อ / เสื้อหุ้มวาล์วแบบถอดได้ (Removable Insulation Covers or Jackets for valves and pipes) 
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-5.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-5-01.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-005.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-006.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-007.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-008.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-009.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-010.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-0010.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มเตาอบอุตสาหกรรม (Removable Insulation for Industrial Ovens)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-011.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-012.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-012-1.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-013.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-014.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-015.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-016.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-017.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-018.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-019.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-020.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-021.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-022.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-023.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มเทอร์ไบน์ (Turbine s Exhaust)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-01.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-02.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-024-03.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                แผ่นฉนวนสำเร็จสำหรับหุ้มเทอร์ไบน์
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-025.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนแบบถอดได้สำหรับห้อง Clean Room / โรงงานผลิตอาหาร
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-026.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-027.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-028.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-6-029.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนหุ้มบอยเลอร์ / หุ้มฮีตเตอร์ (ท่อ Boiler / Heater)
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-7-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:20px;">
                        &nbsp;  &nbsp;  &nbsp;  &nbsp; นอกเหนือจากฉนวนแบบถอดได้ (Removable Insulation Covers / Jackets) 
                        แล้ว ทางบริษัท พินซู จำกัด ยังให้บริการประกอบและติดตั้งฉนวนที่ไม่สามารถถอดเปลี่ยนได้ อาทิเช่น 
                        ฉนวนที่ผิดผิวด้วยอลูมิเนียม (Aluminium Cladding) หรือ สแตนเลส อีกด้วย
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-001.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-002.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-003.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-004.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-offset-2 col-md-8">
                    <p style="font-size:25px;">
                        <u>
                            <b>
                                ฉนวนอลูมิเนียมหุ้มท่อ Exhaust เครื่อง Generator
                            </b>
                        </u>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/images/slides/page-15/Pic-08-006.jpg" class="img-responsive" style="width:100%;">
                </div>
            </div>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '',
                'content_en' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '',
                'content_en' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '',
                'content_en' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'content_th' => '',
                'content_en' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
