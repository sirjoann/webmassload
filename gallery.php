<?php include './header.php'; ?>
<body id="page-top">

    <?php include './navbar.php'; ?>

    <div style="background-color: #2a3c4e; height: 70px;"></div>

    <div class="container-fluid paddingp" style="background-color: #ffffff;">
        <div class="rows">
            <div class="container">
                <div class="row hpage">gallery</div>
                <div style="text-align: center; font-family: 'Mitr',sans-serif;">คลังภาพผลงานการติดตั้งกล่องหุ้มกล้องวงจรปิด</div>
                <hr>
                <div style="padding-top: 50px;"></div>
            </div>
        </div>
        
        <div class="rows">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/01.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/01.jpg" alt="image-1" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/02.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/02.jpg" alt="image-1" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/03.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/03.jpg" alt="image-1" />
                        </a>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/04.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/04.jpg" alt="image-1" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/05.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/05.jpg" alt="image-1" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="example-image-link" href="images/gallery/06.jpg" data-lightbox="example-1">
                            <img class="example-image img-responsive" src="images/gallery/06.jpg" alt="image-1" />
                        </a>
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
