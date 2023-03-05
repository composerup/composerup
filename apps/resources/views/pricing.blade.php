@extends('app')

<style>

</style>

@section('content')
<!-- component -->
<div class="w-full bg-cover bg-[url('/images/price-bg.png')] bg-no-repeat pt-[30px]">
    <header class="w-full">
        <div class="w-full bg-cover bg-center">
            <div class="w-full ">
                <nav class="">
                    <div class="container mx-auto px-6 ">
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="flex relative justify-center md:justify-between items-center">
                                <div class="text-xl font-semibold text-gray-700">
                                    <a href="{{ url('/') }}" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">
                                        <img src="./images/logo_white2.png" class="w-auto md:w-24 xl:w-auto" alt="">
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
                                    class="{{ (request()->is('Home')) ? 'block mx-6  border-b-2 text-white border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize text-white hover:text-white  cursor-pointer' }}">
                                    Home
                                </a>
                                <a href="{{ url('pricing') }}"
                                    class="{{ (request()->is('pricing')) ? 'block mx-6  border-b-2 text-white border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white cursor-pointer' }}">
                                    Pricing
                                </a>
                                <a href="{{ url('templete') }}"
                                    class="{{ (request()->is('templete')) ? 'block mx-6 border-b-2 text-white border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 border-b-2 hover:border-white border-transparent h-full text-sm text-white capitalize hover:text-white  cursor-pointer' }}">
                                    Templates(Coming soon)
                                </a>
                                <a href="{{ url('login') }}"
                                    class="{{ (request()->is('login')) ? 'block mr-9 ml-auto border-b-2 text-white border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mr-9 border-b-2 hover:border-white ml-auto border-transparent h-full text-sm text-white capitalize hover:text-white cursor-pointer' }}">
                                    Login
                                </a>
                                <a href="{{ url('signup') }}"
                                    class="bg-[#ffffff] text-[#3F9F63] active:bg-amber-600 text-center text-[18px] my-3 leading-[56px] w-[202px] h-[56px]
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
    <div class="container mx-auto mt-[100px]">
        <div class="flex flex-wrap">
            <div class="w-full text-center">
                <h1 class="text-[64px] leading-[77px] mb-[20px] text-white font-bold">Pricing</h1>
                <p class="text-[20px] leading-[24px] text-white">Our affordable pricing scales with your business. We don’t lock our features behind<br> expensive plans. You get all the features on every plan.</p>
            </div>
            <div class="flex justify-center items-center w-full my-[100px]">
                    <div class="w-[283px]">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-10">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Code Available</h3>
                            <p class="text-[16px] mb-20 leading-[24px]">Starter pack to help you to get started</p>
                            <h4 class="text-[40px] mb-10 leading-[60px] font-semibold">Free</h4>
                            <a href="#" class="bg-[#3F9F63] text-white active:bg-amber-600 leading-[43px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Download</a>
                        </div>
                    </div>
                    <div class="w-[283px] mx-3">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-6">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Pro<br> (coming  soon)</h3>
                            <p class="text-[16px] mb-10 leading-[24px]">More power for small teams create project plans with confidence</p>
                            <h4 class="text-[20px] mb-10 leading-[30px] justify-center flex items-center">$<b class="text-[40px] leading-[60px]">5</b> / month</h4>
                            <a href="#" class=" border border-gray-500 text-dark hover:bg-amber-500 leading-[42px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                    <div class="w-[283px]">
                        <div class="bg-white text-center h-[385px] w-full px-8 py-6">
                            <h3 class="text-[28px] mb-3 leading-[33px] font-medium">Business+<br> (coming  soon)</h3>
                            <p class="text-[16px] mb-10 leading-[24px]">For companies that need to manage work happening across multiple teams.</p>
                            <h4 class="text-[20px] mb-10 leading-[30px] justify-center flex items-center">$<b class="text-[40px] leading-[60px]">15</b> / month</h4>
                            <a href="#" class=" border border-gray-500 text-dark hover:bg-amber-500 leading-[42px] text-center text-[18px] my-3 w-[160px] block mx-auto h-[43px] rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">Coming soon</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <footer>
        <div class="bg-[#0D0D0D] pt-[70px] w-full">
            <div class="container mx-auto">
                <div class="flex pb-[60px]">
                    <div class="w-2/5">
                        <h3 class="text-[28px] leading-[34px] text-white font-bold mb-[15px]">Logos</h3>
                        <p class="text-[18px] text-[#F7F7EE] leading-[30px]  mb-0 tracking-tight">Lorem Ipsum is simply<br> dummy text of the printing<br> and typesettingLorem Ipsum<Br> is simply dummy text ld</p>
                    </div>
                    <div class="w-2/5">
                        <h3 class="text-[18px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">Home</h3>
                        <a href="#" class="text-[16px] block leading-[20px] text-white mb-[15px] tracking-tight">Our services</a>
                        <a href="#" class="text-[16px] block leading-[20px] text-white mb-[15px] tracking-tight">What we do</a>
                    </div>
                    <div class="w-2/5">
                        <h3 class="text-[18px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">About us</h3>
                    </div>
                    <div class="w-2/5">
                        <h3 class="text-[18px] leading-[22px] text-white font-medium mb-[15px] tracking-tight">Contact us</h3>
                    </div>
                    <div class="w-2/5">
                        <h3 class="text-[28px] leading-[36px] text-white font-bold mb-[23px] tracking-tight">Try It Today</h3>
                        <p class="text-[16px] text-[#F7F7EE] leading-[20px] mb-[23px] text-white mb-0 tracking-tight">Get started for free. Invite all of<br> your friends with you.</p>
                        <a href="/" class="bg-[#3F9F63] flex justify-center items-center text-white leading-[60px] text-center text-[16px] w-[185px] h-[60px] rounded-[10px] outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
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
                        <a href="#" class="text-[16px] block leading-[20px] text-white mr-[30px] tracking-tight">Terms & privacy</a>
                        <a href="#" class="text-[16px] block leading-[20px] text-white mx-[30xpx] tracking-tight">Security</a>
                        <p href="#" class="text-[16px] block leading-[20px] text-white ml-[30px] tracking-tight">©2022</p>
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
</div>

@endsection