<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Best Route Finding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/main/s.css')}}">
    @php
        $dataRow = rand(8, 15);
        $dataCol = rand(8, 15);
    @endphp
    <style>
        * {
            
        }
        
        #grid {
            display: grid;
            grid-template-columns: repeat({{ $dataCol }}, 40px);
            grid-template-rows: repeat({{ $dataRow }}, 40px);
            gap: 1px;
        }
        
        .grid-cell {
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
        }
        
        .blocked {
            background-color: black;
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
            background-color: red;
        }
        
    </style>
</head>
<body>
    <h1 class="text-center">Best Route Finding with A* Algorithm</h1>
    <div class="ctr-aStar border border-black grid grid-cols-5">
        
        <div class="ctr-lstGrid flex items-center justify-center p-6 border border-black" style="grid-column: 1 / 5; grid-row: 1 / -1;">
            <div id="grid" class="border border-black" data-col="{{ rand(8, 20) }}" data-row="{{ rand(8, 20) }}"></div>
        </div>
        <div class="ctr-btnFindRoute border border-black" style="grid-column: 5 / 6; grid-row: 1 / -1;">
            <div class="ctrDetSourceEnd">
                <div class="cSrc flex items-center gap-8">
                    <div id="rwClSourceStyle"></div>
                    <div id="valClSource"></div>
                </div>
            </div>
            <button id="btn-findRoute" class="border border-black px-4 py-2 rounded-xl">Find Route</button>
        </div>
    </div>
    {{-- <button onclick="createGrid()">Create Grid</button> --}}
    
    
    <script>
        // const ROW = document.getElementById('grid').getAttribute('data-grid');
        // const COL = document.getElementById('grid').getAttribute('data-grid');
        const ROW = {{ $dataRow }};
        const COL = {{ $dataCol }};
        const rowColSourceStl = document.getElementById('rwClSourceStyle');
        const valrwClSource = document.getElementById('valClSource');
        
        // const grid = [
        //     [1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        //     [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        //     [1, 0, 1, 1, 1, 1, 1, 1, 0, 1],
        //     [1, 0, 1, 0, 0, 0, 0, 1, 0, 1],
        //     [1, 0, 1, 0, 1, 1, 0, 1, 0, 1],
        //     [1, 0, 1, 0, 1, 0, 0, 1, 0, 1],
        //     [1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
        //     [1, 0, 1, 0, 0, 0, 0, 0, 0, 1],
        //     [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
        // ];
        let GRID = [];
        
        let SOURCEST;
        let TOTAL_ORDER = [];
        
        // let src = { row: 0, col: 0 };
        // let dest = { row: 8, col: 9 };
        let src, dest;
        
        $(document).ready(function () {
            createRandomGrid(ROW, COL);
            
            SOURCEST = setRowColumn();
            setTotalOrder();
            src = setRowColumn();
            dest = setRowColumn();
            
            valrwClSource.innerHTML = (SOURCEST['row'] + 1) + ' ---- ' + (SOURCEST['col'] + 1);
            
            createGrid(SOURCEST);
            $('#btn-findRoute').click(function (e) {
                e.preventDefault();
                aStarSearch(GRID, SOURCEST, dest);
            });
        });
        
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
        
        function createGrid(src) {
            const gridContainer = document.getElementById('grid');
            gridContainer.innerHTML = '';
            for (let i = 0; i < ROW; i++) {
                for (let j = 0; j < COL; j++) {
                    const cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    if (GRID[i][j] === 0) {
                        cell.classList.add('blocked');
                    }
                    if (i === src.row && j === src.col) {
                        cell.classList.add('start');
                        rowColSourceStl.classList.add('grid-cell');
                        rowColSourceStl.classList.add('start');
                    }
                    if (i === dest.row && j === dest.col) {
                        cell.classList.add('end');
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
            
            return { row: TMP_ROW, col: TMP_COL };
        }
        
        function setTotalOrder() {
            let tmp_tlOrder = Math.floor((Math.random() * 3) + 1);
            for (let i = 0; i < tmp_tlOrder; i++) {
                let TMP_RCORDER;
                do {
                    TMP_RCORDER = setRowColumn();
                } while(!(isDestination(SOURCEST.row, SOURCEST.col, TMP_RCORDER)));
                
                TOTAL_ORDER.push(setRowColumn);
            }
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
        
        function tracePath(cellDetails, dest) {
            let row = dest.row;
            let col = dest.col;
            const path = [];
            
            while (!(cellDetails[row][col].parent_row === row && cellDetails[row][col].parent_col === col)) {
                path.push({ row, col });
                const temp_row = cellDetails[row][col].parent_row;
                const temp_col = cellDetails[row][col].parent_col;
                row = temp_row;
                col = temp_col;
            }
            
            path.push({ row, col });
            path.reverse();
            highlightPath(path);
        }
        
        function highlightPath(path) {
            path.forEach(pos => {
                const index = pos.row * COL + pos.col;
                document.querySelectorAll('.grid-cell')[index].classList.add('path');
            });
        }
        
        function aStarSearch(grid, src, dest) {
            if (!isValid(src.row, src.col) || !isValid(dest.row, dest.col)) {
                alert('Source or Destination is invalid');
                return;
            }
            
            if (!isUnBlocked(grid, src.row, src.col) || !isUnBlocked(grid, dest.row, dest.col)) {
                alert('Source or the destination is blocked');
                return;
            }
            
            if (isDestination(src.row, src.col, dest)) {
                alert('We are already at the destination');
                return;
            }
            
            const closedList = Array.from({ length: ROW }, () => Array(COL).fill(false));
            const cellDetails = Array.from({ length: ROW }, () => Array(COL).fill(null).map(() => ({
                parent_row: -1,
                parent_col: -1,
                f: Number.MAX_VALUE,
                g: Number.MAX_VALUE,
                h: Number.MAX_VALUE
            })));
            
            let i = src.row, j = src.col;
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
                
                const di = [-1, 1, 0, 0, -1, -1, 1, 1];
                const dj = [0, 0, -1, 1, -1, 1, -1, 1];
                for (let k = 0; k < 8; k++) {
                    const ni = i + di[k];
                    const nj = j + dj[k];
                    
                    if (isValid(ni, nj)) {
                        if (isDestination(ni, nj, dest)) {
                            cellDetails[ni][nj].parent_row = i;
                            cellDetails[ni][nj].parent_col = j;
                            tracePath(cellDetails, dest);
                            return;
                        } else if (!closedList[ni][nj] && isUnBlocked(grid, ni, nj)) {
                            const gNew = cellDetails[i][j].g + 1.0;
                            const hNew = calculateHValue(ni, nj, dest);
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
            // alert('Failed to find the Destination Cell');
        }
    </script>
</body>
</html>
