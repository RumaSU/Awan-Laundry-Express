$(document).ready(function () {
    // Register
    const WarnElmn = '<div style="color=\'red\'" class="text-red">Password tidak sesuai</div>';
    const $INP_FIELD = $('.inpField');
    const $INP_CONFPASS = $('#password_confirmation');
    const $WARN_ERR =$('.warnErr');
    
    $INP_CONFPASS.on('input', (e) => {
        $WARN_ERR.empty();
        let PASS_VAL      = $('#password').val();
        let CONF_PASS_VAL = $(e.target).val();
        
        if (PASS_VAL !== CONF_PASS_VAL) {
            $WARN_ERR.append(WarnElmn);
        } else {
            $WARN_ERR.empty();
        }
    });
});