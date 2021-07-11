<?php 
$data = $this->userdetails;
foreach ($data as $userdetails) {}
?>
<h4 class="ui attached block header">
    تغيير المعلومات الشخصية</h4>
<div class="ui attached segment ">
    <table class="ui striped right aligned table ethr_acct_tbl">
        <tbody>
            <tr>
                <td class="right aligned"><strong> الاسم الأول:</strong></td>
                <td>
                    <input class="ethr_input" type="text" value="<?= $userdetails['ethr_accnt_lname']; ?>" autocomplete="off" name="ethr_lname" id="ethr_lname" placeholder="الاسم الأول">
                </td>
                <td><span class="ethr_status red"><i class="icon remove circle"></i></span></td>
            </tr>
            <tr>
                <td class="right aligned"><strong> اسم العائلة:</strong></td>
                <td>
                    <input class="ethr_input" value="<?= $userdetails['ethr_accnt_fname']; ?>" type="text" autocomplete="off" name="ethr_fname" id="ethr_fname" placeholder=" اسم العائلة">
                </td>
                <td><span class="ethr_status green"><i class="icon check circle"></i></span></td>
            </tr>
            <tr>
                <td class="right aligned"><strong>تاريخ الميلاد :</strong></td>
                <td>
                    <input class="ethr_input" value="<?= $userdetails['ethr_accnt_date_birth']; ?>" autocomplete="off" type="text" name="ethr_date_birth" id="ethr_date_birth" placeholder="تاريخ الميلاد">
                </td>
                <td><span class="ethr_status green"><i class="icon check circle"></i></span></td>
            </tr>
            <tr>
                <td class="right aligned"><strong>البلد :</strong></td>
                <td>
                    <input class="ethr_input" value="<?= $userdetails['ethr_accnt_country']; ?>" autocomplete="off" type="text" name="ethr_country" id="ethr_country" placeholder="البلد">
                </td>
                <td><span class="ethr_status green"><i class="icon check circle"></i></span></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                <button class="ui button small green" id="btn_save"><i class="icon save"></i> حفظ </button>
                <a href="<?= URL .'settings';?>" class="ui button small orange">العودة <i class="icon arrow left"></i> </a>
                
                </td>
            </tr>
        </tbody>
    </table>
</div>
