{{-- resources/views/components/check-box.blade.php --}}
@props(['checked' => false, 'itemId' => 0, 'componentName' => ''])

<div class="relative inline-block">
    <input 
        type="checkbox" 
        @if($checked) checked @endif
        wire:click="$dispatchTo('{{ $componentName }}', 'toggle-status', { id: {{ $itemId }} })"
        class="w-[25px] h-[25px] cursor-pointer z-10"
    >
</div>