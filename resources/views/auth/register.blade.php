<head>
<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</head>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Display Validation -->
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md">
                <strong>Whoops! Something went wrong.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- First name -->
        <div>
            <x-bladewind::input 
                name="firstName" 
                label="First name"
                required="true"
                autofocus="true" 
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                value="{{ old('firstName') }}" 
                error="{{ $errors->first('firstName') }}" 
            />
            @error('firstName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Middle name -->
        <div>
            <x-bladewind::input 
                name="middleName" 
                label="Middle name"
                required="true" 
                autofocus="true"
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                value="{{ old('middleName') }}" 
                error="{{ $errors->first('middleName') }}" 
            />
            @error('middleName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Last name -->
        <div>
            <x-bladewind::input 
                name="lastName" 
                label="Last name"
                required="true" 
                autofocus="true"
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                value="{{ old('lastName') }}" 
                error="{{ $errors->first('lastName') }}" 
            />
            @error('lastName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Suffix -->
        <div>
            <x-bladewind::input 
                name="suffix" 
                label="Suffix"
                required="false" 
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                value="{{ old('suffix') }}" 
                error="{{ $errors->first('suffix') }}" 
            />
            @error('suffix') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-bladewind::input 
                name="email" 
                label="Email" 
                type="email" 
                required="true"
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400', '!text-black')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                value="{{ old('email') }}" 
                error="{{ $errors->first('email') }}" 
            />
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-bladewind::input 
                name="password" 
                label="Password" 
                type="password" 
                required="true" 
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400', '!text-black')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                viewable="true"
                error="{{ $errors->first('password') }}" 
            />
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-bladewind::input 
                name="password_confirmation" 
                label="Confirm Password" 
                type="password" 
                required="true"
                class="rounded border-2 border-gray-300 focus:ring-2 focus:ring-blue-500"
                onfocus="changeCss('.events', '!border-2,!border-red-400', '!text-black')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"
                viewable="true"
                error="{{ $errors->first('password_confirmation') }}" 
            />
            @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- BUTTONS FOR SELLER AND DISTRIBUTOR -->
        <div class="mb-3">
            <br>REGISTER AS:
            <div class="d-flex gap-3">
                <x-bladewind::radio-button 
                    name="role" 
                    value="vendor" 
                    label="Vendor" 
                    checked="{{ old('role') == 'vendor' ? 'true' : 'false' }}" 
                    color="green"/>
                <x-bladewind::radio-button 
                    name="role" 
                    value="distributor" 
                    label="Distributor" 
                    checked="{{ old('role') == 'distributor' ? 'true' : 'false' }}"
                    color="green"/>
            </div>
            @error('role') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- DROPBOX FOR UPLOADING FILE REQUIREMENTS -->
         <!--
        <div class="mb-3">
            <label class="dropFileLabel">Upload BIR Permit</label>
            <x-bladewind::filepicker
                name="BIRpermit"
                required="true"
                placeholder="Upload BIR permit"
                accepted_file_types="image/*, .pdf, .png, .jpg"
                max_file_size="50"
                />
            @error('BIRpermit') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="dropFileLabel">Upload Mayor's Permit</label>
            <x-bladewind::filepicker
                name="Mayorpermit"
                required="true"
                placeholder="Upload Mayor's permit"
                accepted_file_types="image/*, .pdf, .png, .jpg"
                max_file_size="50"
                />
            @error('Mayorpermit') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        -->

        <!-- ALREADY REGISTERED? button -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button type="submit" class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
