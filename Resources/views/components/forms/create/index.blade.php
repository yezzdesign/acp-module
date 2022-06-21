{{-- View with 3 cols --}}
{{-- 1. Col are the description--}}
{{-- 2. Col are the input fields--}}

<div class="md:grid md:grid-cols-3 md:gap-6 mx-8 content-center">
    {{-- 1. Col with the description --}}
    <div class="my-5 md:col-span-1 md:border-r-2 md:border-main_brand/50">
        <div class="">
            <h3 class="inline-flex text-lg font-bold leading-4 text-main_font/80 tracking-wider border-b border-main_brand/50 py-2">{{$title}}</h3>
            <p class="mt-1 text-sm text-main_font/80">{!! $description !!}</p>
        </div>
    </div>
    {{-- 2. Col with the input fields --}}
    <div class="md:col-span-2">
         <fieldset class="h-full py-6 grid content-center">
            <div class="">
                {{$slot}}
            </div>
         </fieldset>
    </div>
</div>
