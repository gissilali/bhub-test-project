<div>
    <div class="flex">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl font-semibold text-white">Comments ({{ count($comments)  }})</h2>
        </div>
    </div>
    <hr class="border-gray-600"/>
    @foreach($comments as $key  => $comment)
        <div class="pl-4 py-4">
            <p class="text-base width-auto font-medium text-white flex-shrink">
                {{ $comment->body }}
            </p>
            <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                             . {{ $comment->created_at->format('d M') }}
                          </span>
        </div>
        <hr class="border-gray-600">
    @endforeach
</div>
