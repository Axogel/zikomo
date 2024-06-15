<x-guest-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 shadow-orange-300">
        <h2 class="text-2xl font-bold text-center mb-4">{{ __('Verify Email') }}</h2>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}" class="space-y-4">
            @csrf
            <div>
                <button type="submit"
                    class="w-full bg-orange-400 text-white py-2 rounded-lg hover:bg-orange-500">{{ __('Resend Verification Email') }}</button>
            </div>
        </form>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit"
                class="w-full underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
