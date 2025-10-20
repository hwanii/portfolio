<?php if($root){ ?>
<footer>
    <div class="inner">
        <div class="left">
            <ul>
                <li><a href="<?php echo $root?>index.php">HIGHKLASS</a></li>
                <li><a href="<?php echo $root?>sub/gallery.php">GALLERY</a></li>
                <li><a href="<?php echo $root?>sub/project.php">PROJECT</a></li>
                <li><a href="<?php echo $root?>sub/notice.php">NOTICE</a></li>
                <li><a href="<?php echo $root?>admin" target="_blank">ADMIN</a></li>
                <li><a href="http://mywebcenter.co.kr/landing/" target="_blank">LANDING</a></li>
                <!-- <li><a href="">CACULATION</a></li> -->
            </ul>
            <p class="copy">COPYRIGHT ALL RESERVED 2023 <br>HIGHKLASS.CO.,LTD.</p>
            <div>
                <p>HIGHKLASS, 2F, Bansong-ro 357</p>
                <p>Geumjeong-gu, Busan</p>
                <p>Republic of Korea</p>
            </div>
        </div>
        <div class="right">
            <div>
                <p>Project Contact</p>
                <a href="">highklasss@naver.com</a>
            </div>
            <div>
                <p>Phone</p>
                <a href="tel:010-5026-0246">010. 5026. 0246</a>
            </div>
        </div>
    </div>
</footer>
<?php } else { ?>
<footer>
    <ul>
        <li><a href="<?php echo $root?>index.php">HIGHKLASS</a></li>
        <li><a href="<?php echo $root?>sub/gallery.php">GALLERY</a></li>
        <li><a href="<?php echo $root?>sub/project.php">PROJECT</a></li>
        <li><a href="<?php echo $root?>sub/notice.php">NOTICE</a></li>
        <li><a href="<?php echo $root?>admin" target="_blank">ADMIN</a></li>
        <li><a href="http://mywebcenter.co.kr/landing/" target="_blank">LANDING</a></li>
        <!-- <li><a href="">CACULATION</a></li> -->
    </ul>
    <p>COPYRIGHT ALL RESERVED 2023 <br>HIGHKLASS.CO.,LTD.</p>
</footer>
<?php } ?>