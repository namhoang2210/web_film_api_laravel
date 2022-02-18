<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HnamTv</title>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
  <div class=" min-h-screen flex">
    <div class="w-[18%] fixed">
      <div class="flex items-center  text-[24px] gap-1 font-semibold mt-6 ml-[10%]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>HnamTv</span>
      </div>
      <div class="flex items-center gap-2 ml-[14%] mt-7 text-[22px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <h1 class="">Menu</h1>
      </div>
      <div class="flex items-center gap-2 ml-[18%] mt-3 text-[18px] font font-semibold text-blue-400 border-r-[3px] border-r-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <h1 class="">Trang chủ</h1>
      </div>
      <div class="flex items-center gap-2 ml-[18%] mt-2 text-[18px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        <h1 class="">Yêu thích</h1>
      </div>
      <div class="flex items-center gap-2 ml-[18%] mt-2 text-[18px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <h1 class="">Lịch sử</h1>
      </div>

      <div class="flex items-center gap-2 ml-[14%] mt-5 text-[22px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <h1 class="">Tài khoản</h1>
      </div>
      <div class="flex items-center gap-2 ml-[18%] mt-3 text-[18px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
        </svg>
        <h1 class="">Đăng nhập</h1>
      </div>
      <div class="flex items-center gap-2 ml-[18%] mt-2 text-[18px] font font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
        <h1 class="">Đăng kí</h1>
      </div>
        <div class="flex items-center gap-2 ml-[14%] mt-5 text-[22px] font font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <h1 class="">Cài đặt</h1>
        </div>
        <div class="flex items-center gap-2 ml-[18%] mt-3 text-[18px] font font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
            <button onclick="thememode()" class="font-semibold">Theme</button>
        </div>
      <div class="fixed left-0 bottom-0 w-[18%] text-center text-sm mb-2">@2022 Coppyright by Hoang Nam</div>
    </div>
    <div class="w-[18%]"></div>
    <div class="w-[64%] border-l border-l-gray-200 pb-[10px]">
      <div class="mt-6 mx-[5%] rounded-md">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper rounded-xl">
              @foreach($data[0]['recommendContentVOList'] as $key => $value)
                  @if($key >=0 )
                    <div class="swiper-slide rounded-xl">
                      <img class="object-cover w-full h-[350px] rounded-xl"
                        src="{{ $value['imageUrl']}}"  @if($key >=2) loading="lazy"  @endif alt="image" />
                    </div>
                  @endif
              @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        @foreach($data as $key1 => $movie)
            @if($key1 >= 1)
            <div class="mt-8 ">
              <div class="flex items-center mt-6 mb-2 justify-between">
                  <div class="flex items-center gap-2 text-[24px] font-semibold">
                      <div class="fade-loading"></div>
                      <span>{{$movie['homeSectionName']}}</span>
                  </div>
                  <div class="">
                      <a href="{{ url ('comming-soon') }}">
                          <button class="flex items-center gap-1 text-[16px] font-medium bg-pink-400 hover:bg-pink-300 text-white rounded-full px-2 py-1">
                              <h1>Xem thêm</h1>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                          </button>
                      </a>
                  </div>
              </div>
              <div class="grid grid-cols-5 gap-4">
                  @foreach($movie['recommendContentVOList'] as $key2 => $movie1)
                      @if($key2 < 10)
                        <a href="{{ url ('comming-soon') }}" class="bg-[#27282d] rounded-xl">
                          <img class="object-cover w-full h-[230px] rounded-t-xl"
                            src="{{$movie1['imageUrl']}}" @if($key1 >= 2) loading="lazy" @endif alt="image" />
                          <div class="max-h-72 mx-4  text-ellipsis overflow-hidden">
                            <h2 class="text-gray-100 py-1 text-[16px] whitespace-nowrap">{{$movie1['title']}}</h2>
                          </div>
                        </a>
                      @endif
                  @endforeach
              </div>
            </div>
              @endif
          @endforeach
      </div>
    </div>

    <div class="w-[18%] fixed top-0 right-0">
      <div class="mr-[10%]">
        <div class="mt-6 border border-[#a7a8b0] bg-white p-[12px] flex items-center text-[#a7a8b0] rounded-xl gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input class="focus:outline-none" type="text" placeholder="Search for anything..." />
        </div>
        <h1 class="mt-8  text-[22px] font-semibold ">Top Search</h1>
        <div class="overflow-y-scroll max-h-screen">
            @foreach($search as $keys => $search)
            <div class="flex mt-6 gap-2 h-[71px]">
                <img class="object-cover w-[100px] h-[70px] rounded-lg"
                     src="{{$search['cover']}}" alt="image" />
                <div class="h-[70px] text-ellipsis overflow-hidden">{{$search['title']}}</div>
            </div>
            @endforeach
            <div class="h-[150px]">

            </div>
        </div>

      </div>
      </div>
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
    function thememode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
  </script>
</body>

</html>
