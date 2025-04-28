<nav class="bg-white border-b border-gray-200 px-4 py-3 shadow-sm">
    <div class="container mx-auto flex justify-between items-center">
        {{-- Logo / Left side --}}
        <div>
            <a href="{{ route('home') }}" class="text-xl font-semibold text-gray-800">MyBookApp</a>
        </div>

        {{-- Right side --}}
        <div class="flex items-center space-x-4">
            @guest
                <a href="{{ route('auth.register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
                <a href="{{ route('auth.login') }}" class="text-gray-700 hover:text-blue-600">Login</a>
            @else
                <a href="{{ route('books.index') }}" class="text-gray-700 hover:text-blue-600">Books</a>
                <a href="{{ route('books.create') }}" class="text-gray-700 hover:text-blue-600">Create</a>

                {{-- Optional: User dropdown or Logout --}}
                <form method="POST" action="{{ route('auth.logout') }}">

                    @csrf
                    @method('delete')
                    <button type="submit" class="text-gray-700 hover:text-red-600">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>
