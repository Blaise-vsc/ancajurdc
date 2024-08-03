 <!-- Slider main container -->
<div class="swiper scale-100 p-1 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex   w-[100vw]">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper  w-[100%]">
      <!-- Slides -->
      <div class="swiper-slide ">
        <div class="imgswap" >
            <img title="Meilleure Chambre de Luxe à Lubumbashi | Ancaju Guest House"  class=" rounded-t-lg  rounded-none md:rounded-[10px] w-[full]" src=" uploads/{{ $item->image }}" alt="Découvrez la meilleure chambre de luxe à Lubumbashi chez Ancaju Guest House. Profitez du confort et de l'élégance au cœur du Katanga, RDC." >
            </div>
      </div>
      <div class="swiper-slide">
        <div class="imgswap">
            <img title="Hébergement de Luxe à Lubumbashi | Ancaju Guest House" class=" rounded-t-lg  rounded-none md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireUn }}" alt="Réservez la meilleure chambre de luxe à Lubumbashi, RDC, chez Ancaju Guest House. Profitez d'un hébergement raffiné et d'un service exceptionnel.">
            </div>
      </div>
      <div class="swiper-slide">
        <div class="imgswap">
            <img title="Chambre de Luxe à Lubumbashi | Ancaju Guest House" class=" rounded-t-lg  rounded-none md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireDeux  }}" alt="Ancaju Guest House propose les meilleures chambres de luxe à Lubumbashi, Katanga, RDC. Un confort exceptionnel pour un séjour inoubliable." >
            </div>
      </div>
    
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>