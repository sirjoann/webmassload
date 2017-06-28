<base href="<?php $_SERVER['SERVER_NAME'] ?>/products">
<!--<base href="<?php $_SERVER['SERVER_NAME'] ?>/webmassload/products">-->
<?php 
    $model = $_GET['model']; /* ชื่อรุ่น เช่น CI-701 */
    $type = $_GET['type']; /* ประเภท เช่น Housing */

    include './products/' . $model . '.php';

    if ($type == "housing") {
        $typeth = "กล่องหุ้มกล้องวงจรปิด";
    } elseif ($type == "bracket") {
        $typeth = "ขายึดกล่องหุ้มกล้องวงจรปิด";
    }elseif ($type == "accessory") {
         $typeth = "อุปกรณ์เสริมกล้องวงจรปิด";
    }
    
    include './header.php';
?>

    <body>
        <!-- เมนูบาร์ -->
    <?php include './navbar.php'; ?>

        <!-- เพิ่มแถบสี Menubar -->
        <div style="background-color: #2a3c4e; height: 70px;"></div>

        <div class="container paddingp" style="background-color: #ffffff;">
            <div class="rows">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> <b>หน้าแรก</b></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $type; ?>"><?php echo $typeth; ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $model; ?></li>
                </ol>
            </div>
            <div class="rows">
                <div class="col-md-5" style="padding-bottom: 20px;">
                    <a class="example-image-link" href="images/products/Massload-<?php echo $model; ?>.jpg" data-lightbox="example-1">
                        <img class="example-image img-responsive" src="images/products/Massload-<?php echo $model; ?>.jpg" alt="image-1" />
                    </a>
                </div>
                <div class="col-md-2" style="padding-bottom: 20px;">
                    <a class="example-image-link" href="images/products/Massload-<?php echo $model; ?>-dimensions.jpg" data-lightbox="example-1">
                        <img class="example-image img-responsive" src="images/products/Massload-<?php echo $model; ?>-dimensions.jpg" alt="image-1" />
                    </a>
                </div>
                <div class="col-md-5">
                    <h3 class="rows hpage" style="text-align: left; margin: 0;">MASSLOAD <?php echo $model; ?></h3>
                    <div style="text-align: left; font-family: 'Mitr',sans-serif;"><?php echo $typeth; ?> รุ่น <?php echo $model; ?></div>
                    <div class="padtop20" style="font-weight: 700; font-size: 20px;">฿00.00</div>
                    <div style="padding: 20px 0px 20px 0px; color: #737373;">
                    <?php echo $highlight; ?>
                    </div>
                        <?php echo $btndd; ?>
                    <div class="padtop20">Tag : 
                        <?php echo $tag; ?>
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
                        <!-- Menu tab 1 -->
                        <div id="home" class="tab-pane fade in active">
                            <h4 style="padding-top: 15px; padding-bottom: 20px;"><?php echo $typeth; ?> รุ่น <?php echo $model; ?></h4>
                            <p><?php echo $product_detail; ?></p>
                            <div class="padtop20">
                                <?php echo $imgicon; ?>
                            </div>
                            <p style="padding-top: 20px;">MASSLOAD ผู้นำด้านการผลิตกล่องหุ้มกล้อวงจรปิดจากประเทศไต้หวัน ได้รับคุณภาพและมาตรฐานสากล</p>
                            <p style="color: red; font-weight: 700;">ติดต่อขอใบเสนอราคาได้ที่ 02-291-6684 - 6 หรือ info@coretech.co.th</p>
                        </div>

                        <!-- Menu tab 2 -->
                        <div id="menu1" class="tab-pane fade">
                            <div class="rows techic">Technical Specifications</div>
                            <table class="table table-bordered">
                                <tbody style="color: #797979;font-size: 13px;">
                                    <?php echo $technical; ?>
                                </tbody>
                            </table>
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
                            <img id="image-gallery-image" class="img-responsive" src="" alt="massload">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>
