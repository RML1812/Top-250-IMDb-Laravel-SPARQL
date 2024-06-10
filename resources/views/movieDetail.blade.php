@extends('layouts.app')

@section('content')
<div class="relative flex flex-col items-center overflow-hidden pb-16 w-full h-screen bg-custom-radial">
    <div class="relative flex flex-wrap gap-5 mt-20 px-4 lg:px-40 w-full h-full">
        <div class="flex flex-col gap-52 lg:flex-row w-full">
            <div class="flex flex-col w-full lg:w-2/3">
                <div class="flex flex-col grow px-5 lg:px-0 mt-10 lg:mt-0">
                    <div class="text-3xl font-bold text-white">
                        The Shawshank Redemption (1994)
                    </div>
                    <div class="flex gap-5 mt-3.5 text-xl tracking-tight text-slate-300">
                        <div class="flex gap-2.5">
                            <img loading="lazy" src="{{ asset('assets/imdb-logo.png') }}" class="shrink-0 aspect-[1.04] w-[25px]" />
                            <a href="">
                                <div class="underline">9.3 (2.9M)</div>
                            </a>
                        </div>
                        <div class="flex gap-2.5 whitespace-nowrap">
                            <img loading="lazy" src="{{ asset('assets/persentase.png') }}" class="shrink-0 aspect-[1.04] w-[25px]" />
                            <a href="">
                                <div class="underline">89%</div>
                            </a> 
                        </div>
                    </div>
                    <div class="mt-12 text-xl text-justify text-white">
                        Over the course of several years, two convicts form a friendship,
                        seeking consolation and, eventually, redemption through basic
                        compassion.
                    </div>
                    <div class="flex flex-col grow max-md:mt-10 ">
                        <div class="grid grid-cols-5 gap-5 mt-10">
                            <div class="col-span-1">
                                <div class="text-xl font-semibold text-slate-400">Duration</div>
                                <div class="text-xl font-semibold text-slate-400">Genre</div>
                                <div class="text-xl font-semibold text-slate-400">Director</div>
                                <div class="text-xl font-semibold text-slate-400">Writers</div>
                                <div class="text-xl font-semibold text-slate-400">Casts</div>
                            </div>
                            <div class="col-span-4">
                                <div class="text-lg font-medium text-white">
                                    2h22m (142m)
                                </div>
                                <div class="text-lg font-medium text-white">
                                    Thriller
                                </div>
                                <div class="text-lg font-medium text-white">
                                    Frank Darabont
                                </div>
                                <div class="flex gap-5 text-justify self-start text-lg font-medium text-white">
                                    <div class="flex gap-5 self-start text-lg font-medium text-slate-300 flex-nowrap">
                                        <a href="{{ route('castDetail') }}">
                                            <div class="underline">Stephen King</div>
                                        </a>
                                        <a href="{{ route('castDetail') }}">
                                            <div class="underline">Frank Darabont</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex gap-5 text-justify self-start text-lg font-medium text-white">
                                    <div class="flex gap-5 self-start text-lg font-medium text-slate-300 flex-nowrap">
                                        <a href="{{ route('castDetail') }}">
                                            <div class="underline">Tim Robbins</div>
                                        </a>
                                        <a href="{{ route('castDetail') }}">
                                            <div class="underline">Morgan Freeman</div>
                                        </a>
                                        <a href="{{ route('castDetail') }}">
                                            <div class="underline">Bob Gunton</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 text-lg font-semibold text-justify text-amber-100 underline">
                            <a href="{{ route('cast') }}">See All Casts &gt;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full lg:w-1/3">
                <div class="flex flex-col justify-center self-stretch p-2.5 rounded-xl bg-slate-400">
                    <img loading="lazy" src="{{ asset('assets/photoMovie.png') }}" class="w-full aspect-[0.67]" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
