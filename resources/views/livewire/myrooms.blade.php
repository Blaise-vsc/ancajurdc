
<div class="swiper-wrapper ">
 
    @foreach ($chambre as $item)

@if ($viewRom===$item->id)
@include('livewire.utils.viewBox')

@else

<div wire:key='{{ $item->id }}' class="swiper-slide md:{{ $hideRooms }}">
    <div class="swiperContainer ">
        <img class="imgSwiper " src="uploads/{{ $item->image }}" alt="">
        <nav class="w-[60%] md:w-full h-[12%] md:h-[15%]  viewRoom flex gap flex-row justify-between pr-[2px] pl-[2px] pt-[2px]">
        <div wire:click.prevent='view({{ $item->id }})' class="hidden md:flex w-[49%] font-bold  justify-center items-center cursor-pointer md:bg-white backdrop-blur-4 h-[95%] flex-row gap-2 " >
            <h1>details</h1>
                <div wire:loading wire:target='view' class="text-black bg-blacl">
                         <p>...</p>
                </div>
           </div>
           <a href="detail?id={{ $item->id }}"  class=" md:hidden w-[49%] font-bold flex justify-center items-center cursor-pointer bg-white h-[95%] flex-row gap">
            <h1>details</h1>
           </a>
        <a   href='book?id={{ $item->id }}&&att={{ $item->attribution }}' class="w-[49%] font-bold flex justify-center items-center cursor-pointer bg-white h-[95%] flex-row  gap">
            <h1>book</h1>
            
           </a>
        </nav>
       </div>
  </div>
@endif
@endforeach
</div>
