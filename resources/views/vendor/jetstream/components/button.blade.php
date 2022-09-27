<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary py-2']) }}>
  {{ $slot }}
</button>
