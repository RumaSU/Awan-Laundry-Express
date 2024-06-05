$(document).ready(function () {
    let $icnShwListStore = $('#icnClSLSt');
    let $icnClsListStore = $('#clckThsCShwStr');
    let $containerListStore = '#ctCCLsSTSnThs';
    let $contentListStore = '#cCLsSTrSN';
    
    let sizeHCnLsStore, sizeCloseCntListStore;
    let statusShowCnLsStore = false;
    
    let wWind = $(window).width();
    
    $(window).resize((e) => {
        wWind = $(window).width();
        
        resetStListStore();
    });
    
    let resObsContentLsStore = new ResizeObserver(entries => {
        for (let entry of entries) {
            sizeHCnLsStore = entry.contentRect.height;
            // console.log(typeof sizeHCnLsStore);
            
            if (!statusShowCnLsStore) {
                if (sizeHCnLsStore < sizeCloseCntListStore) {
                    // console.log("Hide container : " + sizeHCnLsStore);
                    $($containerListStore).addClass("h-0");
                    $($containerListStore).removeClass("h-[100vh]");
                }
                if (sizeHCnLsStore < 2) {
                    $($containerListStore).hide();
                    statusShowCnLsStore = false;    
                }
                
                
                // console.log("Size height : " + sizeHCnLsStore + "    " + sizeCloseCntListStore);
            }
        }
    });
    
    resObsContentLsStore.observe(document.getElementById('cCLsSTrSN'));
    
    function resetStListStore() {
        sizeCloseCntListStore = sizeHCnLsStore * 0.95;
        $icnShwListStore.find("span").removeClass("rotate-90");
        
        $($contentListStore).addClass("h-0");
        $($contentListStore).removeClass("h-[90vh] sm:h-96");
        
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
        $icnShwListStore.find("span").addClass("rotate-90");
        
        $($containerListStore).show();
        $($containerListStore).addClass("h-[100vh]");
        $($containerListStore).removeClass("h-0");
        
        $($contentListStore).addClass("h-[90vh] sm:h-96");
    }
    
    function hideShowListStore() {
        $icnShwListStore.find("span").removeClass("rotate-90");
        $($containerListStore).addClass("h-0");
        $($containerListStore).removeClass("h-[100vh]");
                   
        $($contentListStore).addClass("h-0");
        $($contentListStore).removeClass("h-[90vh] sm:h-96");
    }
    
    $icnShwListStore.click((e) => {
        changeStClickIcon();
    });
    
    $icnClsListStore.click((e) => {
        resetStListStore();
    })
    
    $(document).on('mouseup', function (e) {
        if (statusShowCnLsStore) {
            if (!($($containerListStore)).is(e.target) && 
                ($($containerListStore).has(e.target).length === 0) &&
                ($icnShwListStore.is(e.target))) {
                
                resetStListStore();
                // console.log("Icon Click : " + $icnShwListStore.is(e.target));
                // console.log("Content Click : " + $($containerListStore).is(e.target));
                // console.log("Content Length : " + $($containerListStore).has(e.target).length);
            }
        }
    });
});
