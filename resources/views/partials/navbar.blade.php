<nav class="bg-[#131831] w-full">
  <div class="container mx-auto flex items-center justify-between py-5 px-20">
    <a class="font-poppins text-left text-[20px] font-bold text-white" href="/">
      Raldi
    </a>
    <div class="flex items-center" id="navbarSupportedContent">
      <ul class="flex list-none flex-row ml-auto">
        <li class="nav-item">
          <a href="{{ route('topPage') }}" class="text-[16px] font-medium text-[#F7E987] ">Top 250</a>
        </li>
        <li class="nav-item ml-8">
          <a href="{{ route('genre.filter') }}" class="text-[16px] font-normal text-white">Genre</a>
        </li>
      </ul>
    </div>
  </div>
</nav>