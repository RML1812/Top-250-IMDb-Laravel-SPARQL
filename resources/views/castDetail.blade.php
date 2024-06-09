@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16 bg-custom-radial">
    {{-- <div>
        <img src="{{ asset('assets/bg-detail.png') }}" class="absolute inset-0"/>
    </div> --}}
    <div class="flex relative self-center mt-16 px-24">
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-3/12">
                <div class="flex flex-col justify-center text-lg tracking-tight text-slate-300 mb-10">
                    <img loading="lazy" src="{{ asset('assets/castPhoto.png') }}" class="w-full aspect-[0.81] mb-10"/>
                    <div class="flex gap-2.5 justify-center px-14 pt-5">
                        <img loading="lazy" src="{{ asset('assets/theMovieDB.png') }}" class="shrink-0 aspect-square w-[25px]"/>
                        <div class="underline">More Detailed Info</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-9/12 max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow px-5 max-md:mt-10 max-md:max-w-full">
                    <div class="text-3xl font-bold text-white max-md:max-w-full">
                        Morgan Freeman
                    </div>
                    <div class="grid grid-cols-3 pr-96 mt-5">
                        <div class="col-span-1">
                            <div class="text-xl font-semibold text-slate-400">Birthday</div>
                            <div class="text-xl font-semibold text-slate-400">Place of Birth</div>
                        </div>
                        <div class="col-span-2">
                            <div class="text-lg font-medium text-white">
                                June 1, 1937 (age 87 years)
                            </div>
                            <div class="text-lg font-medium text-white">
                                Memphis, Tennessee, United States
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-xl font-semibold text-justify text-slate-400 max-md:max-w-full">
                        Contributes In:
                    </div>
                    <div class="justify-center mt-5 max-md:max-w-full">
                        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                            <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
                                    <img loading="lazy" src="{{ asset('assets/photoMovie.png') }}" class="w-full aspect-[0.67]"/>
                                    <div class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black">
                                        The Shawshank Redemption
                                    </div>
                                    <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
                                        <div class="text-black">1994</div>
                                        <div class="flex gap-1 justify-between">
                                            <img loading="lazy" src="{{ asset('assets/imdb-logo.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>9.3 (2.9M)</div>
                                        </div>
                                        <div class="flex gap-1.5 whitespace-nowrap">
                                            <img loading="lazy" src="{{ asset('assets/persentase.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>89%</div>
                                        </div>
                                    </div>
                                    <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                                        <a href="{{ route('movieDetail') }}">See Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
                                    <img loading="lazy" src="{{ asset('assets/photoMovie.png') }}" class="w-full aspect-[0.67]"/>
                                    <div class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black">
                                        The Shawshank Redemption
                                    </div>
                                    <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
                                        <div class="text-black">1994</div>
                                        <div class="flex gap-1 justify-between">
                                            <img loading="lazy" src="{{ asset('assets/imdb-logo.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>9.3 (2.9M)</div>
                                        </div>
                                        <div class="flex gap-1.5 whitespace-nowrap">
                                            <img loading="lazy" src="{{ asset('assets/persentase.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>89%</div>
                                        </div>
                                    </div>
                                    <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                                        <a href="{{ route('movieDetail') }}">See Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
                                    <img loading="lazy" src="{{ asset('assets/photoMovie.png') }}" class="w-full aspect-[0.67]"/>
                                    <div class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black">
                                        The Shawshank Redemption
                                    </div>
                                    <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
                                        <div class="text-black">1994</div>
                                        <div class="flex gap-1 justify-between">
                                            <img loading="lazy" src="{{ asset('assets/imdb-logo.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>9.3 (2.9M)</div>
                                        </div>
                                        <div class="flex gap-1.5 whitespace-nowrap">
                                            <img loading="lazy" src="{{ asset('assets/persentase.png') }}" class="shrink-0 self-start w-4 aspect-square"/>
                                            <div>89%</div>
                                        </div>
                                    </div>
                                    <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                                        <a href="{{ route('movieDetail') }}">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
