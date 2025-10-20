<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}
?>
<header>
    <div class="header_top"></div>
    <div class="inner">
        <a href="<?php echo $root ?>index.php" class="logo">
            <?php if($root==""){ ?>
            <img src="<?php echo $root ?>img/logo.png">
            <?php } else { ?>
            <img src="<?php echo $root ?>img/logo-sub.png">
            <?php } ?>
        </a>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root ?>sub/company.php">About</a>
                <ul class="depth">
                    <li><a href="<?php echo $root ?>sub/company.php">Company</a></li>
                    <li><a href="<?php echo $root ?>sub/business.php">Business</a></li>
                    <li><a href="<?php echo $root ?>sub/organization.php">Organization</a></li>
                    <li><a href="<?php echo $root ?>sub/team.php">Team</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root ?>sub/portfolio.php">Portfolio</a>
            </li>
            <li>
                <a href="<?php echo $root ?>sub/announcement.php">Notice</a>
                <ul class="depth">
                    <li><a href="<?php echo $root ?>sub/announcement.php">Announcement</a></li>
                    <li><a href="<?php echo $root ?>sub/ir.php">IR</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root ?>sub/contact.php">Contact</a>
            </li>
        </ul>
        <div class="ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<div class="aside_bg"></div>
<aside>
    <div class="top">
        <a href="<?php echo $root ?>index.php"><img src="<?php echo $root ?>img/logo-w.png"></a>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">About</a>
            <ul class="depth">
                <li><a href="<?php echo $root ?>sub/company.php">Company</a></li>
                <li><a href="<?php echo $root ?>sub/business.php">Business</a></li>
                <li><a href="<?php echo $root ?>sub/organization.php">Organization</a></li>
                <li><a href="<?php echo $root ?>sub/team.php">Team</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $root ?>sub/portfolio.php">Portfolio</a>
        </li>
        <li>
            <a href="javascript:void(0);">Notice</a>
            <ul class="depth">
                <li><a href="<?php echo $root ?>sub/announcement.php">Announcement</a></li>
                <li><a href="<?php echo $root ?>sub/ir.php">IR</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $root ?>sub/contact.php">Contact</a>
        </li>
    </ul>
</aside>