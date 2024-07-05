<main class=" bg-blue-400 bookContainer md:w-full  md:h-[100vh] w-full min-h-[100vh] items-center justify-center flex flex-col gap-5 ">


<nav class="w-[100%] min-h-[80%] md:min-h-[80%] items-center justify-center flex flex-col gap-2 formContainer md:p-4">
 
 <form wire:submit.prevent="create" class="bookCard  flex flex-col gap-3 md:gap-3">
  <div class="imgForm">
    <img src="{{ asset('album/logo.png') }}" alt="">
  </div>
  <div class="fixed top-2 left-4">
    <p wire:click='cancel' class="ext-white bg-red-300 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center flex-row hidden md:block cursor-pointer">cancel</p>
  </div>
  <div class="w-full md:w-[40%] h-[45px] pr-2 pl-2 bg-white flex flex-row justify-between items-center" style="">
    <h1 class="font-bold">Coordonnées de l'invité</h1>
    <p wire:click='cancel' class="h-[70%] pl-2 pr-2 bg-red-400 flex items-center justify-center border-2 cursor-pointer md:hidden">cancel</p>
  </div>
 {{--  --}}
    <nav class="flex flex-col md:flex-row justify-between gap-4 w-full">
        @include('livewire.utils.boxLeft')
        @include('livewire.utils.boxRight')
    </nav>
   
    <div class="flex flex-row gap-4">
      <button type='submit' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex flex-row">
      <p>Submit</p> 
      <p wire:loading wire:target='create'>...</p> 
       
  </button>

  <a  href='dashboard?id={{ request('conf_code') }}&&att={{ request('att') }}&&block=flex' class="ext-white bg-red-300 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center flex-row  cursor-pointer">back</a>
</div>
  </form>
  {{--  --}}
  <footer class="md:hidden w-full bg-white rounded-lg shadow mt-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 flex items-center flex-col justify-between">
     
    <ul class="flex justify-between items-center mb-3 text-sm font-medium text-gray-500 dark:text-gray-400 ">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">call</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">whatsapp</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">facebook</a>
        </li>
        <li>
            <a href="#" class="hover:underline">linkdind</a>
        </li>
    </ul>
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    </div>
  </footer>
</nav>
{{-- footer --}}




</main>