@if ($errors->any())
    <div class="bg-main_brand_error/20 border-l-8 text-main_brand_error p-4 m-8 border-main_brand_error/50 rounded-sm" role="alert">
        <p class="font-bold">{{ __('acp::message.error.title') }}</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    <p>{{$error}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endif
<!-- End Error Message -->

<!-- Message -->
@if (session()->get('message'))
    <div class="bg-main_brand_success/20 border-l-8 border border-main_brand_success/50 text-main_brand_success p-4 m-8 rounded-sm" role="alert">
        <p class="font-bold">{{ __('acp::message.success.title') }}</p>{!! session()->get('message')!!}
    </div>
@endif
