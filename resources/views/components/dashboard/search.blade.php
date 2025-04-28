<div class="mx-10 my-10 bg-stone-50 z-50 p-6 rounded-md">
    <!-- Title -->
    <div class="mb-6">
        <h1 class="text-2xl font-semibold">
            Search for Book
        </h1>
    </div>

    <!-- Form -->
    <form class="flex flex-col md:flex-row flex-wrap gap-4 items-start md:items-center">
        <!-- Search Input -->
        <div class="flex w-full md:flex-1 rounded-md overflow-hidden border-2 border-gray-300">
            <input 
                type="text" 
                name="search" 
                id="query" 
                value ="{{old('search')}}"
                placeholder="Book"
                class="w-full p-3 border-none placeholder-gray-500 dark:placeholder-gray-300 dark:bg-gray-500 dark:text-gray-300"
            />
            <button
                type="submit"
                class="bg-blue-700 text-white font-semibold px-6 py-3 flex items-center gap-2"
            >
                <span>Search</span>
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 
                        s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  
                        c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z 
                        M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 
                        s-17-7.626-17-17S14.61,6,23.984,6z"
                    />
                </svg>
            </button>
        </div>

        <!-- Category Dropdown -->
        <select
            name="category"
            class="p-3 border-2 border-gray-300 rounded-md w-full md:w-auto dark:bg-gray-500 dark:text-gray-300"
        >
            <option value="" disabled>All Categories</option>
            @foreach($categories as $category )
            <option value="{{$category}}">{{$category}}</option>
            @endforeach
        </select>

        <!-- Min Price -->
        <input 
            type="number" 
            name="minPrice" 
            placeholder="Min Price"
            class="py-3 px-2  border-2 border-gray-300 rounded-md w-full md:w-28 dark:bg-gray-500 dark:text-gray-300"
        />

        <!-- Max Price -->
        <input 
            type="number" 
            name="maxPrice" 
            placeholder="Max Price"
            class="py-3 px-2  border-2 border-gray-300 rounded-md w-full md:w-28 dark:bg-gray-500 dark:text-gray-300"
        />
    </form>
</div>
