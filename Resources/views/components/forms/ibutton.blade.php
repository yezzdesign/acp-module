<div class="md:grid md:grid-cols-3 md:gap-6 my-2">

    {{-- 1. Col with input --}}
    <div class="md:col-span-2 {{$bg??''}}">
        <div class="flex justify-end">
            <input type="{{$type??'submit'}}" class="leading-4 tracking-wider bg-main_brand/30 border border-main_brand/40 p-2 rounded-sm right-0 text-main_font/80 hover:bg-main_brand/50 {{$class??''}}" value="{{$value??'Send'}}">
        </div>
    </div>

    {{-- 2. Col with errormessage --}}
    <div class="md:col-span-1">
        <div class="flex">
        </div>

    </div>
</div>
