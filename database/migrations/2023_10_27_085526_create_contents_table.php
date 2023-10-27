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
                                                        <li><a href="">Glass Fabrics / ผ้าใยแก้ว</a></li>
                                                        <li><a href="">Silica Fabrics / ผ้าซิลิก้า</a></li>
                                                        <li><a href="">Ceramic Fabrics / ผ้าเซรามิค</a></li>
                                                        <li><a href="">Silicone Coated Fabrics / ผ้าเคลือบซิลิโคน</a></li>
                                                        <li><a href="">PTFE Coated Fabrics / ผ้าเคลือบ PTFE</a></li>
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
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fiber Tape / Gasket เทปพันท่อ / ปะเก็น</b></h3>
                                                    <ul>
                                                        <li><a href="">Glass Fiber Tape / เทปใยแก้ว</a></li>
                                                        <li><a href="">Ceramic Fiber Tape / เทปเซรามิค</a></li>
                                                        <li><a href="">Basalt Fiber Tape / เทปใยหิน</a></li>
                                                        <li><a href="">Gasket / ปะเก็น</a></li>
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
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Removable Insulations / ฉนวนความร้อนแบบถอดได้</b></h3>
                                                    <ul>
                                                        <li><a href="">ฉนวนเตาอบอุตสาหกรรม</a></li>
                                                        <li><a href="">ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</a></li>
                                                        <li><a href="">ฉนวนหุ้มเครื่องฉีดพลาสติก</a></li>
                                                        <li><a href="">ฉนวนหุ้ม Heater</a></li>
                                                        <li><a href="">ฉนวนหุ้มท่อ Boiler</a></li>
                                                        <li><a href="">ฉนวนเทอร์ไบน์ (Turbine Insulation)</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Flexible Joint / Expansion Joint 
                                                            Fabric Expansion Joint / 
                                                            Flexible Duct Connector 
                                                            ข้อต่อท่อลมร้อน/เย็น (แบบยืดหดได้)
                                                        </b>
                                                    </h3>
                                                    <!-- <ul>
                                                        <li>ฉนวนเตาอบอุตสาหกรรม</li>
                                                        <li>ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</li>
                                                        <li>ฉนวนหุ้มเครื่องฉีดพลาสติก</li>
                                                        <li>ฉนวนหุ้ม Heater</li>
                                                        <li>ฉนวนหุ้มท่อ Boiler</li>
                                                        <li>ฉนวนเทอร์ไบน์ (Turbine Insulation)</li>
                                                    </ul> -->
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Welding Blanket / Welding Curtain      
                                                            ผ้ากันสะเก็ดไฟ 
                                                            Fire Blanket / ผ้าห่มดับไฟ 
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟแบบประหยัด / งานเบา</a></li>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟสำหรับงานเชื่อม / ตัดโลหะ</a></li>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟชนิดไม่คัน</a></li>
                                                        <li><a href="">ม่านกรองแสงสะเก็ดไฟงานเชื่อม</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Hi-Temp Sewing Thread ด้ายทนความร้อน
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">PTFE Sewing Thread / ด้าย PTFE</a></li>
                                                        <li><a href="">Aramid Sewing Thread / Kevlar Thread ด้ายเคฟล่า / ด้ายอารามิด</a></li>
                                                        <li><a href="">Glass Fiber Sewing Thread / ด้ายใยแก้ว</a></li>
                                                        <li><a href="">Stainless Steel Sewing Thread / ด้ายสแตนเลส</a></li>
                                                        <li><a href="">Carbon Fiber Sewing Thread / ด้ายคาร์บอน</a></li>
                                                        <li><a href="">Silica Fiber Sewing Thread / ด้ายซิลิก้า</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Insulation Fasteners วัสดุยึดฉนวน
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">Insulation Pins / หมุดยึดฉนวน / เข็มยึดฉนวน</a></li>
                                                        <li><a href="">Stainless Steel Hook / ตะขอสแตนเลส ยึด-เกี่ยวฉนวน</a></li>
                                                        <li><a href="">Lacing Anchors</a></li>
                                                        <li><a href="">Stud Welding Pins</a></li>
                                                        <li><a href="">SS D-Ring</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Fiber Blanket / ฉนวนแบบแผ่น
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">Glass Wool (Glass Needled Mat)</a></li>
                                                        <li><a href="">(Bio-Soluble) Ceramic Fiber Blanket</a></li>
                                                        <li><a href="">ฉนวนเซรามิคชนิดปิดผิว</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Work Tents
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">เต็นท์ผ้าใบ</a></li>
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
                                                        <li><a href="">Glass Fabrics / ผ้าใยแก้ว</a></li>
                                                        <li><a href="">Silica Fabrics / ผ้าซิลิก้า</a></li>
                                                        <li><a href="">Ceramic Fabrics / ผ้าเซรามิค</a></li>
                                                        <li><a href="">Silicone Coated Fabrics / ผ้าเคลือบซิลิโคน</a></li>
                                                        <li><a href="">PTFE Coated Fabrics / ผ้าเคลือบ PTFE</a></li>
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
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fiber Tape / Gasket เทปพันท่อ / ปะเก็น</b></h3>
                                                    <ul>
                                                        <li><a href="">Glass Fiber Tape / เทปใยแก้ว</a></li>
                                                        <li><a href="">Ceramic Fiber Tape / เทปเซรามิค</a></li>
                                                        <li><a href="">Basalt Fiber Tape / เทปใยหิน</a></li>
                                                        <li><a href="">Gasket / ปะเก็น</a></li>
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
                                                    <h3 style="margin-top:0px;"><b style="color:#015f01;">Removable Insulations / ฉนวนความร้อนแบบถอดได้</b></h3>
                                                    <ul>
                                                        <li><a href="">ฉนวนเตาอบอุตสาหกรรม</a></li>
                                                        <li><a href="">ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</a></li>
                                                        <li><a href="">ฉนวนหุ้มเครื่องฉีดพลาสติก</a></li>
                                                        <li><a href="">ฉนวนหุ้ม Heater</a></li>
                                                        <li><a href="">ฉนวนหุ้มท่อ Boiler</a></li>
                                                        <li><a href="">ฉนวนเทอร์ไบน์ (Turbine Insulation)</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Flexible Joint / Expansion Joint 
                                                            Fabric Expansion Joint / 
                                                            Flexible Duct Connector 
                                                            ข้อต่อท่อลมร้อน/เย็น (แบบยืดหดได้)
                                                        </b>
                                                    </h3>
                                                    <!-- <ul>
                                                        <li>ฉนวนเตาอบอุตสาหกรรม</li>
                                                        <li>ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</li>
                                                        <li>ฉนวนหุ้มเครื่องฉีดพลาสติก</li>
                                                        <li>ฉนวนหุ้ม Heater</li>
                                                        <li>ฉนวนหุ้มท่อ Boiler</li>
                                                        <li>ฉนวนเทอร์ไบน์ (Turbine Insulation)</li>
                                                    </ul> -->
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Welding Blanket / Welding Curtain      
                                                            ผ้ากันสะเก็ดไฟ 
                                                            Fire Blanket / ผ้าห่มดับไฟ 
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟแบบประหยัด / งานเบา</a></li>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟสำหรับงานเชื่อม / ตัดโลหะ</a></li>
                                                        <li><a href="">ผ้ากันสะเก็ดไฟชนิดไม่คัน</a></li>
                                                        <li><a href="">ม่านกรองแสงสะเก็ดไฟงานเชื่อม</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Hi-Temp Sewing Thread ด้ายทนความร้อน
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">PTFE Sewing Thread / ด้าย PTFE</a></li>
                                                        <li><a href="">Aramid Sewing Thread / Kevlar Thread ด้ายเคฟล่า / ด้ายอารามิด</a></li>
                                                        <li><a href="">Glass Fiber Sewing Thread / ด้ายใยแก้ว</a></li>
                                                        <li><a href="">Stainless Steel Sewing Thread / ด้ายสแตนเลส</a></li>
                                                        <li><a href="">Carbon Fiber Sewing Thread / ด้ายคาร์บอน</a></li>
                                                        <li><a href="">Silica Fiber Sewing Thread / ด้ายซิลิก้า</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Insulation Fasteners วัสดุยึดฉนวน
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">Insulation Pins / หมุดยึดฉนวน / เข็มยึดฉนวน</a></li>
                                                        <li><a href="">Stainless Steel Hook / ตะขอสแตนเลส ยึด-เกี่ยวฉนวน</a></li>
                                                        <li><a href="">Lacing Anchors</a></li>
                                                        <li><a href="">Stud Welding Pins</a></li>
                                                        <li><a href="">SS D-Ring</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Fiber Blanket / ฉนวนแบบแผ่น
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">Glass Wool (Glass Needled Mat)</a></li>
                                                        <li><a href="">(Bio-Soluble) Ceramic Fiber Blanket</a></li>
                                                        <li><a href="">ฉนวนเซรามิคชนิดปิดผิว</a></li>
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
                                                    <h3 style="margin-top:0px;">
                                                        <b style="color:#015f01;">
                                                            Work Tents
                                                        </b>
                                                    </h3>
                                                    <ul>
                                                        <li><a href="">เต็นท์ผ้าใบ</a></li>
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
