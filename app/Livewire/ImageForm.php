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

    //mimes:jpeg,png,jpg
    #[Rule('image|max:4096|mimes:jpeg,png,jpg')] // 4MB Max
    public $photo;

    public function save()
    {
        $this->validate();

        $path = $this->photo->store('/', 'public');

        $user = User::findOrFail(auth()->user()->id);

        //$imageName = Str::random(30) . 'key' . $user->id . '.png';

        $user->profileImage = $path;

        $user->save();

        $this->image = $user->profileImage;

        // Storage::disk('public')->put($imageName, $path);
    }

    public function render()
    {
        return view('livewire.image-form');
    }
}
