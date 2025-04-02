<?php

namespace App\Livewire;

use Livewire\Component;

class PostEditor extends Component
{
    public $content = '';
    public function save() {
        dd($this->content);
    }
    public function render()
    {
        return view('livewire.post-editor');
    }
}
