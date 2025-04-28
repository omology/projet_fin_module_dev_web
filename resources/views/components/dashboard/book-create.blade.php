<div class="flex items-center justify-center p-12 w-full rounded-md">
    <!-- Author: FormBold Team -->
    <div class="mx-auto p-20 bg-white rounded-md">
        <form 
        action="{{route('books.store')}}"
        method="post"
        enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                    Book title
                </label>
                <input type="text" name="title" id="title" placeholder="book title "
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('title')
                    <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="authorName" class="mb-3 block text-base font-medium text-[#07074D]">
                    Author Name
                </label>
                <input type="text" name="authorName" id="authorName" placeholder="authorName"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('authorName')
                    <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" value="{{session('email')}}"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('email')
              <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
          @enderror
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                            ISBN
                        </label>
                        <input type="text" name="ISBN" id="date"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            placeholder="enter The ISBN " />
                            @error('ISBN')
              <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
          @enderror
                    </div>
                </div>

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                            Price
                        </label>
                        <input type="number" name="price" id="price"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                            placeholder="enter The Price"
                            />
                            @error('price')
                                 <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                             @enderror
                    </div>
                </div>

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">

                        <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
                            Category
                        </label>
                    <select
                        id="category"
                        name="category"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-stone-800 outline-none focus:border-[#6A64F1] focus:shadow-md"
                    >
                    <option value="" disabled>All Categories</option>
                    @foreach($categories as $category )
                    <option value="{{$category}}">{{$category}}</option>
                    @endforeach
                   </select>
                    </div>
                    @error('category')
                         <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                    @enderror
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="adress" class="mb-3 block text-base font-medium text-[#07074D]">
                            Adress
                        </label>
                        <input type="text" name="adress" id="adress"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                            placeholder="enter The Adress"
                            />
                            @error('adress')
                            <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="mb-5">
            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    Upload File
                </label>

                <div class="mb-5">
                    <input type="file" name="file" id="file" class="sr-only" />
                    <label for="file"
                        class="relative flex min-h-[200px] items-center bg-stone-50 justify-center rounded-md border-4 border-dashed border-stone-300 p-12 text-center">
                        <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                Drop files here
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                Or
                            </span>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                Browse
                            </span>
                        </div>
                    </label>
                    @error('email')
                        <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
                    @enderror
                </div>
                <div class="mb-5">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]" for="description">
                    Description
                </label>
                        <textarea name="description" id="description" cols="30" rows="10" class=" h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-800" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur qui commodi neque, exercitationem beatae veritatis perspiciatis labore quae odio, laborum architecto? Accusantium voluptatum nihil modi, laudantium dolor eos esse hic.
"></textarea>
@error('description')
              <div class="alert alert-danger text-sm text-red-500">{{ $message }}*</div>
          @enderror
                </div>
                    
            </div>
            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-blue-600 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                   Upload Book
                </button>
            </div>
        </form>
    </div>
</div>
