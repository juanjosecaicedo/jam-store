@props([
    'error' => false,
])
<input
    {{ $attributes->merge([
            'type' => 'text',
            'class' => 'w-full p-3 border border-gray-200 sm:text-sm focus:outline-none focus:border-gray-300',
        ])->class([
            'border-red-400' => !!$error,
        ]) }}
    maxlength="255"
>
