 <!-- Slider main container -->
<div class="swiper scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="imgDetail" >
            <img title="Meilleure Chambre de Luxe à Lubumbashi | Ancaju Guest House"  class=" rounded-t-lg  md:rounded-none md:rounded-[10px] w-[full]" src=" uploads/{{ $item->image }}" alt="Découvrez la meilleure chambre de luxe à Lubumbashi chez Ancaju Guest House. Profitez du confort et de l'élégance au cœur du Katanga, RDC." >
            </div>
      </div>
      <div class="swiper-slide">
        <div class="imgDetail">
            <img title="Hébergement de Luxe à Lubumbashi | Ancaju Guest House" class=" rounded-t-lg  md:rounded-none md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireUn }}" alt="Réservez la meilleure chambre de luxe à Lubumbashi, RDC, chez Ancaju Guest House. Profitez d'un hébergement raffiné et d'un service exceptionnel.">
            </div>
      </div>
      <div class="swiper-slide">
        <div class="imgDetail">
            <img title="Chambre de Luxe à Lubumbashi | Ancaju Guest House" class=" rounded-t-lg  md:rounded-none md:rounded-[10px] w-[full]" src="{{ $item->imgSupplémentaireDeux  }}" alt="Ancaju Guest House propose les meilleures chambres de luxe à Lubumbashi, Katanga, RDC. Un confort exceptionnel pour un séjour inoubliable." >
            </div>
      </div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>