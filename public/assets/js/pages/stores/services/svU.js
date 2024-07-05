$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.formFieldSveServc').on('click', 'button.btn-sveServcUnits', (e) => {
    e.preventDefault();
    const $ELMN_BUTTON = $(e.target.closest('button'));
    const $ELMNFORM = $(e.target.closest('.formFieldSveServc'));
    const PAR_ELMN = $ELMNFORM.closest('.ctr-cServcItm');
    const URL = $ELMNFORM.attr('data-saveServcUrl');
    const URL_REFRESH = $ELMNFORM.attr('data-URLUnitFrom');
    const URL_EMPTY = $ELMNFORM.attr('data-URLEmptyUnit');
    const $ELEMN_STATUS = $(PAR_ELMN.find('.ctr-rghtStatus'));
    
    
    let dataAjax = [];
    const $ELMN_CTR_INP = $ELMNFORM.find('.itm-detServc');
    if ($ELMN_CTR_INP.length > 0) {
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
        
        $.ajax({
            type: "POST",
            url: URL,
            data: {'listUnitService': dataAjax},
            beforeSend: function() {
                PAR_ELMN.find('.cDetServc .successMessages, .cDetServc .errorMessages').html('');
                $ELMNFORM.addClass('animate-pulse');
            },
            success: function (response) {
                $.get(URL_REFRESH, function(html) {
                    $ELMNFORM.html(html);
                });
                // if (response.status === 'success') {
                //     PAR_ELMN.find('.cDetServc .successMessages').append('<div class="alert alert-success">' + response.message + '</div>');
                // } else {
                //     PAR_ELMN.find('.cDetServc .errorMessages').append('<div class="alert alert-danger">' + response.message + '</div>');
                // }
            },
            complete: function(xhr) {
                $ELMNFORM.removeClass('animate-pulse');
            },
            // error: function(xhr) {
            //     let response = xhr.responseJSON;
            //     if (response && response.message) {
            //         PAR_ELMN.find('.cDetServc .errorMessages').append('<div class="alert alert-danger">' + response.message + '</div>');
            //     } else {
            //         PAR_ELMN.find('.cDetServc .errorMessages').append('<div class="alert alert-danger">An unexpected error occurred.</div>');
            //     }
            // }
        });
    } else {
        $.ajax({
            type: "POST",
            url: URL_EMPTY,
            beforeSend: function() {
                PAR_ELMN.find('.cDetServc .successMessages, .cDetServc .errorMessages').html('');
                $ELMNFORM.addClass('animate-pulse');
            },
            success: function (response) {
                $.get(URL_REFRESH, function(html) {
                    $ELMNFORM.html(html);
                });
                // if (response.status === 'success') {
                //     const message = response.message;
                //     PAR_ELMN.find('.cDetServc .successMessages').append('<div class="alert alert-success">' + message + '</div>');
                // } else {
                //     PAR_ELMN.find('.cDetServc .errorMessages').append('<div class="alert alert-danger">No units were provided.</div>');
                // }
            },
            complete: function(xhr) {
                $ELMNFORM.removeClass('animate-pulse');
            }
        });
    }
});