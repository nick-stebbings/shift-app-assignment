    <x-auth-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ url('api/user/' . '1' . '/link')}}" method="POST">
            <?php echo method_field('POST'); ?>
            @csrf

            <!-- Employee DOB -->
            <x-label class="block mt-2" for="floatingInput" :value="__('Date of Birth')" />
            <div class="relative datepicker form-floating" data-mdb-toggle-button="false">
                <x-input type="text"
                  class="block w-full mt-2" name="dob" required />
                <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                  <i class="fas fa-calendar datepicker-toggle-icon"></i>
                </button>
            </div>


            <!-- Employee UID -->
            <div>
                <x-label class="block mt-2" for="employee_identifier" :value="__('Employee Identifier')" />

                <x-input id="employee_identifier" class="block w-full mt-1" type="text" name="employee_identifier" :value="old('employee-identifier')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>