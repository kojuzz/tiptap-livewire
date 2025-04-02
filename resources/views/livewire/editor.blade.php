<div>
    <h1>The Editor</h1>
    <x-editor wire:model="foo" wire:poll.10000ms="autosave"></x-editor>
</div>

<script>
    import {
        Editor
    } from '@tiptap/core'
    import StarterKit from '@tiptap/starter-kit'

    window.setupEditor = function(content) {
        let editor

        return {
            content: content,

            init(element) {
                editor = new Editor({
                    element: element,
                    extensions: [StarterKit],
                    content: this.content,
                    onUpdate: ({
                        editor
                    }) => {
                        this.content = editor.getHTML()
                    },
                })

                this.$watch('content', (content) => {
                    // If the new content matches TipTap's then we just skip.
                    if (content === editor.getHTML()) return
                    editor.commands.setContent(content, false)
                })
            },
        }
    }
</script>
