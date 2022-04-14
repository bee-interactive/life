<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-4 bg-life border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-life-dark active:bg-life-dark focus:outline-none focus:border-transparent focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
