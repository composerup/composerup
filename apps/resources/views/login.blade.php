@extends('app')

<style>

</style>

@section('content')
 <!-- component -->
    <div class="w-full p-[20px] bg-[#f8f7fe]">
        <div class="container mx-auto">
            <div class="flex">
                <div class="w-6/12">
                    <div class="">
                        <div class="mb-[100px]">
                            <a href="{{ url('/') }}" class="">
                                <img src="images/logo_black.png" class="w-auto" alt="">
                            </a>
                        </div>
                        <div class="">
                            <h1 class="text-[30px] leading-[36px] font-medium mb-[30px]">Sign in</h1>
                            <p class="text-[16px] leading-[19px] mb-[10px]">If you don’t have an account register</p>
                            <p class="text-[16px] leading-[19px]">You can<a href="{{ url('signup') }}" class="ml-3 text-[#7339ED] font-medium">Register here !</a></p>
                            <div class="w-[430px] mt-[50px]">
                                <div class="w-full mb-[50px]">
                                    <label class="text-[13px] leading=[16px] text-[#999999] mb-0 block">Email</label>
                                    <div class="relative">
                                        <input type="email" placeholder="Enter your email address" class="px-[30px] 
                                        outline-0 text-[16px] leading-[19px] w-full border-b-2 border-[#000842] h-[46px] bg-transparent" />
                                        <div class="absolute inset-y-0 left-0 pr-3 flex text-[#ABABAB] items-center text-sm leading-5">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.49414 2.67651H15.5059C16.3297 2.67651 17 3.34679 17 4.17065V12.8294C17 13.6533 16.3297 14.3236 15.5059 14.3236H1.49414C0.670271 14.3236 0 13.6533 0 12.8294V4.17065C0 3.34679 0.670271 2.67651 1.49414 2.67651ZM1.68914 3.67261L1.88856 3.83866L7.90719 8.85037C8.25071 9.13638 8.74936 9.13638 9.09281 8.85037L15.1114 3.83866L15.3109 3.67261H1.68914ZM16.0039 4.39172L11.1001 8.47514L16.0039 11.7388V4.39172ZM1.49414 13.3275H15.5059C15.7465 13.3275 15.9478 13.1559 15.9939 12.9287L10.3014 9.14017L9.73018 9.61583C9.37377 9.9126 8.93685 10.061 8.49997 10.061C8.06308 10.061 7.62619 9.9126 7.26976 9.61583L6.69853 9.14017L1.00605 12.9286C1.05221 13.1559 1.25348 13.3275 1.49414 13.3275ZM0.996094 11.7388L5.89993 8.47517L0.996094 4.39172V11.7388Z" fill="#000842"/>
                                            </svg>  
                                        </div>
                                    </div>
                                </div>
                                <div lass="w-full" x-data="{ show: true }">
                                    <label class="text-[13px] leading=[16px] text-[#999999] mb-0 block">Password</label>
                                    <div class="relative">
                                      <input placeholder="Enter your Password" :type="show ? 'password' : 'text'" class="outline-0 pl-[30px] pr-[40px] text-[16px] leading-[19px] w-full border-b-2 border-[#000842] h-[46px] bg-transparent">
                                      <div class="absolute inset-y-0 right-0 pr-3 flex text-[#ABABAB] items-center text-sm leading-5">
                                        <svg class="w-[20px]" fill="none" @click="show = !show"
                                          :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 576 512">
                                          <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                          </path>
                                        </svg>
                                        <svg class="w-[20px]" fill="none" @click="show = !show"
                                          :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 640 512">
                                          <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                          </path>
                                        </svg>
                                      </div>
                                      <div class="absolute inset-y-0 left-0 pr-3 flex text-[#ABABAB] items-center text-sm leading-5">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.0032 7.2296V4.53742C13.0104 3.31927 12.5239 2.14798 11.6553 1.29383C10.8156 0.457706 9.71638 0 8.5523 0C8.53428 0 8.51265 0 8.49463 0C6.01149 0.00360399 3.99325 2.03625 3.99325 4.53742V7.2296C3.05622 7.34132 2.37146 8.12699 2.37146 9.07844V15.1259C2.37146 16.1531 3.19317 17 4.2203 17H12.7798C13.8069 17 14.6286 16.1531 14.6286 15.1259V9.07844C14.625 8.13059 13.9403 7.34132 13.0032 7.2296ZM4.71045 4.53742H4.71405C4.71405 2.43269 6.41153 0.709985 8.49824 0.709985H8.50184C9.49294 0.706381 10.4444 1.09922 11.1472 1.79839C11.8788 2.52279 12.286 3.51028 12.2788 4.53742V7.2332H11.4859V4.53742C11.4931 3.71931 11.1688 2.93364 10.5885 2.35701C10.0407 1.8092 9.29832 1.49926 8.52346 1.49926H8.50184C6.84401 1.49926 5.50332 2.86156 5.50332 4.53381V7.2332H4.71045V4.53742ZM10.7687 4.53742V7.2332H6.22772V4.53742C6.22772 3.26161 7.24405 2.22366 8.50544 2.22366H8.52707C9.11091 2.22366 9.67313 2.45792 10.0876 2.87238C10.5273 3.31206 10.776 3.91393 10.7687 4.53742ZM13.9403 15.1367C13.9403 15.7674 13.4285 16.2792 12.7978 16.2792H4.23472C3.60402 16.2792 3.09226 15.7674 3.09226 15.1367V9.09646C3.09226 8.46576 3.60402 7.954 4.23472 7.954H12.7978C13.4285 7.954 13.9403 8.46576 13.9403 9.09646V15.1367Z" fill="#000842"/>
                                            <path d="M9.74516 11.8933C9.58659 11.3347 9.07843 10.9526 8.49818 10.9526C7.78099 10.9526 7.19714 11.5329 7.19714 12.2537C7.19714 12.8339 7.57917 13.3421 8.13778 13.5007V14.5098C8.13778 14.708 8.29996 14.8702 8.49818 14.8702C8.6964 14.8702 8.85858 14.708 8.85858 14.5098V13.5007C9.54694 13.3024 9.94699 12.5816 9.74516 11.8933ZM8.49818 12.8303C8.17743 12.8303 7.91794 12.5708 7.91794 12.2501C7.91794 11.9293 8.17743 11.6698 8.49818 11.6698C8.81894 11.6698 9.07842 11.9293 9.07842 12.2501C9.07842 12.5708 8.81894 12.8303 8.49818 12.8303Z" fill="#000842"/>
                                        </svg>  
                                      </div>
                                    </div>
                                </div>
                                <div class="w-full mt-[20px] mb-[50px] flex justify-between">
                                    <div class=" flex">
                                        <input type="checkbox" class="mr-[10px]" />
                                        <label class="text-[12px] leading-[15px]">Rememebr me</label>
                                    </div>
                                    <div class="">
                                        <a href="#" class="text-[12px] leading-[15px] text-[#4D4D4D]">Forgot Password ?</a>
                                    </div>
                                </div>
                                <button type="submit" class="shadow-[0px_4px_26px_rgba(0,0,0,0.25)] text-[17px] leading-[21px] font-medium  bg-[#3F9F63] w-full text-white rounded-[7px] h-[50px]">Login</button>
                                <h3 class="text-[16px] leading-[19px] font-medium  text-[#B5B5B5] w-full text-center my-[40px]">or continue with</h3>
                                <div class="w-full flex justify-center items-center">
                                    <a href="#" class="mr-[10px]">
                                        <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="20.7286" cy="19.7286" rx="18.1376" ry="18.1376" fill="url(#paint0_linear_16_359)"/>
                                            <path d="M27.4833 26.9337L28.2889 21.8144H23.2488V18.4938C23.2488 17.093 23.9516 15.7267 26.209 15.7267H28.5019V11.3684C28.5019 11.3684 26.422 11.0225 24.4343 11.0225C20.2815 11.0225 17.5697 13.4748 17.5697 17.9127V21.8144H12.9554V26.9337H17.5697V39.3099C18.4961 39.4517 19.4438 39.5243 20.4093 39.5243C21.3747 39.5243 22.3224 39.4517 23.2488 39.3099V26.9337H27.4833Z" fill="white"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_16_359" x1="20.7286" y1="1.59106" x2="20.7286" y2="37.7586" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#18ACFE"/>
                                            <stop offset="1" stop-color="#0163E0"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>  
                                    </a>
                                    <a href="#" class="mx-[10px]">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39.375 21C39.375 31.143 31.1522 39.375 21 39.375C10.8478 39.375 2.625 31.143 2.625 21C2.625 10.8478 10.8478 2.625 21 2.625C31.1522 2.625 39.375 10.8478 39.375 21Z" fill="#283544"/>
                                            <path d="M29.6128 16.3503C29.5125 16.4088 27.1255 17.6433 27.1255 20.3803C27.238 23.5017 30.1378 24.5964 30.1875 24.5964C30.1378 24.6549 29.7497 26.0876 28.6003 27.5895C27.688 28.8832 26.6755 30.1875 25.138 30.1875C23.6755 30.1875 23.1505 29.3253 21.463 29.3253C19.6508 29.3253 19.138 30.1875 17.7505 30.1875C16.213 30.1875 15.1255 28.8133 14.1635 27.5317C12.9138 25.8544 11.8516 23.2222 11.8141 20.6948C11.7888 19.3555 12.0644 18.039 12.7638 16.9208C13.751 15.3597 15.5135 14.3 17.4383 14.2651C18.913 14.2187 20.2255 15.2086 21.1255 15.2086C21.988 15.2086 23.6005 14.2651 25.425 14.2651C26.2125 14.2658 28.3125 14.4869 29.6128 16.3503ZM21.0008 13.9977C20.7383 12.7746 21.463 11.5516 22.138 10.7714C23.0005 9.82789 24.3628 9.1875 25.5375 9.1875C25.6125 10.4106 25.1372 11.6101 24.2878 12.4837C23.5255 13.4272 22.213 14.1374 21.0008 13.9977Z" fill="white"/>
                                        </svg>                                            
                                    </a>
                                    <a href="#" class="ml-[10px]">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39.4107 21.1314C39.4107 19.6401 39.2872 18.5519 39.02 17.4233H21.6433V24.1543H31.843C31.6375 25.8271 30.527 28.3462 28.0593 30.0389L28.0247 30.2643L33.5189 34.4354L33.8995 34.4726C37.3953 31.3086 39.4107 26.6533 39.4107 21.1314Z" fill="#4285F4"/>
                                            <path d="M21.6422 38.8662C26.6392 38.8662 30.8342 37.2538 33.8983 34.4728L28.0581 30.039C26.4953 31.1072 24.3977 31.8528 21.6422 31.8528C16.748 31.8528 12.5941 28.6889 11.1133 24.3157L10.8963 24.3337L5.18335 28.6667L5.10864 28.8702C8.15209 34.7951 14.4036 38.8662 21.6422 38.8662Z" fill="#34A853"/>
                                            <path d="M11.1144 24.3158C10.7237 23.1873 10.4976 21.978 10.4976 20.7286C10.4976 19.479 10.7237 18.2699 11.0939 17.1414L11.0835 16.901L5.29899 12.4985L5.10973 12.5868C3.85537 15.0454 3.13562 17.8064 3.13562 20.7286C3.13562 23.6507 3.85537 26.4116 5.10973 28.8703L11.1144 24.3158Z" fill="#FBBC05"/>
                                            <path d="M21.6423 9.60421C25.1176 9.60421 27.4618 11.0754 28.7986 12.3048L34.0218 7.30683C30.8139 4.38468 26.6393 2.59106 21.6423 2.59106C14.4036 2.59106 8.15211 6.66191 5.10864 12.5868L11.0928 17.1414C12.5941 12.7682 16.748 9.60421 21.6423 9.60421Z" fill="#EB4335"/>
                                        </svg>                                            
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-6/12">
                    <div class="w-full h-[882px] bg-cover bg-[url('/images/img3.png')] flex flex-col justify-between bg-no-repeat">
                        <div class="flex w-full justify-center items-start pt-[50px]">
                            <a href="{{ url('/') }}"
                                class="{{ (request()->is('Home')) ? 'block mx-6 mt-0 py-0 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 mt-0 py-0 border-b-2 hover:border-white border-transparent text-sm text-white capitalize hover:text-white  cursor-pointer' }}">
                                Home
                            </a>
                            <a href="{{ url('pricing') }}"
                                class="{{ (request()->is('pricing')) ? 'block mx-6 mt-0 py-0 border-b-2 border-white h-full text-sm capitalize text-[18px] cursor-pointer' : 'block mx-6 mt-0 py-0 border-b-2 hover:border-white border-transparent text-sm text-white capitalize hover:text-white cursor-pointer' }}">
                                Pricing
                            </a>
                            <a href="{{ url('/') }}"
                                class="{{ (request()->is('/')) ? 'block mx-6 mt-0 py-0 border-b-2 border-white h-full text-sm capitalize text-[18px] text-[#9e9da2] cursor-pointer' : 'block mx-6 text-[#9e9da2] mt-0 py-0 border-b-2 hover:border-white border-transparent text-sm capitalize hover:text-white  cursor-pointer' }}">
                                Templates(Coming soon)
                            </a>
                        </div>
                        <div class="w-full text-center pb-[63px]">
                            <svg width="52" height="4" class="mx-auto" viewBox="0 0 52 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2H50" stroke="white" stroke-width="4" stroke-linecap="square"/>
                            </svg>                                
                            <h3 class="text-[24px] leading-[24px] font-bold text-white capitalize my-[15px]">Lorem Ipsum is simply dummy</h3>
                            <p class="text-[18px] leading-[24px] text-white capitalize">Lorem Ipsum is simply dummy text of<br> the printing a</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection