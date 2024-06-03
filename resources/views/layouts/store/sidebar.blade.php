@php
    $nowPath = url()->current();
    $ssPath = explode('/', $nowPath);
    $urlChoosed = end($ssPath);

    $ifChoosedAHref = 'shadow-md bg-[#FF3377] text-white border-none shadow-gray-400';
    $ifChoosedIcn = 'shadow-md bg-[#F30052] border-[#D90049] shadow-[#B3003C]';
    $ifChoosedTx = 'font-semibold w-40';

    $ifNotChoosedAHref = 'shadow-none bg-none text-[#909090] border-[#909090] hover:bg-[#FF3377] hover:text-white hover:border-transparent hover:shadow-md hover:shadow-gray-400';
    $ifNotChoosedIcn = 'shadow-none bg-none border-[#909090] group-hover:bg-[#F30052] group-hover:border-[#D90049] group-hover:shadow-md group-hover:shadow-[#B3003C]';
    $ifNotChoosedTx = 'font-light group-hover:font-semibold w-40';
@endphp

<div class="cSidebar">
    <div class="ctr-Utils-sb py-6 px-4 border-2 border-[#D9D9D9] rounded-xl">
        <div class="cUtils-sb">
            <div class="ctr-headTStore relative">
                <div class="cStore flex flex-col xl:flex-row h-28 xl:h-auto gap-1 xl:gap-0 relative bg-gray-200 rounded-md">
                    <div class="ctr-detCStore">
                        <div class="detCStore flex flex-col xl:flex-row items-center gap-4">
                            <div class="imgStore">
                                <div class="cImg w-20 p-1.5 aspect-square bg-[#D9D9D9] rounded-md">
                                    <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                        class="object-cover object-center">
                                </div>
                            </div>
                            <div class="nameStore w-[9.25rem] hidden xl:block">
                                <div class="tx line-clamp-2">
                                    <p>@{{ Awan Laundry Express }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-clckStr flex-1 rounded-b-md xl:rounded-bl-none xl:rounded-r-md cursor-pointer relative transition-colors hover:bg-gray-300">
                        <div class="icClStore absolute transition-all left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-90 xl:rotate-0 xl:hover:rotate-90">
                            <span class="icn text-xl">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ctr-listStore absolute w-auto bg-white shadow-lg shadow-black/60 rounded-lg p-2 whitespace-nowrap">
                    @php
                        $activeThisStore = "shadow-pink-800 bg-[#FF3377] text-white";
                        $notActiveThisStore = "shadow-gray-600 hover:text-white bg-white group-hover/store:bg-[#FF3377] group-hover/store:shadow-pink-800";
                        
                        $activeThisStoreSetting = "text-pink-900 group-hover/settingStore:text-pink-950";
                        $notActiveThisStoreSetting = "text-[#9D9D9D] group-hover/store:text-pink-900 group-hover/store:group-hover/settingStore:text-pink-950";
                    @endphp
                    <div class="cListStore p-2 space-y-1 overflow-y-scroll" style="height: 24rem;">
                        <div class="ctr-storeItm block cursor-pointer group/store">
                            <div class="cStoreItm flex items-center p-2 gap-1.5 rounded-lg shadow-md transition-all {{$activeThisStore}}">
                                <div class="cCStoreItm flex items-center gap-2">
                                    <div class="lftImgStore">
                                        <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-md shadow-black/50 rounded-md">
                                            <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                class="object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="rghtNameStore text-sm md:text-lg font-light">
                                        <div class="tx">
                                            <p>@{{ Awan Laundry Express }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="toSettTStore block relative group/settingStore">
                                    <div class="stngTStore">
                                        <div class="icn">
                                            <span class="icnSettings {{$activeThisStoreSetting}} text-lg md:text-xl lg:text-2xl transition-all">
                                                <i class="fa-solid fa-gear"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @for ($i = 0; $i < 10; $i++)
                            <div class="ctr-storeItm block cursor-pointer group/store">
                                <div class="cStoreItm flex items-center p-2 gap-1.5 rounded-lg shadow-md transition-all {{$notActiveThisStore}}">
                                    <div class="cCStoreItm flex items-center gap-2">
                                        <div class="lftImgStore">
                                            <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-md shadow-black/50 rounded-md">
                                                <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                    class="object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="rghtNameStore text-sm md:text-lg font-light">
                                            <div class="tx">
                                                <p>@{{ Awan Laundry Express }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="toSettTStore block relative group/settingStore">
                                        <div class="stngTStore">
                                            <div class="icn">
                                                <span class="icnSettings {{$notActiveThisStoreSetting}} text-lg md:text-xl lg:text-2xl transition-all">
                                                    <i class="fa-solid fa-gear"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="ctr-lstUtils mt-4">
                <div class="cUtils">
                    <ul class="*:my-3">
                        <li>
                            <div class="myAccount-sb">
                                <a href="{{ route('store\myStore') }}"
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'mystore' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'mystore' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnUser text-2xl">
                                                <i class="fa-solid fa-store"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'mystore' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Toko Saya</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="notification-sb">
                                <a href=""
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'notification' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'notification' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnNotif text-2xl">
                                                <i class="fa-solid fa-bell"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'notification' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Notifikasi</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="transaction-sb">
                                <a href=""
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'transaction' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'transaction' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnTransac text-2xl">
                                                <i class="fa-solid fa-receipt"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'transaction' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Daftar Transaksi</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="promo-sb">
                                <a href="{{ route('user\myPromo') }}"
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'promo' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'promo' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnPromo text-2xl">
                                                <i class="fa-solid fa-bullhorn"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'promo' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Promo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="settings-sb">
                                <a href=""
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'settings' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'settings' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnSettings text-2xl">
                                                <i class="fa-solid fa-gear"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'settings' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Pengaturan</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="stores-sb">
                                <a href=""
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'stores' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'stores' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnStores text-2xl">
                                                <i class="fa-solid fa-store"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'stores' ? $ifChoosedTx : $ifNotChoosedTx }}">
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
                <a href=""
                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'logout' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                    <div class="c flex items-center gap-4">
                        <div
                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'logout' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                            <span class="icnLogout text-2xl">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </span>
                        </div>
                        <div
                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'logout' ? $ifChoosedTx : $ifNotChoosedTx }}">
                            <p>Keluar</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
