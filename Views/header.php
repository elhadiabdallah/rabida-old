<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>حسابات إثراء ويب | <?php echo $this->title;?></title>
    
    <link rel="icon" href="<?php echo URL;?>Public/img/favicon.png">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/main_ethr.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/ethraa_main.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/icon.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/accounts_style.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/style.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/flatpickr/dist/themes/material_blue.css">

    <script src="<?php echo URL;?>Public/js/jquery.js"></script>
    <script src="<?php echo URL;?>Public/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL;?>Public/flatpickr/dist/flatpickr.min.js"></script>
    <script src="<?php echo URL;?>Public/flatpickr/dist/l10n/ar.js"></script>
    <script src="<?php echo URL;?>Public/js/nav.js"></script>
<?php
	if (isset($this->js)) 
	{
		foreach ($this->js as $js)
		{
			echo '<script type="text/javascript" src="'.URL.'Views/'.$js.'"></script>';
		}
	}
	?>
</head>

<body>
    <div class="nav_content hl_fixed_top row">
        <button class="clk nav_content_btn"><i class="icon list"></i></button>
        <ul class="horizontal_list horizontal_list_toggle">
            <li class="hl_logo">
                <a href="<?php echo URL;?>"><img src="<?php echo URL;?>Public/img/ethraaweb_logo.png" alt=""></a>
            </li>
            <li class="actived"><a href="<?php echo URL;?>"><i class="icon home"></i></a></li>
            <li class="hl_left"><a href="<?php echo URL . 'logout';?>"><i class="icon power off"></i></a></li>

            <li class="hl_left"><div class="profl_avatar_circle">ص</div></li>
        </ul>
    </div>
 