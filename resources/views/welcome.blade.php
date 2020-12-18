<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/alpine.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @livewireStyles

</head>
<body class="bg-gray-900 antialiased">
<!-- component -->
<div class="">
    <div class="flex">

        <div class="w-2/5 text-white h-12 pl-32 py-4 h-auto">


        </div>

        <div class="w-3/5 border border-gray-600 h-auto  border-t-0">
            <!--middle wall-->

            <livewire:create-post-form/>

            <hr class="border-gray-800 border-4">


            <div>
            </div>


            <!--first tweet start-->

            <livewire:post-list/>

            <!--first tweet end -->

        </div>


        <div class="w-2/5 fixed ">
            <livewire:comment-list/>
        </div>
    </div>
    <!-- modal div -->
</div>
@livewireScripts
</body>
</html>
