@extends('app')

@section('content')
 <!-- component -->
 <div class="bg-[#f8f7fe]">
    <header class="w-full h-[99px] bg-white flex justify-between items-center absolute top-0 left-0">
        <div class="w-[275px]">
            <a href="{{ url('/') }}" class="">
                <img src="./images/logo_black.png" class="w-[124px] mx-auto" alt="">
            </a>
        </div>
        <div class="w-[65%] px-6">
            <div class="relative w-[600px] ml-auto">
                <input type="search" placeholder="Search" class="text-[14px] focus:outline-none leading-[19px] px-[30px] w-full h-[45px] border-0 bg-[#F9F9F9] rounded-[10px]" />
                <div class="absolute inset-y-0 right-0 pr-3 flex text-[#ABABAB] items-center text-sm leading-5">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3245 11.4559C9.24077 12.2983 7.87897 12.8 6.4 12.8C2.86538 12.8 0 9.93462 0 6.4C0 2.86538 2.86538 0 6.4 0C9.93462 0 12.8 2.86538 12.8 6.4C12.8 7.87897 12.2983 9.24077 11.4559 10.3245L15.7657 14.6343C16.0781 14.9467 16.0781 15.4533 15.7657 15.7657C15.4533 16.0781 14.9467 16.0781 14.6343 15.7657L10.3245 11.4559ZM11.2 6.4C11.2 9.05097 9.05097 11.2 6.4 11.2C3.74903 11.2 1.6 9.05097 1.6 6.4C1.6 3.74903 3.74903 1.6 6.4 1.6C9.05097 1.6 11.2 3.74903 11.2 6.4Z" fill="#BDBDBD"/>
                    </svg>                          
                </div>
            </div>
        </div>
        <div class="w-[275px] px-9">
            <div class="flex justify-center items-center">
                <div class="group relative w-[50px]">
                    <button class="flex text-sm rounded-full ">
                        En
                        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <nav tabindex="0" class="bg-white invisible shadow rounded w-40 absolute right-0 top-full transition-all opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-focus-within:translate-y-1">
                        <ul class="py-1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    French
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    German
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="group relative w-[20px] mx-6">
                    <button class="flex text-sm rounded-full ">
                        <img class="" src="./images/notify.png" alt="user photo">
                    </button>
                    <nav tabindex="0" class=" bg-white invisible shadow rounded w-60 absolute right-0 top-full transition-all opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-focus-within:translate-y-1">
                        <ul class="py-1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    Notification
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    Notification
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    Notification
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="group relative w-[50px]">
                    <button class="flex text-sm rounded-full ">
                        <img class="w-[48px] h-[48px] rounded-full" src="./images/user.png" alt="user photo">
                    </button>
                    <nav tabindex="0" class="bg-white invisible shadow rounded w-60 absolute right-0 top-full transition-all opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-focus-within:translate-y-1">
                        <div class="px-4 py-3 border-b-2 text-sm text-gray-900 dark:text-white">
                            <div class="font-medium ">Pro User</div>
                            <div class="truncate">name@flowbite.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        </ul>
                        <div class="py-2 border-t-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </nav>
                </div>
                
            </div>
        </div>
    </header>
    <section class="h-[100vh]">
        <div class="w-full flex justify-between h-full">
            <div class="w-[275px] bg-[#242225] h-full flex justify-between flex-col overflow-y-scroll">
                <ul class="mt-[160px] w-full mb-[50px]">
                    <li class="h-[55px] w-full mb-[10px]">
                        <a href="#" class="pl-[45px] flex justify-start items-center text-[14px] leading-[17px] text-[#939393] hover:bg-[#3F9F63] hover:text-white h-full">
                            <svg width="30" height="24" class="mr-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.30023 22.7501C2.94023 22.7501 2.59022 22.6601 2.29022 22.4801C1.62022 22.0901 1.24023 21.3101 1.24023 20.3401V8.98013C1.24023 6.85013 2.97022 5.12012 5.10022 5.12012H12.8802C15.0102 5.12012 16.7402 6.85013 16.7402 8.98013V20.3401C16.7402 21.3101 16.3602 22.0801 15.6902 22.4801C15.0202 22.8701 14.1602 22.8301 13.3102 22.3601L9.38025 20.1701C9.19025 20.0601 8.79022 20.0601 8.60022 20.1701L4.67023 22.3601C4.21023 22.6201 3.74023 22.7501 3.30023 22.7501ZM5.11023 6.63013C3.81023 6.63013 2.75024 7.69011 2.75024 8.99011V20.3501C2.75024 20.7601 2.87024 21.0801 3.06024 21.1901C3.25024 21.3001 3.59026 21.2501 3.95026 21.0501L7.88025 18.8601C8.52025 18.5101 9.48024 18.5101 10.1202 18.8601L14.0502 21.0501C14.4102 21.2501 14.7402 21.3001 14.9402 21.1901C15.1302 21.0801 15.2502 20.7601 15.2502 20.3501V8.99011C15.2502 7.69011 14.1903 6.63013 12.8903 6.63013H5.11023Z" fill="currentColor"/>
                                <path d="M14.69 22.7501C14.25 22.7501 13.79 22.6201 13.32 22.3701L9.39001 20.1801C9.20001 20.0801 8.78998 20.0801 8.59998 20.1801L4.67999 22.3701C3.82999 22.8401 2.95999 22.8801 2.29999 22.4901C1.62999 22.1001 1.25 21.3201 1.25 20.3601V9.00012C1.25 6.87012 2.97999 5.14014 5.10999 5.14014H12.89C15.02 5.14014 16.75 6.87012 16.75 9.00012V20.3601C16.75 21.3201 16.37 22.1001 15.7 22.4901C15.4 22.6601 15.06 22.7501 14.69 22.7501ZM9 18.6001C9.4 18.6001 9.79 18.6901 10.12 18.8701L14.05 21.0601C14.41 21.2601 14.75 21.3101 14.94 21.1901C15.13 21.0801 15.25 20.7601 15.25 20.3501V8.99011C15.25 7.69011 14.19 6.63013 12.89 6.63013H5.10999C3.80999 6.63013 2.75 7.69011 2.75 8.99011V20.3501C2.75 20.7601 2.87 21.0801 3.06 21.1901C3.25 21.3001 3.59001 21.2501 3.95001 21.0501L7.88 18.8601C8.2 18.6901 8.6 18.6001 9 18.6001Z" fill="currentColor"/>
                                <path d="M20.69 18.87C20.25 18.87 19.79 18.74 19.32 18.49L15.63 16.43C15.39 16.3 15.25 16.05 15.25 15.78V9C15.25 7.7 14.19 6.64001 12.89 6.64001H8C7.59 6.64001 7.25 6.30001 7.25 5.89001V5.12C7.25 2.99 8.97999 1.26001 11.11 1.26001H18.89C21.02 1.26001 22.75 2.99 22.75 5.12V16.48C22.75 17.44 22.37 18.22 21.7 18.61C21.4 18.78 21.06 18.87 20.69 18.87ZM16.75 15.33L20.05 17.18C20.41 17.38 20.74 17.43 20.94 17.31C21.14 17.19 21.25 16.88 21.25 16.47V5.10999C21.25 3.80999 20.19 2.75 18.89 2.75H11.11C9.80999 2.75 8.75 3.80999 8.75 5.10999V5.13H12.89C15.02 5.13 16.75 6.85999 16.75 8.98999V15.33V15.33Z" fill="currentColor"/>
                            </svg>
                            Projects
                        </a>
                    </li>
                    <li class="h-[55px] w-full mb-[10px]">
                        <a href="#" class="pl-[45px] flex justify-start items-center  text-[14px] leading-[17px] text-[#939393] hover:bg-[#3F9F63] hover:text-white h-full">
                            <svg width="30" height="31" class="mr-6" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_22_682)">
                                <path d="M25 12C25 6.47715 20.5228 2 15 2C9.47715 2 5 6.47715 5 12C5 17.5228 9.47715 22 15 22C20.5228 22 25 17.5228 25 12Z" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M12.5 8.71806C12.6349 8.36247 12.8386 8.04373 13.0939 7.78019C13.5614 7.29757 14.2017 7 14.908 7C16.3395 7 17.5 8.22255 17.5 9.73065C17.5 11.0598 16.5986 12.1671 15.4047 12.4112C15.1342 12.4665 14.908 12.6852 14.908 12.9613V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M15 18.25C15.5523 18.25 16 17.8023 16 17.25C16 16.6977 15.5523 16.25 15 16.25C14.4477 16.25 14 16.6977 14 17.25C14 17.8023 14.4477 18.25 15 18.25Z" fill="currentColor"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_22_682" x="-1" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_682"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_682" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            Support
                        </a>
                    </li>
                    <li class="h-[55px] w-full mb-[5px]">
                        <a href="#" class="pl-[45px] flex justify-start items-center text-[14px] leading-[17px] text-[#939393] hover:bg-[#3F9F63] hover:text-white h-full">
                            <svg width="30" height="24" viewBox="0 0 24 24" class="mr-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15.75C9.93 15.75 8.25 14.07 8.25 12C8.25 9.93 9.93 8.25 12 8.25C14.07 8.25 15.75 9.93 15.75 12C15.75 14.07 14.07 15.75 12 15.75ZM12 9.75C10.76 9.75 9.75 10.76 9.75 12C9.75 13.24 10.76 14.25 12 14.25C13.24 14.25 14.25 13.24 14.25 12C14.25 10.76 13.24 9.75 12 9.75Z" fill="currentColor"/>
                                <path d="M15.21 22.19C15 22.19 14.79 22.16 14.58 22.11C13.96 21.94 13.44 21.55 13.11 21L12.99 20.8C12.4 19.78 11.59 19.78 11 20.8L10.89 20.99C10.56 21.55 10.04 21.95 9.42 22.11C8.79 22.28 8.14 22.19 7.59 21.86L5.87 20.87C5.26 20.52 4.82 19.95 4.63 19.26C4.45 18.57 4.54 17.86 4.89 17.25C5.18 16.74 5.26 16.28 5.09 15.99C4.92 15.7 4.49 15.53 3.9 15.53C2.44 15.53 1.25 14.34 1.25 12.88V11.12C1.25 9.66004 2.44 8.47004 3.9 8.47004C4.49 8.47004 4.92 8.30004 5.09 8.01004C5.26 7.72004 5.19 7.26004 4.89 6.75004C4.54 6.14004 4.45 5.42004 4.63 4.74004C4.81 4.05004 5.25 3.48004 5.87 3.13004L7.6 2.14004C8.73 1.47004 10.22 1.86004 10.9 3.01004L11.02 3.21004C11.61 4.23004 12.42 4.23004 13.01 3.21004L13.12 3.02004C13.8 1.86004 15.29 1.47004 16.43 2.15004L18.15 3.14004C18.76 3.49004 19.2 4.06004 19.39 4.75004C19.57 5.44004 19.48 6.15004 19.13 6.76004C18.84 7.27004 18.76 7.73004 18.93 8.02004C19.1 8.31004 19.53 8.48004 20.12 8.48004C21.58 8.48004 22.77 9.67004 22.77 11.13V12.89C22.77 14.35 21.58 15.54 20.12 15.54C19.53 15.54 19.1 15.71 18.93 16C18.76 16.29 18.83 16.75 19.13 17.26C19.48 17.87 19.58 18.59 19.39 19.27C19.21 19.96 18.77 20.53 18.15 20.88L16.42 21.87C16.04 22.08 15.63 22.19 15.21 22.19ZM12 18.49C12.89 18.49 13.72 19.05 14.29 20.04L14.4 20.23C14.52 20.44 14.72 20.59 14.96 20.65C15.2 20.71 15.44 20.68 15.64 20.56L17.37 19.56C17.63 19.41 17.83 19.16 17.91 18.86C17.99 18.56 17.95 18.25 17.8 17.99C17.23 17.01 17.16 16 17.6 15.23C18.04 14.46 18.95 14.02 20.09 14.02C20.73 14.02 21.24 13.51 21.24 12.87V11.11C21.24 10.48 20.73 9.96004 20.09 9.96004C18.95 9.96004 18.04 9.52004 17.6 8.75004C17.16 7.98004 17.23 6.97004 17.8 5.99004C17.95 5.73004 17.99 5.42004 17.91 5.12004C17.83 4.82004 17.64 4.58004 17.38 4.42004L15.65 3.43004C15.22 3.17004 14.65 3.32004 14.39 3.76004L14.28 3.95004C13.71 4.94004 12.88 5.50004 11.99 5.50004C11.1 5.50004 10.27 4.94004 9.7 3.95004L9.59 3.75004C9.34 3.33004 8.78 3.18004 8.35 3.43004L6.62 4.43004C6.36 4.58004 6.16 4.83004 6.08 5.13004C6 5.43004 6.04 5.74004 6.19 6.00004C6.76 6.98004 6.83 7.99004 6.39 8.76004C5.95 9.53004 5.04 9.97004 3.9 9.97004C3.26 9.97004 2.75 10.48 2.75 11.12V12.88C2.75 13.51 3.26 14.03 3.9 14.03C5.04 14.03 5.95 14.47 6.39 15.24C6.83 16.01 6.76 17.02 6.19 18C6.04 18.26 6 18.57 6.08 18.87C6.16 19.17 6.35 19.41 6.61 19.57L8.34 20.56C8.55 20.69 8.8 20.72 9.03 20.66C9.27 20.6 9.47 20.44 9.6 20.23L9.71 20.04C10.28 19.06 11.11 18.49 12 18.49Z" fill="currentColor"/>
                            </svg>
                            Setting
                        </a>
                    </li>
                </ul>
                <a href="#" class="pl-[45px] mb-[50px] flex justify-start items-center text-[14px] text-[#D94545]">
                    <svg width="30" height="30" class="mr-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_22_1008)" filter="url(#filter0_d_22_1008)">
                        <path d="M26.8293 9.17119L22.9503 5.29219C22.7617 5.11003 22.5091 5.00923 22.2469 5.01151C21.9847 5.01379 21.7338 5.11896 21.5484 5.30437C21.363 5.48978 21.2579 5.74059 21.2556 6.00279C21.2533 6.26498 21.3541 6.51758 21.5363 6.70619L25.4153 10.5852C25.5305 10.7027 25.6312 10.8337 25.7153 10.9752C25.7003 10.9752 25.6883 10.9672 25.6733 10.9672L9.98926 10.9992C9.72404 10.9992 9.46969 11.1045 9.28215 11.2921C9.09461 11.4796 8.98926 11.734 8.98926 11.9992C8.98926 12.2644 9.09461 12.5188 9.28215 12.7063C9.46969 12.8938 9.72404 12.9992 9.98926 12.9992L25.6673 12.9672C25.6953 12.9672 25.7183 12.9532 25.7453 12.9512C25.6566 13.1203 25.5441 13.2759 25.4113 13.4132L21.5323 17.2922C21.4367 17.3844 21.3606 17.4948 21.3082 17.6168C21.2557 17.7388 21.2282 17.87 21.227 18.0028C21.2259 18.1356 21.2512 18.2672 21.3014 18.3901C21.3517 18.513 21.426 18.6247 21.5199 18.7186C21.6138 18.8125 21.7254 18.8867 21.8483 18.937C21.9712 18.9873 22.1029 19.0126 22.2357 19.0114C22.3684 19.0103 22.4997 18.9827 22.6217 18.9303C22.7437 18.8779 22.854 18.8017 22.9463 18.7062L26.8253 14.8272C27.5751 14.0771 27.9964 13.0598 27.9964 11.9992C27.9964 10.9385 27.5751 9.9213 26.8253 9.17119H26.8293Z" fill="#D94545"/>
                        <path d="M11 22H9C8.20435 22 7.44129 21.6839 6.87868 21.1213C6.31607 20.5587 6 19.7956 6 19V5C6 4.20435 6.31607 3.44129 6.87868 2.87868C7.44129 2.31607 8.20435 2 9 2H11C11.2652 2 11.5196 1.89464 11.7071 1.70711C11.8946 1.51957 12 1.26522 12 1C12 0.734784 11.8946 0.48043 11.7071 0.292893C11.5196 0.105357 11.2652 0 11 0L9 0C7.67441 0.00158786 6.40356 0.528882 5.46622 1.46622C4.52888 2.40356 4.00159 3.67441 4 5L4 19C4.00159 20.3256 4.52888 21.5964 5.46622 22.5338C6.40356 23.4711 7.67441 23.9984 9 24H11C11.2652 24 11.5196 23.8946 11.7071 23.7071C11.8946 23.5196 12 23.2652 12 23C12 22.7348 11.8946 22.4804 11.7071 22.2929C11.5196 22.1054 11.2652 22 11 22Z" fill="#D94545"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_22_1008" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_1008"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_1008" result="shape"/>
                        </filter>
                        <clipPath id="clip0_22_1008">
                        <rect width="24" height="24" fill="white" transform="translate(4)"/>
                        </clipPath>
                        </defs>
                    </svg>                                
                    Sign Out
                </a>
                <img src="./images/dashboard.png" class="mx-auto mb-9" alt="">
                <div class="text-center w-full pb-9">
                    <h3 class="text-white text-[16px] leading-[22px] mb-[5px]">Composer Up</h3>
                    <p class="text-[#809FB8] text-[13px] leading-[18px]">Lorem Ipsum is simply dummy<br> text of the printing and<br> typesetting</p>
                </div>
            </div>
            <div class="py-[40px] px-[63px] w-[65%] h-full overflow-y-scroll">
                <h3 class="text-[16px] leading-[24px] text-[#757D8A] mb-3">Welcome back,</h3>
                <h4 class="text-[20px] leading-[32px] text-[#5A6474] mb-[40px]">Simon Thompson</h4>
                <h4 class="text-[24px] leading-[36px] font-bold mb-[40px]">Recent Projects</h4>
                <ul class="flex flex-wrap">
                    <li class="mr-[30px] mb-9">
                        <div class="bg-white p-[16px] w-[257px] rounded-[8px]">
                            <h6 class="w-[120px] h-[26px] mb-[12px] text-[#3F9F63] text-[12px] leading-[26px] rounded-[16px] bg-[#edf4f3] text-center">Personal website</h6>
                            <h3 class="text-[16px] font-medium leading-[24px] text-[#232323] mb-3">Project 1</h3>
                            <p class="text-[13px] leading-[21px] text-[#757575] mb-3"> the printing aLorem Ipsum is simply dummy text of the printing a</p>
                            <span class="border-t-2 w-full flex pt-3 text-[14px] leading-[21px] text-[#757575]">
                                <img src="/images/note.png" alt="" class="mr-3" />Created : 12/01/2022
                            </span>
                        </div>
                    </li>
                    <li class="mr-[30px] mb-9">
                        <div class="bg-white p-[16px] w-[257px] rounded-[8px]">
                            <h6 class="w-[120px] h-[26px] mb-[12px] text-[#3F9F63] text-[12px] leading-[26px] rounded-[16px] bg-[#edf4f3] text-center">Personal website</h6>
                            <h3 class="text-[16px] font-medium leading-[24px] text-[#232323] mb-3">Project 1</h3>
                            <p class="text-[13px] leading-[21px] text-[#757575] mb-3"> the printing aLorem Ipsum is simply dummy text of the printing a</p>
                            <span class="border-t-2 w-full flex pt-3 text-[14px] leading-[21px] text-[#757575]">
                                <img src="/images/note.png" alt="" class="mr-3" />Created : 12/01/2022
                            </span>
                        </div>
                    </li>
                    <li class="mr-[30px] mb-9">
                        <a href="#" class="bg-transparent p-[16px] w-[257px] h-[190px] border-dashed border-[1px] border-[#653AFF] rounded-[8px] flex justify-center items-center flex-col">
                            <img src="/images/img9.png" alt="" class="mr-3" />
                            <h4 class="text-[12px] leading-[30px] text-[#653AFF] mb-[0px]">Add new Project</h4>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-[275px] bg-white h-full py-[22px] px-[20px] overflow-y-scroll">
                <h3 class="text-[14px] mt-[100px] leading-[20px] text-[#1C1C1C] font-semibold mb-[20px]">Recent Notifications</h3>
                <ul class="mb-[50px]">
                    <li class="flex mb-[15px]">
                        <img src="./images/img6.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">You have a bug that needs to be fixed.</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">5m ago</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img7.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">New user registered</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">1:23 AM</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img6.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">You have a bug that needs to be fixed.</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">0:32 AM</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img8.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">Andi Lane subscribed to you</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">Yesterday 12:39 AM</p>
                        </span>
                    </li>
                </ul>
                <h3 class="text-[14px] leading-[20px] text-[#1C1C1C] font-semibold mb-[20px]">Notifications</h3>
                <ul>
                    <li class="flex mb-[15px]">
                        <img src="./images/img6.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">You have a bug that needs to be fixed.</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">5m ago</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img7.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">New user registered</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">1:23 AM</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img6.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">You have a bug that needs to be fixed.</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">0:32 AM</p>
                        </span>
                    </li>
                    <li class="flex mb-[15px]">
                        <img src="./images/img8.png" class="mr-[8px] w-[24px] h-[24px]" alt="" />
                        <span>
                            <h4 class="text-[14px] truncate w-[180px] leading-[20px] text-[#1C1C1C]">Andi Lane subscribed to you</h4>
                            <p class="text-[12px] leading-[18px] text-[#939393]">Yesterday 12:39 AM</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

        
@endsection