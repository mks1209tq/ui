<div class="flex gap-4">

<!-- Menu 1 -->
<div class="relative" x-data="{ subMenuOpen: false }">
  <button @click="subMenuOpen = !subMenuOpen" @click.outside="subMenuOpen = false" type="button" class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
  <span>HR</span>
    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
      <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
  </button>

  <!--
    Flyout menu, show/hide based on flyout menu state.

    Entering: "transition ease-out duration-200"
      From: "opacity-0 translate-y-1"
      To: "opacity-100 translate-y-0"
    Leaving: "transition ease-in duration-150"
      From: "opacity-100 translate-y-0"
      To: "opacity-0 translate-y-1"
  -->
  <div x-cloak x-show="subMenuOpen" class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-min -translate-x-1/2 px-4 mx-10">
    <div class="w-36 shrink rounded-xl bg-white p-4 text-sm/6 font-semibold text-gray-900 shadow-lg ring-1 ring-gray-900/5">
      <a href="{{ route('hr.passport.dashboard') }}" class="block p-2 hover:text-indigo-600">Passport</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Attendance</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Recruitment</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Performance</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Automations</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Reports</a>
    </div>
  </div>
  
</div>
<!-- end of menu 1 -->


<!-- Menu 2 -->
<div class="relative" x-data="{ subMenuOpen: false }">
  <button @click="subMenuOpen = !subMenuOpen" @click.outside="subMenuOpen = false" type="button" class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
    <span>IT</span>
    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
      <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
  </button>

  <!--
    Flyout menu, show/hide based on flyout menu state.

    Entering: "transition ease-out duration-200"
      From: "opacity-0 translate-y-1"
      To: "opacity-100 translate-y-0"
    Leaving: "transition ease-in duration-150"
      From: "opacity-100 translate-y-0"
      To: "opacity-0 translate-y-1"
  -->
  <div x-cloak x-show="subMenuOpen"  class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-min -translate-x-1/2 px-4 mx-10">
    <div class="w-36 shrink rounded-xl bg-white p-4 text-sm/6 font-semibold text-gray-900 shadow-lg ring-1 ring-gray-900/5">
      <a href="#" class="block p-2 hover:text-indigo-600">Assets</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Service</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Security</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Integrations</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Automations</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Reports</a>
    </div>
  </div>
  
</div>
<!-- end of menu 2 -->


<!-- Menu 2 -->
<div class="relative" x-data="{ subMenuOpen: false }">
  <button @click="subMenuOpen = !subMenuOpen" @click.outside="subMenuOpen = false" type="button" class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
    <span>Solutions</span>
    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
      <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
  </button>

  <!--
    Flyout menu, show/hide based on flyout menu state.

    Entering: "transition ease-out duration-200"
      From: "opacity-0 translate-y-1"
      To: "opacity-100 translate-y-0"
    Leaving: "transition ease-in duration-150"
      From: "opacity-100 translate-y-0"
      To: "opacity-0 translate-y-1"
  -->
  <div x-cloak x-show="subMenuOpen"  class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-min -translate-x-1/2 px-4 mx-10">
    <div class="w-36 shrink rounded-xl bg-white p-4 text-sm/6 font-semibold text-gray-900 shadow-lg ring-1 ring-gray-900/5">
      <a href="#" class="block p-2 hover:text-indigo-600">Analytics</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Engagement</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Security</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Integrations</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Automations</a>
      <a href="#" class="block p-2 hover:text-indigo-600">Reports</a>
    </div>
  </div>
  
</div>
<!-- end of menu 3 -->


</div>