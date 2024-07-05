<div class="relative overflow-hidden bg-[#FFDB17] md:rounded-lg w-[90%] md:w-[75%] ">
    @foreach ($ancaju as $guest)
    <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
        <div class="flex items-center justify-left flex-row gap-1 md:gap-0">
         
          <i class='bx bxl-linkedin-square text-[40px] '></i>
          <i class='bx bxl-facebook-square text-[40px]'></i>
          <i class='bx bxl-instagram-alt text-[40px]'></i>
          <i class='bx bxl-twitter text-[40px]'></i>
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
