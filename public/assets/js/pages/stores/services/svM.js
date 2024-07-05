$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.btn-sveServcMeters').click((e) => {
    e.preventDefault();
    const $ELMN_BUTTON = $(e.target.closest('button'));
    const $ELEMN_THS = $(e.target.closest('.formFieldSveServc'));
    const PAR_ELMN = $ELEMN_THS.closest('.ctr-cServcItm');
    const URL = $ELEMN_THS.attr('data-saveServcUrl');
    
    const VAL_PRC = $ELEMN_THS.find('#inpServiceStorePriceMeters').val();
    const VAL_ACTV = $ELEMN_THS.find('#actvThsMetersServc').is(':checked') ? 1 : 0;
    
    let dataAjax = {
        'inpServiceStorePriceMeters': VAL_PRC,
        'actvThsMetersServc': VAL_ACTV,
    }
    
    console.log(URL);
    console.log(dataAjax);
    let responseData;
    
    $.ajax({
        type: "POST",
        url: URL,
        data: dataAjax,
        beforeSend: function() {
            $ELEMN_THS.find('.successMessages, .errorMessages').html('');
            PAR_ELMN.addClass('animate-pulse');
        },
        success: function (response) {
            responseData = response;
            $ELEMN_THS.find('.successMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
        },
        complete: function() {
            PAR_ELMN.removeClass('animate-pulse');
            $ELMN_BUTTON.hide();
            if (responseData.activeServc === true) {
                PAR_ELMN.find('.cStatusServc').addClass('bg-[#FF3377] text-white font-bold');
                PAR_ELMN.find('.cStatusServc').removeClass('bg-[#D9D9D9] text-gray-800');
                PAR_ELMN.find('.cStatusServc strong').html('Aktif');
                console.log('Aktif');
            } else {
                PAR_ELMN.find('.cStatusServc').addClass('bg-[#D9D9D9] text-gray-800');
                PAR_ELMN.find('.cStatusServc').removeClass('bg-[#FF3377] text-white font-bold');
                PAR_ELMN.find('.cStatusServc strong').html('Nonaktif');
                console.log('Nonaktif');
            }
            setTimeout(() => {
                $ELEMN_THS.find('.successMessages').html('');
                $ELMN_BUTTON.show();
            }, 650);
        },
        error: function(xhr) {
            let response = xhr.responseJSON;
            if (response.status === 'error') {
                if (response.errors) {
                    for (let field in response.errors) {
                        response.errors[field].forEach(function(error) {
                            $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + error + ' </div></div>');
                        });
                    }
                } else if (response.message) {
                    $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
                }
            }
        }
    });
});