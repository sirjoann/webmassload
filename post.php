<?php include './header.php'; ?>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand page-scroll" style="width: 150px;"></div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index">หน้าแรก</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="housing">กล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="bracket">ขายึดกล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="accessory">อุปกรณ์เสริมอื่นๆ</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery">รูปภาพ</a></li>
                    <li class="active"><a href="post">บทความ</a></li>
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

    <div style="background-color: #2a3c4e; height: 70px;"></div>

    <div class="container-fluid paddingp" style="background-color: #fff;">
        <div class="rows">
            <div class="container">
                <div class="row hpage">LATEST POST</div>
                <div style="text-align: center; font-family: 'Mitr',sans-serif;">บทความ คลังความรู้ และข่าวสารความเคลื่อนไหวต่างๆ</div>
                <hr>
                <div style="padding-top: 50px;"></div>
            </div>
        </div>
        <div class="rows">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
                        <div class="thumbnail" style="box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                            <img src="images/post/01.jpg" alt="กล่องหุ้มกล้องวงจรปิด">
                            <div class="caption">
                                <h4>กล่องหุ้มกล้องวงจรปิดคืออะไร?</h4>
                                <p>กล่องหุ้มกล้องวงจรปิด คือ อุปกรณ์เสริมของระบบกล้องโทรทัศน์วงจรปิด...<a href="#"><b> อ่านต่อ</b></a></p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
                        <div class="thumbnail" style="box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                            <img src="images/post/02.jpg" alt="กล่องหุ้มกล้องวงจรปิด">
                            <div class="caption">
                                <h4>วิธีการอ่านค่า IP Protection</h4>
                                <p>มาทำความรู้จักกับวิธีการอ่านค่า IP Protection กันดีกว่า...<a href="#"><b> อ่านต่อ</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>
