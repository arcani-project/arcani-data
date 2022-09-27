<div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl">
      <x-jet-application-mark class="block h-4 w-auto" />
    </a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal p-0">
      {{-- <li><a>Item 1</a></li> --}}
      <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-jet-nav-link>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <img class="h-10 w-10 rounded-full object-cover border-primary border-2 p-0.5"
                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            @endif
          </div>
        </label>
        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
          <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Profile') }}
          </x-jet-dropdown-link>

          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
              {{ __('API Tokens') }}
            </x-jet-dropdown-link>
          @endif

          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
              {{ __('Log Out') }}
            </x-jet-dropdown-link>
          </form>
        </ul>
      </div>
    </ul>
  </div>
</div>
