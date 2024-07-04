$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.btn-sveServcUnits').click((e) => {
    e.preventDefault();
    const $ELMN_BUTTON = $(e.target.closest('button'));
    const $ELMNFORM = $(e.target.closest('.formFieldSveServc'));
    const PAR_ELMN = $ELMNFORM.closest('.ctr-cTrscItm');
    const URL = $ELMNFORM.attr('data-saveServcUrl');
    const $ELEMN_STATUS = $(PAR_ELMN.find('.ctr-rghtStatus'));
    
    console.log(URL);
    
    let dataAjax = [];
    const $ELMN_CTR_INP = $ELMNFORM.find('.itm-detServc');
    $ELMN_CTR_INP.each(function (index, element) {
        const dataUuidUnit = $(element).attr('data-idServcClothes');
        const STATUS_UNIT = $(element).find('input.checkActvThsClthsServc').is(':checked') ? 1 : 0;
        const NAME_UNIT = $(element).find('input.nameUnitThsServc').val();
        const PRICE_UNIT = $(element).find('input.priceInpThsServc').val();
        
        let tempDataAjax = {
            'uuidUnit': dataUuidUnit,
            'statusUnit': STATUS_UNIT,
            'nameUnit': NAME_UNIT,
            'priceUnit': PRICE_UNIT
        }
        
        dataAjax.push(tempDataAjax);
    });
    
    console.log(dataAjax);
    
    let responseData;
    
    $.ajax({
        type: "POST",
        url: URL,
        data: {'listUnitService': dataAjax},
        beforeSend: function() {
            // Tambahkan logika sebelum pengiriman permintaan AJAX
        },
        success: function (response) {
            // Tambahkan logika penanganan respons sukses di sini
        },
        error: function(xhr) {
            // Tambahkan logika penanganan kesalahan di sini
        }
        // beforeSend: function() {
        //     $ELEMN_THS.find('.successMessages, .errorMessages').html('');
        //     PAR_ELMN.addClass('animate-pulse');
        // },
        // success: function (response) {
        //     responseData = response;
        //     $ELEMN_THS.find('.successMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
        // },
        // complete: function() {
        //     PAR_ELMN.removeClass('animate-pulse');
        //     $ELMN_BUTTON.hide();
        //     if (responseData.activeServc) {
        //         $ELEMN_STATUS.find('.cStatusServc').addClass('bg-[#FF3377] text-white font-bold');
        //         $ELEMN_STATUS.find('.cStatusServc').removeClass('bg-[#D9D9D9] text-gray-800');
        //         $ELEMN_STATUS.find('.txSt strong').html('Aktif');
        //         console.log('Layanan Aktif');
        //     } else {
        //         $ELEMN_STATUS.find('.cStatusServc').addClass('bg-[#D9D9D9] text-gray-800');
        //         $ELEMN_STATUS.find('.cStatusServc').removeClass('bg-[#FF3377] text-white font-bold');
        //         $ELEMN_STATUS.find('.txSt strong').html('Nonaktif');
        //         console.log('Layanan Nonaktif');
        //     }
        //     setTimeout(() => {
        //         $ELEMN_THS.find('.successMessages').html('');
        //         $ELMN_BUTTON.show();
        //     }, 650);
        // },
        // error: function(xhr) {
        //     let response = xhr.responseJSON;
        //     if (response.status === 'error') {
        //         // Reset pesan error
                
        //         if (response.errors) {
        //             // Tampilkan pesan error validasi
        //             for (let field in response.errors) {
        //                 response.errors[field].forEach(function(error) {
        //                     // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + error + '</p>');
        //                     $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + error + ' </div></div>');
        //                 });
        //             }
        //         } else if (response.message) {
        //             // Tampilkan pesan error umum
        //             // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + response.message + '</p>');
        //             $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
        //         }
        //     }
        // }
    });
});