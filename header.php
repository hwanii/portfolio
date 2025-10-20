<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}
?>
<section class="menu_pop">
    <div class="bg"></div>
    <div class="menu_box">
        <ul>
            <li class="<?php echo ($header=="highklass") ? "on" : ""?>">
                <a href="<?php echo $root?>sub/who.php">
                    <span class="menu01">HIGHKLASS</span>
                </a>
            </li>
            <li class="<?php echo ($header=="member") ? "on" : ""?>">
                <a href="<?php echo $root?>sub/inside.php">
                    <span class="menu02">MEMBERS</span>
                </a>
            </li>
            <li class="<?php echo ($header=="project") ? "on" : ""?>">
                <a href="<?php echo $root?>sub/project.php">
                    <span class="menu03">PROJECT</span>
                </a>
            </li>
            <li class="<?php echo ($header=="client") ? "on" : ""?>">
                <a href="<?php echo $root?>sub/client.php">
                    <span class="menu04">CLIENTS</span>
                </a>
            </li>
        </ul>
        <div class="menu_right">
            <div>
                <a href="javascript:void(0);">
                    <p>HIGHKLASS</p>
                    <span onclick="location.href='<?php echo $root?>sub/who.php'">WHO WE ARE</span>
                    <span onclick="location.href='<?php echo $root?>sub/location.php'">LOCATION</span>
                    <span onclick="location.href='<?php echo $root?>sub/notice.php'">NOTICE</span>
                    <span onclick="location.href='<?php echo $root?>sub/gallery.php'">GALLERY</span>
                </a>
            </div>
            <div>
                <a href="javascript:void(0);">
                    <p>MEMBERS</p>
                    <span onclick="location.href='<?php echo $root?>sub/inside.php'">INSIDE</span>
                    <span onclick="location.href='<?php echo $root?>sub/outside.php'">OUTSIDE</span>
                </a>
            </div>
            <div>
                <a href="javascript:void(0);">
                    <p>PROJECT</p>
                    <span onclick="location.href='<?php echo $root?>sub/project.php'">CURRENT</span>
                    <span onclick="location.href='<?php echo $root?>sub/project.php'">WEB_WORK</span>
                    <span onclick="location.href='<?php echo $root?>sub/project.php'">DESIGN_WORK</span>
                    <span onclick="location.href='<?php echo $root?>sub/project.php'">LIVE_WORK</span>
                </a>
            </div>
            <div>
                <a href="javascript:void(0);">
                    <p>CLIENTS</p>
                    <span onclick="location.href='<?php echo $root?>sub/client.php'">TOTAL</span>
                </a>
            </div>
        </div>
    </div>
</section>