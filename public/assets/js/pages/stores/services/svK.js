$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.btn-sveServcKilos').click((e) => {
    e.preventDefault();
    const $ELMN_BUTTON = $(e.target.closest('button'));
    const $ELEMN_THS = $(e.target.closest('.formFieldSveServc'));
    const PAR_ELMN = $ELEMN_THS.closest('.ctr-cTrscItm');
    const URL = $ELEMN_THS.attr('data-saveServcUrl');
    const $ELEMN_STATUS = $(PAR_ELMN.find('.ctr-rghtStatus'));
    
    const VAL_PRC = $ELEMN_THS.find('#inpServiceStorePriceKilos').val();
    const VAL_ACTV = $ELEMN_THS.find('#actvThsKilosServc').is(':checked') ? 1 : 0;
    
    let dataAjax = {
        'inpServiceStorePriceKilos': VAL_PRC,
        'actvThsKilosServc': VAL_ACTV,
    }
    
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
            if (responseData.activeServc) {
                $ELEMN_STATUS.find('.cStatusServc').addClass('bg-[#FF3377] text-white font-bold');
                $ELEMN_STATUS.find('.cStatusServc').removeClass('bg-[#D9D9D9] text-gray-800');
                $ELEMN_STATUS.find('.txSt strong').html('Aktif');
                console.log('Layanan Aktif');
            } else {
                $ELEMN_STATUS.find('.cStatusServc').addClass('bg-[#D9D9D9] text-gray-800');
                $ELEMN_STATUS.find('.cStatusServc').removeClass('bg-[#FF3377] text-white font-bold');
                $ELEMN_STATUS.find('.txSt strong').html('Nonaktif');
                console.log('Layanan Nonaktif');
            }
            setTimeout(() => {
                $ELEMN_THS.find('.successMessages').html('');
                $ELMN_BUTTON.show();
            }, 650);
        },
        error: function(xhr) {
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