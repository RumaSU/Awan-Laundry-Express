$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});

$('.ctr-listServcStore').on('input', 'input.priceInpThsServc', (e) => {
    let inpThis = $(e.target).val();
    inpThis = inpThis.replace(/\D/g, '');
    inpThis = inpThis.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    
    $(e.target).val(inpThis);
});