<x-app-layout>

<main class="xl:pl-12">
      <div class="px-4 py-10 sm:px-12 lg:px-8 lg:py-6 lg:ml-12 lg:mr-6 lg:my-6 border-2 border-blue-500">
        <!-- Main area -->
         <!-- Help me get the below to 2/3 and 1/3 -->
         <div class="border-2 border-red-500 my-2 flex justify-left">
          @include('layouts.navigations.sub-navigation')
         </div>
          <div class="flex flex-row gap-4">
         <div class="w-2/3 border-2 border-red-500">
          
            
              <h1 class="text-2xl font-bold">Left</h1>
            
          </div>
          <div class="w-1/3 border-2 border-green-500">
          
              <h1 class="text-2xl font-bold">Right</h1>
            
          </div>
          </div>
      </div>
    </main>
  </div>

  
</div>
</x-app-layout>
