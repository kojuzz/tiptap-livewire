<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://unpkg.com/@tiptap/core@2.0.0-beta.219/dist/tiptap-core.umd.min.js"></script>
        <script src="https://unpkg.com/@tiptap/starter-kit@2.0.0-beta.212/dist/starter-kit.umd.min.js"></script>
        
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
