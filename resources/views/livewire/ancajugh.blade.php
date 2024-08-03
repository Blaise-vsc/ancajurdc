<div class="relative overflow-hidden bg-[#FFDB17] md:rounded-lg w-[90%] md:w-[75%] ">
    @foreach ($ancaju as $guest)
    <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
        <div class="flex items-center justify-left flex-row gap-1 md:gap-0">
         
          <a href="https://www.linkedin.com/in/ancaju-guest-house-05b44827b/?originalSubdomain=cd">
            <i class='bx bxl-linkedin-square text-[40px] '></i>
          </a>
          <a href="https://www.facebook.com/ancaju243/?paipv=0&eav=AfZJo-45JOx0Y1rf88DQ4VthzmK7lUsH8pJ-i4UPfiLp2dOER65ek0xh7A9tBotYO5c&_rdr">
            <i class='bx bxl-facebook-square text-[40px]'></i>
          </a>
          <a href="https://www.google.com/maps/place/ANCAJU+GUEST+HOUSE/@-11.6572519,27.4456133,15z/data=!4m6!3m5!1s0x19723d43649d34ef:0x548115783cff5c18!8m2!3d-11.6572519!4d27.4456133!16s%2Fg%2F11kq2f7hyz?entry=ttu">
            <i class='bx bxs-map text-[40px]'></i>
          </a>
          <a href="https://google.com/maps/place/ANCAJU+GUEST+HOUSE/@-11.6572519,27.4456133,15z/data=!4m6!3m5!1s0x19723d43649d34ef:0x548115783cff5c18!8m2!3d-11.6572519!4d27.4456133!16s%2Fg%2F11kq2f7hyz?entry=ttu">
            <i class='bx bxl-google text-[40px]' ></i>
          </a>
        </div>

  
        <div class="inline-flex flex-col w-full rounded-md shadow-sm md:w-auto md:flex-row" role="group">
          <div 
          class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:border-gray-600 dark:text-white hover:text-gray-600  dark:focus:ring-primary-500 dark:focus:text-white">
            {{ $guest->pays }}
          </div>
          <div 
          class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:border-gray-600 dark:text-white hover:text-gray-600  dark:focus:ring-primary-500 dark:focus:text-white">
            {{ $guest->province }}
          </div>
          <div type="button"
                 class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:border-gray-600 dark:text-white hover:text-gray-600  dark:focus:ring-primary-500 dark:focus:text-white">
           {{$guest->commune}}
          </div>
          <div
                  class="md:block hidden px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:border-gray-600 dark:text-white hover:text-gray-600  dark:focus:ring-primary-500 dark:focus:text-white">
            + {{ $guest->phone }}
        </div>
          <a href="tel:+{{ $guest->phone }}"
                  class="block md:hidden px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:border-gray-600 dark:text-white hover:text-gray-600  dark:focus:ring-primary-500 dark:focus:text-white">
            + {{ $guest->phone }}
        </a>
        </div>
      </div>
    @endforeach
  </div>
