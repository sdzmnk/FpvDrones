      <div class="section1__block">
            <h1 class="section1__title">Мої дані</h1>
        </div>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>


        <div class="section1__block2">

            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')


                <div class="block2__wrapper1">
                    <div class="block2__name">
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name ?? '') }}" required autofocus autocomplete="name"></input>
                    </div>
                    <div class="block2__name">
                        <input  id="email" name="email" type="email" value="{{ old('email', $user->email ?? '') }}" required autocomplete="username" ></input>

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>


                {{-- <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form> --}}



            <div class="block2__wrapper2">
                <div class="block2__info_block">
                    <div class="block2__name">
                        <input  id="phone_number" name="phone_number" type="text" value="{{ old('phone_number', $user->phone_number ?? '') }}"  required autocomplete="phone_number" ></input>
                    </div>
                    <div class="block2__name">
                        <input  id="country" name="country" type="text" value="{{ old('country', $user->country ?? '') }}"  required autocomplete="country" ></input>
                    </div>
                </div>
                <div class="block2__changeInfo">
                    <button type="submit">Змінити</button>
                </div>
                {{-- @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif --}}
            </div>
        </div>








