@extends('layouts/guest')
@section('content')
    <x-auth-card>
{{-- {{dd($profile)}} --}}
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ url('api/user/' . $profile['id']) }}"  method="POST">
            <?php echo method_field('PUT'); ?>
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <input id="email" class="block mt-1 w-full" type="email" name="email" required value={{$profile['email']}} />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" />
            </div>


            <x-label class="block mt-2" for="floatingInput" :value="__('Date of Birth')" />
            <div class="datepicker datepicker relative form-floating" data-mdb-toggle-button="false">
                <x-input type="text"
                  class="block mt-2 w-full" required />
                <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                  <i class="fas fa-calendar datepicker-toggle-icon"></i>
                </button>
            </div>


            <!-- Employee UID -->
            <div>
                <x-label class="block mt-2" for="employee-identifier" :value="__('Employee Identifier')" />

                <x-input id="employee-identifier" class="block mt-1 w-full" type="text" name="employee-identifier" :value="old('employee-identifier')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection