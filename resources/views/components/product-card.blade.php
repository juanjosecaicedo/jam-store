@props(['product'])
<div class="shadow-md hover:shadow-lg">
    <a
        class="block group"
        href="{{ route('product.view', $product->defaultUrl->slug) }}"
    >
        <div class="overflow-hidden aspect-w-1 aspect-h-1 relative ">
            @if ($product->thumbnail)
                <img
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    src="{{ $product->thumbnail->getUrl('medium') }}"
                    alt="{{ $product->translateAttribute('name') }}"
                />
            @endif
            <livewire:components.add-to-wishlist :product="$product"/>
        </div>
        <div class="py-4 px-2">

        <strong class="mt-2 text-sm font-medium">
            {{ $product->translateAttribute('name') }}
        </strong>

        <p class="mt-1 text-sm text-gray-600">
        <span class="sr-only">
            Price
        </span>
            <x-product-price :product="$product"/>
        </p>
        </div>
    </a>
</div>
