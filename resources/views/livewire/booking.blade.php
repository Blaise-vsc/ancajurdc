<form class="w-full md:w-[80%] mx-auto grid grid-cols-2 md:grid-cols-7 gap-3 ">
    <div class="mb-5">
      <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
      <input type="text" wire:model='phone' id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+24397...."  />
      
      @error('phone')
      <p class="text-red-500"> {{ $message }} </p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="enregistrement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enregistrement</label>
      <input type="date" wire:model='enregistrement' id="enregistrement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
      
      @error('enregistrement')
      <p class="text-red-500"> {{ $message }} </p>
      @enderror
    </div>
    
    
    <div class="mb-5">
        <label for="verifier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vérifier</label>
        <input type="date" id="verifier" wire:model='verifier' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
      
        @error('verifier')
        <p class="text-red-500"> {{ $message }} </p>
        @enderror
      </div>
      <div class="mb-5 max-w-[60px]">
        <label for="nuit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nuit</label>
        <input type="number" wire:model='nuit' id="nuit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100%] p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" />
        
        @error('nuit')
        <p class="text-red-500"> Requis</p>
        @enderror
      </div>
      <div class="mb-5 max-w-[60px]">
        <label for="adultes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adultes</label>
        <input type="number" id="adultes" wire:model='adultes' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" />
      
        @error('adultes')
        <p class="text-red-500"> Requis </p>
        @enderror
      </div>
      <div class="mb-5 max-w-[60px]">
        <label for="enfants" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfants</label>
        <input type="number" id="enfants" wire:model='enfants' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" />
      
        @error('enfants')
        <p class="text-red-500"> Requis </p>
        @enderror
      </div>
      
    <button wire:click.prevent='create' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-1.5 h-[40px] text-center  dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-[27px] flex items-center justify-center">soumettre  <div wire:target='create' wire:loading> 
      
      <i class='bx bx-world bx-spin'></i>
  </div></button>
   
  </form>
