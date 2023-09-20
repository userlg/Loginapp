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
                <div class="flex flex-col justify-center items-center gap-1 p-3">
                    @if (Auth::user()->getUserRole() == 'admin')
                    <livewire:image-form />
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-16 h-16 stroke-2 stroke-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
