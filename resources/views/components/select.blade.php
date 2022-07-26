<select
    {{ $attributes->merge(['class' => 'rounded-md bg-white shadow-sm border focus:ring focus-visible:border-none focus:ring-indigo-200 focus:ring-opacity-50']) }}>
    {{ $slot }}
</select>