<div>
    <div class=" grid grid-cols-2 md:grid-cols-6  ">
      
    
       
        @foreach ($commodites as $commodity)
        <div class="flex items-center border-r-2 border-black">
            <p class="text-[150%]">
                <i class='bx bx-{{ $commodity->linkIcon }}'></i>
                
            </p>
             <h2 class="ms-3 text-md font-semibold text-gray-900">
                {{ $commodity->name }}
             </h2>
         </div>
        @endforeach
     
    
       
    </div>
</div>
