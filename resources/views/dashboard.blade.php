<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <x-form post :action="route('questions.store')">

                <x-textarea label="Question" name="question" />

                <x-btn.primary type="submit"> Save</x-btn.primary>
                <x-btn.reset type="reset"> Cancelar</x-btn.reset>


            </x-form>

            <hr class="border-dash my-4 border-gray-700">

            <div class="mb-1 font-bold uppercase dark:text-gray-200">List of questions</div>

            <div class="space-y-4 dark:text-gray-400">
                @foreach ($questions as $item)
                    <x-question :question="$item" />
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
