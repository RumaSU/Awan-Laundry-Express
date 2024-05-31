<div class="cNav">
    <div class="mx-[5%] flex items-center justify-between">
        <div class="left-home">
            <div class="ctr-hm">
                <div class="home-icn">
                    <a href="" class="p-3 rounded-md bg-[#FF3377] shadow-md">
                        <i class="fa-solid fa-house text-xl text-white"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="right-chs">
            <div class="ctr-util-chsDesk flex items-center gap-10 text-[#747474]">
                <div class="util-chsDesk hidden xl:block">
                    <ul class="flex items-center gap-2 text-xl">
                        <li class="mapsLoc-desktop">
                            <div class="map-icn">
                                <a href="" class="border border-[#D9D9D9] p-3 rounded-md bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </a>
                            </div>
                        </li>
                        <li class="notification-desktop">
                            <div class="notif-icn">
                                <a href="" class="border border-[#D9D9D9] p-3 rounded-md bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                    <i class="fa-solid fa-bell"></i>
                                </a>
                            </div>
                        </li>
                        <li class="cart-desktop">
                            <div class="cart-icn">
                                <a href="" class="border border-[#D9D9D9] p-3 rounded-md bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                        </li>
                        <li class="transaction-desktop">
                            <div class="transac-icn">
                                <a href="" class="border border-[#D9D9D9] p-3 rounded-md bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                    <i class="fa-solid fa-receipt"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="myAccount-desktop flex items-center gap-2 text-xl xl:text-2xl">
                    <div class="navAccountStore">
                        <a href="" class="block border border-[#D9D9D9] rounded-md xl:rounded-[100%] p-3 w-auto aspect-square bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                            <div class="store-icn relative">
                                <i class="fa-solid fa-store"></i>
                            </div>
                        </a>
                    </div>
                    <div class="navAccountUser">
                        <div class="usr-icnDesktop hidden xl:block">
                            <a href="{{route('user\myAccount')}}" class="border border-[#D9D9D9] rounded-[100%] p-3 w-auto aspect-square bg-white hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                        <div class="usr-icnMobile block xl:hidden">
                            <span id="clckShwNavMobile" class="block cursor-pointer border border-[#D9D9D9] rounded-md p-3 w-auto aspect-square bg-white text-[#747474] hover:bg-[#FF3377] hover:shadow-md hover:shadow-gray-400 hover:text-white hover:border-[#FF3377] transition-all">
                                <i class="fa-solid fa-user "></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-util-chsMobile block xl:hidden relative">
                <div id="container-utilsMobile" class="ctr-utilsChsMbls w-full h-[100vh] bg-white overflow-auto border border-[#D9D9D9] fixed top-0 right-0 sm:w-fit sm:h-fit sm:rounded-md sm:-mt-6 sm:top-auto sm:right-[5%] shadow-md shadow-gray-400" style="display: none">
                    <div class="clsClck absolute right-4 top-2">
                        <div class="cls-icn">
                            <span id="clckClsNavMobile" class="clsClck rounded-md cursor-pointer">
                                <i class="fa-solid fa-x text-xl text-[#747474]"></i>
                            </span>
                        </div>
                    </div>
                    <div class="c p-4 mt-3">
                        <ul class="lstChs grid gap-0.5 text-[#747474]">
                            <li class="myAccount-mobile">
                                <div class="user-icn">
                                    <a href="{{route('user\myAccount')}}" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400 group">
                                        <span class="icnUser text-xl text-center w-8">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <p>Akun Saya</p>
                                    </a>
                                </div>
                            </li>
                            <li class="mapsLoc-mobile">
                                <div class="map-icn">
                                    <a href="" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                        <span class="icnMaps text-xl text-center w-8">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </span>
                                        <p>Maps</p>
                                    </a>
                                </div>
                            </li>
                            <li class="notification-mobile">
                                <div class="notif-icn">
                                    <a href="" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                        <span class="icnBell text-xl text-center w-8">
                                            <i class="fa-solid fa-bell"></i>
                                        </span>
                                        <p>Notifikasi</p>
                                    </a>
                                </div>
                            </li>
                            <li class="promo-mobile">
                                <div class="promo-icn">
                                    <a href="{{route('user\myPromo')}}" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                        <span class="icnPromo text-xl text-center w-8">
                                            <i class="fa-solid fa-bullhorn"></i>
                                        </span>
                                        <p>Promo</p>
                                    </a>
                                </div>
                            </li>
                            <li class="cart-mobile">
                                <div class="cart-icn">
                                    <a href="" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                        <span class="icnCart text-xl text-center w-8">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </span>
                                        <p>Keranjang</p>
                                    </a>
                                </div>
                            </li>
                            <li class="transaction-mobile">
                                <div class="transac-icn">
                                    <a href="" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                        <span class="icnTransac text-xl text-center w-8">
                                            <i class="fa-solid fa-receipt"></i>                                    
                                        </span>
                                        <p>Daftar Transaksi</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="logOut-mobile mt-8">
                            <div class="logout-icn text-[#747474]">
                                <a href="" class="flex items-center gap-4 py-1.5 px-2 rounded-md hover:shadow-sm hover:shadow-gray-400">
                                    <span class="icnTransac text-xl text-center w-8">
                                        <i class="fa-solid fa-right-from-bracket"></i>                                    
                                    </span>
                                    <p>Logout</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>