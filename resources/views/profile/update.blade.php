@extends('layouts/app')
@section('content')
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ url('api/user/' . $profile['id']) }}"  method="POST">
            <?php echo method_field('PUT'); ?>
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <input id="email" class="block w-full mt-1" type="email" name="email" required value={{$profile['email']}} />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1"
                                type="password"
                                name="password"
                                autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full mt-1"
                                type="password"
                                name="password_confirmation" />
            </div>


            {{-- <x-label class="block mt-2" for="floatingInput" :value="__('Date of Birth')" />
            <div class="relative datepicker form-floating" data-mdb-toggle-button="false">
                <x-input type="text"
                  class="block w-full mt-2" required />
                <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                  <i class="fas fa-calendar datepicker-toggle-icon"></i>
                </button>
            </div> --}}


            {{-- <!-- Employee UID -->
            <div>
                <x-label class="block mt-2" for="employee-identifier" :value="__('Employee Identifier')" />

                <input id="employee-identifier" class="block w-full mt-1" type="text" name="employee-identifier" value={{$profile['employee_identifier']}} />autofocus />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection