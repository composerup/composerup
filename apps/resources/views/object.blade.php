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
                <h1 class="text-[64px] leading-[77px] mb-[20px] font-bold">Select Your Website Objective</h1>
                <p class="text-[20px] leading-[24px]">orem Ipsum is simply dummy text of the printing aLorem Ipsum is
                    simply dummy text<br> of the printing a</p>
            </div>
            <div class="w-full my-[63px] text-center">
                <ul class="flex w-full justify-center mb-[100px]">
                    <li class="mx-[50px]">
                        <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
                        <label for="hosting-small" class="w-[260px] h-[80px] inline-flex items-center justify-between bg-[#E1E2E6] rounded-lg cursor-pointer peer-checked:text-white peer-checked:bg-[#3F9F63]">                           
                            <div class="flex justify-center items-center w-full">
                                <div class="w-[52px] h-[52px] mr-[20px] rounded-[50px] bg-white flex justify-center items-center">
                                    <img src="images/img4.png" alt="">
                                </div>
                                <div class="text-[16px] leading-[19px] font-medium">Personal website</div>
                            </div>
                        </label>
                    </li>
                    <li class="mx-[50px]">
                        <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                        <label for="hosting-big" class="w-[260px] h-[80px] inline-flex items-center justify-between bg-[#E1E2E6] rounded-lg cursor-pointer peer-checked:text-white peer-checked:bg-[#3F9F63]">
                            <div class="flex justify-center items-center w-full">
                                <div class="w-[52px] h-[52px] mr-[20px] rounded-[50px] bg-white flex justify-center items-center">
                                    <img src="images/img5.png" alt="">
                                </div>
                                <div class="text-[16px] leading-[19px] font-medium">For a company</div>
                            </div>
                        </label>
                    </li>
                </ul>
                <a href="{{ url('company') }}" class="block mx-auto w-[115px] h-[59px] bg-[#3F9F63] rounded-[7px] leading-[59px] text-center text-white">Next</a>
            </div>
        </div>
    </div>
</div>

@endsection