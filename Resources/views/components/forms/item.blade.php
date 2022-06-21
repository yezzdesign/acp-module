@php
    if (!isset($errorDBColumn)){$errorDBColumn = false;}

    if ($errors->has($errorDBColumn)){$border = 'border-main_brand_error';}
    else{$border = 'border-main_brand/50';}

	if (isset($span)) { $rounded = 'rounded-r-sm'; }
	else {$rounded = 'rounded-sm';}
@endphp

<div class="md:grid md:grid-cols-3 md:gap-6">

    {{-- 1. Col with input --}}
    <div class="md:col-span-2 my-1">
        <div class="flex">
            {{$span??''}}
            <input type="{{$type??'text'}}" name="{{$name??'default'}}" id="{{$id??'default'}}" placeholder="{{$placeholder??''}}" value="{{$value??''}}" class="{{$border}} focus:ring-main_brand/50 focus:border-main_brand/10 block sm:text-sm {{$rounded}} shadow-sm w-full tracking-wider {{$class??''}}" {{$disabled??''}}>
        </div>
    </div>

    {{-- 2. Col with errormessage --}}
    <div class="md:col-span-1 my-1">
        <div class="flex">
            @error($errorDBColumn)<p class="block w-full sm:text-sm text-main_brand_error">{{$message}} </p> @enderror
        </div>

    </div>
</div>

