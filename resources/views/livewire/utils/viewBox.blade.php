<div class="w-full">
   
<div  class="flex flex-col items-center bg-white border rounded-lg shadow md:flex-row   border-gray-700 w-full relative  p-4">
    <div class="w-[100%] viewText flex flex-row p-6 md:p-0">
        <div  class="w-[80%] h-[100%]  flex items-center justify-center relative ">
            @include('livewire.utils.viewSwipper')
           
            <div class="viewText flex flex-col bg-white w-[40%] justify-between p-4 leading-normal absolute bottom-[8%] right-[-20%] border-4 border-white">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  lowercase">{{ $item->attribution}}</h5>
                <div class="flex flex-row gap-2 font-semibold text-gray-700 ">
                  <h1>Details: </h1>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->details}}</p>
                </div>
                <div class="flex flex-row gap-2 font-semibold text-gray-700 ">
                  <h1>Équipements: </h1>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->equipements}}</p>
            </div>
            <div class="flex flex-row gap-2 font-semibold text-gray-700 ">
              <h1>Installations: </h1>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->installations}}</p>
              </div>
                <div class="flex flex-row gap-2 font-semibold text-gray-700 ">
                  <h1>Taille: </h1>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->taille }}</p>
                </div>
                
                <div class="flex flex-row gap-2 font-semibold text-gray-700 ">
                  <h1>Type de lit: </h1>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->typeDeLit}}</p>
                </div>
                
                
                <div class="w-full flex flex-row justify-between relative">

                  <div class="flex flex-row gap-2 font-semibold text-gray-700">
                    <h1>Prix: </h1>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 lowercase">{{ $item->prix}}</p>
                  </div>
                  {{-- btn --}}
                  <button class="absolute bottom-[50%] md:right-[2%] right-[10%] py-2 px-3 bg-gray-200 border-2 border-gray-100 rounded-[8px]" >
                    <a href='book?id={{ $item->id}}&&att={{ $item->attribution}}' class=" font-normal text-gray-600 ">book</p>
                   </button>
                </div>
                
                {{--  --}}
                <div class=" rounded-[5px] w-full flex items-right justify-between relative h-[15vh]">
                    <nav class="imgsmal border-4 flex flex-row gap-2 justify-between h-[100%] ">
                        {{-- IMGZ --}}
                     <div wire:click.prevent='thirdImgClick' class=" {{ $thirdSm }} h-[100%]">
                      <img title="Image  tertiaire (Ancaju)"  class="cursor-pointer
                       rounded-t-lg  md:rounded-[0px] imghover h-[100%] cover" src="{{ $item->imgSupplémentaireDeux  }}" alt="Image tertiaire (Ancaju)">
                      
                       </div>
                     <div wire:click.prevent='firstImgClick'  class=" {{ $firstSm }}  h-[100%]">
                      <img title="Image principale (Ancaju)" class=" rounded-t-lg   md:rounded-[0px] imghover cursor-pointer h-[100%] cover" src="uploads/{{ $item->image }}" alt="Image principale (Ancaju)">
                       </div>
                        
                     <div  wire:click.prevent='secondImgClick' class=" {{ $secondSm }} h-[100%]">
                      
                       <img title="Image secondaire (Ancaju)"  class=" rounded-t-lg   md:rounded-[0px] imghover cursor-pointer h-[100%] cover" src="{{ $item->imgSupplémentaireUn }}" alt="image secondaire (Ancaju)">
                       </div>
    
                   
                     </nav>
                </div>
            </div>
          
        </div>
    </div>
       {{-- btn --}}
       <div class="w-[40%]  bg-gray-500 top-4 right-[8%] absolute ">
            <p class="h-2 w-full flex flex-col  bg-gray-500"></p>
            <h1 class="min-h-2 w-full flex flex-row  bg-gray-200 text- items-center justify-center font-bold">
              Un Accueil Chaleureux Vous Attend :Bienvenue à Ancaju<span class="text-[#FFDB17]">.</span>
            </h1>
            <p class="h-2 w-full flex flex-col  bg-[#FFDB17]"></p>
       </div>
       <div wire:click.prevent='back' class="absolute top-4 right-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer">
        <p class='text-2xl'>
          <i class='bx bx-arrow-back'></i>
        </p>
     </div>
</div>

</div>
