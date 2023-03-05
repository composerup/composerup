@extends('app')

<style>

</style>

@section('content')
<!-- component -->
<div class="w-full bg-cover bg-[url('/images/step-bg.png')] h-full flex bg-no-repeat pt-9 bg-[#f8f7fe]">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="mb-[130px] w-full text-center">
                <a href="{{ url('/') }}" class="">
                    <img src="images/logo_black.png" class="w-auto mx-auto" alt="">
                </a>
            </div>
            <div class="w-full text-center">
                <h1 class="text-[64px] leading-[77px] mb-[20px] font-bold">What name would you like to give to your site?</h1>
                <p class="text-[20px] leading-[24px]">orem Ipsum is simply dummy text of the printing aLorem Ipsum is
                    simply dummy text<br> of the printing a</p>
            </div>
            <div class="w-full mt-[63px] text-center">
                <ul class="flex w-full justify-center mb-[100px]">
                    <li class="w-[860px] text-left">
                        <label class="text-[13px] leading=[16px] text-[#999999] mb-0 block">Website name</label>
                        <div class="relative">
                            <input type="email" placeholder="Enter your website name" class="px-[30px] 
                            outline-0 text-[16px] leading-[19px] w-full border-b-2 border-[#000842] h-[46px] bg-transparent" />
                            <div class="absolute inset-y-0 left-0 pr-3 flex text-[#ABABAB] items-center text-sm leading-5">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.49414 2.67651H15.5059C16.3297 2.67651 17 3.34679 17 4.17065V12.8294C17 13.6533 16.3297 14.3236 15.5059 14.3236H1.49414C0.670271 14.3236 0 13.6533 0 12.8294V4.17065C0 3.34679 0.670271 2.67651 1.49414 2.67651ZM1.68914 3.67261L1.88856 3.83866L7.90719 8.85037C8.25071 9.13638 8.74936 9.13638 9.09281 8.85037L15.1114 3.83866L15.3109 3.67261H1.68914ZM16.0039 4.39172L11.1001 8.47514L16.0039 11.7388V4.39172ZM1.49414 13.3275H15.5059C15.7465 13.3275 15.9478 13.1559 15.9939 12.9287L10.3014 9.14017L9.73018 9.61583C9.37377 9.9126 8.93685 10.061 8.49997 10.061C8.06308 10.061 7.62619 9.9126 7.26976 9.61583L6.69853 9.14017L1.00605 12.9286C1.05221 13.1559 1.25348 13.3275 1.49414 13.3275ZM0.996094 11.7388L5.89993 8.47517L0.996094 4.39172V11.7388Z" fill="#000842"/>
                                </svg>  
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="{{ url('/') }}" class="block mx-auto w-[115px] h-[59px] bg-[#3F9F63] rounded-[7px] leading-[59px] text-center text-white">Continue</a>
            </div>
        </div>
    </div>
</div>

@endsection