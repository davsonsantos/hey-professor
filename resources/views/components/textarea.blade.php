@props(['label', 'name'])
<div class="mb-4">
    <label for="question" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
    </label>
    <textarea id="{{ $name }}" rows="4" name="{{ $name }}"
        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
        placeholder="Faça sua pergunta...">{{ old($name) }}</textarea>
    @error($name)
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
