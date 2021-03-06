<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div x-bind:class="sidebarOpen ? 'z-40' : 'z-0'" class="fixed inset-0 flex lg:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.
      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div x-show="sidebarOpen"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.
      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div x-show="sidebarOpen"
         x-bind:class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
         x-transition
         class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white -translate-x-full">
        <!--
          Close button, show/hide based on off-canvas menu state.
          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div x-show="sidebarOpen"
             :class="sidebarOpen ? 'opacity-100' : 'opacity-0'"
             class="absolute top-0 right-0 -mr-12 pt-2">
            <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4 text-gray-800 font-medium">
            <x-application-logo class="w-8 h-8 mr-3" />
            {{ config('app.name', 'Laravel') }}
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2">
                <div class="space-y-1">
                    @include('includes.navigation')
                </div>
            </nav>
        </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
</div>
