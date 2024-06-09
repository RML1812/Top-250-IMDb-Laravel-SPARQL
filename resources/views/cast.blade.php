@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16">
    <div>
        <img
            src="{{ asset('assets/bg-detail.png') }}"
            class=" absolute inset-0"
            />
    </div>
    {{-- <div
    class="flex relative gap-5 justify-between px-5 mt-12"
    >
        <div class="my-auto text-3xl font-medium text-white">
        All Casts - The Shawshank Redemption
        </div>
        <div
        class="flex gap-5 items-center px-4 py-3 bg-white rounded-xl text-zinc-700 text-opacity-60"
        >
        <div
            class="justify-center self-stretch p-1.5 text-lg font-medium text-center whitespace-nowrap leading-[50.04px]"
        >
            􀊫
        </div>
        <div
            class="flex-1 self-stretch my-auto text-lg tracking-normal leading-5"
        >
            Search Cast
        </div>
        <img
            loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/1628cce5e415194da51af372d8f151d65e6e2cf5929ad0f774b9252433cf6a2e?"
            class="shrink-0 self-stretch ml-12 w-6 aspect-square"
        />
        </div> --}}

        <div
        class="flex relative justify-between px-5 mt-20 w-full max-w-[1200px] max-md:mt-10 max-md:max-w-full"
        >
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="flex flex-col grow text-lg font-medium text-justify text-slate-300 max-md:mt-10"
            >
              <div class="flex gap-5 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <a href="{{ route('castDetail') }}" class="my-auto underline">Morgan Freeman</a>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
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
              <div class="flex gap-5 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
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
              <div class="flex gap-5 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}""
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
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
              <div class="flex gap-5 justify-between">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
                <img
                  loading="lazy"
                  src="{{ asset('assets/avatar.png') }}"
                  class="shrink-0 rounded-full aspect-square w-[70px]"
                />
                <div class="my-auto underline">Morgan Freeman</div>
              </div>
              <div class="flex gap-5 justify-between mt-10">
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
        </div>
</div>

</div>
@endsection