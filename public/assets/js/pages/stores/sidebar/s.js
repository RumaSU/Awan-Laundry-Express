$(document).ready(function () {
    let $clickShowListStore = "#clSwLsSre";
    let $icnClckShowListStore = "#clSwLsSre #icClSwr";
    let $containerListStore = "#ctCSdbCLsSTSnThs";
    let $contentListStore = "#cCLsSdbSTrSN";
    let $stRottClstStrShow = "rotate-90 xl:rotate-0";
    let $stActiveRottClstStrShow = "-rotate-90 xl:rotate-90";
    
    let sizeHCnLsStore, sizeCloseCntListStore;
    let statusShowCnLsStore = false;
    
    let wWind = $(window).width();
    
    $(window).resize((e) => {
        wWind = $(window).width();
        
        resetStListStore();
        // if ($($clickShowListStore + " #icClSwr").hasClass("activateShowListStore")) {
        //     $($clickShowListStore + " #icClSwr").removeClass("activateShowListStore");
        //     $($clickShowListStore + " #icClSwr").addClass($stRottClstStrShow);
        // }
        // if ($($containerListStore).css('display') != 'none') {
        //     $($contentListStore).css({height: "0",});
        //     $($containerListStore).hide();
        // }
    });
    
    let resObsContentLsStore = new ResizeObserver(entries => {
        for (let entry of entries) {
            sizeHCnLsStore = entry.contentRect.height;
            if (!statusShowCnLsStore) {
                // if (sizeHCnLsStore < sizeCloseCntListStore) {
                //     $($containerListStore).removeClass("h-[100vh]");
                // }
                if (sizeHCnLsStore < 2) {
                    $($containerListStore).hide();
                    statusShowCnLsStore = false;    
                }
            }
        }
    });
    
    resObsContentLsStore.observe(document.getElementById('cCLsSdbSTrSN'));
    
    function resetStListStore() {
        sizeCloseCntListStore = sizeHCnLsStore * 0.95;
        
        $($icnClckShowListStore).addClass($stRottClstStrShow);
        $($icnClckShowListStore).removeClass($stActiveRottClstStrShow);
        $($contentListStore).css({'height' : '0'});
        
        statusShowCnLsStore = false;
    }
    
    function changeStClickIcon() {
        if (statusShowCnLsStore) {
            sizeCloseCntListStore = sizeHCnLsStore * 0.95;
            
            hideShowListStore();
            statusShowCnLsStore = false;
        } else {
            showListStore();
            statusShowCnLsStore = true;
        }
        
    }
    
    function showListStore() {
        $($icnClckShowListStore).removeClass($stRottClstStrShow);
        $($icnClckShowListStore).addClass($stActiveRottClstStrShow);
        
        $($containerListStore).show();
        $($contentListStore).css({
            height: "24rem",
        });
    }
    
    function hideShowListStore() {
        $($icnClckShowListStore).addClass($stRottClstStrShow);
        $($icnClckShowListStore).removeClass($stActiveRottClstStrShow);
        
        $($contentListStore).css({
            height: "0",
        });
    }
    
    $($clickShowListStore).click(function () {
        changeStClickIcon();
    });
    
    $(document).on('mouseup', function (e) {
        if (statusShowCnLsStore) {
            if (!$($containerListStore).is(e.target) && 
                $($containerListStore).has(e.target).length === 0 && 
                !($($clickShowListStore).is(e.target))) {
                
                resetStListStore();
            }
        }
    });
});
