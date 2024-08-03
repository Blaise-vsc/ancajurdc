<div style=' @media(max-width:300px){background: linear-gradient(to right, #ffffff00, #00000052, #000000b6), url("../album/mybg.jpg") } background: linear-gradient(to right, #ffffff00, #00000052, #000000b6), url("../album/mybg.jpg"); background-size:cover;    background-attachment: center;' class="p-6 lg:p-8 bg-white border-b border-gray-200 heading ">
    {{-- <x-application-logo class="" /> --}}

    <h1 class="mt-8 text-2xl font-medium text-white" style='  font-family: "Merienda", cursive;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;'>
        Bienvenue à Ancaju Guest House.
    </h1>

    <p class="mt-6 text-white leading-relaxed text-center md:text-right text-[110%] " style='    font-family: "Roboto", sans-serif;
    font-style: normal;
    '>
        Votre destination idéale pour un séjour mémorable à Lubumbashi, <span class="hidden md:block">Congo-Kinshasa! Située dans la charmante Commune Annexe, notre maison d'hôtes vous offre une atmosphère accueillante et paisible,</span> Réservez dès maintenant et laissez-nous prendre soin de vous lors de votre séjour à Lubumbashi.
    </p>
</div>
{{-- ------------------ --}}
<div class="bg-[#FFDB17] flex gap-3 md:gap-6 flex-col lg:p-8 pl-4 pt-4">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
        </svg>
        <h2 class="ms-3 text-xl font-semibold text-gray-900">
            Nos Commodités
        </h2>
    </div>
   
   @livewire('commodities')
</div>

{{-- ------------------ --}}
<div class="bg-gray-200 bg-opacity-25  p-6 lg:p-8">
  @livewire('rooms')
  
</div>

