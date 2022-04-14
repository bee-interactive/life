@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-xl drop-shadow-[0_0px_10px_rgba(0,0,0,0.025)] border-0 px-4 py-3 focus:border-life focus:ring-2 focus:ring-life focus:ring-opacity-90']) !!}>
