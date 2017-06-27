<?php include './header.php'; ?>
<body id="page-top">
    <?php include './navbar.php'; ?>

    <div style="background-color: #2a3c4e; height: 70px;"></div>

    <div class="container-fluid paddingp" style="background-color: #ffffff;">
        <div class="rows">
            <div class="container">
                <div class="row hpage">get in tuch</div>
                <div style="text-align: center; font-family: 'Mitr',sans-serif;">ติดต่อสอบถามสินค้าและบริการเพิ่มเติมได้ที่นี่</div>
                <hr>
                <div style="padding-top: 50px;"></div>
            </div>
        </div>
        <div class="rows">
            <div class="container">
                <div class="col-md-6">
                    <form method="post" action="#">
                        <div class="row" style="font-family: 'Mitr',sans-serif; padding-bottom: 50px;">
                            <div class="col-md-3"></div>
                            <div class="col-md-8">
                                <p>ระบบฝากข้อความถึงเรา</p>
                                <div class="form-group">
                                    <input id="txtName" name="txtName" type="text" class="form-control" placeholder="ชื่อ" required="">
                                </div>
                                <div class="form-group">
                                    <input id="txtEmail" name="txtEmail" type="email" class="form-control" placeholder="อีเมลล์" required="">
                                </div>
                                <div class="form-group">
                                    <textarea id="txtMassage" name="txtMassage" class="form-control" placeholder="ข้อความ" rows="3"></textarea>
                                </div>

                                <div style="text-align: right; padding-top: 20px;">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-send" style="padding-right: 10px;"></i>ส่งข้อความ</button>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <p>ติดต่อสอบถามข้อมูลสินค้า ขอใบเสนอราคา</p>
                    <p><h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700"><i class="fa fa-phone-square"></i>  02-291-6684 - 6</h3></p>
                    <p><h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700"><i class="fa fa-envelope-square"></i> info@coretech.co.th</h3></p>
                    <p style="color: #cc0000">วันเวลาทำการ จ-ศ 8.30-17.30 น.</p>
                    <h4 style="font-weight: 700">บริษัท คอร์เทค คอร์ปอเรชั่น จำกัด</h4>
                    <p>71 อาคารเอจีอาร์ ชั้น1 ห้อง101 ถ.เจริญราษฏร์ แขวงบางโคล่ เขตบางคอแหลม กรุงเทพมหานคร 10120</p>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.3660194086774!2d100.51126831540633!3d13.696267990383417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d0c33e0d1f9%3A0x1c173b81b963bea0!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4hOC4reC4o-C5jOC5gOC4l-C4hCDguITguK3guKPguYzguJvguK3guYDguKPguIrguLHguYjguJkg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1489046041764" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <?php include './footer.php'; ?>
