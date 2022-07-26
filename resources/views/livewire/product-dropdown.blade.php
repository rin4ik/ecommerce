
<div class="mt-3">
    <div class="font-semibold mb-1">
        {{ Str::title($variations->first() ? $variations->first()->type : '') }}
    </div>
    
    <x-select class="w-full h-12 px-2" wire:model="selectedVariation">
        <option value="">Choose an option</option>
        @foreach ($variations as $variation) 
            <option value="{{ $variation->id }}" {{$variation->outOfStock()  ? 'disabled' : ''}}>
                {{$variation->title}} 
                {{$variation->lowStock() ? '(Low stock)' : ''}} {{$variation->outOfStock() ? '(Out of stock)' : ''}}
            </option>
        @endforeach
    </x-select> 
    @if($this->selectedVariationModel && $this->selectedVariationModel->children->count())
        <livewire:product-dropdown :key="$selectedVariation" :variations="$this->selectedVariationModel->children->sortBy('order')" />
    @endif
</div>