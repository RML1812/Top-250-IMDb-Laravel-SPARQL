@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col  pb-16">
    <div>
        <img src="{{ asset('assets/bg-detail.png') }}" class="absolute inset-0"/>
    </div>
<div class="flex relative min-h-screen">
    <!-- Sidebar Filter -->
    <aside class="w-1/4 mt-10 ml-10 p-6">
        <div class="space-y-4 text-white">
            <h2 class="text-xl font-semibold mb-4">Filter</h2>
            <div>
                <input type="checkbox" id="action" class="mr-2">
                <label for="action">Action</label>
            </div>
            <div>
                <input type="checkbox" id="adventure" class="mr-2">
                <label for="adventure">Adventure</label>
            </div>
            <div>
                <input type="checkbox" id="animation" class="mr-2">
                <label for="animation">Animation</label>
            </div>
            <div>
                <input type="checkbox" id="biography" class="mr-2">
                <label for="biography">Biography</label>
            </div>
            <div>
                <input type="checkbox" id="comedy" class="mr-2">
                <label for="comedy">Comedy</label>
            </div>
            <div>
                <input type="checkbox" id="crime" class="mr-2">
                <label for="crime">Crime</label>
            </div>
            <div>
                <input type="checkbox" id="documentary" class="mr-2">
                <label for="documentary">Documentary</label>
            </div>
            <div>
                <input type="checkbox" id="drama" class="mr-2">
                <label for="drama">Drama</label>
            </div>
            <div>
                <input type="checkbox" id="family" class="mr-2">
                <label for="family">Family</label>
            </div>
            <div>
                <input type="checkbox" id="fantasy" class="mr-2">
                <label for="fantasy">Fantasy</label>
            </div>
            <div>
                <input type="checkbox" id="film-noir" class="mr-2">
                <label for="film-noir">Film-Noir</label>
            </div>
            <div>
                <input type="checkbox" id="history" class="mr-2">
                <label for="history">History</label>
            </div>
            <div>
                <input type="checkbox" id="horror" class="mr-2">
                <label for="horror">Horror</label>
            </div>
            <div>
                <input type="checkbox" id="music" class="mr-2">
                <label for="music">Music</label>
            </div>
            <div>
                <input type="checkbox" id="musical" class="mr-2">
                <label for="musical">Musical</label>
            </div>
        </div>
    </aside>
    <aside class="w-3/4 mt-10 ml-10 p-6">
        <div class="flex flex-wrap justify-start gap-6 px-1 pt-5">
            <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
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
                        <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                            <a href="{{ route('movieDetail') }}">See Details</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </aside>
@endsection