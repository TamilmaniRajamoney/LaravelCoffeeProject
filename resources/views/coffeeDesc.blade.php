@extends('listings.index')

@section('content')


<h2>
     @foreach($listings as $listing)
         
     

    <a href="listing" class="inline-block text-black ml-4 mb-4" >
        <i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/acme.png"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->type}}</div>
                        <ul class="flex">
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$listing->type}}</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$listing->category}}</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$listing->description}}</a>
                            </li>
                            
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> Kepong
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                coffee Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$listing->description}}
                                </p>

                                <a href="mailto:test@test.com"
                                    class="block bg-black text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Seller</a>

                                <a href="{{$listing->website}}"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</h2>

@endforeach

@endsection