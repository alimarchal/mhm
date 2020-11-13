<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowHide extends Component
{
    public $attribute = 'none';
    public $flag = true;

    public function render()
    {
        return view('livewire.show-hide');
    }

    public function showHide()
    {
        if ($this->flag == true && $this->attribute == "none")
            $this->attribute = '';
        else
            $this->attribute = 'none';

    }
}
