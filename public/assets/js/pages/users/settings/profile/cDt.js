function getCsrfToken() {
    return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('.cMainSetting').on('click', '.sbmChangeDataUser', (e) => {
    const $ELEMN_THS = $(e.target.closest('.formField'));
    const $ELEMN_CNTN = $ELEMN_THS.closest('.cPopupContent');
    const $ELEMN_PAR = $ELEMN_CNTN.closest('.popupContent');
    const PAR_SETT = $ELEMN_PAR.closest('.ctrSettings');
    const URL_REFRESH = PAR_SETT.attr('data-URLSettingFrom');
    
    $ELEMN_CNTN.addClass('animate-pulse');
    const URL = $ELEMN_THS.attr('data-formUrl');
    
    let $IS_CHECKBOX = $ELEMN_THS.find('input[type="radio"]');
    
    let dataAjax = {};
    
    if ($IS_CHECKBOX.length > 0) {
        let $CHECKED_INP = $IS_CHECKBOX.filter(':checked');
        let NMERAD = $($CHECKED_INP[$CHECKED_INP.length-1]).attr('name');
        let VALRAD = $($CHECKED_INP[$CHECKED_INP.length-1]).val();
        
        dataAjax = Object.assign({}, dataAjax, { [NMERAD]: VALRAD });
    } else {
        let $INP_ELMN = $ELEMN_THS.find('input');
        $INP_ELMN.each(function (index, element) {
            let NAME = $(element).attr('name');
            let VAL = $(element).val();
            dataAjax = Object.assign({}, dataAjax, { [NAME]: VAL });
        });
    }
    
    // console.log(dataAjax);
    $.ajax({
        type: "POST",
        url: URL,
        data: dataAjax,
        beforeSend: function() {
            $ELEMN_THS.find('input').removeClass('border-red-600 text-red-700');
            $ELEMN_THS.find('.successMessages').html('');
            $ELEMN_THS.find('.errorMessages').html('');
        },
        success: function (response) {
            $ELEMN_THS.find('.successMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
            $('.cMainSetting').addClass('animate-pulse');
            $.get(URL_REFRESH, function(html) {
                $('.cMainSetting').html(html);
                setMaxDateBirth();
            });
        },
        complete: function() {
            $ELEMN_CNTN.removeClass('animate-pulse');
            $('.cMainSetting').removeClass('animate-pulse');
        },
        error: function(xhr) {
            $('.cMainSetting').removeClass('animate-pulse');
            $ELEMN_THS.find('input').addClass('border-red-600 text-red-700');
            let response = xhr.responseJSON;
            if (response.status === 'error') {
                // Reset pesan error
                
                if (response.errors) {
                    // Tampilkan pesan error validasi
                    for (let field in response.errors) {
                        response.errors[field].forEach(function(error) {
                            // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + error + '</p>');
                            $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + error + ' </div></div>');
                        });
                    }
                } else if (response.message) {
                    // Tampilkan pesan error umum
                    // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + response.message + '</p>');
                    $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
                }
            }
        }
    });
});

function setMaxDateBirth() {
    const $INP_DATE = $('.popupContent input[type="date"]'); 
    
    const TODAY = new Date().toISOString().split("T")[0];
    $INP_DATE.attr('max', TODAY);
}