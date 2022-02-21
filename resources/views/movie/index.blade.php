@extends('layouts.master')
@section('title', 'HnamTV - Movie')
@section('content')
    <div class="mx-[5%]">
        <div class="flex justify-between gap-10">
            <div class="w-[75%]">
                <div class="flex items-center  text-[24px] gap-1 font-semibold mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <a href="{{url('/')}}">HnamTv</a>
                </div>
                <div class="w-full">
                    <div class="relative w-full h-0 pb-[56.25%]">
                        <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center group bg-black">
                            <video crossorigin="" playsinline="" class="w-full h-full cursor-pointer" src="blob:https://filmhot.live/7c348227-efb3-4c13-9ae3-8b9b42a31556">
                                <track kind="subtitles" srclang="sub" label="Subtitle" src="https://srt-to-vtt.vercel.app?url=https%3A%2F%2Fsubtitles.netpop.app%2Fsubtitles%2F20220218%2F1645172871055_Texas.Chainsaw.Massacre.WEBRip.Netflix.vi.srt" default="">
                            </video>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                                <img class="w-[50px] h-[50px]" src="/play.svg" alt="">
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-b from-transparent to-[#000000e0] flex flex-col items-stretch text-xl transition duration-300 opacity-0 !opacity-100 group-hover:opacity-100">
                                <div class="flex-shrink-0 h-[12px] w-full cursor-pointer flex flex-col items-stretch justify-center seek-container">
                                    <div class="h-[4px] bg-[#FFFFFF80]"><div class="h-full bg-white relative after:absolute after:w-[12px] after:h-[12px] after:right-[-6px] after:bg-white after:top-1/2 after:-translate-y-1/2 after:rounded-full after:opacity-0 seek-ball after:transition" style="width: 0.5%;">

                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-stretch flex-grow px-4">
                                    <div class="flex items-center gap-4"><button class="before:left-[46px]" data-tooltips="Play (space)">
                                            <img class="w-[20px] h-[20px]" src="/play.svg" alt=""></button><button data-tooltips="Rewind 10s">
                                            <i class="fas fa-step-backward"></i></button><button data-tooltips="Forward 10s"><i class="fas fa-step-forward"></i>
                                        </button>
                                        <div class="flex items-stretch volume-container">
                                            <button data-tooltips="Volume">
                                                <i class="fas fa-volume-up"></i>
                                            </button>
                                            <div class="w-0 transition-all duration-300 overflow-hidden flex items-center justify-end volume">
                                                <input class="slider w-[100px]" type="range" min="0" max="100" value="100">
                                            </div>
                                        </div>
                                        <div class="text-base hidden sm:block">
                                            <span>00:00:25</span>
                                            <span> / </span>
                                            <span>01:23:04</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 items-center">
                                        <button data-tooltips="Disable subtitle">
                                            <i class="fas fa-closed-captioning"></i>
                                        </button><div class="relative">
                                            <button data-tooltips="Settings">
                                                <i class="fas fa-cog"></i>
                                            </button>
                                            <div class="absolute bottom-[40px] right-[-40px] w-[200px] h-[200px] overflow-y-auto overflow-x-hidden bg-dark-lighten p-4 invisible opacity-0 transition ">
                                                <h1 class="text-lg">Quality</h1>
                                                <div class="flex flex-col items-stretch pl-[6px]"><div>
                                                        <button class="text-sm relative text-gray-400 text-white before:absolute before:left-[-10px] before:top-1/2 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-white before:rounded-full">720p</button></div><div><button class="text-sm relative text-gray-400 ">540p</button></div></div><h1 class="text-lg mt-4">Subtitle</h1><div class="flex flex-col items-stretch pl-[6px]"><div><button class="text-sm relative text-gray-400 text-left ">Off</button></div><div><button class="text-sm relative text-gray-400 text-left text-white before:absolute before:left-[-10px] before:top-1/2 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-white before:rounded-full">Tiếng Việt</button></div><div><button class="text-sm relative text-gray-400 text-left ">English</button></div><div><button class="text-sm relative text-gray-400 text-left ">简体中文</button></div><div><button class="text-sm relative text-gray-400 text-left ">繁体中文</button></div><div><button class="text-sm relative text-gray-400 text-left ">Bahasa Indonesia</button></div><div><button class="text-sm relative text-gray-400 text-left ">Bahasa Melayu</button></div><div><button class="text-sm relative text-gray-400 text-left ">ภาษาไทย</button></div><div><button class="text-sm relative text-gray-400 text-left ">عربي</button></div><div><button class="text-sm relative text-gray-400 text-left ">Español</button></div><div><button class="text-sm relative text-gray-400 text-left ">Türk</button></div><div><button class="text-sm relative text-gray-400 text-left ">português</button></div><div><button class="text-sm relative text-gray-400 text-left ">français</button></div><div><button class="text-sm relative text-gray-400 text-left ">فارسی (Auto)</button></div></div><h1 class="text-lg mt-4">Speed</h1><div class="flex flex-col items-stretch pl-[6px]"><div><button class="text-sm relative text-gray-400 ">0.25x</button></div><div><button class="text-sm relative text-gray-400 ">0.5x</button></div><div><button class="text-sm relative text-gray-400 ">0.75x</button></div><div><button class="text-sm relative text-gray-400 text-white before:absolute before:left-[-10px] before:top-1/2 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-white before:rounded-full">1x</button></div><div><button class="text-sm relative text-gray-400 ">1.25x</button></div><div><button class="text-sm relative text-gray-400 ">1.5x</button></div><div><button class="text-sm relative text-gray-400 ">1.75x</button></div><div><button class="text-sm relative text-gray-400 ">2x</button></div></div></div></div><button class="before:right-[-14px] before:left-auto before:translate-x-0" data-tooltips="Fullscreen (f)"><i class="fas fa-expand-alt"></i></button></div></div></div></div></div></div>
            </div>
            <div>
                <div class="mt-6 border border-[#a7a8b0] bg-white p-[12px] flex items-center text-[#a7a8b0] rounded-xl gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input class="focus:outline-none" type="text" placeholder="Search for anything..." />
                </div>
            </div>
        </div>
    </div>
@stop

