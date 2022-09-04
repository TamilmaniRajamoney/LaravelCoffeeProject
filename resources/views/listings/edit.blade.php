@extends('listings.layout')
@section('content')


<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit Coffee
                        </h2>
                        <p class="mb-4">Edit your coffee:{{$listing->coffeename}}</p>
                    </header>

                    <form method ="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data" >
                        @csrf
                        @method("PUT")
                        <div class="mb-6">
                            <label
                                for="coffeename"
                                class="inline-block text-lg mb-2"
                                >Coffee Name</label >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full" name="coffeename" value="{{$listing->coffeename}}"/>
                                
                                @error('coffeename') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                               
                            </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Title</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title" value="{{$listing->title}}"
                                placeholder="Example: Starbucks-Nestle-Maxwell"/>

                                @error('title') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

                        </div>

                        <div class="mb-6">
                            <label
                                for="category"
                                class="inline-block text-lg mb-2"
                                >category</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="category"
                                value="{{$listing->category}}"
                                placeholder="black-white-strong"/>

                                @error('category') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >location</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="location"
                                value="{{$listing->location}}"
                                placeholder="Example: Remote, Boston MA, etc"/>

                                @error('location') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email" 
                                value="{{$listing->email}}"
                                />

                                @error('email') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website/Application URL
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="website"
                                value="{{$listing->website}}"
                                />

                                @error('website') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="type" class="inline-block text-lg mb-2">
                                Type
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="type"
                                value="{{$listing->type}}"
                                placeholder="Example: Laravel, Backend, Postgres, etc"/>

                                @error('type') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="cover" class="inline-block text-lg mb-2">
                                Coffee Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="cover"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                {{$listing->description}}"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            ></textarea>

                            @error('description') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Edit Brew !
                            </button>

                            <a href="/index" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
                @endsection