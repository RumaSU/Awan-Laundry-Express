$(document).click((e) => {
    const elmnPopup = $('.popupContent');
    elmnPopup.each((index, element) => {
        if (!element.contains(e.target) && !e.target.closest('button')) {
            $(element).addClass('hidden');
        }
    });
});


const $LST_URL = ['profile', 'address', 'password'];
let prev_url = 'profile';
$('.settingAccountTo').click((e) => {
    const $THS_ELEMN = $(e.target.closest('.settingAccountTo'));
    const $DATA_URL = $THS_ELEMN.attr('data-urlSetting');
    const SPLIT_URL = $DATA_URL.split('/');
    const CURR_URL = SPLIT_URL[SPLIT_URL.length - 1];
    
    const $THS_IDXELMN = $THS_ELEMN.index();
    const IDXURL = $LST_URL.indexOf(prev_url);
    prev_url = CURR_URL;
    
    if ($THS_IDXELMN === IDXURL) return;
    
    $('.cMainSetting').addClass('animate-pulse');
    
    $.ajax({
        type: 'GET',
        url: $DATA_URL,
        success: function(response) {
            $('.cMainSetting').html(response);
        },
        error: function(xhr, status, error) {
            console.log('Terjadi kesalahan: ' + error);
        },
        complete: function() {
            $('.settingAccountTo').each(function (index, element) {
                $(element).removeClass('bg-white');
                $(element).removeClass('text-black');
                $(element).removeClass('bg-[#FF3377]');
                $(element).removeClass('text-white');
                
                $(element).addClass('bg-white');
                $(element).addClass('text-black');
            });
            
            $THS_ELEMN.removeClass('bg-white');
            $THS_ELEMN.removeClass('text-black');
            
            $THS_ELEMN.addClass('bg-[#FF3377]');
            $THS_ELEMN.addClass('text-white');
            $('.cMainSetting').removeClass('animate-pulse');
            
            setMaxDateBirth();
        },
    });
});

setMaxDateBirth();

function setMaxDateBirth() {
    const $INP_DATE = $('.popupContent input[type="date"]'); 
    
    const TODAY = new Date().toISOString().split("T")[0];
    $INP_DATE.attr('max', TODAY);
}

// function errElmn() {
//     $('.cMainSetting').addClass('animate-pulse');
    
//     $.ajax({
//         type: 'GET',
//         url: $DATA_URL,
//         success: function(response) {
//             $('.cMainSetting').html(response);
//         },
//         error: function(xhr, status, error) {
//             location.reload();
//         },
//         complete: function() {
//             $('.settingAccountTo').each(function (index, element) {
//                 $(element).removeClass('bg-white');
//                 $(element).removeClass('text-black');
//                 $(element).removeClass('bg-[#FF3377]');
//                 $(element).removeClass('text-white');
                
//                 $(element).addClass('bg-white');
//                 $(element).addClass('text-black');
//             });
            
//             $THS_ELEMN.removeClass('bg-white');
//             $THS_ELEMN.removeClass('text-black');
            
//             $THS_ELEMN.addClass('bg-[#FF3377]');
//             $THS_ELEMN.addClass('text-white');
//             $('.cMainSetting').removeClass('animate-pulse');
//         },
//     });
// }