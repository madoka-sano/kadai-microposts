@extends('layouts.app')

@section('content')
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <aside class="mt-4">
            {{-- ユーザー情報 --}}
            @include('users.card')
        </aside>
        <div class="sm:col-span-2 mt-4">
            {{-- タブ --}}  
            @include('users.navtabs')
            {{-- プロフィール変更フォーム users.edit_profile profile.edit_profile profile.edit_form--}}
            @include('profile.edit_profile_form')
        </div>
    </div>
@endsection

