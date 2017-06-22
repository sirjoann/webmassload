<?php include './header.php'; ?>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/massload-logo1.png" width="50%"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index">หน้าแรก</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="housing">กล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="bracket">ขายึดกล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="accessory">อุปกรณ์เสริมอื่นๆ</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery">รูปภาพ</a></li>
                    <li><a href="blog_post">บทความ</a></li>
                    <li><a href="contact">ติดต่อเรา</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> ภาษาไทย <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="images/lang-th.jpg" width="20px"> ภาษาไทย/TH</a></li>
                            <?php/* echo basename($_SERVER['PHP_SELF']); */?>
                            <li><a href="#"><img src="images/lang-en.jpg" width="20px"> ENLISH/EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/slider/full_1-2.jpg');"></div>
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">No.1 CCTV Housing</h1>
                            <h2 class="cover-text-sublead wow fadeInUp" style="padding: 20px 0px; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;" data-wow-duration="1s" data-wow-delay=".8s">MASSLOAD No.1 Factory of Die-Cast aluminum CCTV housing and bracket</h2>
                            <a href="#about" class="btn btn-primary btn-outline animated fadeInLeft">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slider/full_1-4.jpg');"></div>
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">No.1 CCTV Housing</h1>
                            <h2 class="cover-text-sublead wow fadeInUp" style="padding: 20px 0px; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;" data-wow-duration="1s" data-wow-delay=".8s">MASSLOAD No.1 Factory of Die-Cast aluminum CCTV housing and bracket</h2>
                            <a href="#about" class="btn btn-primary btn-outline animated fadeInLeft">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="about" class="rows" style="background-color: #fff;">
        <div class="container paddingp">
            <div style="text-align: center; font-family: 'Mitr',sans-serif;">
                <h1>กล่องหุ้มกล้องวงจรปิด</h1>
                <div>MASSLOAD ที่สุดของกล่องหุ้มกล้องวงจรปิด ที่นิยมใช้กันมากเป็นอันดับ 1 ของโลก</div>
                <hr>
                <div class="row" style="padding-top: 50px;">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/massload-h.jpg" alt="massload">
                    </div>
                    <div class="col-md-5" style="text-align: left">
                        <h2 style="font-weight: 700">MASSLOAD</h2>
                        <h3>ที่สุดของ "กล่องหุ้มกล้องวงจรปิด"</h3>
                        <div style="padding-top: 20px;">
                            MASSLOAD ชุดหุ้มกล้อง และอุปกรณ์เสริมสำหรับกล้องวงจรปิดที่นิยมใช้กันอย่างแพร่หลายในสถานที่สำคัญต่างๆ เช่น สนามบิน สวนสาธารณะ สถานนีขนส่ง หน่วยงานราชการ บริษัท ห้างร้านต่างๆ
                        </div>
                        <div style="padding-top: 20px;">
                            ภายในกล่องหุ้มกล้องวงจรปิดมีอุปกรณ์ที่รองรับการทำงานของระบบกล้องวงจรปิดได้อย่างมีประสิทธิภาพ เช่น พัดลมช่วยในการระบายความร้อน ฮีตเตอร์ช่วยไล่ฝ้าหรือไอหมอก อินฟาเรดช่วยในการมองเห็นในเวลากลางคืน
                            และ PoE อุปกรณ์เพื่อรองรับระบบกล้องแบบ IP
                        </div>
                        <div style="padding-top: 20px; padding-bottom: 20px;">
                            <b>กล่องหุ้มกล้องวงจรปิด</b> ใช้สำหรับกล้อง CS Mount หรือ กล้อง Box สำหรับการติดตั้งภายนอกอาคาร เพื่อป้องกันตัวกล้องได้ดี ป้องกันฝุ่นละออง น้ำ แรงระเบิด สะเก็ดไฟ เพื่อให้กล้องยังคงทำงานได้ดีในทุกสภาวะ
                        </div>
                        
                        <img src="images/ce-rohs.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rows" style="background-color: #EEEEF2;">
        <div class="container paddingp">
            <div style="text-align: center; font-family: 'Mitr',sans-serif;">
                <div class="row" style="text-align: center; font-size: 40px; font-family: 'Raleway', sans-serif;">OUR PRODUCTS</div>
                <div style="padding-bottom: 50px;">MASSLOAD ผู้นำด้านอุปกรณ์เสริมระบบกล้องวงจรปิด ผู้ผลิตและจัดจำหน่ายชุดหุ้มกล้องวงจรปิด ด้วยกระบวนการการผลิตที่ได้มาตรฐานระดับสากล</div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
                <div class="thumbnail">
                    <img src="images/housing.jpg" alt="กล่องหุ้มกล้องวงจรปิด">
                    <div class="caption">
                        <div><p>กล่องหุ้มกล้องวงจรปิด ทำจากวัสดุอลูมิเนียมอัลลอยน์ ป้องกันน้ำและฝุ่นละอองด้วยมาตรฐาน IP66-68</p></div>
                        <div style="text-align: center">
                            <a href="housing" class="btn btn-default">view all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
                <div class="thumbnail">
                    <img src="images/bracket.jpg" alt="ขายึดกล้องวงจรปิด">
                    <div class="caption">
                        <div><p>ขายึดกล่องหุ้มกล้องวงจรปิด ใช้ยึดเข้ากับผนัง ฝ้าเพดาน หรือแม้กระทั่งยึดจับเสา พร้อมการจัดเก็บสายในตัว</p></div>
                        <div style="text-align: center">
                            <a href="bracket" class="btn btn-default">view all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
                <div class="thumbnail">
                    <img src="images/accesssory.jpg" alt="อุปกรณ์เสริมกล้องวงจรปิด">
                    <div class="caption">
                        <div><p>อุปกรณ์เสริมสำหรับระบบกล้องปิด เช่น PoE Injector, Junction Box เป็นต้น</p></div>
                        <div style="text-align: center">
                            <a href="accessory" class="btn btn-default">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rows" style="background-color: #ffffff;">
        <div class="container paddingp">
            <div class="row" style="text-align: center; font-size: 40px; font-family: 'Raleway', sans-serif;">WHY CHOOSE US</div>
            <div style="padding-bottom: 50px; text-align: center; font-family: 'Mitr',sans-serif;">ทำไมถึงต้องเลือกผลิตภัณฑ์จาก MASSLOAD</div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row" style="padding-bottom: 50px;">
                            <div class="col-md-3"><i class="fa fa-pencil" style="font-size: 30px;"></i></div>
                            <div class="col-md-9">
                                <div class="row whychoose">
                                    DESIGN
                                </div>
                                <div class="row whychoose-detail">
                                    <p>การออกแบบที่ดี ใช้งานได้เหมาะสมทุกสภาพพื้นที่</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><i class="fa fa-umbrella" style="font-size: 30px;"></i></div>
                            <div class="col-md-9">
                                <div class="row whychoose">
                                    IP PROTECTION
                                </div>
                                <div class="row whychoose-detail">
                                    <p>ป้องกันฝุ่นและน้ำด้วยมาตรฐานการป้องกัน IP66-68</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><i class="fa fa-flask" style="font-size: 30px;"></i></div>
                            <div class="col-md-9">
                                <div class="row whychoose">
                                    Material
                                </div>
                                <div class="row whychoose-detail">
                                    <p>กระบวนการผลิตที่มีคุณภาพโดยใช้เทคนิค Die-casting Aluminum alloy</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><i class="fa fa-trophy" style="font-size: 30px;"></i></div>
                            <div class="col-md-9">
                                <div class="row whychoose">
                                    certificate
                                </div>
                                <div class="row whychoose-detail">
                                    <p>ผ่านการรับรองมาตรฐานอุตสาหกรรมสากล</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--
                <video width="100%" controls>
                    <source src="images/CI-114_IP66 JUNCTION BOX.mp4" type="video/mp4">
                    <source src="images/CI-114_IP66_JUNCTION_BOX.ogg" type="video/ogg">
                </video>
                -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VrdL04792Vw?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Products Catalog</h2>
                <a href="upload/2016dm.pdf" class="btn btn-primary btn-xl page-scroll">download</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <?php include './footer.php'; ?>
