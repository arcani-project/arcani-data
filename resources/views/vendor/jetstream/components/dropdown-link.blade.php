<li class="w-full" {{ $attributes->merge(['class' => 'w-full']) }}>
  <a class="w-full" href="{{ route('profile.show') }}">
    {{ $slot }}
  </a>
</li>
