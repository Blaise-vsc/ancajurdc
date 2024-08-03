<section class="" style="background-image: url('{{ asset('../album/contbg.webp') }}');
background-size: cover;">
    <div class=" ">
        
        <h2 class="tittleclass  text-2xl tracking-tight font-extrabold text-gray-900  text-center w-full">Trouvez-nous sur Google Map  <span class="text-[#FFE65E]">.</span></h2>
        <p class=" p-2 font-light text-gray-500 text-center md:text-lg dark:text-gray-400">Commune annexe, Lubumbashi, Rdcongo</p>
        {{--  --}}
        <div class="w-[100%]  mb-4 flex items-center justify-center">
            <!-- Start coding here -->
           @livewire('ancajugh')
          </div>
        {{--  --}}
        <div class="w-[100%] h-[55vh] ">
           <div class="w-[100%] text-center h-[100%] flex items-center justify-center ">
            <iframe class="w-[90%] md:w-[75%] h-[85%] md:h-[100%] rounded-[20px] " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.523750085668!2d27.44303837388544!3d-11.657246634768244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723d43649d34ef%3A0x548115783cff5c18!2sANCAJU%20GUEST%20HOUSE!5e0!3m2!1sen!2sug!4v1715572211692!5m2!1sen!2sug"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </div>
        <div id="booking" class=" ">
            <div id="bookings" class="max-w-7xl mx-auto sm:px-6 bookbg mt-2 md:mt-6">
                <div  class=" ">
                    <x-booking />
                </div>
            </div>
        </div>
    </div>
</section>