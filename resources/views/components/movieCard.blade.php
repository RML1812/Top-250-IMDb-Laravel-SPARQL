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
</div>
</div>