<x-guest-layout>
    <div class="inline flex">
        <x-secondary-button class="ml-2">
            <a href="{{ route('register.patner') }}">{{ __('Patner Registration') }}</a>
        </x-secondary-button>
        <x-primary-button class="ml-2">
            <a href="{{ route('register.student') }}">{{ __('Student Registration') }}</a>
        </x-primary-button>
    </div>
</x-guest-layout>
