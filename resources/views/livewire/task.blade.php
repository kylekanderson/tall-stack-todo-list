<div
    x-data="{
        disabled: @entangle('disableInput'),
        description: @entangle('description')
    }"
    {{-- enable the input field on double-click --}}
    @dblClick="
        disabled = false;
        $nextTick(() => { $refs.input.focus() });
    "
    {{-- event listeners that call the updateDescription function below --}}
    @click.away="updateDescription(description, $refs, $wire);"
    @keydown.enter="updateDescription(description, $refs, $wire);"
    @keydown.window.escape="updateDescription(description, $refs, $wire);"
    class="flex flex-row flex-nowrap items-center @if ($task->completed) line-through @endif">

    {{-- task description input field --}}
    <input type="text" class="w-11/12 py-2 pl-2 border-0 bg-transparent" x-model="description" x-ref="input"
        x-bind:disabled="disabled">

    {{-- for incomplete tasks, display a checkbox - clicking the checkbox completes the task --}}
    @if (!$task->completed)
        <input type="checkbox" wire:click='complete' class="rounded-sm">
    @endif
</div>

<script>
    function updateDescription(description, $refs, $wire) {
        if(description.length > 0) {
            $wire.updateDescription(description);
        }
        else {
            $refs.input.placeholder = 'Description must be at least 1 character'
        }
    }
</script>
