@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16 bg-custom-radial">
    <div class="flex relative gap-80 justify-between mt-12 flex-wrap">
      <div class="flex flex-col justify-center text-white">
          <div class="text-3xl">All Casts - The Shawshank Redemption</div>
      </div>
      <div class="flex gap-3 items-center py-3 my-auto rounded-xl">
          <form class="flex ml-8" role="search">
              <div class="relative flex items-center">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg
                    class="h-4 w-4 text-gray-400"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 20"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                    />
                  </svg>
                </span>
                <input
                  class="w-[310px] rounded-[10px] border-[0.5px] border-[#666666] bg-white py-3 pl-10 pr-4 text-[17px] font-light"
                  type="search"
                  placeholder="Search Cast"
                  aria-label="Search"
                />
            </div>
          </form>
      </div>
    </div>
      <div class="relative grid grid-cols-4 gap-20 px-32 text-white text-[20px]">
        <div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
        </div>
        <div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
        </div>
        <div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
        </div>
        <div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
          <div class="flex gap-3 justify-between py-10">
            <img
              loading="lazy"
              src="{{ asset('assets/avatar.png') }}"
              class="shrink-0 rounded-full aspect-square w-[70px]"
            />
            <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
          </div>
        </div>
      </div>
    {{-- </div class="flex justify-center items-center">
        <div
        class="flex relative justify-between px-5 mt-20 w-full max-w-[1200px] max-md:mt-10 max-md:max-w-full"
        >
        <div class="flex gap-3 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="flex flex-col grow text-lg font-medium text-justify text-slate-300 max-md:mt-10"
            >
              <div class="flex gap-3 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
            </div>
          </div>
          <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="flex flex-col grow text-lg font-medium text-justify text-slate-300 max-md:mt-10"
            >
              <div class="flex gap-3 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
            </div>
          </div>
          <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="flex flex-col grow text-lg font-medium text-justify text-slate-300 max-md:mt-10"
            >
              <div class="flex gap-3 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}""
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
            </div>
          </div>
          <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="flex flex-col grow text-lg font-medium text-justify text-slate-300 max-md:mt-10"
            >
              <div class="flex gap-3 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-3 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div> --}}
</div>

</div>
@endsection