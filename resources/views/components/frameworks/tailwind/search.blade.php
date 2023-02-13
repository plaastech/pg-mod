@if($searchInput)
    <div class="flex flex-row mt-2 md:mt-0 w-full flex justify-start sm:justify-center md:justify-end">

        <div class="relative w-full md:w-4/12 float-end float-right md:w-full lg:w-1/2">
              <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                 <span class="p-1 focus:outline-none focus:shadow-outline">
                    <x-livewire-powergrid::icons.search class="text-gray-300 dark:text-gray-200"/>
                 </span>
              </span>
            
            @if($search)
                <span class="absolute inset-y-0 right-0 flex items-center pl-1">
                    <span class="p-1 focus:outline-none focus:shadow-outline cursor-pointer">
                        <a wire:click.prevent="$set('search','')">
                            <x-livewire-powergrid::icons.x class="text-gray-300 dark:text-gray-200"/>
                        </a>
                    </span>
                </span>
            @endif
        </div>

    </div>
@endif
