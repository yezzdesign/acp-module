<nav {{ $attributes->class(['flex','flex-wrap','items-center','justify-between','w-full','p-4','text-lg','text-main_font/80','bg-white','shadow-lg','sticky','top-0','z-50',]) }}>
    {{-- Brand Container --}}
    <div>
        <div id="menu_brand">
            <a href="{{ route('acp.backend.index') }}" class="text-xl hover:text-main_brand"><i class="fa-solid fa-book-open fa-xl"></i><span class="ml-3 font-semibold">Julis<span class="text-main_brand">Book</span>Corner</span></a>
        </div>
    </div>
    {{-- End Brand Container --}}

    {{-- SVG Hamburger Menu --}}
    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    {{-- End SVG Hamburger Menu --}}

    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul class="pt-4 text-base text-main_font/80 md:flex md:justify-between md:items-center md:pt-0" >
            {{$slot}}
        </ul>
    </div>
</nav>
