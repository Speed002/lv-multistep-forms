<?php

namespace App\Livewire\Things\Create\Steps;

use App\Models\Thing;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function stateToStore(){
        //return a collection to easily navigate through items with their keys
        return collect($this->state()->all())
            ->mapWithKeys(fn($item) => $item)
            ->only('title', 'description')
            ->toArray();
    }

    public function submit(){
        Thing::create($this->stateToStore());
        $this->dispatch('created');
        // return back()->this can also redirect it;
    }

    public function render()
    {
        return view('livewire.things.create.steps.publish-step', [
            'state' => $this->stateToStore()
        ]);
    }
}
