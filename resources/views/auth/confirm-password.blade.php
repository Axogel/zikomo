<x-guest-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 shadow-orange-300">
        <h2 class="text-2xl font-bold text-center mb-4">{{ __('Confirm Password') }}</h2>
        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
            @csrf
            <div>
                <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-orange-400 text-white py-2 rounded-lg hover:bg-orange-500">{{ __('Confirm') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
