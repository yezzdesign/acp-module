@php
    $countRole = $users->countBy('role')
@endphp

<x-acp::app title="{{__('acp::index.title')}} - {{config('acp.name')}}">

    {{-- Header for Breadcrumb and create new Items --}}
    <x-acp::header>
        {{-- Breadcrumb --}}
        <x-acp::breadcrumb>
            <x-acp::breadcrumb.item-main    :href="route('acp.backend.index')">{{ __('acp::nav.home') }}</x-acp::breadcrumb.item-main>
            <x-acp::breadcrumb.item         :href="route('acp.backend.index')">{{ __('acp::nav.acp')  }}</x-acp::breadcrumb.item>
            <x-acp::breadcrumb.item                                           >{{ __('acp::nav.index')}}</x-acp::breadcrumb.item>
        </x-acp::breadcrumb>
        {{-- Create new Button--}}
        {{-- <x-acp::forms.a-button ><i class="fa-solid fa-plus"></i> {{ __('acp::index.button.add.user') }}</x-acp::forms.a-button> --}}
        {{-- End Create new --}}
    </x-acp::header>
    {{-- End Header --}}

    <div id="countedUsers">
        <div class="w-52 h-10 border border-main_brand/50 rounded-t-sm flex items-center bg-main_brand/25"><i class="fa-solid fa-arrow-trend-up px-2"></i><span class="">Registered Users</span></div>
        <div class="w-52 h-32 border border-main_brand/50 border-t-0 rounded-b-sm bg-main_brand/10 p-2"><p><span class="underline"></span> Registered Users</p>
            <p> are Admin</p><p> are Users</p></div>
    </div>





</x-acp::app>
