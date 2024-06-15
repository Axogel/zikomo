<x-guest-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 shadow-orange-300">
        <h2 class="text-2xl font-bold text-center mb-4">{{ __('Forgot your password?') }}</h2>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-700">{{ __('Email') }}</label>
                <input type="email" name="email" id="email" :value="old('email')"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-orange-400 text-white py-2 rounded-lg hover:bg-orange-500">{{ __('Email Password Reset Link') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
