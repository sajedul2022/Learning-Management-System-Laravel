<?php

namespace App\Http\Livewire;

use Flasher\Prime\FlasherInterface;
use Livewire\Component;

class Counter extends Component{

    public $count = 0;

    public function increase(FlasherInterface $flasher, $msg){
        $flasher->addSuccess('Succesfully Increase '.  $msg);
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
