@props(['question'])
<div
    class="dark:gb-gray-800/50 flex items-center justify-between rounded p-3 shadow shadow-blue-500/50 dark:text-gray-400">
    <span>
        {{ $question->question }}
    </span>

    <div>
        <x-form :action="route('questions.like', $question)">
            <button class="flex items-center space-x-2 text-green-500">
                <x-icons.thumbs-up class="h5 w-5 cursor-pointer hover:text-green-300" id="thumb-up" />
                <span>{{ $question->likes }}</span>
            </button>
        </x-form>
        <x-form :action="route('questions.unlike', $question)" id="form-like-{{ $question->id }}">
            <button class="flex items-center space-x-2 text-red-500">
                <x-icons.thumbs-down class="h5 w-5 cursor-pointer hover:text-red-300" id="thumb-up" />
                <span>{{ $question->unlikes }}</span>
            </button>
        </x-form>
    </div>
</div>
