<?php

$base = basename($_SERVER["SCRIPT_FILENAME"], '.php');

if($base == 'index'){
    $m1 = 'active';
} else {
    $m1 = '';
}

if($base == 'contact'){
    $contact = 'active';
} else {
    $contact = '';
}

if($base == 'blog_post' or $base == 'post'){
    $blog_post = 'active';
} else {
    $blog_post = '';
}


if($base == 'gallery'){
    $gallery = 'active';
} else {
    $gallery = '';
}

if($base == 'housing' or $base == 'bracket' or $base == 'accessory'){
    $products= 'active';
} else {
    $products = '';
}

?>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand page-scroll" style="width: 150px;"><a href=index.php style="color: transparent;">MASSLOAD</a></div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo $m1; ?>"><a href="index">หน้าแรก</a></li>
                    <li class="dropdown <?php echo $products; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="housing">กล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="bracket">ขายึดกล่องหุ้มกล้องวงจรปิด</a></li>
                            <li><a href="accessory">อุปกรณ์เสริมอื่นๆ</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $gallery; ?>"><a href="gallery">รูปภาพ</a></li>
                    <li class="<?php echo $blog_post; ?>"><a href="blog_post">บทความ</a></li>
                    <li class="<?php echo $contact; ?>"><a href="contact">ติดต่อเรา</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> ภาษาไทย <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="images/lang-th.jpg" width="20px" alt="th-lang"> ภาษาไทย/TH</a></li>
                            <?php/* echo basename($_SERVER['PHP_SELF']); */?>
                            <li><a href="#"><img src="images/lang-en.jpg" width="20px" alt="en-lang"> ENLISH/EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>