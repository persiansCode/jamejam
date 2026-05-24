<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    
    @livewireStyles
    @vite(  'resources/css/app.css' )
        @vite(  'resources/js/app.js' )

    @stack('css')
</head>
<body class="bg-gray-900 text-white">
    {{ $slot }}
    
    @livewireScripts
    @stack('script')
</body>
</html>