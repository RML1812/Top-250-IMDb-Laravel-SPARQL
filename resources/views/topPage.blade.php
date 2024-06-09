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
                <div class="justify-center self-stretch p-1.5 text-lg font-medium text-center whitespace-nowrap leading-[50.04px]">
                </div>
                    <div
                    class="flex-1 self-stretch my-auto text-lg tracking-normal leading-5"
                    >
                    Search Movies
                    </div>
                    <img
                    loading="lazy"
                    src=""
                    class="shrink-0 self-stretch my-auto w-6 aspect-square"
                    />
                </div>
            </div>
    <div
    class="relative justify-center px-5 mt-12 w-full max-w-[1200px] max-md:mt-10 "
    >
    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            <a href="{{ route('movieDetail') }}">See Details</a>
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            
            See Details
            </div>
        </div>
        </div>
    </div>
    </div>
    <div
    class="relative justify-center px-5 mt-6 w-full max-w-[1200px] max-md:max-w-full"
    >
    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div
            class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10"
        >
            <img
            loading="lazy"
            src="{{ asset('assets/photoMovie.png') }}"
            class="w-full aspect-[0.67]"
            />
            <div
            class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black"
            >
            The Shawshank Redemption
            </div>
            <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
            <div class="text-black">1994</div>
            <div class="flex gap-1 justify-between">
                <img
                loading="lazy"
                src="{{ asset('assets/imdb-logo.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>9.3 (2.9M)</div>
            </div>
            <div class="flex gap-1.5 whitespace-nowrap">
                <img
                loading="lazy"
                src="{{ asset('assets/persentase.png') }}"
                class="shrink-0 self-start w-4 aspect-square"
                />
                <div>89%</div>
            </div>
            </div>
            <div
            class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300"
            >
            See Details
            </div>
        </div>
        </div>
    </div>
    </div>
    {{-- <a href="{{ route('movieDetail') }}"></a> --}}
    </div>
@endsection