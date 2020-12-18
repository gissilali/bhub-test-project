<form  wire:submit.prevent="submitPost"  method="post" >
    {{ csrf_field() }}
    <div class="flex">
        <div class="flex-1 px-2 pt-2 mt-2">
                    <textarea wire:model.debounce.500ms="commentBody" name="comment_body" class=" bg-transparent text-gray-400 px-3 py-3 focus:bg-gray-700 bg-gray-800 rounded-lg focus:border-none focus:outline-none font-medium text-lg w-full" rows="2" cols="50"
                              placeholder="What's your comment?">{{ old('comment_body') }}</textarea>
            @error('postBody')
            <small class="text-gray-200">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <!--middle creat tweet below icons-->
    <div class="flex">
        <div class="flex-1">
            <button class="bg-blue-400  disabled:cursor-pointer  mt-5 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-full mr-2 float-right">
                Post Comment
            </button>
        </div>
    </div>
</form>
