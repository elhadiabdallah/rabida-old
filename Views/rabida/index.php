<div class="rbd_profile_header">
    <div class="rbd_profile_header_inner">
        <img class="ui image circular" src="<?php echo URL_r;?>Public/img/rabida_profile.png" alt="">
        <h2 class="rbd_profile_heading">
            <?=$this->rbddetails['rabida_title']?>
        </h2>
        <p class="metatext">
            <span>
                <i class="icon user outline"></i><strong> عدد المتابعين</strong>
                12252
            </span> |
            <span>
                <i class="icon book"></i><strong> عدد المقالات</strong>
                12252
            </span> |
            <span>
                <i class="icon tag"></i><strong></strong>
                <?php
                if($this->rbddetails['rabida_type'] == "1"){
                    echo 'عامة';
                }
                if ($this->rbddetails['rabida_type'] == "2"){
                echo 'خاصة: ' . $this->rbddetails['rabida_cat']; 
                }
                ?>
               
            </span>
        </p>
    </div>
</div>

<div id="rbd_profile_nav_id" class="rbd_profile_nav navbar_fixed">
    <!-- navbar_fixed -->
    <ul id="mytabs" class="rbd_profile_nav_ul">
        <li class="active" id="tab_article"><a href="#">المقالات</a></li>
        <li id="tab_about"><a href="#">حول</a></li>
        <?php
        
        $uid = Session::get('logged_id');
        $rbd_owner = $this->rbddetails['owner_id'];
        if($uid == $rbd_owner) { ?>
            <li id="tab_rabidas"><a href="#">مسوداتي</a></li>
            <li id="tab_rabidas"><a href="#">إضافة مقال</a></li>
            <?php } ?>


    </ul>
</div>

<div class="ethr_conainer_rbds_post_profile">
    <!-- ************************************************************************************ -->
    <!-- content of article tab -->
    <!-- ************************************************************************************ -->

    <div id="tab_article_content" class="rbd_articles">

        <div class="ethr_conainer_rbds_post">
            <div class="ui segments">
                <div class="ui segment">
                    <div class="ethr_conainer_rbds_post_item">
                        <div class="ethr_conainer_rbds_post_head">
                            <div class="ethr_conainer_rbds_post_user">
                                <div class="profl_avatar_circle blue">
                                    ع
                                </div>
                                <h5 class="ethr_header">
                                    <a href="#">
                                        <?= $userdetails['ethr_accnt_lname'] .' ' . $userdetails['ethr_accnt_fname'];?>
                                    </a>
                                    &#58;&#58;
                                    <span class="ethr_header_rbd_name"><a href="#"> ربيدة الحاح أحمد بن الأخضر الإبراهيمي </a></span>

                                </h5>

                                <p class="metatext"><i class="icon clock"></i> منذ 3 دقائق
                                </p>
                                <span class="rbd_read_later_btn">
                                    <i class="icon history"></i>
                                </span>
                                <h4 class="ethr_conainer_rbds_post_title"><a href="#">عنوان المقال أو الرواية</a></h4>

                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="ethr_conainer_rbds_post_content">
                            <p class="ethr_conainer_rbds_post_excerpt">
                                الاتصالات التسويقية المتكاملة هو مفهوم بسيط. ويضمن ربط جميع أشكال الرسائل والأطراف ببعضها البعض. في أبسط مستوياتها الأساسية، تعني الاتصالات التسويقية المتكاملة، أو IMC”” Integrated Marketing Communications ، -كما نسميها- دمج جميع الأدوات الترويجية، بحيث تعمل معاً في وئام.يتم تعزيز ذلك عندما يتجاوز الاتصال التسويقي المتكامل مجرد أدوات الاتصالات الأساسية. هناك مستويات أخرى من
                            </p>
                        </div>
                        <div class="ethr_conainer_rbds_post_footer">
                            <span class="ethr_conainer_rbds_post_hearts">
                                <span class="ethr_conainer_rbds_post_heart">
                                    <i class="icon heart outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_comments">
                                <span class="ethr_conainer_rbds_post_comment">
                                    <i class="icon comment outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_tags">
                                <span class="ethr_conainer_rbds_post_tag">
                                    <i class="icon tag outline"></i>
                                </span> قصة قصيرة
                            </span>

                            <span class="ethr_conainer_rbds_post_readmore">
                                <a href="#" class="ethr_conainer_rbds_readmore_circle">
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ************************************************************************************ -->
        <div class="ethr_conainer_rbds_post">
            <div class="ui segments">
                <div class="ui segment">
                    <div class="ethr_conainer_rbds_post_item">
                        <div class="ethr_conainer_rbds_post_head">
                            <div class="ethr_conainer_rbds_post_user">
                                <div class="profl_avatar_circle blue">
                                    ع
                                </div>
                                <h5 class="ethr_header">
                                    <a href="#">
                                        <?= $userdetails['ethr_accnt_lname'] .' ' . $userdetails['ethr_accnt_fname'];?>
                                    </a>
                                    &#58;&#58;
                                    <span class="ethr_header_rbd_name"><a href="#"> ربيدة الحاح أحمد بن الأخضر الإبراهيمي </a></span>

                                </h5>

                                <p class="metatext"><i class="icon clock"></i> منذ 3 دقائق
                                </p>
                                <span class="rbd_read_later_btn">
                                    <i class="icon history"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="ethr_conainer_rbds_post_content">
                            <h4 class="ethr_conainer_rbds_post_title"><a href="#">عنوان المقال أو الرواية</a></h4>
                            <p class="ethr_conainer_rbds_post_excerpt">
                                الاتصالات التسويقية المتكاملة هو مفهوم بسيط. ويضمن ربط جميع أشكال الرسائل والأطراف ببعضها البعض. في أبسط مستوياتها الأساسية، تعني الاتصالات التسويقية المتكاملة، أو IMC”” Integrated Marketing Communications ، -كما نسميها- دمج جميع الأدوات الترويجية، بحيث تعمل معاً في وئام.يتم تعزيز ذلك عندما يتجاوز الاتصال التسويقي المتكامل مجرد أدوات الاتصالات الأساسية. هناك مستويات أخرى من
                            </p>
                        </div>
                        <div class="ui divider"></div>
                        <div class="ethr_conainer_rbds_post_footer">
                            <span class="ethr_conainer_rbds_post_hearts">
                                <span class="ethr_conainer_rbds_post_heart">
                                    <i class="icon heart outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_comments">
                                <span class="ethr_conainer_rbds_post_comment">
                                    <i class="icon comment outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_tags">
                                <span class="ethr_conainer_rbds_post_tag">
                                    <i class="icon tag outline"></i>
                                </span> قصة قصيرة
                            </span>

                            <span class="ethr_conainer_rbds_post_readmore">
                                <a href="#" class="ethr_conainer_rbds_readmore_circle">
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ************************************************************************************ -->
        <div class="ethr_conainer_rbds_post">
            <div class="ui segments">
                <div class="ui segment">
                    <div class="ethr_conainer_rbds_post_item">
                        <div class="ethr_conainer_rbds_post_head">
                            <div class="ethr_conainer_rbds_post_user">
                                <div class="profl_avatar_circle blue">
                                    ع
                                </div>
                                <h5 class="ethr_header">
                                    <a href="#">
                                        <?= $userdetails['ethr_accnt_lname'] .' ' . $userdetails['ethr_accnt_fname'];?>
                                    </a>
                                    &#58;&#58;
                                    <span class="ethr_header_rbd_name"><a href="#"> ربيدة الحاح أحمد بن الأخضر الإبراهيمي </a></span>

                                </h5>

                                <p class="metatext"><i class="icon clock"></i> منذ 3 دقائق
                                </p>
                                <span class="rbd_read_later_btn">
                                    <i class="icon history"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="ethr_conainer_rbds_post_content">
                            <h4 class="ethr_conainer_rbds_post_title"><a href="#">عنوان المقال أو الرواية</a></h4>
                            <p class="ethr_conainer_rbds_post_excerpt">
                                الاتصالات التسويقية المتكاملة هو مفهوم بسيط. ويضمن ربط جميع أشكال الرسائل والأطراف ببعضها البعض. في أبسط مستوياتها الأساسية، تعني الاتصالات التسويقية المتكاملة، أو IMC”” Integrated Marketing Communications ، -كما نسميها- دمج جميع الأدوات الترويجية، بحيث تعمل معاً في وئام.يتم تعزيز ذلك عندما يتجاوز الاتصال التسويقي المتكامل مجرد أدوات الاتصالات الأساسية. هناك مستويات أخرى من
                            </p>
                        </div>
                        <div class="ui divider"></div>
                        <div class="ethr_conainer_rbds_post_footer">
                            <span class="ethr_conainer_rbds_post_hearts">
                                <span class="ethr_conainer_rbds_post_heart">
                                    <i class="icon heart outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_comments">
                                <span class="ethr_conainer_rbds_post_comment">
                                    <i class="icon comment outline"></i>
                                </span> (3 آلاف)
                            </span> |
                            <span class="ethr_conainer_rbds_post_tags">
                                <span class="ethr_conainer_rbds_post_tag">
                                    <i class="icon tag outline"></i>
                                </span> قصة قصيرة
                            </span>

                            <span class="ethr_conainer_rbds_post_readmore">
                                <a href="#" class="ethr_conainer_rbds_readmore_circle">
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                    <i class="icon circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ************************************************************************************ -->
        <div class="ethr_conainer_rbds_posts_btn_reload">
            <button class="ui button">تحميل المزيد</button>
        </div>

    </div>

    <!-- ************************************************************************************ -->
    <!-- content of about tab -->
    <!-- ************************************************************************************ -->
    <div id="tab_about_content" class="rbd_articles">
        <div class="ui segments">
            <div class="ui segment">
                <div class="rbd_rabida_inner">
                    <div class="ethr_container_header">
                        <h3 class="ethr_container_heading">
                            <?=$this->rbddetails['rabida_title'];?>
                        </h3>
                    </div>
                    <p><strong>الوصف </strong>
                        <?php 
                        
                        if ($this->rbddetails['rabida_desc'] == '') {
                            echo 'لايوجد وصف لهذه الربيدة';
                        } else {
                            echo $this->rbddetails['rabida_desc'];
                        }
                        
                        ?>
                    </p>
                    <p><strong>صاحب الربيدة </strong>
                        <?=$this->rbddetails['owner_id'];?>
                    </p>
                    <p><strong>تاريخ إنشاء الربيدة </strong>
                        <?=$this->rbddetails['rabida_date_created'];?>
                    </p>
                    <p><strong>الصنف </strong>
                        <?php 
                    if ($this->rbddetails['rabida_type'] == "1"){
                        echo "عامة";
                    }
                    if ($this->rbddetails['rabida_type'] == "2"){
                        echo "خاصة ";
                        echo "<span class='ui label green'><strong>تابعة لقسم: </strong>" . $this->rbddetails['rabida_main_cat'] . " (" . $this->rbddetails['rabida_cat'] . ")</span>";
                    }
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ************************************************************************************ -->
    <!-- content of about tab -->
    <!-- ************************************************************************************ -->
    <div id="tab_rabidas_content" class="rbd_articles">
        ffffffffffffffffffff
    </div>


</div>
