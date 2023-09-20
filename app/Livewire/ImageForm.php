<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Str;

class ImageForm extends Component
{
    use WithFileUploads;

    public $image = null;

    public function mount()
    {
        $user = User::find(auth()->user()->id);

        if ($user->hasImageProfile()) {
            $this->image = $user->getImageProfile();
        }
    }

    #[Rule('image|max:4096')] // 4MB Max
    public $photo;

    public function save()
    {
        $user = User::findOrFail(auth()->user()->id);

        $imageName = Str::random(30) . 'key' . $user->id . '.png';

        $path = $this->photo->store('/', 'public');

        $user->profileImage = $path;

        $user->save();

        Storage::disk('public')->put($imageName, $path);
    }



    public function render()
    {
        return view('livewire.image-form');
    }
}
