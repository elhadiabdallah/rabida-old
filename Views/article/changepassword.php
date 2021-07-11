<h4 class="ui attached block header">
    تغيير كلمة المرور</h4>
<div class="ui attached segment ethr_change_pass">
    <table class="ui striped right aligned table ethr_acct_tbl">
        <tbody>
            <tr>
                <td class="right aligned"><strong>كلمة المرور القديمة:</strong></td>
                <td>
                    <input class="ethr_input" type="password" autocomplete="off" name="ethr_old_pass" id="ethr_old_pass" placeholder="كلمة المرور القديمة">
                </td>
                <td><span class="ethr_status red"><i class="icon remove circle"></i></span></td>
            </tr>
            <tr>
                <td class="right aligned"><strong>كلمة المرور الجديدة:</strong></td>
                <td>
                    <input class="ethr_input" type="password" autocomplete="off" name="ethr_new_pass" id="ethr_new_pass" placeholder="كلمة المرور الجديدة">
                </td>
                <td><span class="ethr_status green"><i class="icon check circle"></i></span></td>
            </tr>
            <tr>
                <td class="right aligned"><strong>تأكيد كلمة المرور الجديدة:</strong></td>
                <td>
                    <input class="ethr_input" autocomplete="off" type="password" name="ethr_rnew_pass" id="ethr_rnew_pass" placeholder="تأكيد كلمة المرور الجديدة">
                </td>
                <td><span class="ethr_status green"><i class="icon check circle"></i></span></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button class="ui button small green"><i class="icon save"></i> حفظ </button>
                    <a href="<?= URL .'settings';?>" class="ui button small orange">العودة <i class="icon arrow left"></i> </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
