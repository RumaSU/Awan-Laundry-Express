const NO_CLTHS_SERVC = '<div class="noItm-detServc flex flex-col items-center justify-center gap-2 p-2 rounded-xl border-2 border-gray-400"><div class="icnQuestion"><span class="icn text-3xl"><i class="far fa-circle-question"></i></span></div><div class="txQst"><p>Tidak ada pakaian yang ada</p></div></div>';
const NEW_CLTHS_SERVC = '<div class="itm-detServc flex flex-col sm:flex-row gap-2 p-2 rounded-xl border-2 border-gray-400 has-[:checked]:border-pink-300 has-[:checked]:bg-pink-200 group overflow-hidden"><div class="detServc w-full flex items-center gap-2"><div class="actvThsServc"><input type="checkbox" class="checkActvThsClthsServc rounded-[100%] p-2" checked></div><div class="nmePrcDtServc flex w-full md:items-center justify-between gap-2 flex-col md:flex-row"><div class="nmeDtServc max-md:w-full"><div class="valDatThsServc font-semibold w-full"><div class="inpFldDtValThsServc w-full flex items-center gap-2"><div class="inpFld block w-full"><input type="text" class="nameUnitThsServc block px-1.5 py-1 rounded-md w-full text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none group-has-[:checked]:bg-pink-50" spellcheck="false" value=""></div></div></div></div><div class="prcDtServc max-md:w-full font-semibold text-[#FF3377] group-has-[:checked]:bg-pink-50 px-2 rounded-md"><div class="inpFldDtValThsServc w-full flex items-center gap-2"><div class="lblInpThsServc"><div class="lblPrc"><p>Rp. </p></div></div><div class="inpFld block w-full"><input type="text" class="priceInpThsServc block px-1.5 py-1 w-full rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false" value=""></div></div></div></div></div><div class="delThsServc mt-2 block"><button type="button" class="btn-delClthsServc w-full text-center border border-black px-4 py-2 rounded-lg"><div class="cBtnSve flex justify-center items-center gap-2"><div class="icnSve"><span class="icn"><i class="fas fa-trash"></i></span></div><div class="lbelSave sm:hidden"><div class="tx"><p>Hapus</p></div></div></div></button></div></div>';

const $ADD_NWCLTHS_SERVC = $('button.addNewClothesServc');

// const $LST_SERVC_STORE = $('.cListServcStore');
// const $LST_CLTHS_SERVC = $('.cListDetClthsServc');

// const $BTN_CHCKALL_CLTHSSERVC = $('#actvAllThsClthsServc');

// const ELMNINP_PRCTHS_SERVICE = '.priceInpThsServc';
// const ELMNBTN_DELCTLHS_SERVICE = '.btn-delClthsServc';
// const ELMNITM_CLTHS_SCHECK = '.checkActvThsClthsServc';

let $ITM_CLTHS_SERVC = $('.itm-detServc');
let $ITM_CLTHS_SCHECK = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc');
let $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');

let lengthClths = $ITM_CLTHS_SERVC.length;
let lengthClthsChecked = $ITM_CLTHS_SCHECKED.length;
let $itemRemoveIdx;

if ($ITM_CLTHS_SERVC.length > 0 && lengthClthsChecked === lengthClths) {
    $('#actvAllThsClthsServc').prop('checked', true);
}

$ADD_NWCLTHS_SERVC.click((e) => {
    // console.log($ITM_CLTHS_SERVC.length);
    $('.cListDetClthsServc').prepend(NEW_CLTHS_SERVC);
    newItemClothesService();
    if ($ITM_CLTHS_SERVC.length > 0) {
        $('.noItm-detServc').remove();
    }
});

$('.formFieldSveServc').on('click', 'button.btn-delClthsServc', (e) => {
    const itemContent = $(e.target.closest('.itm-detServc'));
    itemContent.remove();
    
    newItemClothesService();
});

$('.formFieldSveServc').on('change', 'input.checkActvThsClthsServc', (e) => {
    $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');
    lengthClthsChecked = $ITM_CLTHS_SCHECKED.length;
    
    if (lengthClthsChecked === lengthClths) {
        $('#actvAllThsClthsServc').prop('checked', true);
    } else {
        $('#actvAllThsClthsServc').prop('checked', false);
    }
});



// $LST_SERVC_STORE.on('input', ELMNINP_PRCTHS_SERVICE, (e) => {
//     let inpThis = $(e.target).val();
//     inpThis = inpThis.replace(/\D/g, '');
//     inpThis = inpThis.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    
//     $(e.target).val(inpThis);
// });

// $LST_CLTHS_SERVC.on('click', ELMNBTN_DELCTLHS_SERVICE, (e) => {
//     const itemContent = $(e.target.closest('.itm-detServc'));
//     itemContent.remove();
    
//     newItemClothesService();
// });

// $('.btn-delClthsServc').click((e) => {
//     const itemContent = $(e.target.closest('.itm-detServc'));
//     console.log(itemContent);
//     itemContent.remove();
    
//     newItemClothesService();
// });

// $LST_CLTHS_SERVC.on('change', ELMNITM_CLTHS_SCHECK, (e) => {
//     $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');
//     lengthClthsChecked = $ITM_CLTHS_SCHECKED.length;
    
//     if (lengthClthsChecked === lengthClths) {
//         $BTN_CHCKALL_CLTHSSERVC.prop('checked', true);
//     } else {
//         $BTN_CHCKALL_CLTHSSERVC.prop('checked', false);
//     }
// });

$('#actvAllThsClthsServc').change((e) => {
    let isChecked = $(e.target).prop('checked');
    
    if (isChecked) {
        $ITM_CLTHS_SCHECK.prop('checked', true);
        $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');
    } else {
        $ITM_CLTHS_SCHECK.prop('checked', false);
        $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');
    }
});

function newItemClothesService() {
    $ITM_CLTHS_SERVC = $('.itm-detServc');
    $ITM_CLTHS_SCHECK = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc');
    $ITM_CLTHS_SCHECKED = $ITM_CLTHS_SERVC.find('.checkActvThsClthsServc:checked');
    
    lengthClths = $ITM_CLTHS_SERVC.length;
    lengthClthsChecked = $ITM_CLTHS_SCHECKED.length;
    
    if ($ITM_CLTHS_SERVC.length > 0) {    
        if (lengthClthsChecked === lengthClths) {
            $('#actvAllThsClthsServc').prop('checked', true);
        } else {
            $('#actvAllThsClthsServc').prop('checked', false);
        }
    } else {
        $('#actvAllThsClthsServc').prop('checked', false);    
        $('.cListDetClthsServc').append(NO_CLTHS_SERVC);
    }
}