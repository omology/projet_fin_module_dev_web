  <div class="container max-w-screen-lg mx-auto">
    <div>
      <div class="rounded shadow-lg p-4 px-4 md:p-8 mb-6 bg-white shadow-2xl">
        <div class="grid gap-2 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          
          <!-- Left Column: Book Image -->
          <div class="flex justify-center items-center">
            <img src="{{ asset('storage/'.$book->imgPath)}}" alt="Book Image" class="w-64 h-96 object-cover rounded-md shadow-lg">
          </div>

          <!-- Right Column: Book Information -->
          <div class="lg:col-span-2">
            <div class="space-y-4">
              <!-- Book Title -->
              <div>
                <h2 class="text-2xl font-semibold text-black">Book Title: {{$book->title}}</h2>
              </div>

              <!-- Author -->
              <div>
                <p class="text-lg text-black">Author: {{$book->authorName}}</p>
              </div>

              <!-- Description -->
              <div>
                <p class="text-black">
                {{$book->description}}
                </p>
              </div>

              <!-- ISBN -->
              <div>
                <p class="text-lg text-black">ISBN: {{$book->ISBN}}</p>
              </div>

              <!-- Price -->
              <div>
                <p class="text-lg text-black">Price: $ {{$book->price}}</p>
              </div>

              <!-- Category-->
              <div>
                <p class="text-lg text-black">Category: {{$book->category}}</p>
              </div>
                            <!-- Review 2 (Stars Only) -->
            <div class="my-4">
                <div class="flex items-center space-x-2">
                  <!-- Rating Stars (4 stars) -->
                  <div class="flex text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                  </div>
                </div>
            </div>
            
              <div>
                   
                <div class="flex gap-4">
                <a href="{{route('books.show',$book->id)}}" type="button" class="text-black bg-white border border-blue-800 hover:bg-blue-800 hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 duration-300  ">
                
    
                show Details

                </a> 
                {{-- ankmlhom mn be3d !!!!!!!!!!111
                    <!-- Like Button -->
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 duration-300">
                        <span class="flex items-center gap-2">
                        {{ $book->dislike}}
                        Like
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        </span>
                    </button>

                    <!-- Dislike Button -->
                    <button type="button" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 duration-300">
                        <span class="flex items-center gap-2">
                        {{ $book->dislike}}
                        Dislike 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                        </svg>
                        
                        </span>
                    </button>
                    --}}
                    <!-- delete button  -->
                     <form method="post" action="{{route('books.destroy',$book)}}" onsubmit="return confirm('Are you sure?');">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class=" text-sm text-black bg-white border border-red-700 hover:bg-red-600 hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 duration-300 ">
                        <span class="flex items-center gap-2">
                        Delete
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                          </svg>

                        </span>
                    </button>
                    </form>
                    </div>

          
         
             </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

