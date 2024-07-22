<?php

namespace App\Livewire\Things\Create\Steps;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class TitleStep extends StepComponent
{
    protected $listeners = [
        'created' => '$refresh'
    ];

    #[Validate('required')]
    public string $title;

    public function submit(){
        $this->validate();
        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.things.create.steps.title-step');
    }
}
