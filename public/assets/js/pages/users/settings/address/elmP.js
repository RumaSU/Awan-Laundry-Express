$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let dataAddressId;

$('.cMainSetting').on('click', '.btnEditUserAddress', (e) => {
    $('.popupContent').addClass('hidden');
    $('.popupContent').find('input').val('');
    const elmnItmAdds = $(e.target.closest('.itmAddressUser'));
    
    dataAddressId = elmnItmAdds.attr('data-addressId');
    dataAddressSelected = elmnItmAdds.attr('data-addressSelected');
    dataInput = {};
    
    let itemEdit = elmnItmAdds.find('[class^="dataAddsDetail"]');
    let inpPopup = $('.popupContent').find('input');
    inpPopup.filter('[type="radio"]').prop('checked', false);
    inpPopup.filter('[type="checkbox"]').prop('checked', false);
    inpPopup.each((idx, elmn) => {
        const inpElmn = $(elmn);
        const dataItem = $(itemEdit[idx]).attr('data-detailAddress');
        
        if (inpElmn.attr('type') === 'radio') {
            return false;
        }
        if (dataItem && dataItem !== '') {
            inpElmn.val(dataItem);
        }
    });
    
    if (dataAddressSelected == 1) {
        let addsSelect = inpPopup.filter('[type="checkbox"]');
        addsSelect.prop('checked', true);
    }
    
    $('.popupContent').removeClass('hidden');
});


$('.cMainSetting').on('click', '.btnAddUserAddress', (e) => {
    $('.popupContent').addClass('hidden');
    $('.popupContent').find('input').val('');
    $('.popupContent').removeClass('hidden');
});

$('.cMainSetting').on('click', '.sbmAddressDataUser', (e) => {
    const $ELEMN_THS = $(e.target.closest('.formField'));
    const $ELEMN_CNTN = $ELEMN_THS.closest('.cPopupContent');
    const $ELEMN_PAR = $ELEMN_CNTN.closest('.popupContent');
    const URL_REFRESH = $ELEMN_PAR.attr('data-URLSettingFrom');
    
    $ELEMN_CNTN.addClass('animate-pulse');
    const URL = $ELEMN_THS.attr('data-formUrl');
    
    let dataAjax = {};
    if (dataAddressId) {
        dataAjax = Object.assign({}, dataAjax, { idDataAddress: dataAddressId });
    }
    
    let $INP_ELMN = $ELEMN_THS.find('input');
    $INP_ELMN.each(function (index, element) {
        let NAME = $(element).attr('name');
        if ($(element).attr('type') === 'checkbox') {
            if ($(element).is(':checked')) {
                dataAjax = Object.assign({}, dataAjax, { [NAME]: true });
            }
        } else {
            let VAL = $(element).val();
            dataAjax = Object.assign({}, dataAjax, { [NAME]: VAL });
        }
    });
    
    $.ajax({
        type: "POST",
        url: URL,
        data: dataAjax,
        beforeSend: function() {
            $ELEMN_THS.find('input').removeClass('border-red-600 text-red-700');
            $ELEMN_THS.find('.successMessages').html('');
            $ELEMN_THS.find('.errorMessages').html('');
            $('.cMainSetting').addClass('animate-pulse');
        },
        success: function (response) {
            $ELEMN_THS.find('.successMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
            $.get(URL_REFRESH, function(html) {
                $('.cMainSetting').html(html);
                setMaxDateBirth();
                $('.cMainSetting').removeClass('animate-pulse');
            });
        },
        complete: function() {
            $ELEMN_CNTN.removeClass('animate-pulse');
        },
        error: function(xhr) {
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
            $ELEMN_CNTN.removeClass('animate-pulse');
        }
    });
});

$('.cMainSetting').on('click', '.closePopupContent', (e) => {
    const $THS_POPUP = $(e.target.closest('.popupContent'));
    $THS_POPUP.addClass('hidden');
    $('.popupContent').find('input').val('');
});