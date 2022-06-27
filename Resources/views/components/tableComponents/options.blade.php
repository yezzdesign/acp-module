<div class="flex flex-none justify-center">

    {{-- Option Edit--}}
    <x-acp::forms.opt-button :href="route($routeEdit, $model)" ><i class="fa-solid fa-pencil w-8 fa-xl"></i> </x-acp::forms.opt-button>
    {{-- --}}


    {{-- Option State--}}
    <x-acp::forms.opt-button :href="route($routeStatus, $model)">
        <i class="w-8 fa-xl fa-solid
        @if($model->$modelStatus)fa-toggle-on text-main_brand_success @else fa-toggle-off text-main_brand_error @endif"></i>
    </x-acp::forms.opt-button>
    {{-- --}}

    {{-- Option Delete--}}
    <form action="{{ route($routeDelete, $model) }}" method="post"> @csrf @method('DELETE')
        <x-acp::forms.opt-button :href="route($routeDelete, $model)"
                                 onclick="event.preventDefault();
                                                         this.closest('form').submit();">
            <i class="fa-solid fa-trash w-8 fa-xl hover:text-main_brand_error"></i>
        </x-acp::forms.opt-button>
    </form>
    {{-- --}}
</div>
