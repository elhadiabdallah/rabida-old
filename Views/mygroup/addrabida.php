
   <div class="ethr_container_rbds_add_rabida">
    <form id="create_rbd" class="form_add_action" onsubmit="return false;">
        <div class="ui segments">
            <div class="ui segment">
                <div class="ui grid">
                    <div class="ten wide column">
                        <div class="ethr_container_rbds_add_rabida_inner">
                            <div class="ethr_container_header">
                                <h3 class="ethr_container_heading"><i class="icon circle add"></i> إضافة ربيدة </h3>
                            </div>

                            <div class="ui grid">
                                <div class="eleven wide column">
                                    <div class="rbd_inp_class">
                                        <label class="block" for="rbd_inp_title">عنوان الربيدة <span class="required">(*)</span></label>
                                        <input type="text" id="rbd_inp_title" name="rbd_inp_title" placeholder="عنوان الربيدة" class="ethr_input ethr_input_rdb">
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
                                    <div class="rbd_inp_class">
                                        <label class="block" for="rbd_inp_username">اختر اسم مستخدم لربيدتك <span class="required">(*)</span></label>
                                        <input type="text" id="rbd_inp_username" name="rbd_inp_username" placeholder="اختر اسم مستخدم لربيدتك" class="ethr_input ethr_input_rdb">
                                        <p id="rbd_username_chk" class="rbd_inp_username_checking"></p>
                                    </div>
                                    <p class="note_inps">
                                        <strong>ملاحظة: </strong> اسم المستخدم يجب أن يكون باللغة الإنجليزية وألّا يقل عن ثلاثة أحرف، يمكن المزج بين الحروف واﻷرقام
                                        <br>
                                        <span dir="ltr">
                                        <?=URL_r?><strong><span id="rbd_username_urlusertxt">username</span></strong>
                                        </span>
                                    </p>

                                </div>
                                <div class="five wide column">
                                    <div class="rbd_inp_class">
                                        <label class="block">نوع الربيدة <span class="required">(*)</span></label>
                                        <input class="bd_inp_type_rbd" type="radio" name="rbd_inp_type_rbd" id="rbd_inp_type_rbd_1" value="1" checked> <label for="rbd_inp_type_rbd_1">عامة</label> |
                                        <input class="bd_inp_type_rbd" type="radio" name="rbd_inp_type_rbd" id="rbd_inp_type_rbd_0" value="2"> <label for="rbd_inp_type_rbd_0">خاصة</label>
                                    </div>
                                    <div class="rbd_inp_class">
                                        <div class="rbd_content_main_select"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbd_inp_class">
                                <label class="block" for="rbd_text_descript_nm">وصف الربيدة</label>
                                <textarea class="ethr_input ethr_input_rdb" name="rbd_text_descript_nm" id="rbd_text_descript_nm" placeholder="وصف مختصر للربيدة"></textarea>
                            </div>

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
                            <div class="rbd_inp_class">
                                <input type="checkbox" name="terms_txt" class="terms_txt_inline" id="rbd_accept_terms" value="on">
                                <label for="rbd_accept_terms">أوافق على الشروط</label>
                            </div>
                            <div class="rbd_inp_class">
                                <button class="ui button orange" id="btn_add">إضافة</button>
                            </div>
                            <div class="block" id="status">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>