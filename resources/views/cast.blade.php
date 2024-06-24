@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16 bg-custom-radial">
    <div class="flex relative gap-80 justify-between mt-12 flex-wrap">
        <div class="flex flex-col justify-center text-white">
            <div class="text-3xl">All Casts - {{ $movieTitle }}</div>
        </div>
        <!-- <div class="flex gap-3 items-center py-3 my-auto rounded-xl">
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
        </div> -->
    </div>
    <div class="relative grid grid-cols-4 gap-20 px-32 text-white text-[20px]">
        @foreach($castMembers as $cast)
        <div>
            <div class="flex gap-3 justify-between py-10">
                <img loading="lazy" src="{{ $cast['picture'] }}" class="shrink-0 rounded-full aspect-square w-[70px]" />
                <a href="/castDetail/{{ str_replace(' ', '_', $cast['name']) }}" class="my-auto no-underline hover:underline">{{ $cast['name'] }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection