@extends('layouts.app')

@section('content')
    <div class="flex overflow-hidden relative flex-col items-center pb-16">
        <div>
            <img
                loading="lazy"
                src="{{ asset('assets/photoMovie.png') }}"
                class="object-cover absolute inset-0 size-full opacity-50"
            />
            <div class="absolute inset-0 bg-[#252B48] opacity-80"></div> 
        </div>
        <div class="flex relative gap-5 justify-between mt-12 flex-wrap">
            <div class="flex flex-col justify-center px-5 text-white">
                <div class="text-3xl font-extrabold">TOP 250 MOVIES</div>
                <div class="mt-2 text-xl font-semibold">Main Source: IMDb</div>
            </div>
            <div class="flex gap-5 items-center px-4 py-3 my-auto bg-white rounded-xl text-zinc-700 text-opacity-60">
                <div class="justify-center self-stretch p-1.5 text-lg font-medium text-center whitespace-nowrap leading-[50.04px]"></div>
                <div class="flex-1 self-stretch my-auto text-lg tracking-normal leading-5">Search Movies</div>
                <img loading="lazy" src="" class="shrink-0 self-stretch my-auto w-6 aspect-square" />
            </div>
        </div>
        <div class="relative justify-center px-5 mt-12 w-full max-w-[1200px] max-md:mt-10">
            <div class="flex justify-center gap-5 max-md:flex-col max-md:gap-0 movies-container flex-wrap">
            </div>
            <script src="{{ asset('js/moviecover.js') }}"></script>
        </div>
    </div>
@endsection

@section('scripts')
@endsection