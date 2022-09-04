@extends('listings.layout')
@section('content')
@include('partials._hero')
@include('partials._search')

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
                      <div class="text-xl font-bold mb-4">{{$listing->coffeename}}</div>
                      <ul class="flex"> 
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">{{$listing->category}}</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="/type/{{$listing->type}}">{{$listing->type}}</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">{{$listing->description}}</a>
                          </li>
                          <li
                              class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                              <a href="#">{{$listing->website}}</a>
                          </li>
                      </ul>
                      <div class="text-lg mt-4">
                          <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                      </div>
                  </div>
              </div>
            </div>
            
          
          @endforeach
            <div class="mt-6 p-4">
            {{$listings->links()}}
            </div>

          @endsection
          
