<nav id="my-section" class="pdfclass py-4 md:py-0  flex flex-col justify-center items-center gap-1 px-3  w-full ">
    @foreach ($message as $msg)
  
    <div class="imgClass ">
        <img class="  rounded-lg" src="{{ asset('../album/msgimgs.gif') }}" alt="">
    </div>
    <div class="flex flex-col justify-between p-4 leading-normal text-center">
        <h1 class=" text-gray-700  text-3xl font-bold">{{ $msg->heading1 }} <br>{{ $msg->heading2 }}</h1>
    </div>
    <div class="flex flex-col justify-between leading-normal text-center">
        <p class=" text-gray-700">{{ $msg->sub_h1 }} <br> {{ $msg->sub_h2 }}<br>{{ $msg->sub_h3 }}  

        </p>
    </div>
    <div class="imgClassRoom flex flex-row gap-2 ">
        <img class="  md:w-48 rounded-lg" src="{{ asset('../album/imgroom.webp') }}" alt="">
       
    </div>
    <p class="text-gray-700 underline">{{ $msg->download_message }}</p>
    {{-- <p class="text-gray-700 p-2 rounded-lg bg-red-100">fait le: {{ $msg->id }}</p> --}}
    <p class="text-gray-700 p-2 rounded-lg bg-red-100">time: {{ now() }}</p>
    <div class="imgClassLogo ">
        <img class=" rounded-lg" src="{{ asset('../album/resizeblack.webp') }}" alt="">
    </div>
    <div class="absolute right-[2%] bottom-[2%] text-right flex flex-col   ">
        <div class="iconperant flex flex-row gap-1">
            <a class="iconimg" href="tel:{{ $msg->phone }}"><img src="{{ asset('../icons/call.webp') }}" alt="phone call"></a>
            <a class="iconimg" href="tel:{{ $msg->linkdin }}"><img src="{{ asset('../icons/whtap.webp') }}" alt="whatsapp"></a>
            <p class="text-xl font-bold">{{ $msg->phone }}</p>
        </div>
        <div class="iconperant flex flex-row gap-1">
            <a class="iconimg" href="mail:{{ $msg->mail }}"><img src="{{ asset('../icons/maill.webp') }}" alt="mail"></a>
            <p class="text-xl font-bold">{{ $msg->mail }}</p>
        </div>
        <div class="iconperant flex flex-row gap-1">
            <p class="iconimg"><img src="{{ asset('../icons/loc.webp') }}" alt="mail"></p>
            <p class="text-xl font-bold">{{ $msg->address }}</p>
        </div>
    

    </div>

        
    @endforeach
</nav>