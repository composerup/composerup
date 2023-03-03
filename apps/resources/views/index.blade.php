@extends('app')

<style>
body {
    font-family: 'Inter', sans-serif;
}

.bg-amber-500 {
    background: #3F9F63!important;
}
</style>

@section('content')
 <!-- component -->
    <header class="absolute w-full top-0 left-0">
        <div class="w-full bg-cover bg-center">
            <div class="h-full w-full ">
                <nav class="">
                    <div class="container mx-auto px-6 pt-12 md:pt-3 ">
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="flex relative justify-center md:justify-between items-center">
                                <div class="text-xl font-semibold text-gray-700">
                                    <a href="{{ url('/') }}" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">
                                        <img src="./images/logo_white.png" class="w-auto md:w-24 xl:w-auto" alt="">
                                    </a>
                                </div>
        
                                <!-- Mobile menu button -->
                                <div class="flex md:hidden">
                                    <button type="button" onclick="openNav()"
                                        class="text-gray-100 hover:text-gray-600 absolute top-2 left-0 focus:outline-none focus:text-gray-600"
                                        aria-label="toggle menu">
                                        <svg viewBox="0 0 24 24" class="h-7 w-7 fill-current">
                                            <path fill-rule="evenodd"
                                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <div id="mySidenav" class="sidenav h-full w-0 fixed z-10 top-0 left-0 bg-white
                                            overflow-hidden pt-4" style="transition: 0.5s;">
                                        <a href="{{ url('/') }}"
                                            class="text-gray-800 text-xl py-3 font-bold hover:text-gray-700 md:text-2xl">
                                            <img class="w-auto" src="./images/logo_black.png" alt="">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="closebtn absolute top-2 right-6 text-3xl ml-12 text-gray-500"
                                            onclick="closeNav()">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('studio') }}">The Studio</a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('fund') }}">Fund </a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('team') }}">Team</a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('investments') }}"> Portfolio Companies </a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('faq') }}">FAQ </a>
                                        <a href="{{ url('incubator') }}"
                                            class="bg-amber-500 text-white ml-8 mt-4 active:bg-amber-600 font-bold uppercase text-sm px-6 py-2 my-3
                                    rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150"
                                            type="button">
                                            Incubator Program
                                    </a>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                            <div class="hidden -mx-4 md:flex md:items-center w-[900px]">
                                <a href="{{ url('studio') }}"
                                    class="{{ (request()->is('Home')) ? 'block mx-6 mt-2 py-3 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 mt-2 py-3 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white active:text-amber-500 active:border-amber-500 cursor-pointer' }}">
                                    Home
                                </a>
                                <a href="{{ url('studio') }}"
                                    class="{{ (request()->is('Home')) ? 'block mx-6 mt-2 py-3 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 mt-2 py-3 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white active:text-amber-500 active:border-amber-500 cursor-pointer' }}">
                                    Pricing
                                </a>
                                <a href="{{ url('studio') }}"
                                    class="{{ (request()->is('Home')) ? 'block mx-6 mt-2 py-3 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 mt-2 py-3 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white active:text-amber-500 active:border-amber-500 cursor-pointer' }}">
                                    Templates(Coming soon)
                                </a>
                                <a href="{{ url('studio') }}"
                                    class="{{ (request()->is('Home')) ? 'block mr-9 ml-auto mt-2 py-3 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mr-9 mt-2 py-3 border-b-2 hover:border-white ml-auto border-transparent h-full text-sm text-white capitalize hover:text-white active:text-amber-500 active:border-amber-500 cursor-pointer' }}">
                                    Login
                                </a>
                                <a href="{{ url('incubator') }}"
                                    class="bg-amber-500 text-white active:bg-amber-600 text-center text-[18px] my-3 leading-[56px] w-[202px] h-[56px]
                                        rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150"
                                    type="button">
                                    Create account
                            </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section>
        <div class="w-full bg-cover bg-[url('/images/banner.png')] h-[1050px] flex bg-no-repeat pt-44">
            <div class="container mx-auto">
                <div class="flex">
                    <div class="w-6/12 text-white">
                        <h1 class="text-[64px] leading-[140%] mb-9 font-medium tracking-tight">EXPERIENCE THE <br> FREEDOM OF<br> BUILDING YOUR OWN<br> WEBSITE</h1>
                        <p class="text-[18px] leading-7 mb-14 tracking-tight">Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum<br> is simply dummy text of the printing and typesettingis simply dummy text of the<br> printing and typesetting</p>
                        <a href="/" class="bg-amber-500 text-white active:bg-amber-600 leading-[56px] text-center text-[18px] my-3 w-[243px] h-[56px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            Get Started For Free
                        </a>
                    </div>
                    <div class="w-6/12 text-white">
                        <img src="/images/bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-cover bg-[url('/images/bg1.png')] h-[785px] flex bg-no-repeat -mt-[150px]">
            <div class="container mx-auto">
                <div class="flex justify-center items-center h-full">
                    <a href="" class="text-[48px] leading-[58px] mb-9 font-bold tracking-tight w-[380px]" >Get Started<br> Now 
                        <svg width="82" height="24" class="inline-block" viewBox="0 0 82 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81.0607 13.0607C81.6464 12.4749 81.6464 11.5251 81.0607 10.9393L71.5147 1.3934C70.9289 0.807611 69.9792 0.807611 69.3934 1.3934C68.8076 1.97919 68.8076 2.92893 69.3934 3.51472L77.8787 12L69.3934 20.4853C68.8076 21.0711 68.8076 22.0208 69.3934 22.6066C69.9792 23.1924 70.9289 23.1924 71.5147 22.6066L81.0607 13.0607ZM0 13.5H80V10.5H0V13.5Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="w-[283px]">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-10">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Code Available</h3>
                            <p class="text-[16px] mb-20 leading-[24px]">Starter pack to help you to get started</p>
                            <h4 class="text-[40px] mb-10 leading-[60px] font-semibold">Free</h4>
                            <a href="#" class="bg-amber-500 text-white active:bg-amber-600 leading-[43px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Download</a>
                        </div>
                    </div>
                    <div class="w-[283px] mx-3">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-6">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Pro<br> (coming  soon)</h3>
                            <p class="text-[16px] mb-10 leading-[24px]">More power for small teams create project plans with confidence</p>
                            <h4 class="text-[20px] mb-10 leading-[30px] justify-center flex items-center">$<b class="text-[40px] leading-[60px]">5</b> / month</h4>
                            <a href="#" class=" border border-gray-900 text-dark hover:bg-amber-500 leading-[43px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                    <div class="w-[283px]">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-6">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Business+<br> (coming  soon)</h3>
                            <p class="text-[16px] mb-10 leading-[24px]">For companies that need to manage work happening across multiple teams.</p>
                            <h4 class="text-[20px] mb-10 leading-[30px] justify-center flex items-center">$<b class="text-[40px] leading-[60px]">15</b> / month</h4>
                            <a href="#" class=" border border-gray-500 text-dark hover:bg-amber-500 leading-[43px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
@endsection