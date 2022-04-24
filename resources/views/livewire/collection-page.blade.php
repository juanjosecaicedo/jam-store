<section>
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
        <h1 class="text-3xl font-bold">
            {{ $this->collection->translateAttribute('name') }}
        </h1>

        <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
            @forelse($this->collection->products as $product)
                <x-product-card :product="$product" />
            @empty
            @endforelse
        </div>
    </div>
</section>
