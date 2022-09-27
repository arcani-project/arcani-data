<div class="min-h-screen flex flex-col justify-center items-center bg-base-200 w-full px-2 lg:px-0 space-y-3">
  <div>
    {{ $logo }}
  </div>

  <div class="card bg-base-100 w-full md:w-2/3 lg:w-1/3 2xl:w-1/4">
    <div class="card-body">
      {{ $slot }}
    </div>
  </div>
</div>
