<?php

use App\Livewire\Editor;
use App\Livewire\PostEditor;
use Illuminate\Support\Facades\Route;

Route::get('/', PostEditor::class);
// Route::get('/editor', Editor::class);

Route::get('/welcome', function () {
    return view('welcome');
});
