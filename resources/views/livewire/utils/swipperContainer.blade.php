
<div class="swiper-wrapper">
    @foreach ($chambre as $item)
@if ($viewRom===$item->id)
   <h1>{{ $viewRom }}</h1>
@else
<div wire:key='{{ $item->id }}' class="swiper-slide">
    <div class="swiperContainer ">
        <img title="Meilleure Chambre de Luxe à Lubumbashi | Ancaju Guest House" class="imgSwiper " src="uploads/{{ $item->image }}" alt="ancaju">
        <div wire:click='view({{ $item->id }})' class="w-full h-[15%] bg-yellow-500 viewRoom font-bold flex justify-center items-center cursor-pointer"  >
            <h1>view</h1>
           </div>
       </div>
  </div>
@endif
@endforeach
</div>