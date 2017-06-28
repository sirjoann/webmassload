<footer>
    <div class="container" style="font-family: 'Mitr',sans-serif">
        <div class="col-md-3">
            <div class="hfooter">about</div>
            <div>ผู้แทนจำหน่าย และผู้นำเข้าผลิตภัณฑ์ชุดหุ้มกล้องวงจรปิดและอุปกรณ์เสริมสำหรับกล้องวงจรปิดแบรนด์ MASSLOAD</div>
            <div style="padding-top: 10px; font-size: 30px;">
                <a href="https://www.facebook.com/Massload/"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-google-plus-square"></i></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="hfooter">PAGE</div>
            <div><a href="index">หน้าแรก</a></div>
            <div><a href="gallery">รูปภาพ/คลังภาพ</a></div>
            <div><a href="blog_post">บทความ/คลังความรู้</a></div>
            <div><a href="contact">ข้อมูลติดต่อ</a></div>
        </div>
        <div class="col-md-3">
            <div class="hfooter">PRODUCTS</div>
            <div><a href="housing">กล่องหุ้มกล้องวงจรปิด</a></div>
            <div><a href="bracket">ขายึดกล่องหุ้มกล้องวงจรปิด</a></div>
            <div><a href="accessory">อุปกรณ์เสริม</a></div>
        </div>
        <div class="col-md-3">
            <div class="hfooter">Get in tuch</div>
            <div><b>บริษัท คอร์เทค คอร์ปอเรชั่น จำกัด</b></div>
            <div>71 อาคารเอจีอาร์ ชั้น1 ห้อง101 ถ.เจริญราษฏร์ แขวงบางโคล่ เขตบางคอแหลม กรุงเทพมหานคร 10120</div>
            <div style="padding-top: 20px;">
                โทร.  +662-291-6684 - 6<br>
                แฟ็กซ์. +662-291-6682<br>
                อีเมลล์. info@coretech.co.th
            </div>
        </div>
    </div>
</footer>

<div style="background-color: #32475c; text-align: center; color: #cecece; padding: 10px 0px 10px 0px; font-family: 'Mitr',sans-serif; font-size: 12px;">
    © 2017 <a href="www.coretech.co.th">บริษัท คอร์เทค คอร์ปอเรชั่น จำกัด</a>. สงวนสิทธิ์
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/new-age.js"></script>

<!-- WOW -->
<script src="js/wow.min.js"></script>

<script src="js/lightbox-plus-jquery.min.js"></script>

<script>
    new WOW().init();
</script>
<!--
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>
-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<script>
    $(document).ready(function () {
        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image').show();
            if (counter_max == counter_current) {
                $('#show-next-image').hide();
            } else if (counter_current == 1) {
                $('#show-previous-image').hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
            var current_image,
                    selector,
                    counter = 0;

            $('#show-next-image, #show-previous-image').click(function () {
                if ($(this).attr('id') == 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
            });

            function updateGallery(selector) {
                var $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-caption').text($sel.data('caption'));
                $('#image-gallery-title').text($sel.data('title'));
                $('#image-gallery-image').attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]').each(function () {
                    counter++;
                    $(this).attr('data-image-id', counter);
                });
            }
            $(setClickAttr).on('click', function () {
                updateGallery($(this));
            });
        }
    });
</script>
</body>
</html>