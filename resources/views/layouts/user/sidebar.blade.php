@php
    $nowPath = url()->current();
    $ssPath = explode('/', $nowPath);
    $urlChoosed = end($ssPath);
    
    $ifChoosedAHref = "shadow-md bg-[#FF3377] text-white border-none shadow-gray-400";
    $ifChoosedIcn = "shadow-md bg-[#F30052] border-[#D90049] shadow-[#B3003C]";
    $ifChoosedTx = "font-semibold w-40";
    
    $ifNotChoosedAHref = "shadow-none bg-none text-[#909090] border-[#909090] hover:bg-[#FF3377] hover:text-white hover:border-transparent hover:shadow-md hover:shadow-gray-400";
    $ifNotChoosedIcn = "shadow-none bg-none border-[#909090] group-hover:bg-[#F30052] group-hover:border-[#D90049] group-hover:shadow-md group-hover:shadow-[#B3003C]";
    $ifNotChoosedTx = "font-light group-hover:font-semibold w-40";
@endphp

<div class="cSidebar">
    <div class="ctrUtils-sb py-6 px-4 border-2 border-[#D9D9D9] rounded-xl">
        <div class="cUtils-sb">
            <div class="ctr-headTUser">
                <div class="cUser flex flex-col xl:flex-row items-center gap-4">
                    <div class="imgUser">
                        <div class="cImg w-20 p-1.5 aspect-square bg-[#D9D9D9] rounded-md">
                            <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                        </div>
                    </div>
                    <div class="nameUser">
                        <div class="tx line-clamp-2">
                            <p>{{ Auth::user()->UserDetail->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-lstUtils mt-4">
                <div class="cUtils">
                    <ul class="*:my-3">
                        <li>
                            <div class="myAccount-sb">
                                <a href="{{route('user\myAccount')}}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'account') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'account') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnUser text-2xl">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'account') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Akun Saya</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="notification-sb">
                                <a href="{{route('user\notification')}}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'notification') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'notification') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnNotif text-2xl">
                                                <i class="fa-solid fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'notification') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Notifikasi</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="transaction-sb">
                                <a href="{{route('user\myTransaction')}}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'transaction') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'transaction') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnTransac text-2xl">
                                                <i class="fa-solid fa-receipt"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'transaction') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Daftar Transaksi</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="promo-sb">
                                <a href="{{route('user\myPromo')}}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'promo') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'promo') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnPromo text-2xl">
                                                <i class="fa-solid fa-bullhorn"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'promo') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Promo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="settings-sb">
                                <a href="{{ route('user\settings') }}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'settings') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'settings') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnSettings text-2xl">
                                                <i class="fa-solid fa-gear"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'settings') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Pengaturan</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="stores-sb">
                                <a href="{{ route('store\myStore') }}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'stores') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                                    <div class="c flex items-center gap-4">
                                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'stores') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                                            <span class="icnStores text-2xl">
                                                <i class="fa-solid fa-store"></i>
                                            </span>
                                        </div>
                                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'stores') ? $ifChoosedTx : $ifNotChoosedTx}}">
                                            <p>Toko Saya</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logout-sb mt-8 px-4">
        <div class="cLogout">
            <div class="logout-sb">
                <a href="{{ route('user\logout') }}" class="rounded-lg border block px-4 py-2 group {{($urlChoosed === 'logout') ? $ifChoosedAHref : $ifNotChoosedAHref}}">
                    <div class="c flex items-center gap-4">
                        <div class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{($urlChoosed === 'logout') ? $ifChoosedIcn : $ifNotChoosedIcn}}">
                            <span class="icnLogout text-2xl">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </span>
                        </div>
                        <div class="tx text-xl hidden xl:block {{($urlChoosed === 'logout') ? $ifChoosedTx : $ifNotChoosedTx}}">
                            <p>Keluar</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>