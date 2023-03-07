@extends('app')

<style>
.hover\:bg-amber-500:hover{
    background: #3F9F63!important;
    color: #fff!important;
}
.after-bg::after {
    background: #15111E;
    height: 100%;
    width: 500%;
    display: inline-block;
    top:0;
    left:-495%;
    position: absolute;
    z-index: -1;
}
.shadow-custom{
    box-shadow: 0px 3px 14px rgba(74, 58, 255, 0.03), 0px -2px 4px rgba(20, 20, 43, 0.02), 0px 12px 24px rgba(20, 20, 43, 0.04);
}
</style>

@section('content')
 <!-- component -->
    <header class="absolute w-full top-0 left-0">
        <div class="w-full bg-cover bg-center">
            <div class="h-full w-full ">
                <nav class="">
                    <div class="container mx-auto px-6 pt-12 md:pt-3 2xl:px-0 xl:px-9">
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
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('/') }}">home</a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('pricing') }}">pricing </a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('templete') }}">Templates(Coming soon)</a>
                                        <a class="text-lg mx-3 text-gray-800 block transition delay-300 hover:text-amber-500 hover:bg-amber-50 rounded"
                                            style="padding: 8px 8px 8px 32px;" href="{{ url('login') }}"> login</a>
                                        <a href="{{ url('signup') }}"
                                            class="bg-[#3F9F63] text-white ml-8 mt-4 active:bg-amber-600 font-bold uppercase text-sm px-6 py-2 my-3
                                    rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150"
                                            type="button">
                                            Create account
                                    </a>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                            <div class="hidden -mx-4 md:flex md:items-center w-[900px]">
                                <a href="{{ url('/') }}"
                                    class="{{ (request()->is('Home')) ? 'block mx-6 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize text-white hover:text-white  cursor-pointer' }}">
                                    Home
                                </a>
                                <a href="{{ url('pricing') }}"
                                    class="{{ (request()->is('pricing')) ? 'block mx-6 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white cursor-pointer' }}">
                                    Pricing
                                </a>
                                <a href="{{ url('templete') }}"
                                    class="{{ (request()->is('templete')) ? 'block mx-6 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-[#9e9da2] capitalize hover:text-white  cursor-pointer' }}">
                                    Templates(Coming soon)
                                </a>
                                <a href="{{ url('login') }}"
                                    class="{{ (request()->is('login')) ? 'block mr-9 ml-auto border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mr-9 border-b-2 hover:border-white ml-auto border-transparent h-full text-sm text-white capitalize hover:text-white cursor-pointer' }}">
                                    Login
                                </a>
                                <a href="{{ url('signup') }}"
                                    class="bg-[#3F9F63] text-white active:bg-amber-600 text-center xl:text-[16px] 2xl:text-[18px] my-3 2xl:leading-[56px] xl:leading-[45px] 2xl:w-[202px] xl:w-[150px] 2xl:h-[56px] xl:h-[45px]
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
        <div class="w-full bg-cover bg-[url('/images/banner.png')] 2xl:h-[1050px] xl:h-[940px] flex bg-no-repeat pt-44">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="flex">
                    <div class="w-6/12 text-white">
                        <h1 class="2xl:text-[64px] xl:text-[40px] 2xl:leading-[140%] xl:leading-[60px] mb-9 font-medium tracking-tight">EXPERIENCE THE <br> FREEDOM OF<br> BUILDING YOUR OWN<br> WEBSITE</h1>
                        <p class="2xl:text-[18px] xl:text-[14px] leading-7 mb-14 tracking-tight">Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum<br> is simply dummy text of the printing and typesettingis simply dummy text of the<br> printing and typesetting</p>
                        <a href="/" class="bg-[#3F9F63] mb-10 text-white active:bg-amber-600 2xl:leading-[56px] xl:leading-[45px] text-center xl:text-[16px] 2xl:text-[18px] my-3 2xl:w-[243px] xl:w-[200px] 2xl:h-[56px] xl:h-[45px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            Get Started For Free
                        </a>
                        <h4 class="text-[16px] leading-[19px] tracking-[0.44px]">Scroll to explore more <br>
                            <svg width="32" height="32" class="mt-3" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 11.5L16 20.5L25 11.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 22L16 31L25 22" stroke="#C6C6C6" stroke-opacity="0.29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </h4>
                    </div>
                    <div class="w-6/12 text-white">
                        <img src="/images/bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-cover bg-[url('/images/bg1.png')] 2xl:h-[785px] xl:h-[560px] flex bg-no-repeat -mt-[150px]">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="flex justify-center items-center h-full">
                    <a href="" class="2xl:text-[48px] xl:text-[32px] 2xl:leading-[58px] xl:leading-[36px] mb-9 font-bold tracking-tight w-[380px]" >Get Started<br> Now 
                        <svg width="82" height="24" class="inline-block" viewBox="0 0 82 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81.0607 13.0607C81.6464 12.4749 81.6464 11.5251 81.0607 10.9393L71.5147 1.3934C70.9289 0.807611 69.9792 0.807611 69.3934 1.3934C68.8076 1.97919 68.8076 2.92893 69.3934 3.51472L77.8787 12L69.3934 20.4853C68.8076 21.0711 68.8076 22.0208 69.3934 22.6066C69.9792 23.1924 70.9289 23.1924 71.5147 22.6066L81.0607 13.0607ZM0 13.5H80V10.5H0V13.5Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="w-[283px]">
                        <div class="bg-white text-center 2xl:h-[385px] xl:h-[290px] w-full px-8 py-10">
                            <h3 class="2xl:text-[28px] xl:text-[20px] mb-3 2xl:leading-[33px] xl:leading-[26px] font-medium">Code Available</h3>
                            <p class="2xl:text-[16px] xl:text-[14px] 2xl:mb-20 xl:mb-4 2xl:leading-[24px] xl:leading-[20px]">Starter pack to help you to get started</p>
                            <h4 class="2xl:text-[40px] xl:text-[30px] 2xl:mb-10 xl:mb-4 leading-[60px] font-semibold">Free</h4>
                            <a href="#" class="bg-[#3F9F63] text-white active:bg-amber-600 leading-[43px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Download</a>
                        </div>
                    </div>
                    <div class="w-[283px] mx-3">
                        <div class="bg-white text-center 2xl:h-[385px] xl:h-[290px] w-full px-8 py-6">
                            <h3 class="2xl:text-[28px] xl:text-[20px] mb-3 2xl:leading-[33px] xl:leading-[26px] font-medium">Pro<br> (coming  soon)</h3>
                            <p class="2xl:text-[16px] xl:text-[14px] 2xl:mb-10 xl:mb-4 2xl:leading-[24px] xl:leading-[20px]">More power for small teams create project plans with confidence</p>
                            <h4 class="text-[20px] 2xl:mb-10 xl:mb-4 leading-[30px] justify-center flex items-center">$<b class="2xl:text-[40px] xl:text-[30px] 2xl:leading-[60px] xl:leading-[36px]">5</b> / month</h4>
                            <a href="#" class=" border border-gray-500 xl:my-0 text-dark hover:bg-amber-500 leading-[42px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                    <div class="w-[283px]">
                        <div class="bg-white text-center 2xl:h-[385px] xl:h-[290px] w-full px-8 py-6">
                            <h3  class="2xl:text-[28px] xl:text-[20px] mb-3 2xl:leading-[33px] xl:leading-[26px] font-medium">Business+<br> (coming  soon)</h3>
                            <p class="2xl:text-[16px] xl:text-[14px] 2xl:mb-10 xl:mb-4 2xl:leading-[24px] xl:leading-[20px]">For companies that need to manage work happening across multiple teams.</p>
                            <h4 class="text-[20px] 2xl:mb-10 xl:mb-4 leading-[30px] justify-center flex items-center">$<b class="2xl:text-[40px] xl:text-[30px] 2xl:leading-[60px] xl:leading-[36px]">15</b> / month</h4>
                            <a href="#" class=" border border-gray-500 text-dark hover:bg-amber-500 leading-[42px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-[388px_488px] bg-[url('/images/bg2.png')] flex bg-no-repeat pt-20 pb-40 bg-left-bottom">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="flex">
                    <div class="w-6/12">
                        <h5 class="w-[129px] h-[34px] leading-[34px] mb-6 rounded-3xl bg-[#3F9F63] text-white text-center">Our services</h5>
                        <h2 class="2xl:text-[48px] xl:text-[38px] leading-[58px] mb-6 font-bold tracking-tight">Why <span class="bg-[url('/images/btmline.png')] bg-bottom bg-no-repeat bg-right-bottom">Composer Up</span></h2>
                        <p class="2xl:text-[18px] xl:text-[16px] 2xl:leading-7 xl:leading-[26px] mb-14 tracking-tight">Lorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesetting</p>
                    </div>
                    <div class="w-6/12">
                        <div class="flex flex-wrap">
                            <div class="w-6/12 mb-9 px-12">
                                <span class="bg-[#edf4f3] flex justify-center items-center 2xl:h-[94px] xl:h-[80px] 2xl:w-[94px] xl:w-[80px] rounded-full bg-dark">
                                    <img src="/images/clock.png" alt="">
                                </span>
                                <h4 class="2xl:text-[22px] xl:text-[20px] leading-[30px] mt-3 font-semibold">Lorem Ipsum</h4>
                                <p class="2xl:text-[16px] xl:text-[14px] 2xl:leading-[19px] xl:leading-[22px] text-[#9B948E]">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesettingLor</p>
                            </div>
                            <div class="w-6/12 mb-9 px-12">
                                <span class="bg-[#edf4f3] flex justify-center items-center 2xl:h-[94px] xl:h-[80px] 2xl:w-[94px] xl:w-[80px] rounded-full bg-dark">
                                    <img src="/images/documenttext.png" alt="">
                                </span>
                                <h4 class="2xl:text-[22px] xl:text-[20px] leading-[30px]  mt-3 font-semibold">Lorem Ipsum</h4>
                                <p class="2xl:text-[16px] xl:text-[14px] 2xl:leading-[19px] xl:leading-[22px] text-[#9B948E]">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesettingLor</p>
                            </div>
                            <div class="w-6/12 px-12">
                                <span class="bg-[#edf4f3] flex justify-center items-center 2xl:h-[94px] xl:h-[80px] 2xl:w-[94px] xl:w-[80px] rounded-full bg-dark">
                                    <img src="/images/videoplay.png" alt="">
                                </span>
                                <h4 class="2xl:text-[22px] xl:text-[20px] leading-[30px] mt-3 font-semibold">Lorem Ipsum</h4>
                                <p class="2xl:text-[16px] xl:text-[14px] 2xl:leading-[19px] xl:leading-[22px] text-[#9B948E]">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesettingLor</p>
                            </div>
                            <div class="w-6/12 px-12">
                                <span class="bg-[#edf4f3] flex justify-center items-center 2xl:h-[94px] xl:h-[80px] 2xl:w-[94px] xl:w-[80px] rounded-full bg-dark">
                                    <img src="/images/location.png" alt="">
                                </span>
                                <h4 class="2xl:text-[22px] xl:text-[20px] leading-[30px] mt-3 font-semibold">Lorem Ipsum</h4>
                                <p class="2xl:text-[16px] xl:text-[14px] 2xl:leading-[19px] xl:leading-[22px] text-[#9B948E]">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesettingLor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-[#557662] flex bg-[url('/images/bg4.png')] bg-no-repeat bg-[350px_544px] bg-right-bottom">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="flex">
                    <div class="w-4/12 bg-[#15111E] pt-44 relative z-10 after-bg after:content-['']">
                        <div class="">
                            <h2 class="2xl:text-[42px] xl:text-[32px] xl:leading-[48px] 2xl:leading-[62px] text-white mb-8 font-medium tracking-tight">Design You Website<br> On your own way</h2>
                            <p class="2xl:text-[16px] xl:text-[13px] 2xl:leading-[30px] xl:leading-[26px] mb-9 text-white tracking-tight">Lorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simply dummy text of the printing and<br> typesetting</p>
                            <a href="/" class="bg-[#3F9F63] mb-10 text-white active:bg-amber-600 2xl:leading-[56px] xl:leading-[45px] text-center xl:text-[16px] 2xl:text-[18px] my-3 2xl:w-[243px] xl:w-[200px] 2xl:h-[56px] xl:h-[45px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                                Get Started For Free
                            </a>
                        </div>
                    </div>
                    <div class="w-8/12 py-20 px-14">
                        <img src="/images/bg3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full py-24 text-center">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <h2 class="2xl:text-[48px] xl:text-[38px] xl:leading-[48px] 2xl:leading-[58px] mb-8 font-bold tracking-tight">ComposerUp Provides</h2>
                <p class="2xl:text-[18px] xl:text-[14px] 2xl:leading-[30px] xl:leading-[26px] mb-0 tracking-tight">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing<br> and typesettingis simply dummy text of the printing and typesetting</p>
                <div class="flex mt-16 text-left mb-16">
                    <div class="w-6/12 pr-14">
                        <div class="bg-gradient-to-r from-[#3F9F63] to-[#1D492E] rounded-[40px]">
                            <div class="py-10 px-9">
                                <h3 class="2xl:text-[32px] xl:text-[28px] leading-[35px] text-white mb-6 font-bold">ComposerUp Templates</h3>
                                <h4 class="2xl:text-[24px] xl:text-[20px] 2xl:leading-[35px] text-white 2xl:mb-1.5 xl:mb-3 font-bold">Take a look at our amazing premium<br> Webflow Templates (coming soon)</h4>
                                <p class="text-[14px] leading-[23px] text-white mb-5 tracking-tight">Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesettingis simply dummy text of the printing and typesetting</p>
                                <a href="/" class="bg-white mb-10 text-[#3F9F63] hover:bg-amber-500 font-bold leading-[56px] text-center text-[18px] my-3 w-[235px] h-[56px] rounded-3xl shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                                    Coming soon
                                </a>
                            </div>
                            <img src="/images/img1.png" class="w-full h-[466px]" alt="">
                        </div>
                    </div>
                    <div class="w-6/12 pl-14">
                        <div class="bg-white shadow-2xl rounded-[40px]">
                            <div class="py-10 px-9">
                                <h3 class="2xl:text-[32px] xl:text-[28px] leading-[35px] mb-6 font-bold">ComposerUp</h3>
                                <h4 class="2xl:text-[24px] xl:text-[20px] 2xl:leading-[35px] 2xl:mb-1.5 xl:mb-3 font-bold">Looking to design & develop an amazing <br>Webflow website?</h4>
                                <p class="text-[14px] leading-[23px] mb-5 tracking-tight">Lorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simpl</p>
                                <a href="/" class="bg-[#3F9F63] mb-10 text-white hover:bg-amber-500 font-bold leading-[56px] text-center text-[18px] my-3 w-[180px] h-[56px] rounded-3xl shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                                    Get Started
                                </a>
                            </div>
                            <img src="/images/img2.png" class="w-full 2xl:h-[465px] xl:h-[490px]" alt="">
                        </div>
                    </div>
                </div>
                <a href="/" class="bg-[#3F9F63] mb-10 text-white active:bg-amber-600 2xl:leading-[56px] mt-3 xl:leading-[45px] text-center xl:text-[16px] 2xl:text-[18px] my-3 2xl:w-[243px] xl:w-[200px] 2xl:h-[56px] xl:h-[45px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                    Get Started For Free
                </a>
            </div>
        </div>
        <div class="w-full pb-[50px]">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="bg-white w-full rounded-[18px] flex justify-between items-center shadow-custom p-8 mb-[30px]">
                    <h3 class="text-[24px] leading-[35px] mb-0 font-bold">FAQ</h3>
                    <a href="#" class="w-[252px] h-[50px] leading-[50px] text-center bg-[#F3F1FF] rounded-[50px] block text-[#4A3AFF] text-[16px] leading-[18px] font-medium">Frequent asked questions</a>
                </div>
                <div class="w-full rounded-[20px] shadow-[0px_4px_13px_rgba(0,0,0,0.06)] py-[100px]">
                    <div id="accordionExample" class="w-[1070] mx-auto">
                        <div class="shadow-[0px_5px_16px_rgba(8,15,52,0.06)] py-[30px] px-[40px] w-full my-[30px] border-[#fff] border-[2px] rounded-[18px] group-[[data-te-collapse-collapsed]]:border-[0px]">
                          <h2 class="mb-0" id="headingOne">
                            <button
                              class="group relative border-0 flex w-full items-center rounded-[18px] border-0 bg-white text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] dark:bg-neutral-800 dark:text-white text-[20px] leading-[28px] font-medium "
                              type="button"
                              data-te-collapse-init
                              data-te-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne">
                              What is Webflow and why is it the best website builder?
                              <span
                                class="flex justify-center items-center w-[50px] h-[50px] rounded-[50px] shadow-[0_5px_16px_rgba(8,15,52,0.06)] bg-[#3F9F63] ml-auto shrink-0 rotate-[0deg] text-[#fff] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-[-90deg] group-[[data-te-collapse-collapsed]]:text-[#3F9F63] motion-reduce:transition-none group-[[data-te-collapse-collapsed]]:bg-[#ffffff]">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="h-6 w-6">
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div
                            id="collapseOne"
                            class="!visible"
                            data-te-collapse-item
                            data-te-collapse-show
                            aria-labelledby="headingOne"
                            data-te-parent="#accordionExample">
                            <div class="text-[16px] leading-[28px] text-[#6F6C90] w-[70%]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                        <div class="shadow-[0px_5px_16px_rgba(8,15,52,0.06)] py-[30px] px-[40px] w-full my-[30px] border-[#fff] border-[2px] rounded-[18px] group-[[data-te-collapse-collapsed]]:border-[0px]">
                            <h2 class="mb-0" id="headingTw">
                              <button
                                class="group relative flex w-full items-center rounded-[18px] border-0 bg-white text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] dark:bg-neutral-800 dark:text-white text-[20px] leading-[28px] font-medium"
                                type="button"
                                data-te-collapse-init
                                data-te-collapse-collapsed
                                data-te-target="#collapseTw"
                                aria-expanded="false"
                                aria-controls="collapseTw">
                                Lorem Ipsum is simply dummy text of the printing and<br> typesettingLorem Ipsum is simpl
                                <span
                                  class="flex justify-center items-center w-[50px] h-[50px] rounded-[50px] shadow-[0_5px_16px_rgba(8,15,52,0.06)] bg-[#3F9F63] ml-auto shrink-0 rotate-[0deg] text-[#fff] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-[-90deg] group-[[data-te-collapse-collapsed]]:text-[#3F9F63] motion-reduce:transition-none group-[[data-te-collapse-collapsed]]:bg-[#ffffff]">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6">
                                    <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                  </svg>
                                </span>
                              </button>
                            </h2>
                            <div
                              id="collapseTw"
                              class="!visible hidden"
                              data-te-collapse-item
                              aria-labelledby="headingTw"
                              data-te-parent="#accordionExample">
                              <div class="text-[16px] leading-[28px] text-[#6F6C90] w-[70%]">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                            </div>
                          </div>
                        <div class="shadow-[0px_5px_16px_rgba(8,15,52,0.06)] py-[30px] px-[40px] w-full my-[30px] border-[#fff] border-[2px] rounded-[18px] group-[[data-te-collapse-collapsed]]:border-[0px]">
                          <h2 class="mb-0" id="headingTwo">
                            <button
                              class="group relative flex w-full items-center rounded-[18px] border-0 bg-white text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] dark:bg-neutral-800 dark:text-white text-[20px] leading-[28px] font-medium"
                              type="button"
                              data-te-collapse-init
                              data-te-collapse-collapsed
                              data-te-target="#collapseTwo"
                              aria-expanded="false"
                              aria-controls="collapseTwo">
                              How do you clone a Webflow Template from the Showcase?
                              <span
                                class="flex justify-center items-center w-[50px] h-[50px] rounded-[50px] shadow-[0_5px_16px_rgba(8,15,52,0.06)] bg-[#3F9F63] ml-auto shrink-0 rotate-[0deg] text-[#fff] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-[-90deg] group-[[data-te-collapse-collapsed]]:text-[#3F9F63] motion-reduce:transition-none group-[[data-te-collapse-collapsed]]:bg-[#ffffff]">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="h-6 w-6">
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div
                            id="collapseTwo"
                            class="!visible hidden"
                            data-te-collapse-item
                            aria-labelledby="headingTwo"
                            data-te-parent="#accordionExample">
                            <div class="text-[16px] leading-[28px] text-[#6F6C90] w-[70%]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                        <div class="shadow-[0px_5px_16px_rgba(8,15,52,0.06)] py-[30px] px-[40px] w-full my-[30px] border-[#fff] border-[2px] rounded-[18px] group-[[data-te-collapse-collapsed]]:border-[0px]">
                          <h2 class="accordion-header mb-0" id="headingThree">
                            <button
                              class="group relative flex w-full items-center rounded-[18px] border-0 bg-white text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] dark:bg-neutral-800 dark:text-white text-[20px] leading-[28px] font-medium "
                              type="button"
                              data-te-collapse-init
                              data-te-collapse-collapsed
                              data-te-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree">
                              Why is BRIX Templates the best Webflow agency out there?
                              <span
                                class="flex justify-center items-center w-[50px] h-[50px] rounded-[50px] shadow-[0_5px_16px_rgba(8,15,52,0.06)] bg-[#3F9F63] ml-auto shrink-0 rotate-[0deg] text-[#fff] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-[-90deg] group-[[data-te-collapse-collapsed]]:text-[#3F9F63] motion-reduce:transition-none group-[[data-te-collapse-collapsed]]:bg-[#ffffff]">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="h-6 w-6">
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div
                            id="collapseThree"
                            class="!visible hidden"
                            data-te-collapse-item
                            aria-labelledby="headingThree"
                            data-te-parent="#accordionExample">
                            <div class="text-[16px] leading-[28px] text-[#6F6C90] w-[70%]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="w-full bg-[#3F9F63] pt-[120px] pb-[50px]">
            <div class="container mx-auto text-center 2xl:px-0 xl:px-9">
                <h2 class="2xl:text-[72px] xl:text-[38px] 2xl:leading-[87px] text-white mb-0 font-bold tracking-tight mb-[24px]">Try Our Product<br> Program!!</h2>
                <h3 class="2xl:text-[24px] xl:text-[18px] leading-[32px] text-white mb-0 tracking-tight mb-[40px]">Get started for free.<br> Invite all of your friends with you.</h3>
                <a href="/" class="bg-[#120F18] flex mx-auto justify-center items-center text-white leading-[60px] text-center text-[16px] 2xl:w-[190px] xl:w-[170px] 2xl:h-[60px] xl:h-[45px] rounded-[10px] outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                    Get Started 
                    <svg width="16" height="15" class="ml-3" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7.5H15" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 0.5L15 7.5L8 14.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div class="bg-[#0D0D0D] pt-[70px] w-full">
            <div class="container mx-auto 2xl:px-0 xl:px-9">
                <div class="flex pb-[60px]">
                    <div class="w-2/5">
                        <h3 class="2xl:text-[28px] xl:text-[22px] leading-[34px] text-white font-bold mb-[15px]">Logos</h3>
                        <p class="2xl:text-[18px] xl:text-[14px] text-[#F7F7EE] 2xl:leading-[30px] xl:leading-[24px]  mb-0 tracking-tight">Lorem Ipsum is simply<br> dummy text of the printing<br> and typesettingLorem Ipsum<Br> is simply dummy text ld</p>
                    </div>
                    <div class="w-2/5">
                        <h3 class="2xl:text-[18px] xl:text-[16px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">Home</h3>
                        <a href="#" class="2xl:text-[16px] xl:text-[14px] block leading-[20px] text-white mb-[15px] tracking-tight">Our services</a>
                        <a href="#" class="2xl:text-[16px] xl:text-[14px] block leading-[20px] text-white mb-[15px] tracking-tight">What we do</a>
                    </div>
                    <div class="w-2/5">
                        <h3 class="2xl:text-[18px] xl:text-[16px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">About us</h3>
                    </div>
                    <div class="w-2/5">
                        <h3 class="2xl:text-[18px] xl:text-[16px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">Contact us</h3>
                    </div>
                    <div class="w-2/5">
                        <h3 class="2xl:text-[28px] xl:text-[22px] leading-[36px] text-white font-bold mb-[23px] tracking-tight">Try It Today</h3>
                        <p class="2xl:text-[16px] xl:text-[14px] text-[#F7F7EE] leading-[20px] mb-[23px] text-white mb-0 tracking-tight">Get started for free. Invite all of<br> your friends with you.</p>
                        <a href="/" class="bg-[#3F9F63] flex justify-center items-center text-white leading-[60px] text-center text-[16px] 2xl:w-[185px] xl:w-[150px] 2xl:h-[60px] xl:h-[45px] rounded-[10px] outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            Start today 
                            <svg width="16" height="15" class="ml-3" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.5H15" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 0.5L15 7.5L8 14.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                        
                        </a>
                    </div>
                </div>
                <div class="flex border-t-[1px] border-solid border-[#2E4E73] py-[32px] flex justify-between items-center">
                    <div class="flex">
                        <a href="#" class="2xl:text-[16px] xl:text-[14px] block leading-[20px] text-white mr-[30px] tracking-tight">Terms & privacy</a>
                        <a href="#" class="2xl:text-[16px] xl:text-[14px] block leading-[20px] text-white mx-[30xpx] tracking-tight">Security</a>
                        <p href="#" class="2xl:text-[16px] xl:text-[14px] block leading-[20px] text-white ml-[30px] tracking-tight">©2023</p>
                    </div>
                    <div class="flex">
                        <a href="#" class="text-[16px] block leading-[20px] text-white mr-[30px] tracking-tight">
                            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5058 10.0753C2.44316 10.0753 1.06497 10.0753 0.438515 10.0753C0.104408 10.0753 0 9.95006 0 9.63683C0 8.80157 0 7.94542 0 7.11015C0 6.77604 0.12529 6.67164 0.438515 6.67164H2.5058C2.5058 6.60899 2.5058 5.39785 2.5058 4.83405C2.5058 3.99878 2.65197 3.20528 3.06961 2.47442C3.50812 1.72268 4.13457 1.22152 4.92807 0.929176C5.45012 0.741241 5.97216 0.657715 6.53596 0.657715H8.58237C8.87471 0.657715 9 0.783005 9 1.07535V3.45586C9 3.7482 8.87471 3.87349 8.58237 3.87349C8.01856 3.87349 7.45476 3.87349 6.89095 3.89437C6.32715 3.89437 6.0348 4.16584 6.0348 4.75052C6.01392 5.37697 6.0348 5.98254 6.0348 6.62987H8.45708C8.79118 6.62987 8.91647 6.75516 8.91647 7.08927V9.61595C8.91647 9.95006 8.81207 10.0545 8.45708 10.0545C7.70534 10.0545 6.09745 10.0545 6.0348 10.0545V16.8619C6.0348 17.2169 5.93039 17.3422 5.55452 17.3422C4.67749 17.3422 3.82135 17.3422 2.94432 17.3422C2.63109 17.3422 2.5058 17.2169 2.5058 16.9037C2.5058 14.7111 2.5058 10.138 2.5058 10.0753Z" fill="#F7F7EE"/>
                            </svg>                                
                        </a>
                        <a href="#" class="text-[16px] block leading-[20px] text-white mx-[30xpx] tracking-tight">
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1.72894C16.3678 2.00625 15.6942 2.19006 14.9919 2.27931C15.7144 1.84794 16.2658 1.17006 16.5251 0.353C15.8514 0.754625 15.1077 1.03831 14.3151 1.19663C13.6754 0.515563 12.7638 0.09375 11.7693 0.09375C9.83981 0.09375 8.28644 1.65988 8.28644 3.57981C8.28644 3.85606 8.30981 4.12169 8.36719 4.37456C5.46975 4.23325 2.90594 2.84456 1.18362 0.729125C0.882937 1.25081 0.706563 1.84794 0.706563 2.49075C0.706563 3.69775 1.32812 4.76769 2.25463 5.38713C1.69469 5.3765 1.14538 5.21394 0.68 4.95788C0.68 4.9685 0.68 4.98231 0.68 4.99612C0.68 6.68975 1.88806 8.0965 3.47225 8.42056C3.18856 8.49813 2.87937 8.53531 2.5585 8.53531C2.33538 8.53531 2.11012 8.52256 1.89869 8.47581C2.35025 9.856 3.63163 10.8707 5.15525 10.9036C3.9695 11.8312 2.46394 12.3901 0.834063 12.3901C0.54825 12.3901 0.274125 12.3773 0 12.3422C1.54381 13.3378 3.37344 13.9062 5.3465 13.9062C11.7597 13.9062 15.266 8.59375 15.266 3.98887C15.266 3.83481 15.2607 3.68606 15.2533 3.53838C15.9449 3.0475 16.5261 2.43444 17 1.72894Z" fill="#F7F7EE"/>
                            </svg>                                
                        </a>
                        <p href="#" class="text-[16px] block leading-[20px] text-white ml-[30px] tracking-tight">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9963 15.4999V15.4993H15V9.98076C15 7.28105 14.4247 5.20142 11.3004 5.20142C9.79839 5.20142 8.79045 6.03402 8.37897 6.82337H8.33552V5.45346H5.37317V15.4993H8.45779V10.525C8.45779 9.21524 8.70356 7.94877 10.3092 7.94877C11.8912 7.94877 11.9148 9.44345 11.9148 10.609V15.4999H14.9963Z" fill="#F7F7EE"/>
                                <path d="M0.223877 5.42554H3.35821V15.2763H0.223877V5.42554Z" fill="#F7F7EE"/>
                                <path d="M1.79104 0.5C0.802303 0.5 0 1.29856 0 2.28269C0 3.26683 0.802303 4.08209 1.79104 4.08209C2.77979 4.08209 3.58209 3.26683 3.58209 2.28269C3.58147 1.29856 2.77916 0.5 1.79104 0.5V0.5Z" fill="#F7F7EE"/>
                            </svg>                                                                
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        
@endsection