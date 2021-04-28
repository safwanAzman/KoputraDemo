<div 
x-show="{{$modalActive}}" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" 
x-ref="dialog" 
style="display: none;"
aria-modal="true">
    
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
    <div 
    x-show="{{$modalActive}}" 
    x-transition:enter="ease-out duration-300" 
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100" 
    x-transition:leave="ease-in duration-200" 
    x-transition:leave-start="opacity-100" 
    x-transition:leave-end="opacity-0" 
    x-description="Background overlay, show/hide based on modal state." 
    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" 
    @click="open = false" 
    aria-hidden="true"></div>

  <!-- This element is to trick the browser into centering the modal contents. -->
  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&ZeroWidthSpace;</span>
  
    <div 
    x-show="{{$modalActive}}" 
    x-transition:enter="ease-out duration-300" 
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
    x-transition:leave="ease-in duration-200" 
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
    x-description="Modal panel, show/hide based on modal state." 
    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-{{$iconColour}}-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-{{$iconColour}}-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$draw}}" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
              {{$title}}
            </h3>
            <div class="mt-5">
              <p class="text-sm text-gray-500">
                {{$description}} 
              </p>
            </div>
          </div>
        </div>
      </div>
      @if ($alkCheck=="true")
      <div>
        <div class="mt-1 rounded-md shadow-sm flex justify-center pb-5">
            <select name="a" class="block w-2/3 transition duration-150 ease-in-out form-select sm:text-sm sm:leading-5 ">
                
                    <option value="" selected disabled>Senarai ALK</option>
                    <option value="1" >ALK 1</option>
                    <option value="2" >ALK 2</option>
                    <option value="3" >ALK 3</option>
    
            </select>
        </div>
      </div>
      @endif
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-{{$colour}}-600 text-base font-medium text-white hover:bg-{{$colour}}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="{{$modalActive}} = false" wire:click= @if($rButton=="Terima") "approve({{$itemid}})" @elseif($rButton=="Tolak") "reject({{$itemid}})" @elseif($rButton=="Ya") "pass({{$itemid}})" @endif>
          {{$rButton}}
        </button>
        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="{{$modalActive}} = false">
          {{$lButton}}
        </button>
      </div>
    </div>
  
</div>
</div>