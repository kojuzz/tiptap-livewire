<?php

namespace App\Livewire;

use Livewire\Component;

class PostEditor extends Component
{
    public $content = '';
    public function save() {
        $this->content = $this->content;
    }
    public function clear() {
        $this->reset('content');
        return $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.post-editor');
    }
}
