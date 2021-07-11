<?php 
$list = $this->myrabidas_list;
$count = $this->myrabidas_count;
?>

<div class="ui modal small delete_rabida_modal">
    <div class="header">
        <div><i class="icon big trash"></i></div>
        <h3>
            تأكيد الحذف
        </h3>
    </div>
    <div class="content">
        <p>هل تريد حقا حذف ربيدة <span class="rbida_item_name"></span>؟</p>
    </div>
    <div class="actions">
        <div class="ui approve button inverted icon labeled red"><i class="icon check"></i> تأكيد الحذف</div>
        <div class="ui cancel button inverted icon labeled green"><i class="icon remove"></i> إلغاء الأمر</div>
    </div>
</div>
<div class="ui modal small edit_rabida_modal">
    <div class="header">
        <div><i class="icon big edit"></i></div>
        <h3>
            تعديل ربيدة <span class="rbida_item_name_edit"></span>
        </h3>
    </div>
    <div class="content">
        <form method="post">
            <div class="edit_rabida_modal_input">

                <div class="ui grid">

                    <div class="ten wide column">
                        <div class="rbd_inp_class">
                            <label class="block" for="edit_rabida_title">عنوان الربيدة <span class="required">(*)</span></label>
                            <input type="text" id="edit_rabida_title" value="" name="edit_rabida_title" placeholder="عنوان الربيدة" class="ethr_input ethr_input_rdb">
                            <p id="rbd_title_chk" class="rbd_inp_username_checking"></p>
                        </div>

                        <div class="note_inps">
                            <strong>ملاحظات: </strong>
                            <ul>
                                <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                                <li>أن يكون عنوانا ملائما، كعناوين الكتب مثل، <strong>وحي القلم</strong></li>
                                <li>أن لا يقلّ العنوان عن ثلاثة أحرف وأن لا يتجاوز 50 حرفا</li>
                                <li>لا يمكن استعمال الأرقام لوحدها</li>
                            </ul>
                        </div>
                    </div>
                    <div class="five wide column">

                        <div class="rbd_inp_class">
                            <label class="block">نوع الربيدة <span class="required">(*)</span></label>
                            <input class="bd_inp_type_rbd" type="radio" name="rbd_inp_type_rbd" id="rbd_inp_type_rbd_1" value="1"> <label for="rbd_inp_type_rbd_1">عامة</label> |
                            <input class="bd_inp_type_rbd" type="radio" name="rbd_inp_type_rbd" id="rbd_inp_type_rbd_0" value="2"> <label for="rbd_inp_type_rbd_0">خاصة</label>
                        </div>
                                                            <div class="rbd_inp_class">
                                        <div class="rbd_content_main_select"></div>
                                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui approve button icon labeled primary"><i class="icon save"></i> حفظ</div>
        <div class="ui cancel button icon labeled"><i class="icon remove"></i> إلغاء الأمر</div>
    </div>
</div>


<div class="ethr_container_rbds_add_rabida">
    <div class="ui segments">
        <div class="ui segment">
            <div class="ui grid">
                <div class="ten wide column">
                    <div class="ethr_container_rbds_add_rabida_inner">
                        <div class="ethr_container_header">
                            <h3 class="ethr_container_heading"><i class="icon th"></i> ربائدك
                                <?= '<span class=""><strong>5</strong>/' . $count . '</span>'; ?></h3>
                        </div>
                        <?php foreach ($list as $list_item){ ?>
                        <div class="mygroup_list" id="mygroup_list_<?= $list_item['rabida_id']; ?>">
                            <div class="mygroup_list_inner">
                                <div class="mygroup_item">
                                    <div class="mygroup_item_head">
                                        <h4 class="mygroup_item_heading">
                                            <?= $list_item['rabida_title']; ?>
                                        </h4>
                                        <p class="mygroup_item_meta">
                                                
                        <?php 
                    if ($list_item['rabida_type'] == "1"){
                        echo "<span id='cat'>عامة</span>" ;
                    }
                    if ($list_item['rabida_type'] == "2"){
                        
                        echo "<span id='cat'>خاصة</span>" ;
                        echo "<span class='ui label green small'><strong>تابعة لقسم: </strong>" . $list_item['rabida_main_cat'] . " (" . $list_item['rabida_cat'] . ")</span>"; } ?>
                                        
                                            <span><i class="icon user outline"></i> 1253</span>
                                            <span><i class="icon clone outline"></i> 1253</span>
                                        </p>

                                        <p class="mygroup_item_tools">
                                            <span class="mygroup_item_delete" uid="<?= $list_item['rabida_id']; ?>">
                                                    <i class="icon remove circular red inverted"></i>
                                                </span>
                                            <span class="mygroup_item_edit" uid="<?= $list_item['rabida_id']; ?>">
                                                    <i class="icon edit circular inverted"></i>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
                <div class="six wide column">
                    <div class="rbd_terms">
                        <h3 class="rbd_terms_heading"><i class="icon bars"></i> شروط إضافة ربيدة </h3>
                        <div class="rbd_terms_list">
                            <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                            <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                            <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                            <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                            <li>عنوان الربيدة يجب أن يكون باللغة العربية</li>
                        </div>
                        <div class="ui divider"></div>
                        <span class="add_rabida_btn">
                            <?php if($count < 5){ ?>
                            
                            <a href="<?= URL_r . 'mygroup/addrabida' ?>" class="ui button labeled icon">
                                <i class="icon add"></i>
                                إضافة ربيدة
                            </a>
                            

                            <?php }else { ?>
                            
                            <a class="ui label red">
                                    <i class="icon folder"></i>
                                    لا يمكنك إضافة ربيدة أخرى
                                </a>
                                
                            <?php } ?>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>