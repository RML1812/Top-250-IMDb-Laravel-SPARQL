@extends('layouts.app')

@section('content')
<div class="flex overflow-hidden relative flex-col items-center pb-16 bg-custom-radial">
    <div class="flex relative self-center mt-16 px-24">
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-3/12">
                <div class="flex flex-col justify-center text-lg tracking-tight text-slate-300 mb-10">
                    @if ($castDetails)
                    <img loading="lazy" src="{{ $castDetails['picture'] }}" class="w-full aspect-[0.81] mb-10" />
                    @if ($castDetails['profileLink'] !== 'NaN')
                    <div class="flex gap-2.5 justify-center">
                        <img loading="lazy" src="../assets/theMovieDB.png" class="shrink-0 aspect-square w-[25px]" />
                        <div class="hover:underline"><a href="{{ $castDetails['profileLink'] }}" target="_blank">More Detailed Info</a></div>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
            <div class="flex flex-col ml-5 w-9/12 max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow px-5 max-md:mt-10 max-md:max-w-full">
                    @if ($castDetails)
                    <div class="text-3xl font-bold text-white max-md:max-w-full">
                        {{ $castDetails['name'] }}
                    </div>
                    <div class="grid grid-cols-3 pr-96 mt-5">
                        <div class="col-span-1">
                            <div class="text-xl font-semibold text-slate-400">Birthday</div>
                            <div class="text-xl font-semibold text-slate-400">Place of Birth</div>
                        </div>
                        <div class="col-span-2">
                            <div class="text-lg font-medium text-white">
                                {{ $castDetails['birthday'] }}
                            </div>
                            <div class="text-lg font-medium text-white">
                                {{ $castDetails['placeOfBirth'] }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="mt-5 text-xl font-semibold text-justify text-slate-400 max-md:max-w-full">
                        Contributes In:
                    </div>
                    <div class="flex justify-center gap-5 max-md:flex-col max-md:gap-0 movies-container flex-wrap">
                        <!-- Movie cards will be injected here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.querySelector(".movies-container");

        // Fetch movies for the cast member
        fetchMovies();

        function fetchMovies() {
            const castName = '{{ $castName }}'; // Get cast name from Blade template

            // Fetch movies from API
            fetch(`/api/moviecovercast/${castName.replace(/ /g, '_')}`)
                .then((response) => response.json())
                .then((data) => {
                    displayMovies(data); // Display movies
                })
                .catch((error) => console.error("Error fetching movies:", error));
        }

        // Function to display movies
        function displayMovies(movies) {
            container.innerHTML = ""; // Clear previous movies
            movies.forEach((movie) => {
                const movieElement = `
                <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                    <div class="flex relative flex-col grow justify-center px-4 pt-2.5 pb-3.5 mx-auto w-full text-sm tracking-tight bg-white rounded-xl shadow-sm max-md:mt-10">
                        <div class="relative w-full h-[360px]">
                            <img class="object-cover w-full h-full" loading="lazy" src="${movie.poster}" />
                        </div>
                        <div class="justify-center px-1.5 py-0.5 mt-4 text-base font-semibold tracking-tight text-justify text-black">
                            <span>${movie.rank}.&nbsp</span>${movie.title}
                        </div>
                        <div class="flex gap-5 justify-between pr-2.5 mt-2 text-black">
                            <div class="flex gap-1 justify-between">
                                <img loading="lazy" src="/assets/imdb-logo.png" class="shrink-0 self-start w-4 aspect-square" />
                                <div>${movie.IMDB_rating} (${movie.IMDB_vote})</div>
                            </div>
                            <div class="flex gap-1.5 whitespace-nowrap">
                                <img loading="lazy" src="/assets/persentase.png" class="shrink-0 self-start w-4 aspect-square" />
                                <div>${movie.rotten_rating}</div>
                            </div>
                        </div>
                        <div class="justify-center self-end p-2.5 mt-3 font-medium text-justify text-gray-800 rounded-2xl bg-slate-300">
                            <a href="/movieDetail/${movie.rank}">See Details</a>
                        </div>
                    </div>
                </div>
            `;
                container.innerHTML += movieElement;
            });
        }
    });
</script>
@endsection