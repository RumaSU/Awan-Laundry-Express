$(document).ready(function () {
    let $clickShowListStore = '#clSwLsSre';
    let $containerListStore = '#ctCCLsSTSnThs';
    let $contentListStore = '#cCLsSTrSN';
    
    let $stRottClstStrShow = 'rotate-90 xl:rotate-0 xl:group-hover/icClSwr:rotate-90';
    let $stActiveRottClstStrShow = '-rotate-90 xl:rotate-90';
    
    let wWind = $(window).width();
    
    $(window).resize((e) => { 
        wWind = $(window).width();
        
        console.log(wWind);
    });
    
    function styleListStore(nowWindWidth) {
        if(nowWindWidth > 1281) {
            $(selector).removeClass(className);
        }
    }
    
    function changeStClickIcon () {
        // let $whatClass = $($clickShowListStore + ' .icClStore').attr('class');
        let $whatClass = $($clickShowListStore + ' #icClSwr');
        let $listIconStyle = ['rotate-90', '-rotate-90', 'xl:rotate-0', 'xl:rotate-90', 'xl:group-hover/icClSwr:rotate-90'];
        $listIconStyle.forEach(($thisClass, idx) => {
            if ( $whatClass.hasClass($thisClass) ) {
                $whatClass.removeClass($thisClass);
            }
        });
        
        if ( $whatClass.hasClass('activateShowListStore') ) {
            $whatClass.removeClass('activateShowListStore');
            $whatClass.addClass($stRottClstStrShow);
        } else {
            $whatClass.addClass('activateShowListStore ' + $stActiveRottClstStrShow);
        }
        
        if ( $whatClass.hasClass('activateShowListStore') ) {
            
        }
        
    }

    setTimeout(() => {
        $($containerListStore).show();
        $($contentListStore).css(
            {
                'height': '24rem'
            }
        );
    }, 5000);
    
    $($clickShowListStore).click(function (e) { 
        e.preventDefault();
        changeStClickIcon();
    });
    
});