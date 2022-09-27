@props(['active'])

@php
$classes = $active ?? false ? 'text-primary underline underline-offset-4' : '';
@endphp

<li>
  <a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </a>
</li>
