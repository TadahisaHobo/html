<style type="text/css">
    form#frm_a {
        margin:10px 0; padding:0;
    }
    form#frm_a fieldset {
        margin:0; padding:10px;
        border:1px solid #6bba70;
        background-color:inherit;
        color:#fff;
        font-size:12px;
    }
    form#frm_a legend {
        margin:0 0 10px 0; padding:2px 5px;
        color:#6bba70;
        font-weight:bold;
    }
    form#frm_a p {
        margin:0; padding:0 0 10px 0;
        color:#666;
    }
    form#frm_a input.txt {
        border:1px solid #cdeb8b;;
        font-weight:bold;
        padding:1px 3px;
    }
    form#frm_a input.submit {
        border:3px double #cdeb8b;
        background-color:#fff;
        color:#6bba70;
        font-weight:bold;
    }
</style>

<form id="frm_a" action="#" onsubmit="alert('サンプルのため送信しません'); return false;">
    <fieldset>
        <legend>会員登録</legend>
        <p>
            <label for="lastname">氏: <input type="text" class="txt" id="lastname" name="lastname" size="10" /></label>
            <label for="firstname">名: <input type="text" class="txt" id="firstname" name="firstname" size="10" /></label>
        </p>
        <p>
            <label for="email">E-mail: <input type="text" class="txt" id="email" name="email" size="40" /></label>
        </p>
        <p>
            生年月日: 西暦 
            <label for="birth_y"><input type="text" class="txt" id="birth_y" name="birth_y" size="4" maxlength="4" />年</label>
            <label for="birth_m"><input type="text" class="txt" id="birth_m" name="birth_m" size="2" maxlength="2" />月</label>
            <label for="birth_d"><input type="text" class="txt" id="birth_d" name="birth_d" size="2" maxlength="2" />日</label>
        </p>
        <p>
            性別: 
            <label for="sex1"><input type="radio" id="sex1" name="sex" value="male" />男</label>
            <label for="sex2"><input type="radio" id="sex2" name="sex" value="female" />女</label>
        </p>
        <input type="submit" class="submit" value="登録する" />
    </fieldset>
</form>


