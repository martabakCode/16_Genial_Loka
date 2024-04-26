<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-primary-500 hover:bg-primary-600 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
