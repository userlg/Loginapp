<div>
    <div class="flex flex-col justify-center items-center">
        @if ($image != null)
            <img src="{{ Storage::disk('public')->url($image) }}"
                class="  w-[150px] h-[150px]  md:w-[220px] md:h-[220px] shadow-md shadow-gray-600 dark:shadow-rose-800 rounded-full border border-night dark:border-sred bg-slate-100"
                alt="">
        @else
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-16 h-16 stroke-2 stroke-red-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        @endif
    </div>
    <form wire:submit="save" class="flex flex-col justify-center items-center p-3 gap-4">

        <label for="photo"
            class="border-4 border-double border-indigo-500 flex flex-col justify-center items-center p-3 hover:bg-indigo-200 duration-300 ease-linear rounded">
            <p class="text-sm">Change</p>
            <input type="file" wire:model="photo" id="photo" class="hidden">
        </label>

        @error('photo')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit"
            class="text-white bg-indigo-500 hover:bg-indigo-950 duration-300 ease-in p-1 rounded">Save</button>
    </form>
</div>
