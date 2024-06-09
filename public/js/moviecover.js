document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/moviecover")
        .then((response) => response.json())
        .then((data) => {
            const container = document.querySelector(".movies-container");
            container.innerHTML = ""; // Clear the container before adding new content
            data.forEach((movie) => {
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
                            <a href="/movieDetail">See Details</a>
                        </div>
                    </div>
                </div>
                `;
                container.innerHTML += movieElement;
            });
        })
        .catch((error) => console.error("Error fetching movies:", error));
});
