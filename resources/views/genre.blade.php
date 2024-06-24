@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col pb-16 bg-custom-radial">
    <div class="flex relative min-h-screen">
        <!-- Sidebar Filter -->
        <div class="w-1/4 mt-10 ml-10 p-6">
            <div class="space-y-4 text-white">
                <h2 class="text-xl font-semibold mb-4">Filter</h2>
                <form id="genre-filter-form">
                    @foreach(['Action', 'Adventure', 'Animation', 'Biography', 'Comedy', 'Crime', 'Documentary', 'Drama', 'Family', 'Fantasy', 'Film-Noir', 'History', 'Horror', 'Music', 'Musical'] as $genre)
                    <div>
                        <input type="checkbox" name="genres[]" value="{{ $genre }}" id="{{ strtolower($genre) }}" class="mr-2">
                        <label for="{{ strtolower($genre) }}">{{ $genre }}</label>
                    </div>
                    @endforeach
                    <button type="submit" class="mt-4 px-4 py-2 bg-gray-800 text-white rounded-md">Apply Filters</button>
                </form>
            </div>
        </div>
        <div class="relative justify-center px-5 mt-12 w-full max-w-[1200px] max-md:mt-10">
            <div class="flex justify-center gap-5 max-md:flex-col max-md:gap-0 movies-container flex-wrap">
                @foreach($movies as $movie)
                <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                    <div class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
                        <div class="relative w-full h-[360px]">
                            <img class="object-cover w-full h-full" loading="lazy" src="{{ $movie['poster'] }}" />
                        </div>
                        <div class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black">
                            <span>{{ $movie['rank'] }}.&nbsp</span>{{ $movie['title'] }}
                        </div>
                        <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
                            <div class="flex gap-1 justify-between">
                                <img loading="lazy" src="/assets/imdb-logo.png" class="shrink-0 self-start w-4 aspect-square" />
                                <div>{{ $movie['IMDB_rating'] }} ({{ $movie['IMDB_vote'] }})</div>
                            </div>
                            <div class="flex gap-1.5 whitespace-nowrap">
                                <img loading="lazy" src="/assets/persentase.png" class="shrink-0 self-start w-4 aspect-square" />
                                <div>{{ $movie['rotten_rating'] }}</div>
                            </div>
                        </div>
                        <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                            <a href="/movieDetail/{{ $movie['rank'] }}">See Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('genre-filter-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the default way

            const genres = [];
            form.querySelectorAll('input[name="genres[]"]:checked').forEach((checkbox) => {
                genres.push(checkbox.value);
            });

            const queryString = genres.join(',');
            const url = new URL(window.location.origin + `/genre/${queryString}`);
            window.location.href = url.toString();
        });
    });
</script>
@endsection