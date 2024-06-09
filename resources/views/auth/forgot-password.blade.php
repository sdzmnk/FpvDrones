<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Забули пароль? Немає проблем. Просто повідомте нам свою електронну адресу, і ми надішлемо вам посилання для скидання пароля, яке дозволить вам вибрати новий.') }}
    </div>

    <!-- Статус сеансу -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Електронна адреса -->
        <div>
            <x-input-label for="email" :value="__('Електронна адреса')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Надіслати посилання для скидання пароля') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
