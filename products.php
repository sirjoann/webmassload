<base href="http://127.0.0.1/webmassload/products">
<?php include './header.php'; ?>
<?php
$model = $_GET['model'];
$type = $_GET['type'];
if ($type == "housing") {
    $typeth = "กล่องหุ้มกล้องวงจรปิด";
}
?>
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
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="housing">กล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="bracket">ขายึดกล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="accessory">อุปกรณ์เสริมอื่นๆ</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery">รูปภาพ</a></li>
                    <li><a href="post">บทความ</a></li>
                    <li><a href="contact">ติดต่อเรา</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> ภาษาไทย <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="images/lang-th.jpg" width="20px"> ภาษาไทย/TH</a></li>
                            <?php /* echo basename($_SERVER['PHP_SELF']); */ ?>
                            <li><a href="#"><img src="images/lang-en.jpg" width="20px"> ENLISH/EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="background-color: #2a3c4e; height: 70px;"></div>

    <div class="container paddingp" style="background-color: #ffffff;">
        <div class="rows">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> <b>หน้าแรก</b></a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $typeth; ?></a></li>
                <li class="breadcrumb-item active"><?php echo $model; ?></li>
            </ol>
        </div>
        <div class="rows">
            <div class="col-md-5">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" 
                   data-image="images/products/Massload-<?php echo $model; ?>.jpg" data-target="#image-gallery">
                    <img class="img-responsive" src="images/products/Massload-<?php echo $model; ?>.jpg" alt="<?php echo $model; ?>">
                </a>
            </div>
            <div class="col-md-2">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" 
                   data-image="images/products/Massload-<?php echo $model; ?>-dimensions.jpg" data-target="#image-gallery">
                    <img class="img-responsive" src="images/products/Massload-<?php echo $model; ?>-dimensions.jpg" alt="<?php echo $model; ?>">
                </a>
            </div>
            <div class="col-md-5">
                <h3 class="rows hpage" style="text-align: left; margin: 0;">MASSLOAD <?php echo $model; ?></h3>
                <div style="text-align: left; font-family: 'Mitr',sans-serif;"><?php echo $typeth; ?> รุ่น <?php echo $model; ?></div>
                <div class="padtop20" style="font-weight: 700; font-size: 20px;">฿00.00</div>
                <div style="padding: 20px 0px 20px 0px; color: #737373;">
                    <ul>
                    <li>Indoor/Outdoor Side Open Type</li>
                    <li>Material: Die Casting Al-alloy</li>
                    <li>Housing Dimension: L400 x H127 x W95 mm</li>
                    <li>Certification: RoHS, CE, IP66</li>
                    <li>Weight: 2,300g</li>
                    <li>Heater & Blower are all optional</li>
                </ul>
                </div>
                <div class="btndown">
                    <a href="images/products/Massload-CI-701.pdf" class="btns"><i class="fa fa-download" style="padding-right: 10px;"></i>brochure</a>
                </div>
                <div class="padtop20">
                    Tag : <span class="badge badge-primary">PoE</span> <span class="badge badge-primary">Heater</span> <span class="badge badge-primary">Blower</span>
                    <span class="badge badge-primary">IR</span>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-12">
                <h2 class="hpage" style="text-align: left; padding-top: 20px; font-size: 30px; padding-bottom: 10px;">Product Detail</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">รายละเอียด</a></li>
                    <li><a data-toggle="tab" href="#menu1">ข้อมูลทางเทคนิค</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h4 style="padding-top: 15px; padding-bottom: 20px;">กล่องหุ้มกล้องวงจรปิด รุ่น CI-701</h4>
                        <p>กล่องหุ้มกล้องวงจรปิด รุ่น CI-701 วัสดุ Diecasting Aluminum แข็งแรงคงทน ภายในสามารถติดตั้ง Heater, Blower, PoE และ IR ได้สูงสุดถึง 80 เมตร รองรับการทำงานที่อุณหภูมิ -50°C~ 50°C. Housing กันน้ำและฝุ่นละอองด้วยมาตรฐานการป้องกัน IP66</p>
                        <div class="padtop20">
                            <img src="images/icon/die-casting.jpg" width="10%">
                            <img src="images/icon/Blower.jpg" width="10%">
                            <img src="images/icon/Heater.jpg" width="10%">
                            <img src="images/icon/PoE.jpg" width="10%">
                            <img src="images/icon/IR.jpg" width="10%">
                            <img src="images/icon/cable.jpg" width="10%">
                            <img src="images/icon/ip68.jpg" width="10%">
                        </div>
                        <p style="padding-top: 20px;">MASSLOAD ผู้นำด้านการผลิตกล่องหุ้มกล้อวงจรปิดจากประเทศไต้หวัน ได้รับคุณภาพและมาตรฐานสากล</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <img src="images/products/Massload-CI-700-tech.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Custom -->
    <div class="row">
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive" src="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './footer.php'; ?>
