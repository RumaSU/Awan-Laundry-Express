@php
    $nowPath = url()->current();
    $ssPath = explode('/', $nowPath);
    $urlChoosed = end($ssPath);
@endphp

<div class="cSidebar">
    <div class="ctrUtils-sb">
        <div class="cUtils-sb">
            {{$nowPath}} <br>
            {{$urlChoosed}}
        </div>
    </div>
    <div class="logout">
        
    </div>
</div>