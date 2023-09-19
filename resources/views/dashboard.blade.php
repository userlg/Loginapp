<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-row gap-2 justify-center items-center my-1">
                    <p>Role:</p>
                    <p class="font-semibold text-black capitalize">{{ Auth::user()->getUserRole() }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
