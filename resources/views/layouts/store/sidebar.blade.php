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
                                    <p>{{ $dataStoreActive->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="clSwLsSre" class="ctr-clckStr flex-1 rounded-b-md xl:rounded-bl-none xl:rounded-r-md cursor-pointer relative transition-colors hover:bg-gray-300">
                        <div id="icClSwr" class="icClStore absolute transition-all left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-90 xl:rotate-0">
                            <span class="icn text-xl">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="ctCSdbCLsSTSnThs" class="ctr-listStore absolute w-auto bg-white shadow-lg shadow-black/60 rounded-lg p-2 whitespace-nowrap left-full top-0 z-10 lg:left-0 lg:top-auto" style="display: none">
                    @php
                        $activeThisStore = "shadow-pink-800 bg-[#FF3377] text-white";
                        $notActiveThisStore = "shadow-black/30 hover:text-white bg-white group-hover/store:bg-[#FF3377] group-hover/store:shadow-pink-800";
                        
                        $activeThisStoreSetting = "text-pink-900 group-hover/settingStore:text-pink-950";
                        $notActiveThisStoreSetting = "text-[#9D9D9D] group-hover/store:text-pink-900 group-hover/store:group-hover/settingStore:text-pink-950";
                    @endphp
                    <div id="cCLsSdbSTrSN" class="cListStore p-2 space-y-1 overflow-y-scroll transition-all duration-500" style="height: 0;">
                        <div class="ctr-storeItm block cursor-pointer group/store">
                            <div class="cStoreItm flex justify-between items-center p-2 gap-1.5 rounded-lg shadow-sm transition-all {{$activeThisStore}}">
                                <div class="cCStoreItm flex items-center gap-2">
                                    <div class="lftImgStore">
                                        <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-md shadow-black/50 rounded-md">
                                            <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                class="object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="rghtNameStore md:w-60 xl:w-72 whitespace-normal">
                                        <div class="tx text-sm md:text-lg font-light line-clamp-2">
                                            <p>
                                                {{ $dataStoreActive->name }}
                                            </p>
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
                        @if (isset($dataStore))
                            @foreach ($dataStore as $store)
                                <div class="ctr-storeItm block cursor-pointer group/store">
                                    <div class="cStoreItm flex justify-between items-center p-2 gap-1.5 rounded-lg shadow-md transition-all {{$notActiveThisStore}}">
                                        <div class="cCStoreItm flex items-center gap-2">
                                            <div class="lftImgStore">
                                                <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-sm shadow-black/30 rounded-md">
                                                    <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                        class="object-cover object-center">
                                                </div>
                                            </div>
                                            <div class="rghtNameStore md:w-60 xl:w-72 whitespace-normal">
                                                <div class="tx text-sm md:text-lg font-light line-clamp-2">
                                                    <p>{{ $store->name }}</p>
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
                            @endforeach
                        @endif
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
                                <a href="{{ route('store\notification') }}"
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
                            <div class="orders-sb">
                                <a href="{{route('store\orders')}}"
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'orders' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 {{ $urlChoosed === 'orders' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnTransac text-2xl">
                                                <i class="fa-solid fa-bag-shopping"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'orders' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Kelola Pesanan</p>
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
                            <div class="services-sb">
                                <a href="{{ route('store\services') }}"
                                    class="rounded-lg border block px-4 py-2 group {{ $urlChoosed === 'services' ? $ifChoosedAHref : $ifNotChoosedAHref }}">
                                    <div class="c flex items-center gap-4">
                                        <div
                                            class="icn flex items-center justify-center w-14 aspect-square rounded-xl border-2 relative {{ $urlChoosed === 'services' ? $ifChoosedIcn : $ifNotChoosedIcn }}">
                                            <span class="icnServc">
                                                <svg width="43" height="38" viewBox="0 0 43 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ $urlChoosed === 'services' ? 'fill-white' : 'fill-[#747474] group-hover:fill-white' }}">
                                                    {{-- <path fill-rule="evenodd" clip-rule="evenodd" d="M0 21.03C0 23.3574 3.60443 23.7613 6.02912 24.4515C15.9093 27.264 13.6041 28.483 19.2713 18.9825C19.7094 18.2482 20.563 16.5875 21.099 16.1948C21.6269 16.5816 22.4618 18.204 22.845 18.8444L26.1412 24.3394C28.1748 27.7779 28.8513 26.5055 35.9965 24.4988C36.9298 24.2368 40.7107 23.324 41.425 22.6746C43.2933 20.9762 40.9844 18.3814 39.2078 14.7894C38.8958 14.1585 38.8754 13.9441 38.1979 13.8069L27.872 15.0557C19.031 16.1391 23.1085 16.059 14.524 15.0774C12.2945 14.8225 9.96138 14.469 7.69237 14.2168C3.23872 13.7218 3.85963 13.0653 2.49083 15.8285C2.00332 16.8127 0 20.1589 0 21.03Z"
                                                        fill="{{ $urlChoosed === 'services' ? '#FFF' : '#747474' }}"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6267 28.7223C12.2768 28.7223 9.81347 27.8133 8.5241 27.4512L3.51673 26.0849C3.51673 35.15 1.1341 32.9629 18.0249 37.0714C22.5301 38.1672 21.2932 37.85 27.0333 36.4146C40.6983 32.9976 38.6817 35.0119 38.6817 26.0849C37.4106 26.1907 30.1056 28.7223 28.7915 28.7223C26.0709 28.7223 25.2824 27.0958 24.2456 25.3561C23.6537 24.363 21.5378 21.1901 21.319 20.3706H20.8795C20.6606 21.1902 18.608 24.2592 18.0345 25.218C17.0567 26.8528 16.1965 28.7223 13.6267 28.7223Z"
                                                        fill="{{ $urlChoosed === 'services' ? '#FFF' : '#494949' }}"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7173 9.85038C20.9603 10.4204 21.0991 11.0729 21.0991 11.7992C21.0991 13.4856 19.8751 13.8304 21.7686 13.6182L32.3079 12.2388C32.393 11.2172 32.9559 10.2303 33.3141 9.28881C33.6576 8.38573 34.286 7.05505 34.286 6.08484C34.286 2.92655 30.5535 1.80833 28.6355 3.7311C28.005 4.36312 27.802 5.24042 27.4723 6.08447C27.1431 6.92733 26.8409 7.71621 26.5114 8.64006L25.5745 10.9999C25.5589 11.0302 25.5254 11.0958 25.4947 11.1398C25.4713 10.0867 25.2194 9.03716 24.777 8.05528L20.7173 9.85038Z"
                                                        fill="{{ $urlChoosed === 'services' ? '#FFF' : '#565656' }}"/>
                                                    <path d="M9.56645 0C9.83563 0 10.06 0.196738 10.1428 0.455623C10.5674 1.79136 11.8203 2.76119 13.301 2.76119C14.7817 2.76119 16.0346 1.79136 16.4591 0.455623C16.5419 0.196738 16.7663 0 17.0355 0H17.4704C18.247 0 18.996 0.272675 19.5931 0.769668L23.949 4.39725C24.1768 4.58706 24.3182 4.86323 24.3424 5.16005C24.3666 5.45687 24.2699 5.75026 24.0732 5.97458L22.1403 8.18356C21.7468 8.63575 21.0635 8.68748 20.6009 8.30436L18.8234 6.82368V13.6275L7.77852 11.885V6.82368L6.00102 8.30436C5.5419 8.68748 4.85853 8.63575 4.46162 8.18356L2.52874 5.97458C2.33201 5.75026 2.23535 5.45687 2.2595 5.16005C2.28371 4.86323 2.42516 4.58706 2.65298 4.39725L7.00885 0.769668C7.60593 0.272675 8.35494 0 9.13154 0H9.56645Z"
                                                        fill="{{ $urlChoosed === 'services' ? '#FFF' : '#8B8B8B' }}"/> --}}
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 21.03C0 23.3574 3.60443 23.7613 6.02912 24.4515C15.9093 27.264 13.6041 28.483 19.2713 18.9825C19.7094 18.2482 20.563 16.5875 21.099 16.1948C21.6269 16.5816 22.4618 18.204 22.845 18.8444L26.1412 24.3394C28.1748 27.7779 28.8513 26.5055 35.9965 24.4988C36.9298 24.2368 40.7107 23.324 41.425 22.6746C43.2933 20.9762 40.9844 18.3814 39.2078 14.7894C38.8958 14.1585 38.8754 13.9441 38.1979 13.8069L27.872 15.0557C19.031 16.1391 23.1085 16.059 14.524 15.0774C12.2945 14.8225 9.96138 14.469 7.69237 14.2168C3.23872 13.7218 3.85963 13.0653 2.49083 15.8285C2.00332 16.8127 0 20.1589 0 21.03Z"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6267 28.7223C12.2768 28.7223 9.81347 27.8133 8.5241 27.4512L3.51673 26.0849C3.51673 35.15 1.1341 32.9629 18.0249 37.0714C22.5301 38.1672 21.2932 37.85 27.0333 36.4146C40.6983 32.9976 38.6817 35.0119 38.6817 26.0849C37.4106 26.1907 30.1056 28.7223 28.7915 28.7223C26.0709 28.7223 25.2824 27.0958 24.2456 25.3561C23.6537 24.363 21.5378 21.1901 21.319 20.3706H20.8795C20.6606 21.1902 18.608 24.2592 18.0345 25.218C17.0567 26.8528 16.1965 28.7223 13.6267 28.7223Z"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7173 9.85038C20.9603 10.4204 21.0991 11.0729 21.0991 11.7992C21.0991 13.4856 19.8751 13.8304 21.7686 13.6182L32.3079 12.2388C32.393 11.2172 32.9559 10.2303 33.3141 9.28881C33.6576 8.38573 34.286 7.05505 34.286 6.08484C34.286 2.92655 30.5535 1.80833 28.6355 3.7311C28.005 4.36312 27.802 5.24042 27.4723 6.08447C27.1431 6.92733 26.8409 7.71621 26.5114 8.64006L25.5745 10.9999C25.5589 11.0302 25.5254 11.0958 25.4947 11.1398C25.4713 10.0867 25.2194 9.03716 24.777 8.05528L20.7173 9.85038Z"/>
                                                    <path d="M9.56645 0C9.83563 0 10.06 0.196738 10.1428 0.455623C10.5674 1.79136 11.8203 2.76119 13.301 2.76119C14.7817 2.76119 16.0346 1.79136 16.4591 0.455623C16.5419 0.196738 16.7663 0 17.0355 0H17.4704C18.247 0 18.996 0.272675 19.5931 0.769668L23.949 4.39725C24.1768 4.58706 24.3182 4.86323 24.3424 5.16005C24.3666 5.45687 24.2699 5.75026 24.0732 5.97458L22.1403 8.18356C21.7468 8.63575 21.0635 8.68748 20.6009 8.30436L18.8234 6.82368V13.6275L7.77852 11.885V6.82368L6.00102 8.30436C5.5419 8.68748 4.85853 8.63575 4.46162 8.18356L2.52874 5.97458C2.33201 5.75026 2.23535 5.45687 2.2595 5.16005C2.28371 4.86323 2.42516 4.58706 2.65298 4.39725L7.00885 0.769668C7.60593 0.272675 8.35494 0 9.13154 0H9.56645Z"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div
                                            class="tx text-xl hidden xl:block {{ $urlChoosed === 'services' ? $ifChoosedTx : $ifNotChoosedTx }}">
                                            <p>Layanan</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="promo-sb">
                                <a href="{{ route('store\promo') }}"
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
                                <a href="{{ route('store\settings') }}"
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
