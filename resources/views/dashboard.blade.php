<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="xl:m-3 xl:p-3 flex justify-left border-2 border-red-500">
        @include('partials.sub-nav')
    </div>

    <div class="xl:m-3 xl:p-3 border-2 border-red-500">
        @include('partials.page-heading')
    </div>

    <main class="xl:m-3 xl:p-3 border-2 border-red-500">
      <div class="px-4 py-10 sm:px-6 lg:px-8 lg:py-6 border-2 border-blue-500">
        <!-- Main area -->
         main-area
       
         <br></br>
         <br></br>
         <br></br>
         <br></br>
         end of main
         
      </div>
    </main>
  
</x-app-layout>
