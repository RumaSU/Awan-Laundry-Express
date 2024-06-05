$(document).ready(function () {
    let $clickShowListStore = "#clSwLsSre";
    let $containerListStore = "#ctCSdbCLsSTSnThs";
    let $contentListStore = "#cCLsSdbSTrSN";
    let $stRottClstStrShow = "rotate-90 xl:rotate-0 xl:group-hover/icClSwr:rotate-90";
    let $stActiveRottClstStrShow = "-rotate-90 xl:rotate-90";
    
    let wWind = $(window).width();
    
    $(window).resize((e) => {
        wWind = $(window).width();
        if ($($clickShowListStore + " #icClSwr").hasClass("activateShowListStore")) {
            resetStListStore();
            $($clickShowListStore + " #icClSwr").removeClass("activateShowListStore");
            $($clickShowListStore + " #icClSwr").addClass($stRottClstStrShow);
        }
        if ($($containerListStore).css('display') != 'none') {
            $($contentListStore).css({height: "0",});
            $($containerListStore).hide();
        }
    });
    
    function resetStListStore() {
        let $icnShLSt = $($clickShowListStore + " #icClSwr");
        let $listIconStyle = [
            "rotate-90",
            "-rotate-90",
            "xl:rotate-0",
            "xl:rotate-90",
            "xl:group-hover/icClSwr:rotate-90",
        ];
        $listIconStyle.forEach(($thisClass, idx) => {
            if ($icnShLSt.hasClass($thisClass)) {
                $icnShLSt.removeClass($thisClass);
            }
        });
    }
    
    function changeStClickIcon() {
        // let $whatClass = $($clickShowListStore + ' .icClStore').attr('class');
        let $icnShLSt = $($clickShowListStore + " #icClSwr");
        resetStListStore();
        
        if ($icnShLSt.hasClass("activateShowListStore")) {
            $icnShLSt.removeClass("activateShowListStore");
            $icnShLSt.addClass($stRottClstStrShow);
        } else {
            $icnShLSt.addClass(
                "activateShowListStore " + $stActiveRottClstStrShow
            );
        }
        
        if ($icnShLSt.hasClass("activateShowListStore")) {
            showListStore();
        } else {
            hideShowListStore();
        }
    }
    
    function showListStore() {
        $($containerListStore).show();
        $($contentListStore).css({
            height: "24rem",
        });
    }
    
    function hideShowListStore() {
        $($contentListStore).css({
            height: "0",
        });
        setTimeout(() => {
            $($containerListStore).hide();
        }, 400);
    }
    
    $($clickShowListStore).click(function (e) {
        e.preventDefault();
        changeStClickIcon();
        console.log($($contentListStore).css('display'));
        console.log($($containerListStore).has(e.target).length)
        console.log($($containerListStore).is(e.target));
    });
    
    $(document).on('mouseup', function (e) {
        if (($($clickShowListStore + " #icClSwr").hasClass("activateShowListStore"))) {
            if (!$($containerListStore).is(e.target) && $($containerListStore).has(e.target).length === 0 && !($($clickShowListStore).is(e.target))) {
                resetStListStore();
                $($clickShowListStore + " #icClSwr").removeClass("activateShowListStore");
                $($clickShowListStore + " #icClSwr").addClass($stRottClstStrShow);
                
                hideShowListStore();
                
            }    
        }
    });
});
