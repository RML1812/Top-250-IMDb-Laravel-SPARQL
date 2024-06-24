@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16 w-full min-h-screen">
  <div>
    <img loading="lazy" src="{{ asset('assets/bg-topp.jpg') }}" class="object-cover absolute inset-0 size-full opacity-50" />
    <div class="absolute inset-0 bg-[#131831] opacity-80"></div>
  </div>
  <div class="flex relative gap-96 justify-between mt-12 flex-wrap">
    <div class="flex flex-col justify-center text-white">
      <div class="text-3xl font-extrabold">TOP 250 MOVIES</div>
      <div class="mt-2 text-xl font-semibold">Main Source: IMDb</div>
    </div>
    <div class="flex gap-5 items-center py-3 my-auto rounded-xl">
      <form class="flex lg:ml-8" role="search">
        <div class="relative flex items-center">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-4 w-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </span>
          <input class="w-[310px] rounded-[10px] border-[0.5px] border-[#666666] bg-white py-3 pl-10 pr-4 text-[17px] font-light" type="search" placeholder="Search Movies" aria-label="Search" />
        </div>
      </form>
    </div>
  </div>
  <div class="relative justify-center px-5 mt-12 w-full max-w-[1200px] max-md:mt-10">
    <div class="flex justify-center gap-5 max-md:flex-col max-md:gap-0 movies-container flex-wrap">
    </div>
    <script src="{{ asset('js/moviecover.js') }}"></script>
  </div>
</div>
@endsection