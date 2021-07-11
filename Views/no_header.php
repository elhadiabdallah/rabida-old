<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <?= isset($this->title) ? $this->title : 'خطأ 404';?> |  حسابات إثراء ويب 
    </title>
    <link rel="icon" href="<?php echo URL; ?>Public/img/favicon.png">
    <link rel="stylesheet" href="<?php echo URL; ?>Public/css/ethraa_main.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/semantic.min.css">

    <link rel="stylesheet" href="<?php echo URL; ?>Public/css/icon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Public/css/accounts_style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Public/css/style.css">
    
    


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
