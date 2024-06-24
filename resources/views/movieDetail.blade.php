@extends('layouts.app')

@section('content')
<div class="relative flex flex-col items-center overflow-hidden pb-16 w-full h-screen bg-custom-radial">
    <div class="relative flex flex-wrap gap-5 mt-20 px-4 lg:px-40 w-full h-full">
        <div class="flex flex-col gap-16 lg:flex-row w-full">
            <div class="flex flex-col w-full lg:w-2/3">
                <div class="flex flex-col grow px-5 lg:px-0 mt-10 lg:mt-0">
                    <div class="text-3xl font-bold text-white">
                        {{ $movieDetails['title'] }} ({{ $movieDetails['year'] }})
                    </div>
                    <div class="flex gap-5 mt-3.5 text-xl tracking-tight text-slate-300">
                        <a href="{{ $movieDetails['imdbLink'] }}" target="_blank">
                            <div class="flex gap-2.5">
                                <img loading="lazy" src="../assets/imdb-logo.png" class="shrink-0 aspect-[1.04] w-[25px]" />
                                <div class="hover:underline">{{ $movieDetails['imdbRating'] }} ({{ $movieDetails['imdbVotes'] }})</div>
                            </div>
                        </a>
                        <a href="{{ $movieDetails['rottenLink'] }}" target="_blank">
                            <div class="flex gap-2.5 whitespace-nowrap">
                                <img loading="lazy" src="../assets/persentase.png" class="shrink-0 aspect-[1.04] w-[25px]" />
                                <div class="hover:underline">{{ $movieDetails['rottenRating'] }}</div>
                            </div>
                        </a>
                    </div>
                    <div class="mt-12 text-xl text-justify text-white">
                        {{ $movieDetails['storyline'] }}
                    </div>
                    <div class="flex gap-5 justify-between self-start mt-12">
                        <div class="text-xl font-semibold text-slate-400">Duration</div>
                        <div class="text-lg font-medium text-white">{{ $movieDetails['duration'] }}</div>
                    </div>
                    <div class="flex gap-5 justify-between self-start mt-4 text-justify">
                        <div class="text-xl font-semibold text-slate-400">Genre</div>
                        <div class="text-lg font-medium text-slate-300">
                            @foreach(array_slice($genreNames, 0, 3) as $genre)
                            {{ $genre['genreName'] }}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="flex gap-5 justify-between self-start mt-4 text-justify">
                        <div class="text-xl font-semibold text-slate-400">Director</div>
                        <div class="text-lg font-medium text-slate-300">
                            @foreach(array_slice($directorNames, 0, 3) as $director)
                            <a href="/castDetail/{{ str_replace(' ', '_', $director['directorName']) }}" class="no-underline hover:underline">
                                {{ $director['directorName'] }}
                            </a>@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="flex gap-5 justify-between self-start mt-4 text-justify">
                        <div class="text-xl font-semibold text-slate-400">Writers</div>
                        <div class="flex gap-5 self-start text-lg font-medium text-slate-300 flex-wrap">
                            @foreach(array_slice($writerNames, 0, 3) as $writer)
                            <a href="/castDetail/{{ str_replace(' ', '_', $writer['writerName']) }}" class="no-underline hover:underline">
                                {{ $writer['writerName'] }}
                            </a>@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="flex gap-5 mt-4 text-justify self-start">
                        <div class="text-xl font-semibold text-slate-400">Casts</div>
                        <div class="flex gap-5 self-start text-lg font-medium text-slate-300 flex-wrap">
                            @foreach(array_slice($castNames, 0, 3) as $cast)
                            <a href="/castDetail/{{ str_replace(' ', '_', $cast['castName']) }}" class="no-underline hover:underline">
                                {{ $cast['castName'] }}
                            </a>@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-8 text-lg font-semibold text-justify text-amber-100 hover:underline">
                        <a href="/movieDetail/{{ $movieDetails['rank'] }}/cast">See All Casts &gt;</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full lg:w-1/3">
                <div class="flex flex-col justify-center self-stretch p-2.5 rounded-xl bg-slate-400">
                    <img loading="lazy" src="{{ $movieDetails['poster'] }}" class="w-full aspect-[0.67]" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection