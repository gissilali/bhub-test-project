<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

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
            @foreach($posts as $key  => $post)
                <div class="flex flex-shrink-0 p-4 pb-0">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-10 rounded-full" src="{{ asset('images/avataaars.png') }}" alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-base leading-6 font-medium text-white">
                                    Anonymous User
                                    <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                             . {{ $post->created_at->format('d M') }}
                          </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="pl-16">
                    <p class="text-base width-auto font-medium text-white flex-shrink">
                       {{ $post->post_body }}
                    </p>
                    @if($post->photo_url)
                        <div class="md:flex-shrink pr-6 pt-3">
                            <img class="rounded-lg w-full h-64" src="{{ asset(str_replace('public/', '',$post->photo_url)) }}" alt="Woman paying for a purchase">
                        </div>
                    @endif
                    <div class="flex">
                        <div class="w-full">

                            <div class="flex items-center">
                                <div class="flex-0 text-center">
                                    <div x-data="{ open: false }">
                                        <button x-on:click="open = true" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                            <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                        </button>
                                        <div x-show="open">
                                            <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"
                                                     x-on:click="open = false"></div>
                                                <div
                                                    class="modal-container bg-gray-900 border-2 border-gray-500 shadow w-5/6 md:max-w-2xl mx-auto rounded shadow-lg z-50 overflow-y-auto cursor-auto">
                                                    <div
                                                        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                                    </div>

                                                    <div class="modal-content py-4 text-left px-6">
                                                        <livewire:create-comment-form :post="$post"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-0 text-center">
                                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <hr class="border-gray-600">
            @endforeach
            <!--first tweet end -->

        </div>


        <div class="w-2/5 h-12">

        </div>
    </div>
    <!-- modal div -->
</div>
@livewireScripts
</body>
</html>
