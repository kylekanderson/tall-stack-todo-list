<div class="new-task p-12 bg-custom-lighter-gray">
    <h2>New Task</h2>
    <form
        wire:submit.prevent='submit'
        class="flex justify-stretch">
        <input
            wire:model='description'
            class="w-11/12 rounded-l-lg border-t mr-0 pl-2 border-b border-l text-gray-800 border-gray-400 bg-white" />
        <button
            type="submit"
            class="rounded-r-lg bg-custom-lightest-gray flex items-center p-2 border border-gray-400">
            <svg
                class="w-3 h-3 mr-3 focus:outline-none"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Add</span>
        </button>
    </form>
    @error('description') <span class="error text-red-600">{{ $message }}</span> @enderror
</div>
