<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo URL_r;?>Public/img/favicon.png">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/reset.css">

    <link rel="stylesheet" href="<?php echo URL;?>Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/semantic.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/accounts_style.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/ethraa_main.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/style.css">
    <link rel="stylesheet" href="<?php echo URL_r;?>Public/css/slideWiz.css">
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/icon.css">
    <!-- CSS Print Style -->
    <link rel="stylesheet" href="<?php echo URL_r;?>Public/css/style_article_print.css">
    <!-- ---------------------------------------------------------------- -->

    <link rel="stylesheet" href="<?php echo URL_r;?>Public/css/style.css">
    <script src="<?php echo URL;?>Public/js/jquery.js"></script>
    <script src="<?php echo URL;?>Public/js/semantic.min.js"></script>
    <script src="<?php echo URL_r;?>Public/js/app.js"></script>
    <script src="<?php echo URL_r;?>Public/js/tinymce/tinymce.min.js"></script>
    <script src="<?php echo URL_r;?>Public/js/content_array.js"></script>

    <?php
	if (isset($this->js))
	{
		foreach ($this->js as $js)
		{
			echo '<script type="text/javascript" src="'.URL_r.'Views/'.$js.'"></script>';
		}
	}
	?>
        <title>
            <?= isset($this->title) ? $this->title : 'خطأ 404';?> | الربيدة </title>
</head>

<body class="ethr_grey">

    <div class="ethr_grid">

        <div class="ethr_three_wide">
            <div class="ethr_rbd_logo">
                <a href=""><img src="<?php echo URL_r;?>Public/img/rabida_logo.png"></a>
            </div>

            <!-- في حالة تسجيل الدخول -->
            <?php
            if (isset($this->log_status) == 1){
                foreach ($this->userdetails as $userdetails ){}
            ?>
                <div class="ethr_username_info">
                    <div class="ethr_username_info_inner">
                        <div class="ui items">
                            <div class="item">
                                <div class="ui image tiny avatar">
                                    <div class="profl_avatar_circle blue">
                                        ع
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ethr_header">
                                        <?= $userdetails['ethr_accnt_lname'] .' ' . $userdetails['ethr_accnt_fname'];?>
                                    </h3>

                                    <p class="metatext"><strong style="color:green" id="rbd_get_userid" uid="<?=$userdetails['ethr_accnt_id'];?>"><i class="icon circle"></i> </strong>
                                        <?= $userdetails['ethr_accnt_username'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($this->service_status == 1 ){
         
                
                ?>
                <div class="ethr_list_user">
                    <div class="ui secondary fluid vertical menu">
                        <a class="item <?php AddClass::actived('index'); ?>" href="<?= URL_r.'index'; ?>"><i class="icon home"></i>الرئيسية</a>
                        <a href="<?php echo URL_r . 'mygroup'; ?>" class="header item"> ربائدي: <?php echo "(5/<span id='rbd_count'>" . $this->myrabidas_count . "</span>)"; ?><i class="icon folder"></i></a>
                        <?php
                                    
                    if(empty($this->myrabidas_list)){?>
                            <a class="item subitem subitem_no_rbd"><span>لا تملك أي ربيدة بعد</span> </a>
                            <?php } 
                    foreach ($this->myrabidas_list as $mylist)
                    {
                    ?>
                            <a id="my_rabida_<?=$mylist['rabida_id'];?>" href="<?=URL_r.$mylist['rabida_name'];?>" class="item subitem">
                                <?= $mylist['rabida_title'];?>
                            </a>
                            <?php }?>
                            <span class="add_rabida_btn_sidebar">
                            <?php if($this->myrabidas_count < 5){ ?>
                            
                    <a href="<?php echo URL_r;?>mygroup/addrabida" class="item subitem add_rabida_btn">
                       <i class="add icon"></i> إضافة ربيدة
                    </a>
                    

                            <?php } ?>
                            </span>
                            <div class="header item"> الربائد التي تتابعها:<i class="icon folder"></i></div>
                            <a href="#" class="item subitem">
                                <div class="ui orange tiny label">1</div> ربيدة الكيمياء العضوية</a>
                            <a href="#" class="item subitem">ربيدة الكيمياء العضوية <div class="ui orange tiny label">+20</div> </a>
                            <a href="#" class="item subitem">ربيدة الكيمياء العضوية</a>
                            <a href="#" class="item subitem">ربيدة الكيمياء العضوية</a>
                            <a href="#" class="item subitem">ربيدة الكيمياء العضوية</a>
                    </div>
                </div>
                <?php }else { ?>
                <div class="ethr_rbd_join">
                    <h2 class="ethr_rbd_join_heading">إنضم مجانا</h2>
                    <p class="ethr_rbd_join_txt">
                        أنت مسجل في <a href="">إثراء ويب</a> ولكنك غير منضم إلى مجتمع الربيدة . إنضم مجانا لتكتب وتشارك ماتكتبه مع متابعيك
                    </p>
                    <p class="join_btn"><button class="fluid ui orange button" id="btn_join" uid="<?=$userdetails['ethr_accnt_id'];?>">إنضم الآن</button></p>
                </div>
                <?php } ?>
                <?php }else{?>
                <div class="ethr_username_info">
                    <div class="ethr_username_info_inner">
                        <div class="ui items">
                            <div class="item">
                                <div class="content login_rabida">
                                    <form class="form_add_action" id="login" onsubmit="return false;">
                                        <div class="form_add_action_div ethr_input">
                                            <div class="form_add_inputs row">
                                                <label for="ethr_email"> البريد الالكتروني أو اسم المستخدم :</label>
                                                <input class="ethr_input ethr_input_rdb" type="email" name="ethr_email" id="ethr_email" placeholder="البريد الإلكتروني أو اسم المستخدم">
                                                <label for="ethr_pass">كلمة المرور:</label>
                                                <input class="ethr_input ethr_input_rdb" type="password" name="ethr_pass" id="ethr_pass" placeholder="كلمة المرور">

                                                <div class="row">
                                                    <div class="check_box">
                                                        <input class="ethr_input" type="checkbox" id="ethr_rmmbr_me" name="ethr_rmmbr_me">

                                                        <label for="ethr_rmmbr_me">تذكرني مرّة أخرى</label>
                                                    </div>

                                                    <div class="ui divider"></div>
                                                    <p class="form_add_btn">
                                                        <button id="btn_login" class="ui button orange mini">تسجيل الدخول</button> أو قم
                                                        <a href="<?php echo URL .'create';?>">بإنشاء حساب</a>
                                                    </p>
                                                    <p class="form_forget_txt">
                                                        <a href="<?php echo URL .'login/forgetmypassword';?>">نسيت كلمة المرور؟</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="ui divider"></div>
                <div class="ui grid">
                    <div class="ui copyright_ethr">
                        <div class="ui divided horizontal link list" dir="ltr">
                            <a class="item" href="">شروط الاستخدام</a>
                            <a class="item" href="">حول الموقع</a>
                            <a class="item" href="">الرئيسية</a>
                        </div>
                        <p class="copytext">
                            &copy; جميع الحقوق محفوظة لدي إثراء ويب
                        </p>
                    </div>
                </div>
        </div>
        <div class="ethr_thirteen_wide">
            <ul class="ui stackable menu">
                <div class="right menu">
                    <li class="left_list rdb_categories_menu_btn">
                        <a href="#" class="ethr_prompt ui dropdown item"> 
                         <i class="tags icon"></i>  التصنيفات  <i class="icon caret down"></i>
                    </a>
                        <div class="ui popup rdb_categories_menu">
                            <div class="rdb_categories_beeper"></div>
                            <div class="rdb_categories_head">
                                <h5 class="rdb_categories_heading"><i class="icon tags"></i> التصنيفات
                                    <div class="rbd_cate_option">
                                        <div class="ui dropdown">
                                            <input type="hidden" name="selection">
                                            <span class="default text" data-value="عام">عام</span>
                                            <i class="setting icon"></i> <i class="dropdown icon"></i>
                                            <div class="menu">
                                                <div class="item"> عام</div>
                                                <div class="item"> المتابعين فقط</div>
                                                <div class="item"> أنا فقط</div>
                                                <div class="item"> تخصيص...</div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>

                            </div>
                            <div class="rdb_categories_body">
                                <div class="rdb_categories_body_inner">
                                    <div class="ui three column grid">
                                        <div class="column">
                                            <div class="rdb_cat_list_head">
                                                <h4 class="rdb_cat_list_heading">كتابات فنية</h4>
                                            </div>
                                            <div class="rdb_cat_list_body">
                                                <ul class="rdb_cat_list_body_ul">
                                                    <li><a href="#">خواطر</a></li>
                                                    <li><a href="#">شعر</a></li>
                                                    <li><a href="#">الشعر العمودي والحر</a></li>
                                                    <li><a href="#">مسرح</a></li>
                                                    <li><a href="#">قصص</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="rdb_cat_list_head">
                                                <h4 class="rdb_cat_list_heading">كتابات فنية</h4>
                                            </div>
                                            <div class="rdb_cat_list_body">
                                                <ul class="rdb_cat_list_body_ul">
                                                    <li><a href="#">خواطر</a></li>
                                                    <li><a href="#">شعر</a></li>
                                                    <li><a href="#">الشعر العمودي والحر</a></li>
                                                    <li><a href="#">مسرح</a></li>
                                                    <li><a href="#">قصص</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="rdb_cat_list_head">
                                                <h4 class="rdb_cat_list_heading">كتابات فنية</h4>
                                            </div>
                                            <div class="rdb_cat_list_body">
                                                <ul class="rdb_cat_list_body_ul">
                                                    <li><a href="#">خواطر</a></li>
                                                    <li><a href="#">شعر</a></li>
                                                    <li><a href="#">الشعر العمودي والحر</a></li>
                                                    <li><a href="#">مسرح</a></li>
                                                    <li><a href="#">قصص</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rdb_categories_foot">
                                <a class="rdb_categories_foot_link" href="">رؤية المزيد من التصنيفات...</a>
                            </div>
                        </div>

                    </li>
                    <li class="ethr_search_div">
                        <div class="ui fluid category search">
                            <div class="ui icon input">
                                <i class="search icon"></i>
                                <input style="text-align: right;" class="prompt ethr_prompt" placeholder="البحث عن:...مستخدمين، ربائد، مقالات" type="text">
                            </div>
                            <div class="results"></div>
                        </div>
                        <div class="ui popup rdb_search_result">
                            <div class="rdb_search_result_beeper"></div>
                            <div class="rdb_search_result_head">
                                <h3 class="rdb_search_result_heading"><i class="icon bell"></i> لديك 5 إشعارات جديدة </h3>
                            </div>
                            <div class="rdb_search_result_body">
                                <div class="rdb_search_result_body_inner">
                                    <ul class="rdb_search_result_body_list">
                                        <li class="header">
                                            <a>
                                           <i class="icon folder"></i> الربائد
                                        </a>
                                        </li>
                                        <li class="rbd_rsult_r">
                                            <a href="#">
                                                <h4 class="rbd_rsult_header">ربيدة الحاج عمر بن الموفق</h4>
                                                <p class="meta"><span class="txt_meta"><i class="icon user"></i> عبد الحميد بومقواس </span> | <span class="txt_meta"><i class="icon tag"></i> علوم الأحياء </span></p>
                                            </a>
                                        </li>
                                        <li class="rbd_rsult_r">
                                            <a href="#">
                                                <h4 class="rbd_rsult_header">ربيدة الحاج عمر بن الموفق</h4>
                                                <p class="meta"><span class="txt_meta"><i class="icon user"></i> عبد الحميد بومقواس </span> | <span class="txt_meta"><i class="icon tag"></i> علوم الأحياء </span></p>
                                            </a>
                                        </li>
                                        <li class="rbd_rsult_r">
                                            <a href="#">
                                                <h4 class="rbd_rsult_header">ربيدة الحاج عمر بن الموفق</h4>
                                                <p class="meta"><span class="txt_meta"><i class="icon user"></i> عبد الحميد بومقواس </span> | <span class="txt_meta"><i class="icon tag"></i> علوم الأحياء </span></p>
                                            </a>
                                        </li>
                                        <li class="header">
                                            <a>
                                           <i class="icon folder"></i> الربائد
                                        </a>
                                        </li>
                                        <li class="rbd_rsult_r">
                                            <a href="#">
                                                <h4 class="rbd_rsult_header">ربيدة الحاج عمر بن الموفق</h4>
                                                <p class="meta"><span class="txt_meta"><i class="icon user"></i> عبد الحميد بومقواس </span> | <span class="txt_meta"><i class="icon tag"></i> علوم الأحياء </span></p>
                                            </a>
                                        </li>
                                        <li class="rbd_rsult_r">
                                            <a href="#">
                                                <h4 class="rbd_rsult_header">ربيدة الحاج عمر بن الموفق</h4>
                                                <p class="meta"><span class="txt_meta"><i class="icon user"></i> عبد الحميد بومقواس </span> | <span class="txt_meta"><i class="icon tag"></i> علوم الأحياء </span></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rdb_search_result_footer">
                                <a href="#">المزيد من النتائج...</a>
                            </div>
                        </div>
                    </li>
                </div>
                <?php if (isset($this->log_status) == 1){ ?>
                <div class="left menu">
                    <li class="left_list noty_bell noty_bell_alert">
                        <a id="left_list_noty_bell" class="ethr_prompt item">
                           <i class="icon bell outline"></i>
                           <i class="icon circle ui ethr_color unread"></i>
                       </a>
                        <div class="ui popup rdb_notification">
                            <div class="rdb_notification_beeper"></div>
                            <div class="rdb_notification_head">
                                <h5 class="rdb_notification_heading"><i class="icon bell"></i> لديك 5 إشعارات جديدة </h5>
                            </div>
                            <div class="rdb_notification_body">
                                <div class="rdb_notification_body_inner">
                                    <ul class="rdb_notification_body_list">
                                        <li>
                                            <a href="#">
                                           <i class="icon comment"></i><span class="username_noty">عبد الحميد</span> علق على مقالك: <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <i class="icon comment"></i><span class="username_noty">عبد الحميد</span> علق على مقالك: <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <i class="icon comment"></i><span class="username_noty">عبد الحميد</span> علق على مقالك: <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <i class="icon comment"></i><span class="username_noty">عبد الحميد</span> علق على مقالك: <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <i class="icon comment"></i><span class="username_noty">عبد الحميد</span> علق على مقالك: <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rdb_notification_footer">
                                <a href="#">المزيد من الإشعارات...</a>
                            </div>
                        </div>
                    </li>
                    <li class="left_list history_list_btn" id="history_list_btn_show">
                        <a href="#" class="ethr_prompt item">
                   <i class="icon history"></i>
               </a>

                        <div class="ui popup rdb_history">
                            <div class="rdb_history_beeper"></div>
                            <div class="rdb_history_head">
                                <h5 class="rdb_history_heading"><i class="icon history"></i> المقالات المحفوظة </h5>
                            </div>
                            <div class="rdb_history_body">
                                <div class="rdb_history_body_inner">
                                    <ul class="rdb_history_body_list">
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                           <span class="username_noty">عبد الحميد:</span> <span class="article_noty">عنوان المقال التراث العربي الأصيل</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rdb_history_footer">
                                <a href="#">مشاهدة كل المقالات...</a>
                            </div>
                        </div>

                    </li>
                    <li class="left_list" id="ethr_add_article_btn">
                        <a href="<?= URL. 'logout'; ?>" class="ethr_prompt item">
                   <i class="icon power off"></i>
                       </a>
                    </li>

                </div>
                <?php } ?>
            </ul>
            <div class="rbd_container_inner">
