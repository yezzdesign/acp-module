<div class="flex flex-none justify-start">    {{-- Option State--}}

@if( $user->role === 'admin' )
    <x-acp::forms.opt-button>
        <i class="w-8 fa-xl fa-solid fa-toggle-on text-main_brand_success"></i>
    </x-acp::forms.opt-button>
    {{-- --}}
    <x-acp::forms.opt-button>
        <i class="fa-solid fa-user-shield"></i><span class="  "> {{ __('ucp::index.table.role.admin') }}</span>
    </x-acp::forms.opt-button>
@endif

@if( $user->role === 'user')
    <x-acp::forms.opt-button>
        <i class="w-8 fa-xl fa-solid fa-toggle-off text-main_brand_error"></i>
    </x-acp::forms.opt-button>
        {{-- --}}
    <x-acp::forms.opt-button>
        <i class="fa-solid fa-user"></i><span class="  "> {{ __('ucp::index.table.role.user') }}</span>
    </x-acp::forms.opt-button>
@endif

</div>
