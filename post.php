<base href="<?php $_SERVER['SERVER_NAME'] ?>/post">
<!--<base href="<?php $_SERVER['SERVER_NAME'] ?>/webmassload/post">-->
<?php
$id = $_GET['title'];
$filename = './post/' . $id . '.php';
if((@include $filename) === false)
{
    //Error
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $title; ?> - MASSLOAD</title>

        <!-- SEO description-->
        <meta name="description" content="อุปกรณ์เสริมสำหรับระบบกล้องวงจรปิดที่นิยมใช้กันอย่างแพร่หลาย กล่องหุ้มกล้องวงจรปิด หรือ ชุดหุ้มกล้อง เหมาะสำหรับใช้กับกล้อง cs mount เพื่อการใช้งานภายนอกอาคาร IP66-68">

        <!-- SEO keywords -->
        <meta name="keywords" itemprop="" content="กล่องหุ้มกล้องวงจรปิด, ชุดหุ้มกล้อง, ที่ใส่กล้องวงจรปิด, กล้องนอกอาคาร, Outdoor Camera, Housing, CCTV Housing, enclosure">

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- animate -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- font awesome -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- font thai -->
        <link href="fonts/stylesheet.css" rel="stylesheet">

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Mitr:300|Open+Sans:400,300,700|Pacifico|Raleway&amp;subset=thai" rel="stylesheet">

        <!-- Custom -->
        <link  href="css/full-slider.css" rel="stylesheet">
        <link  href="css/new-age.css" rel="stylesheet">
        <link  href="css/style.css" rel="stylesheet">
    </head>
    <body id="page-top">

    <?php include './navbar.php'; ?>

        <div style="background-color: #2a3c4e; height: 70px;"></div>

        <div class="container paddingp" style="background-color: #ffffff;">
            <div class="rows">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> <b>หน้าแรก</b></a></li>
                    <li class="breadcrumb-item"><a href="blog_post">บทความ</a></li>
                    <li class="breadcrumb-item active"><?php echo $title; ?></li>
                </ol>
            </div>
            <div class="rows">
                <div class="col-md-12">
                    <h1 class="rows hpageth" style="text-align: left;"><?php echo $title; ?></h1>
                    <div style="text-align: left; font-family: 'Mitr',sans-serif;"><?php echo $subtitle; ?></div>
                    <div style="padding-top: 50px;"></div>
                    <?php
                    echo $imgtitle;
                    echo $content;
                    ?>
                    <div class="rows" style="padding-top: 50px;">
                        <div class="col-md-6">
                            <div class="btndown">
                                <?php
                                    if($id == 1){
                                        $dis = 'style="display: none;"';
                                    } else {
                                        $dis ='';
                                        $pre = $id-1;
                                    }
                                ?>
                                <a href="article/<?php echo $pre; ?>" class="btns" <?php echo $dis; ?>>
                                    <i class="fa fa-chevron-left" style="padding-right: 10px;"></i>previous
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <div class="btndown">
                                <?php
                                    if($islast == 1){
                                        $dis = 'style="display: none;"';
                                    } else {
                                        $dis ='';
                                        $next = $id +1;
                                    }
                                ?>
                                <a href="article/<?php echo $next; ?>" class="btns" <?php echo $dis; ?>>
                                    next<i class="fa fa-chevron-right" style="padding-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>
