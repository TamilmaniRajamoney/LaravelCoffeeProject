{{-- <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> --}}
     @props([listing])   
     
      @foreach ($listings as $listing) 
          <!-- Item 1 -->
          {{-- @props(['listing']) --}}
          <div class="bg-gray-50 border border-gray-200 rounded p-6">
              <div class="flex">
                  <img
                      class="hidden w-48 mr-6 md:block"
                      src="img/coffee-beans.jpeg"
                      alt=""
                  />
                  <div>
                      <h3 class="text-2xl">
                          <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                      </h3>
                      <div class="text-xl font-bold mb-4">{{$listing->type}}</div>
                      <ul class="flex"> 
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">Origin</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">Type</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">Price</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">Know more</a>
                          </li>
                      </ul>
                      <div class="text-lg mt-4">
                          <i class="fa-solid fa-location-dot"></i> Boston,
                          MA
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
