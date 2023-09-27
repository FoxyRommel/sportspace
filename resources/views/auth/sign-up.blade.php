@extends('layouts.catalog')

@section('content')
    <x-forms.auth-forms
        title="Регистрация"
        action="{{ route('register.handle') }}"
        method="POST"
    >
        @csrf

        <x-forms.text-input
            name="name"
            placeholder="Имя"
            required="true"
            value="{{ old('name') }}"
            :isError="$errors->has('name')"
        />

        <x-forms.text-input
            name="email"
            type="email"
            placeholder="E-mail"
            required="true"
            value="{{ old('email') }}"
            :isError="$errors->has('email')"
        />
        @error('email')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.text-input
            name="password"
            type="password"
            placeholder="Пароль"
            required="true"
            :isError="$errors->has('password')"
        />
        @error('password')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.text-input
            name="password_confirmation"
            type="password"
            placeholder="Повторите пароль"
            required="true"
            :isError="$errors->has('email')"
        />
        @error('password_confirmation')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.primary-button>
            Зарегистрироваться
        </x-forms.primary-button>

        <x-slot:buttons>
            <div class="space-y-3 mt-5">
                <div class="text-xxs md:text-xs"><a href="{{ route('login') }}"
                                                    class="text-black hover:text-black/70 font-bold">Войти в аккаунт</a>
                </div>
            </div>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
