<div>
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
                    <img class="rounded-lg w-full h-auto" src="{{ asset(str_replace('public/', '',$post->photo_url)) }}" alt="Woman paying for a purchase">
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
                                                <livewire:create-comment-form :key="$post->id" :post="$post"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="flex-0 text-center">--}}
{{--                            <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">--}}
{{--                                <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="flex-0 text-center">
                            <button wire:click="postSelected({{ $post }})" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <hr class="border-gray-600">
    @endforeach
</div>
