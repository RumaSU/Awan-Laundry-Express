<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Best Route Finding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    {{-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('assets/js/tubes/drg.js') }}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/main/s.css')}}">
    @php
        $dataRow = rand(40, 55);
        $dataCol = rand(40, 55);
    @endphp
    <style>
        * {
            
        }
        
        #grid {
            display: grid;
            grid-template-columns: repeat({{ $dataCol }}, 25px);
            grid-template-rows: repeat({{ $dataRow }}, 25px);
            gap: 1px;
        }
        
        .grid-cell {
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
        }
        
        .blocked {
            background-color: black;
        }
        .processing {
            background-color: gray;
        }
        .path {
            background-color: yellow;
        }
        .path-2 {
            background-color: yellowgreen;
        }
        .path-3 {
            background-color: darkkhaki;
        }
        
        .start {
            background-color: green;
        }
        
        .end {
            color: white;
            background-color: red;
        }
        
    </style>
</head>
<body>
    <h1 class="text-center">Best Route Finding with A* Algorithm</h1>
    <div class="ctr-aStar flex gap-2 border border-black">
        
        <div class="ctr-lstGrid flex items-center justify-center p-4 border border-black h-screen w-full overflow-hidden" style="grid-column: 1 / 5; grid-row: 1 / -1;">
            <div id="grid" class="border border-black overflow-scroll h-screen w-full" data-col="{{ $dataCol }}" data-row="{{ $dataRow }}"></div>
        </div>
        <div class="ctr-btnFindRoute shrink-0 border border-black w-80" style="grid-column: 5 / 6; grid-row: 1 / -1;">
            <div class="ctrDetSourceEnd">
                <div id="blockValSrc" class="cSrc flex items-center gap-8">
                    <div class="blockStyle"></div>
                    <div class="blockPosition"></div>
                </div>
                <div id="listBlockValEnd" class="lstCEnd mt-4">
                    {{-- <div class="itmCEnd flex items-center gap-8"><div class="blockStyle"></div><div class="blockPosition"></div></div> --}}
                </div>
            </div>
            <div class="lstButton mt-8">
                <div class="btnFRoute">
                    <button id="btn-findRoute" class="border border-black px-4 py-2 rounded-xl">Find Route</button>
                </div>
                <div class="btnFBstRoute">
                    <button id="btn-findBestRoute" class="border border-black px-4 py-2 rounded-xl">Find Best Route</button>
                </div>
                <div class="btnClrPrcs">
                    <button id="btn-clearProcess" class="border border-black px-4 py-2 rounded-xl">Clear Process Trace</button>
                </div>
                <div class="btnClrPaths">
                    <button id="btn-clearPath" class="border border-black px-4 py-2 rounded-xl">Clear Path Route</button>
                </div>
            </div>
            <div class="lstValOrdByWght">
                {{-- <div class="itmBlkEnd flex items-center gap-8"><div class="blockStyle"></div><div class="blockPosition"></div></div> --}}
            </div>
        </div>
    </div>
    {{-- <button onclick="createGrid()">Create Grid</button> --}}
    
    
    <script>
        const BLOK_SOURCE = $('#blockValSrc');
        const LIST_BLOK_END = $('#listBlockValEnd');
        // const BLOK_END = $('.itmCEnd');
        const NEWELEM_ITEM = '<div class="itmCEnd flex items-center gap-8"><div class="blockStyle"></div><div class="blockPosition"></div></div>';
        const NEWELEM_BYORD = '<div class="itmBlkEnd flex items-center gap-8"><div class="blockStyle"></div><div class="blockPosition"></div></div>';
        
        let COL, ROW;
        let GRID = [];
        let SOURCEST, DESTINATION;
        let TOTAL_ORDER = [];
        
        // let BEST_ROUTE_ORDER = [];
        let LIST_ROUTE_ORDER = [];
        
        $(document).ready(function () {
            ROW = parseInt($('#grid').attr('data-row'));
            COL = parseInt($('#grid').attr('data-col'));
            
            createRandomGrid(ROW, COL);
            
            SOURCEST = setRowColumn();
            // DESTINATION = setRowColumn();
            
            setTotalOrder();
            createGrid(SOURCEST, BLOK_SOURCE);
            
            BLOK_SOURCE.find('.blockPosition').html((SOURCEST['row'] + 1) + ' ---- ' + (SOURCEST['col'] + 1));
            
            for(let i = 0; i < TOTAL_ORDER.length; i++) LIST_BLOK_END.append(NEWELEM_ITEM);
            $('.itmCEnd').each((idx, elmn) => {
                const THS_ELMN = $(elmn);
                const ORDER_POST = TOTAL_ORDER[idx];
                // console.log(THS_ELMN);
                // console.log('Row : ' + ORDER_POST.row + ' ------ Col : ' + ORDER_POST.col);
                highlighDestination(ORDER_POST.row, ORDER_POST.col, idx);
                THS_ELMN.find('.blockStyle').addClass('grid-cell end').html(idx);
                THS_ELMN.find('.blockPosition').html((ORDER_POST['row'] + 1) + ' ---- ' + (ORDER_POST['col'] + 1));
            });
            
            $('#btn-findRoute').click(async function (e) {
                e.preventDefault();
                // LIST_ROUTE_ORDER = [];
                await clearProcessPath();
                await clearPath();
                if (LIST_ROUTE_ORDER.length > 0) {
                    resetValNew(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length - 1]);
                }
                // TOTAL_ORDER.forEach((ORD_POST) => {
                //     aStarSearch(GRID, SOURCEST, ORD_POST);
                // });
                
                // const searchPromises = [];
                // let TEMP_SRC = SOURCEST;
                
                // for (const ORD_POST of TOTAL_ORDER) {
                //     // if (!ORD_POST.isSearched) {
                //     //     searchPromises.push(runAStarSearchAsync(GRID, TEMP_SRC, ORD_POST));
                //     //     // await runAStarSearchAsync(GRID, TEMP_SRC, ORD_POST);
                //     //     // await aStarSearch(GRID, SOURCEST, ORD_POST);
                //     //     // ORD_POST.isSearched = true;
                //     // }
                //     searchPromises.push(runAStarSearchAsync(GRID, SOURCEST, ORD_POST));
                //     // await runAStarSearchAsync(GRID, TEMP_SRC, ORD_POST);
                //     // TEMP_SRC = ORD_POST
                // }
                
                // // await runAStarSearchAsync(GRID, TEMP_SRC, SOURCEST);
                
                // await Promise.all(searchPromises);
                // await LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length - 1].path.concat(TOTAL_ORDER);
                
                // await LIST_ROUTE_ORDER.push(await findRoute(TOTAL_ORDER));
                // LIST_ROUTE_ORDER.push(TOTAL_ORDER);
                // await findRoute(LIST_ROUTE_ORDER[0])
                // LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1].sourcest = SOURCEST;
                // await SelectionSortOrder(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1]);
                // // await LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1].push(SOURCEST);
                // await countWeightRoute(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1]);
                // let Cpy_TOrder = [...TOTAL_ORDER];
                // let Cpy_Src = SOURCEST;
                
                let Cln_TOrder = structuredClone(TOTAL_ORDER);
                let Cln_Src = structuredClone(SOURCEST);
                // console.log('Real Total order : ', JSON.parse(JSON.stringify(TOTAL_ORDER)));
                // console.log('Copy Total order : ', JSON.parse(JSON.stringify(Cpy_TOrder)));
                
                // console.log("Source:", JSON.parse(JSON.stringify(SOURCEST)));
                
                await LIST_ROUTE_ORDER.push({
                    // path: [].concat(JSON.parse(JSON.stringify(Cpy_TOrder))), 
                    // sourcest: JSON.parse(JSON.stringify(Cpy_Src))
                    path: [].concat(Cln_TOrder),
                    sourcest: Cln_Src
                });
                
                // console.log("Before processing route:", structuredClone(LIST_ROUTE_ORDER));
                // console.log("Before processing route:", JSON.parse(JSON.stringify(LIST_ROUTE_ORDER)));
                
                await findRoute(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length - 1]);
                
                // console.log("Before swap route:", structuredClone(LIST_ROUTE_ORDER));
                
                await SelectionSortOrder(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1].path);
                await countWeightRoute(LIST_ROUTE_ORDER[LIST_ROUTE_ORDER.length-1]);
                
                // console.log("After processing route:", structuredClone(LIST_ROUTE_ORDER));
                // console.log("After processing route:", JSON.parse(JSON.stringify(LIST_ROUTE_ORDER)));
                // console.log('Real Total order : ', JSON.parse(JSON.stringify(TOTAL_ORDER)));
                // console.log('Copy Total order : ', JSON.parse(JSON.stringify(Cpy_TOrder)));
            });
            
            $('#btn-findBestRoute').click(async function (e) {
                e.preventDefault();
                clearProcessPath();
                clearPath();
                
                // while()
                if (LIST_ROUTE_ORDER === undefined || LIST_ROUTE_ORDER.length === 0) {
                    console.log('Order not found, finding route...');
                    
                    // Klik tombol Find Route dan tunggu sampai selesai
                    await $('#btn-findRoute').click();
                    await sleep(1000);
                    
                    // Periksa ulang LIST_ROUTE_ORDER hingga tidak kosong
                    while (LIST_ROUTE_ORDER === undefined || LIST_ROUTE_ORDER.length === 0) {
                        console.log('Still finding route...');
                        await sleep(1000); // Tunggu sejenak sebelum memeriksa ulang
                    }
                    await sleep(2000);
                }
                
                console.log('Do search best find....');
                
                // const searchPromises = [];
                await BestRouteFinding(GRID, SOURCEST, LIST_ROUTE_ORDER);
                // console.log("After processing route:", structuredClone(LIST_ROUTE_ORDER));
                // console.log("After Total Order Asli:", structuredClone(TOTAL_ORDER));
                // let TMP_TL_ORDER = LIST_ROUTE_ORDER;
                
                // let TEMP_SRC = SOURCEST;
                // for (const ORD_POST of TMP_TL_ORDER) {
                //     // searchPromises.push(runAStarSearchAsync(GRID, SOURCEST, ORD_POST));
                //     await runAStarSearchAsync(GRID, TEMP_SRC, ORD_POST);
                //     TEMP_SRC = ORD_POST
                // }
                // await runAStarSearchAsync(GRID, TEMP_SRC, SOURCEST);
                // await runAStarSearchAsync(GRID, TEMP_SRC, SOURCEST);
                
                // await Promise.all(searchPromises);
                
                // let TEMP_SRC = TOTAL_ORDER[0];
                // for (const ORD_POST of TOTAL_ORDER) {
                //     await highlightPath(TEMP_SRC.path);
                //     // console.log(TEMP_SRC);
                //     TEMP_SRC = ORD_POST;
                // }
            });
            
            $('#btn-clearProcess').click((e) => {
                e.preventDefault();
                clearProcessPath();
            });
            
            $('#btn-clearPath').click((e) => {
                e.preventDefault();
                clearProcessPath();
                clearPath();
            });
        });
        
        async function findRoute(tl_order) {
            const searchPromises = [];
            let TMP_SRC = tl_order.sourcest;
            let TMP_TL_ORDER = [...tl_order.path];
            // let TMP_TL_ORDER = structuredClone(tl_order.path);
            
            for (const ORD_POST of TMP_TL_ORDER) {
                searchPromises.push(runAStarSearchAsync(GRID, TMP_SRC, ORD_POST));
            }
            // await runAStarSearchAsync(GRID, TEMP_SRC, SOURCEST);
            
            await Promise.all(searchPromises);
            return TMP_TL_ORDER;
        }
        
        async function runAStarSearchAsync(GRID, SOURCEST, ORD_POST) {
            await aStarSearch(GRID, SOURCEST, ORD_POST);
            return { ...ORD_POST, isSearched: true };
            // ORD_POST.isSearched = true;
        }
        
        function SelectionSortOrder(tl_order) {
            // let idxSwap = [];
            // let tmp_ordr = structuredClone(TOTAL_ORDER);
            // console.log(structuredClone(tmp_ordr));
            // console.log(structuredClone(tl_order));
            for(let i = 0; i < tl_order.length - 1; i++) {
                let minIdx = i;
                for (let j = i; j < tl_order.length; j++) {
                    if (tl_order[j].weight < tl_order[minIdx].weight){
                        minIdx = j;
                        // console.log(i, ' [i] : ', tl_order[i].weight);
                        // console.log(minIdx, ' [minIdx] : ', tl_order[minIdx].weight);
                    }
                }
                if (minIdx != i) {
                    // console.log('Swap', i, minIdx);
                    // idxSwap.push({swap: minIdx, with: i});
                    // [tmp_ordr[i], tmp_ordr[minIdx]] = [tmp_ordr[minIdx], tmp_ordr[i]];
                    [tl_order[i], tl_order[minIdx]] = [tl_order[minIdx], tl_order[i]];
                };
            }
            // console.log(idxSwap);
            // console.log(structuredClone(tmp_ordr));
            // console.log(structuredClone(tl_order));
        }
        
        // function countWeightRoute(tl_order_route) {
        //     tl_order_route_path = tl_order_route.path;
        //     tl_order_route.weightroute = 0;
            
        //     for(const ORDER of tl_order_route_path) {
        //         tl_order_route.weightroute += ORDER.weight;
        //     }
        //     tl_order_route.weightroute += tl_order_route.sourcest.weight;
        // }
        function countWeightRoute(tl_order_route) {
            // tl_order_route.weightroute = 0;
            const tl_order_route_path = tl_order_route.path;
            tl_order_route.weightroute = tl_order_route_path.reduce((sum, order) => sum + order.weight, 0);
            tl_order_route.weightroute += tl_order_route.sourcest.weight;
        }
        
        function createRandomGrid(row, cell) {
            for(let i = 0; i < row; i++) {
                let newRow = [];
                for(let j = 0; j < cell; j++) {
                    const randRoute = Math.random();
                    const doBlock = (randRoute < 0.25) ? 0 : 1;
                    newRow.push(doBlock);
                }
                GRID.push(newRow);
            }
        }
        
        function createGrid(ths_src, jqElmSrc) {
            const gridContainer = document.getElementById('grid');
            gridContainer.innerHTML = '';
            for (let i = 0; i < ROW; i++) {
                for (let j = 0; j < COL; j++) {
                    const cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    if (GRID[i][j] === 0) {
                        cell.classList.add('blocked');
                    }
                    if (i === ths_src.row && j === ths_src.col) {
                        cell.classList.add('start');
                        jqElmSrc.find('.blockStyle').addClass('grid-cell start');
                    }
                    gridContainer.appendChild(cell);
                }
            }
        }
        
        function setRowColumn() {
            let TMP_ROW, TMP_COL;
            do {
                TMP_ROW = Math.floor(Math.random() * ROW);
                TMP_COL = Math.floor(Math.random() * COL);
            } while (!isValid(TMP_ROW, TMP_COL) || !isUnBlocked(GRID, TMP_ROW, TMP_COL));
            
            return { row: TMP_ROW, col: TMP_COL, weight: 0.0};
        }
        
        function setTotalOrder() {
            let tmp_tlOrder = Math.floor((Math.random() * 8) + 1);
            for (let i = 0; i < tmp_tlOrder; i++) {
                let TMP_RCORDER;
                do {
                    TMP_RCORDER = setRowColumn();
                } while(!(isDestination(SOURCEST.row, SOURCEST.col, TMP_RCORDER)) && (setPostOrder(TMP_RCORDER)));
                // TMP_RCORDER.isSearched = false;
                TOTAL_ORDER.push(TMP_RCORDER);
            }
        }
        
        function setPostOrder(tmp_rcorder) {
            TOTAL_ORDER.forEach((vOrder) => {
                return vOrder.row == tmp_rcorder.row && vOrder.col == tmp_rcorder.col;
            });
        }
        
        function isValid(row, col) {
            return row >= 0 && row < ROW && col >= 0 && col < COL;
        }
        
        function isUnBlocked(grid, row, col) {
            return grid[row][col] === 1;
        }
        
        function isDestination(row, col, dest) {
            return row === dest.row && col === dest.col;
        }
        
        function calculateHValue(row, col, dest) {
            return Math.sqrt((row - dest.row) ** 2 + (col - dest.col) ** 2);
        }
        
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        
        async function tracePath(cellDetails, dest) {
            let count = 0;
            let row = dest.row;
            let col = dest.col;
            const path = [];
            
            while (!(cellDetails[row][col].parent_row === row && cellDetails[row][col].parent_col === col)) {
                path.push({ row, col });
                const temp_row = cellDetails[row][col].parent_row;
                const temp_col = cellDetails[row][col].parent_col;
                row = temp_row;
                col = temp_col;
                dest.weight += cellDetails[row][col].f;
                count++;
            }
            
            dest.weight = dest.weight / count;
            
            path.push({ row, col });
            path.reverse();
            await highlightPath(path);
            return path;
        }
        function clearProcessPath() {
            $('.grid-cell').each((indx, Elmn) => {
                $(Elmn).removeClass('processing');
            });
        }
        function clearPath() {
            $('.grid-cell').each((indx, Elmn) => {
                $(Elmn).removeClass('path');
            });
        }
        function highlighDestination(row, col, elmIdx) {
            const index = row * COL + col;
            const cell = document.querySelectorAll('.grid-cell')[index];
            if (cell) {
                cell.classList.add('end');
                $(cell).text(elmIdx);
            }
        }
        async function highlightCell(row, col) {
            const index = row * COL + col;
            const cell = document.querySelectorAll('.grid-cell')[index];
            if (cell) {
                cell.classList.add('processing');
                await sleep(10);
            }
        }
        async function highlightPath(path) {
            for (const pos of path) {
                const index = pos.row * COL + pos.col;
                const cell = document.querySelectorAll('.grid-cell')[index];
                if (cell) {
                    cell.classList.add('path');
                    await sleep(5);
                }
            }
        }
        
        async function aStarSearch(ths_grid, ths_src, ths_dest) {
            if (!isValid(ths_src.row, ths_src.col) || !isValid(ths_dest.row, ths_dest.col)) {
                alert('Source or Destination is invalid');
                return;
            }
            
            if (!isUnBlocked(ths_grid, ths_src.row, ths_src.col) || !isUnBlocked(ths_grid, ths_dest.row, ths_dest.col)) {
                alert('Source or the destination is blocked');
                return;
            }
            
            if (isDestination(ths_src.row, ths_src.col, ths_dest)) {
                alert('We are already at the destination');
                return;
            }
            
            // let weightOrd = 0.0;
            const closedList = Array.from({ length: ROW }, () => Array(COL).fill(false));
            const cellDetails = Array.from({ length: ROW }, () => Array(COL).fill(null).map(() => ({
                parent_row: -1,
                parent_col: -1,
                f: Number.MAX_VALUE,
                g: Number.MAX_VALUE,
                h: Number.MAX_VALUE
            })));
            
            let i = ths_src.row, j = ths_src.col;
            cellDetails[i][j].f = 0.0;
            cellDetails[i][j].g = 0.0;
            cellDetails[i][j].h = 0.0;
            cellDetails[i][j].parent_row = i;
            cellDetails[i][j].parent_col = j;
            
            const openList = new Set();
            openList.add({
                f: 0.0,
                pos: { row: i, col: j }
            });
            
            while (openList.size > 0) {
                const current = [...openList].reduce((prev, curr) => (prev.f < curr.f ? prev : curr));
                openList.delete(current);
                
                i = current.pos.row;
                j = current.pos.col;
                closedList[i][j] = true;
                
                await highlightCell(i, j);
                
                const di = [-1, 1, 0, 0, -1, -1, 1, 1];
                const dj = [0, 0, -1, 1, -1, 1, -1, 1];
                for (let k = 0; k < 8; k++) {
                    const ni = i + di[k];
                    const nj = j + dj[k];
                    
                    if (isValid(ni, nj)) {
                        if (isDestination(ni, nj, ths_dest)) {
                            cellDetails[ni][nj].parent_row = i;
                            cellDetails[ni][nj].parent_col = j;
                            ths_dest.routepath = await tracePath(cellDetails, ths_dest);
                            return;
                        } else if (!closedList[ni][nj] && isUnBlocked(ths_grid, ni, nj)) {
                            const gNew = cellDetails[i][j].g + 1.0;
                            const hNew = calculateHValue(ni, nj, ths_dest);
                            const fNew = gNew + hNew;
                            
                            if (cellDetails[ni][nj].f === Number.MAX_VALUE || cellDetails[ni][nj].f > fNew) {
                                openList.add({ f: fNew, pos: { row: ni, col: nj } });
                                cellDetails[ni][nj].f = fNew;
                                cellDetails[ni][nj].g = gNew;
                                cellDetails[ni][nj].h = hNew;
                                cellDetails[ni][nj].parent_row = i;
                                cellDetails[ni][nj].parent_col = j;
                            }
                        }
                    }
                }
            }
        }
        
        async function BestRouteFinding(ths_grid, ths_src, ths_lst_order) {            
            await clearProcessPath();
            await clearPath();
            
            let NEW_RT_ORDER = await structuredClone(ths_lst_order[ths_lst_order.length - 1]);
            let TMP_TL_ORDER = NEW_RT_ORDER.path;
            const ORG_SRC_PATH = await structuredClone(NEW_RT_ORDER.sourcest);
            // const START_PATH = await structuredClone(TMP_TL_ORDER[0]);
            
            let START_PATH = await structuredClone(TMP_TL_ORDER[0]);
            let END_PATH;
            
            let COMPARE_LIST = [];
            // let DESTINATION_LEFT = [];
            // let DESTINATION_ROUTE = [];
            let COMPARE_DESTINATION = [];
            console.log(' ');
            console.log(structuredClone(NEW_RT_ORDER.sourcest));
            for(const ord of TMP_TL_ORDER) console.log(structuredClone(ord));
            console.log(' ');
            console.log(structuredClone(NEW_RT_ORDER));
            console.log(' ');
            
            // await resetValNew(NEW_RT_ORDER);
            // await DESTINATION_ROUTE.push(structuredClone(TMP_TL_ORDER[0]));
            
            // console.log(structuredClone(DESTINATION_ROUTE));
            // await highlightPath(DESTINATION_ROUTE[0].routepath);
            // highlightPath(TMP_TL_ORDER[2].routepath);
            
            // for (let i = 1; i < TMP_TL_ORDER.length; i++) DESTINATION_LEFT.push(structuredClone(TMP_TL_ORDER[i]));
            // DESTINATION_LEFT.push(structuredClone(NEW_RT_ORDER.sourcest));
            
            // let NEXT_DESTINATION = {
            //     path: [].concat(structuredClone(DESTINATION_LEFT)),
            //     sourcest: structuredClone(DESTINATION_ROUTE[0])
            // };
            
            // console.log('Next Destination: ', structuredClone(NEXT_DESTINATION));
            
            // await clearProcessPath();
            // await clearPath();
            // await findRoute(NEXT_DESTINATION);
            // await SelectionSortOrder(NEXT_DESTINATION.path);
            // await countWeightRoute(NEXT_DESTINATION);
            
            // await clearProcessPath();
            // await clearPath();
            // // console.log(COMPARE_DESTINATION);
            // // selectionSortCompare(COMPARE_DESTINATION, 0);
            
            // // let nextDestination = structuredClone(COMPARE_DESTINATION[0].path[0]);
            // // console.log(nextDestination);
            // await highlightPath(DESTINATION_ROUTE[0].routepath);
            // await highlightPath(NEXT_DESTINATION.path[0].routepath);
            
            // console.log(DESTINATION_LEFT.length);
            
            
            
            
            // for (let i = 0; i < TMP_TL_ORDER.length; i++) {
            //     let tempRoute =  [];
            //     for (let j = 0; j < TMP_TL_ORDER.length; j++) {
            //         if (i !== j) {
            //             await tempRoute.push(structuredClone(TMP_TL_ORDER[j]));
            //         }
            //     }
                
            //     await tempRoute.push(structuredClone(NEW_RT_ORDER.sourcest));
            //     await COMPARE_DESTINATION.push({
            //         path: [].concat(structuredClone(tempRoute)),
            //         sourcest: structuredClone(TMP_TL_ORDER[i])
            //     });
            // }
            
            // for (const valDest of COMPARE_DESTINATION) {
            //     resetValNew(valDest);
            //     await clearProcessPath();
            //     await clearPath();
            //     await findRoute(valDest);
            //     await SelectionSortOrder(valDest.path);
            //     await countWeightRoute(valDest);
            // }
            
            // console.log(' ');
            // console.log(structuredClone(COMPARE_DESTINATION));
            
            
            
            
            // Update weight
            // for (let i = 1; i < COMPARE_DESTINATION.length; i++) {
            //     const point = COMPARE_DESTINATION[i];
            //     const pointPath = point.path;
            //     for (let vPWegh of pointPath) {
            //         vPWegh.weight += START_PATH.weight;
            //     }
            //     await SelectionSortOrder(pointPath);
            //     await countWeightRoute(point);
            // }
            
            // find end route
            // for (let i = 1; i < COMPARE_DESTINATION.length; i++) {
            //     let idx_orgSrc = valDest
            // }
            // console.log('Update Weight');
            
            // console.log(structuredClone(COMPARE_DESTINATION));
            
            
            // for (const valDest of COMPARE_DESTINATION) {
            //     let valRow = valDest.sourcest.row;
            //     let valCol = valDest.sourcest.col;
            //     if (valCol == START_PATH.row && valRow == START_PATH.col) continue;
                
            //     let idx_orgSrc = -1;
            //     let idx_endSrc = -1;
            //     for (let i = 0; i < valDest.path.length; i++) {
            //         const point = valDest.path[i];
                    
            //         // Cari indeks berdasarkan kriteria col dan row
            //         if (point.col === ORG_SRC_PATH.col && point.row === ORG_SRC_PATH.row) {
            //             idx_orgSrc = i;
            //         }
                    
            //         if (point.col === START_PATH.col && point.row === START_PATH.row) {
            //             idx_endSrc = i;
            //         }
                    
            //         // Jika kedua indeks sudah ditemukan, keluar dari loop
            //         if (idx_orgSrc !== -1 && idx_endSrc !== -1) {
            //             break;
            //         }
            //     }
            //     if (idx_orgSrc !== -1 && idx_endSrc !== -1) {
            //         if (idx_orgSrc < idx_endSrc) {
            //             console.log(idx_orgSrc);
            //             await listEnd.push({
            //                 path: structuredClone(TMP_TL_ORDER[idx_orgSrc]),
            //                 weightroute: structuredClone(valDest.weightroute)
            //             });
            //             // END_PATH = structuredClone(TMP_TL_ORDER[idx_orgSrc]);
            //             // break;
            //         }
            //     }
                
            //     // valDest
            // }
            
            
            
            
            
            // Find end
            // console.log('');
            // console.log('Find End');
            
            // let listEnd = [];
            // const startPoint = structuredClone(COMPARE_DESTINATION[0].path);
            // for (let i = 1; i < COMPARE_DESTINATION.length; i++) {
            //     const point = structuredClone(COMPARE_DESTINATION[i]);
            //     const pointPath = point.path;
            //     let idxSrc = pointPath.findIndex(item => item.col === ORG_SRC_PATH.col && item.row === ORG_SRC_PATH.row);
            //     let idxStrt = pointPath.findIndex(item => item.col === START_PATH.col && item.row === START_PATH.row);
            //     if (idxSrc < idxStrt) listEnd.push({
            //         path: structuredClone(point.sourcest),
            //         sourcest: structuredClone(pointPath[idxSrc])
            //     });
            // }
            
            // if (listEnd.length > 0) {
            //     console.log(structuredClone(listEnd));
            //     selectionSortSourcest(listEnd);
            //     console.log(structuredClone(listEnd));
                
            //     END_PATH = structuredClone(listEnd[0].path);
            //     for (const destLeft of TMP_TL_ORDER) {
            //         let vlCol = destLeft.col;
            //         let vlRow = destLeft.row;
                    
            //         if ((START_PATH.col === vlCol && START_PATH.row === vlRow) ||
            //             (END_PATH.col === vlCol && END_PATH.row === vlRow)) continue;
                    
            //         DESTINATION_LEFT.push(structuredClone(destLeft));
            //     }
            // }
            
            // if (DESTINATION_LEFT.length > 0) console.log(structuredClone(DESTINATION_LEFT));
            
            
            
            
            
            
            // selectionSortCompare(listEnd);
            // console.log(structuredClone(listEnd));
            // END_PATH = structuredClone(listEnd[0].path[0]);
            
            // // console.log(structuredClone(COMPARE_DESTINATION));
            
            // // console.log(' ');
            // console.log(structuredClone(START_PATH));
            // console.log(structuredClone(END_PATH));
            
            // await clearProcessPath();
            // await clearPath();
            
            // await highlightPath(START_PATH.routepath);
            // await highlightPath(END_PATH.routepath);
            
            
            
            // INI fiksnya nantni ada yang disini
            // let NEXT_DESTINATION = [];
            // console.log(structuredClone(DESTINATION_ROUTE));
            // console.log(structuredClone(DESTINATION_LEFT));
            
            
            await COMPARE_DESTINATION.push(structuredClone(NEW_RT_ORDER));
            
            for (let i = 0; i < TMP_TL_ORDER.length; i++) {
                let tempRoute =  [];
                for (let j = 0; j < TMP_TL_ORDER.length; j++) {
                    if (i !== j) {
                        await tempRoute.push(structuredClone(TMP_TL_ORDER[j]));
                    }
                }
                
                await tempRoute.push(structuredClone(NEW_RT_ORDER.sourcest));
                await COMPARE_DESTINATION.push({
                    path: structuredClone(tempRoute),
                    sourcest: structuredClone(TMP_TL_ORDER[i])
                });
            }
            
            for (const valDest of COMPARE_DESTINATION) {
                resetValNew(valDest);
                await clearProcessPath();
                await clearPath();
                await findRoute(valDest);
                await SelectionSortOrder(valDest.path);
                await countWeightRoute(valDest);
            }
            
            console.log(structuredClone(COMPARE_DESTINATION));
            
            let TMP_listEndPath = [];
            
            for (const vDest of COMPARE_DESTINATION) {
                await clearProcessPath();
                await clearPath();
                
                let NEXT_DESTINATION;
                let DESTINATION_LEFT = [];
                let DESTINATION_ROUTE = [];
                
                for (let i = 1; i < vDest.path.length; i++) await DESTINATION_LEFT.push(structuredClone(vDest.path[i]));
                DESTINATION_LEFT.push(structuredClone(vDest.sourcest));
                await DESTINATION_ROUTE.push(structuredClone(vDest.path[0]));
                // console.log('Destination Left: ');
                // console.log(structuredClone(DESTINATION_LEFT));
                // console.log('Destination Route: ');
                // console.log(structuredClone(DESTINATION_ROUTE));
                
                while (DESTINATION_LEFT.length > 0) {
                    // console.log(structuredClone(DESTINATION_LEFT));
                    NEXT_DESTINATION = {
                        path: structuredClone(DESTINATION_LEFT),
                        sourcest: structuredClone(DESTINATION_ROUTE[DESTINATION_ROUTE.length - 1])
                    }
                    
                    await resetValNew(NEXT_DESTINATION);
                    await clearProcessPath();
                    await clearPath();
                    await findRoute(NEXT_DESTINATION);
                    await countWeightRoute(NEXT_DESTINATION);
                    
                    let tmpVal = NEXT_DESTINATION.path[0];
                    let indexToRemove = DESTINATION_LEFT.findIndex(item => item.col === tmpVal.col && item.row === tmpVal.row);
                    if (indexToRemove !== -1) {
                        DESTINATION_LEFT.splice(indexToRemove, 1);
                    }
                    await DESTINATION_ROUTE.push(structuredClone(NEXT_DESTINATION.path[0]));
                }
                // console.log(' ');
                // console.log(' ');
                // console.log(structuredClone(DESTINATION_ROUTE));
                await TMP_listEndPath.push({
                    path: structuredClone(DESTINATION_ROUTE)
                });
                TMP_listEndPath[TMP_listEndPath.length - 1].sourcestPath = structuredClone(vDest.sourcest);
                calculateTotalDistance(TMP_listEndPath[TMP_listEndPath.length - 1]); // same like weight route for path
                
                await clearProcessPath();
                await clearPath();
                for(const destRt of DESTINATION_ROUTE) {
                    await highlightPath(destRt.routepath);
                }
                // await sleep(250);
            }
            
            console.log(structuredClone(TMP_listEndPath));
            await selectionSortCompare(TMP_listEndPath, 0);
            console.log(structuredClone(TMP_listEndPath));
            await clearProcessPath();
            await clearPath();
            for(const destRt of TMP_listEndPath[0].path) {
                await highlightPath(destRt.routepath);
            }
            
            // END_PATH = structuredClone(TMP_listEndPath[0].sourcestPath);
            
            
            // let filterListEndPath = structuredClone(TMP_listEndPath.filter(item => {
            //     const srcP = item.sourcestPath;
            //     // Jika path adalah array, gunakan some untuk mengecek apakah ada yang merupakan start path
            //     // if (Array.isArray(item.path)) {
            //     //     return !item.path.some(p => p.row === START_PATH.row && p.col === START_PATH.col);
            //     // }
            //     // Jika path bukan array, cek langsung
            //     // return !(item.path.row === START_PATH.row && item.path.col === START_PATH.col);
            //     return !(srcP.row === START_PATH.row && srcP.col === START_PATH.col);
            // }));
            
            // console.log(filterListEndPath);
            // console.log(structuredClone(START_PATH));
            // console.log(structuredClone(END_PATH));
            
            // let listEndPath = [];
            // let idxOrg = TMP_TL_ORDER.length;
            // console.log(structuredClone(idxOrg));
            
            // for (let i = 0; i < TMP_listEndPath.length; i++) {
            //     const endP = TMP_listEndPath[i];
            //     const paths = endP.path;
            //     const sourcest = endP.sourcestPath;
            //     if (sourcest.row === ORG_SRC_PATH.row && sourcest.col === ORG_SRC_PATH.col) continue;
                
            //     let idxFound = paths.findIndex(item => item.row === ORG_SRC_PATH.row && item.col === ORG_SRC_PATH.col);
            //     if (idxFound !== -1) {
            //         const pathFound = TMP_TL_ORDER.flat().find(item => item.col === sourcest.col && item.row === sourcest.row);
            //         if (idxFound <= idxOrg) {
            //             idxOrg = idxFound;
            //             // await listEndPath.push({
            //             //     path: await structuredClone(pathFound),
            //             //     indexPath: await structuredClone(idxOrg),
            //             //     indexList: await structuredClone(i),
            //             //     weightroute: await structuredClone(endP.weightroute)
            //             // });
            //             await listEndPath.push(await structuredClone(pathFound));
            //         }
            //     }
            // }
            
            // console.log(structuredClone(listEndPath));
            
            // let filterListEndPath = structuredClone(listEndPath.filter(item => {
            //     // Jika path adalah array, gunakan some untuk mengecek apakah ada yang merupakan start path
            //     if (Array.isArray(item.path)) {
            //         return !item.path.some(p => p.row === START_PATH.row && p.col === START_PATH.col);
            //     }
            //     // Jika path bukan array, cek langsung
            //     // return !(item.path.row === START_PATH.row && item.path.col === START_PATH.col);
            //     return !(item.row === START_PATH.row && item.col === START_PATH.col);
            // }));
            
            
            // console.log(structuredClone(filterListEndPath));
            
            // if(filterListEndPath.length > 0) {
            //     let sortEnd = structuredClone(filterListEndPath);
            //     SelectionSortOrder(sortEnd);
            //     console.log(sortEnd);
            //     // END_PATH = structuredClone(sortEnd[0]);
                
            //     console.log(' ');
            //     console.log(' ');
            //     console.log(structuredClone(START_PATH));
            //     // console.log(structuredClone(END_PATH));    
            // }
            
            
            
            
            
            // await clearProcessPath();
            // await clearPath();
            
            // console.log(structuredClone(DESTINATION_ROUTE));
            // for(const destRt of DESTINATION_ROUTE) {
            //     await highlightPath(destRt.routepath);
            // }
            
            
            
            
            
            
            
            
            
            
            
            // // await clearProcessPath();
            // // await clearPath();
            // console.log(COMPARE_DESTINATION);
            // selectionSortCompare(COMPARE_DESTINATION, 0);
            
            // let nextDestination = structuredClone(COMPARE_DESTINATION[0].path[0]);
            // console.log(nextDestination);
            // await highlightPath(DESTINATION_ROUTE[0].routepath);
            // await highlightPath(nextDestination.routepath);
            
            
            
            // console.log(COMPARE_DESTINATION);
            
            
            // for (const valDest of DESTINATION_ROUTE) {
            //     await clearProcessPath();
            //     await clearPath();
            //     await findRoute(valDest);
            //     await SelectionSortOrder(valDest.path);
            //     await countWeightRoute(valDest);
            //     // console.log(structuredClone(valDest));
            // }
            
            
            
            // for(let i = 0; i < 3; i++) {
            //     await clearProcessPath();
            //     await clearPath();
                
            //     let NEW_RT_ORDER = await structuredClone(ths_lst_order[ths_lst_order.length - 1]);
            //     await resetValNew(NEW_RT_ORDER);
                
            //     let TMP_TL_ORDER = NEW_RT_ORDER.path;
            //     highlightPath(TMP_TL_ORDER[0]);
            //     highlightPath(TMP_TL_ORDER[1]);
                
            //     // console.log("Pra Processed route:", structuredClone(NEW_RT_ORDER));
                
            //     // let TEMP_SRC = NEW_RT_ORDER.sourcest;
            //     // for (const ORD_POST of TMP_TL_ORDER) {
            //     //     // searchPromises.push(runAStarSearchAsync(GRID, SOURCEST, ORD_POST));
            //     //     await runAStarSearchAsync(GRID, TEMP_SRC, ORD_POST);
            //     //     TEMP_SRC = ORD_POST
            //     // }
                
            //     // await runAStarSearchAsync(GRID, TEMP_SRC, NEW_RT_ORDER.sourcest);
            //     // await SelectionSortOrder(TMP_TL_ORDER);
            //     // await countWeightRoute(NEW_RT_ORDER);
                
            //     // await ths_lst_order.push(NEW_RT_ORDER);
            //     // // console.log(JSON.parse(JSON.stringify(NEW_RT_ORDER)));
            //     // console.log("Processed route:", structuredClone(NEW_RT_ORDER));
            // }
        }
        
        function selectionSortCompare(ths_compare, startFrom = 1) {
            for(let i = startFrom; i < ths_compare.length - 1; i++) {
                let minIdx = i;
                for (let j = i; j < ths_compare.length; j++) {
                    if (ths_compare[j].weightroute < ths_compare[minIdx].weightroute){
                        minIdx = j;
                        // console.log(i, ' [i] : ', ths_compare[i].weightroute);
                        // console.log(minIdx, ' [minIdx] : ', ths_compare[minIdx].weightroute);
                    }
                }
                if (minIdx != i) {
                    // console.log('Swap', i, minIdx);
                    // idxSwap.push({swap: minIdx, with: i});
                    // [tmp_ordr[i], tmp_ordr[minIdx]] = [tmp_ordr[minIdx], tmp_ordr[i]];
                    [ths_compare[i], ths_compare[minIdx]] = [ths_compare[minIdx], ths_compare[i]];
                };
            }
        }
        
        function selectionSortSourcest(ths_end) {
            for(let i = 0; i < ths_end.length - 1; i++) {
                let minIdx = i;
                for (let j = i; j < ths_end.length; j++) {
                    if (ths_end[j].sourcest.weight < ths_end[minIdx].sourcest.weight){
                        minIdx = j;
                        // console.log(i, ' [i] : ', ths_end[i].weightroute);
                        // console.log(minIdx, ' [minIdx] : ', ths_end[minIdx].weightroute);
                    }
                }
                if (minIdx != i) {
                    // console.log('Swap', i, minIdx);
                    // idxSwap.push({swap: minIdx, with: i});
                    // [tmp_ordr[i], tmp_ordr[minIdx]] = [tmp_ordr[minIdx], tmp_ordr[i]];
                    [ths_end[i], ths_end[minIdx]] = [ths_end[minIdx], ths_end[i]];
                };
            }
        }
        
        function calculateTotalDistance(routes) {
            let totalWeight = 0;
            for(const path of routes.path) {
                totalWeight += path.weight;
            }
            routes.weightroute = totalWeight;
        }
        
        function resetValNew(ths_nw_order) {
            for (let vPath of ths_nw_order.path) {
                // delete vPath.routepath;
                vPath.weight = 0;
            }
            delete ths_nw_order.sourcest.routepath;
            ths_nw_order.sourcest.weight = 0;
            ths_nw_order.weightroute = 0;
            if (ths_nw_order.sourcestOriginal)ths_nw_order.sourcestOriginal.weight = 0; 
        }
    </script>
</body>
</html>
