<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ImageForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ImageFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ImageForm::class)
            ->assertStatus(200);
    }
}
