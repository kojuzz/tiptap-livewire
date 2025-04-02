<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div
            x-data="{
                content: @entangle('content').defer,
                editor: null,
                init() {
                    this.editor = window.createTiptap(this.$refs.editor, this.content, (val) => this.content = val)
                }
            }"
            x-init="init()"
            x-cloak
        >
            <div x-ref="editor" class="min-h-[200px] border rounded-lg p-4 bg-white dark:bg-gray-800 text-black dark:text-white"></div>
        </div>
    
        {{-- Hidden input to sync with Livewire --}}
        <input type="hidden" wire:model="content" />
    </div>
</body>
</html>