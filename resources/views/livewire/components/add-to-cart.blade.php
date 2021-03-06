<div>
    <div class="flex gap-4">
        <div>
            <label
                for="quantity"
                class="sr-only"
            >
                Quantity
            </label>

            <input
                class="w-16 px-1 py-3 text-sm text-center transition border border-gray-200 no-spinners focus:outline-none focus:border-gray-300"
                type="number"
                id="quantity"
                min="1"
                value="1"
                wire:model="quantity"
            />
        </div>

        <button
            type="submit"
            class="w-full px-6 py-4 text-sm font-medium text-center text-white bg-black hover:opacity-90"
            wire:click.prevent="addToCart"
        >
            Añadir al carrito
        </button>
    </div>

    @if ($errors->has('quantity'))
        <div
            class="p-2 mt-4 text-xs font-medium text-center text-red-700 rounded bg-red-50"
            role="alert"
        >
            @foreach ($errors->get('quantity') as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
</div>
