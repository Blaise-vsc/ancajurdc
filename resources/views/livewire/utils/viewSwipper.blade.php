<div class="imgParentdetail h-[100%]">
   {{-- IMGZ --}}
<div class="{{ $first }} imgChilddetail relative">
  <img title="Meilleure Chambre de Luxe à Lubumbashi | Ancaju Guest House" class=" rounded-t-lg   md:rounded-[10px] w-[full]" src="uploads/{{ $item->image }}" alt="chambre de luxe, hébergement Lubumbashi, Ancaju Guest House, RDC, Katanga, séjour de luxe">
  </div>
<div class="{{ $second }} ">
  <img title="Suite de luxe chez Ancaju Guest House à Lubumbashi" class=" rounded-t-lg   md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireUn }}"alt="Réservez la meilleure chambre de luxe à Lubumbashi, RDC, chez Ancaju Guest House. Profitez d'un hébergement raffiné et d'un service exceptionnel.">
  </div>
   
<div class="{{ $third }} ">
  <img title="Ancaju Guest House" class=" rounded-t-lg   md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireDeux  }}" alt="Ancaju Guest House propose les meilleures chambres de luxe à Lubumbashi, Katanga, RDC. Un confort exceptionnel pour un séjour inoubliable.">
  </div>
  {{-- ENDIMGZ --}}
  {{-- <div wire:click='firstImg' class=" flex items-center justify-center border border-white cursor-pointer absolute top-[4%] left-[4%]">
   <h1>cancel</h1>
</div> --}}
  {{--  --}}
  <nav class="flex flex-col gap-4 static md:absolute left-[4%] bottom-[30%]">
  <div title="Image principale" wire:click='firstImg' class="btnImg flex items-center justify-center border border-white cursor-pointer bg-{{ $bgcolorF }} bg-opacity-75 backdrop-blur-5">
     <h1>1</h1>
     <p wire:loading wire:target='firstImg'><i class='bx bxs-like bx-spin'></i></p>
  </div>
  <div title="Image secondaire" wire:click='secondImg' class="btnImg flex items-center justify-center border border-white cursor-pointer bg-{{ $bgcolorS }} bg-opacity-75 backdrop-blur-5">
     <h1>2</h1>
     <p wire:loading wire:target='secondImg'><i class='bx bxs-like bx-spin'></i></p>
  </div>
  <div title="Image tertiaire" wire:click='thirdImg' class="btnImg flex items-center justify-center border border-white cursor-pointer bg-{{ $bgcolorT }} bg-opacity-75 backdrop-blur-5">
     <h1>3</h1>
     <p wire:loading wire:target='thirdImg'><i class='bx bxs-like bx-spin'></i></p>
  </div>
 
  </nav>
   
</div>