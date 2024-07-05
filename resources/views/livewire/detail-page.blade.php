<div class="detaildiv w-[100vw]">
    <?php
    $id=$_GET['id']
    ?>
 @foreach ($chambre as $item)
 @if ($item->id==$id)
     

    <div  style="background:linear-gradient(to bottom, rgba(255, 0, 0, 0.316),rgba(0, 0, 255, 0.356)),url('uploads/{{ $item->image }}'), background-size: cover, background-repeat:no-repeat"  class=" linearbg flex flex-col items-center  rounded-lg shadow md:flex-row   w-full min-h-[100vh]">
        
            <div class="w-[100%] flex flex-col gap-6 h-[100%]">
                @include('livewire.utils.header')
                @include('livewire.utils.detailviewSwipper')
              
                {{--  --}}
                 <div class="w-[100%] p-[120px] flex-col min-h-[50vh] bg-white flex text-center items-center justify-center detailpadding
                 gap-[10px]" style='  font-family: "Merienda", cursive;
                 font-optical-sizing: auto;
                 font-weight: bold;
                 font-style: normal;'>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $item->attribution}}</h5>
                    <p class="ml-4 font-normal text-gray-700 dark:text-gray-400">{{ $item->taille }}</p>
                    <p class="ml-4 font-normal text-gray-700 dark:text-gray-400">{{ $item->details}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->typeDeLit}}</p>
                    <p class="ml-4 font-normal text-gray-700 dark:text-gray-400">{{ $item->equipements}}</p>
                    <p class="ml-4 font-normal text-gray-700 dark:text-gray-400">{{ $item->installations}}</p>
                    <p class="ml-4 font-normal text-gray-700 dark:text-gray-400">{{ $item->prix}}</p>
                    <div class=" h-[30px] mt-3 rounded-[5px] w-full flex items-center justify-center  bg-[#F7D416]  text-center">
                        <a href='book?id={{ $item->id}}' class=" text-gray-600  cursor-pointer font-bold w-full h-[100%] flex  items-center justify-center">BOOK</p>
                    </div>
                    
                    
                </div> 
           
        </div>
        </div>

    @endif
 @endforeach
</div>
