<section class=" w-full bg-stone-50 py-9 px-8">
    <div class="mt-4">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
            Most Liked Book 
            <br class="hidden lg:inline-block">
        </h1>
    </div>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center gap-4">
        @foreach ($mostLikedBooks as $book)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 ">
        <a href="{{route('books.show',$book->id)}}">
            <img class="rounded-t-lg "
            src="{{ asset('storage/'.$book->imgPath)}}" alt="book items" />
        </a>
        <div class="p-5">
            <a href="{{route('books.show',$book->id)}}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$book->title}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$book->description}}</p>
            <a href="{{route('books.show',$book->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
        @endforeach
    </div>
</section>
