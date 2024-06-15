<x-guest-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 shadow-orange-300">
        <h2 class="text-2xl font-bold text-center mb-4">{{ __('Reset Password') }}</h2>
        <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div>
                <label for="email" class="block text-gray-700">{{ __('Email') }}</label>
                <input type="email" name="email" id="email" :value="old('email', $request - > email)"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
                <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div>
                <label for="password_confirmation" class="block text-gray-700">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-orange-400 text-white py-2 rounded-lg hover:bg-orange-500">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
