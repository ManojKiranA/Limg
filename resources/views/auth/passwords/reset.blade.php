@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center">
    <div class="bg-white shadow-md rounded md:w-1/4 px-8 mx-4 pt-6 pb-8 flex flex-col">
        <form method="POST" action="{{ route('password.update') }}">
        @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    {{ __('E-Mail Address') }}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 @error('email') border-red-600 @enderror" 
                    id="email" type="text" name="email" value="{{ $email ?? old('email') }}" placeholder="email@example.com" required autocomplete="email">
                @error('email')
                    <p class="text-red-600 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                    {{ __('Password') }}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 @error('password') border-red-600 @enderror" 
                    id="password" type="password" name="password" placeholder="******************" required autocomplete="new-password">
            </div>
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password-confirm">
                    {{ __('Confirm Password') }}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 @error('password') border-red-600 @enderror" 
                    id="password-confirm" type="password" name="password_confirmation" placeholder="******************" required autocomplete="new-password">
                @error('password')
                    <p class="text-red-600 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 mr-3 rounded" type="submit">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
