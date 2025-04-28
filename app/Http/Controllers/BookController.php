<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\models\Book;
class BookController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $request->validate([
            'minPrice' => 'nullable|numeric|min:0',
            'maxPrice' => 'nullable|numeric|gte:minPrice',
            'category' => 'nullable|string',
            'search'   => 'nullable|string|max:255',
        ]);

        $searchTerm = $request->get('search', '');

        $books = Book::where(function($query) use ($searchTerm) {
        $query->where('title', 'like', '%' . $searchTerm . '%')
              ->orWhere('authorName', 'like', '%' . $searchTerm . '%');
    })
    ->when($request->filled('minPrice'), fn($q) => $q->where('price', '>=', $request->minPrice))
    ->when($request->filled('maxPrice'), fn($q) => $q->where('price', '<=', $request->maxPrice))
    ->when($request->filled('category'), fn($q) => $q->where('category', $request->category))
    ->get();
    $categories = Book::$categories;

        return view("books.index",compact('books','searchTerm','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.create",[
    
            'categories'=>Book::$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title'=>'required|min:3',
            'authorName'=>"required|min:5",
            'email'=>"required|email",
            'ISBN'=>"required|string|min:10",
            'price'=>"required|numeric",
            'category'=>"required",
            'adress'=>'required',
            'file'=>'required|image| mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required'
        ]);
        if( $validate_data){
            $imagePath = $request->file('file')->store('images', 'public');

            Book::create([
                'title' => $validate_data['title'],
                'user_id'=> session('user_id'),
                'description' => $validate_data['description'],
                'ISBN' => $validate_data['ISBN'],
                'price' => $validate_data['price'],
                'authorName'=>$validate_data['authorName'],
                'adress' => $validate_data['adress'],
                'like' => 0,
                'dislike' => 0,
                'rating' => 0,
                'ImgPath' => $imagePath,
                'category' => $validate_data['category'],
            ]);
            
            return redirect()->back()->with(['book'=>'book added succefully ! ']);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        if (!Gate::allows('edit-Book',$book)) {
            abort(403,"you don't have permission to do this action");
        }
        return view("books.edit",['book'=>$book,
            'categories'=>Book::$categories
        ]);  

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validate_data = $request->validate([
            'title'=>'required|min:3',
            'authorName'=>"required|min:5",
            'email'=>"required|email",
            'ISBN'=>"required|string|min:10",
            'price'=>"required|numeric",
            'category'=>"required",
            'adress'=>'required',
            'file'=> 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required'
        ]);
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('books', 'public');
            $validatede_data['imgPath'] = $imagePath;
        }
        $book->update($validate_data);
          // 4. Redirect or return a response
         return redirect()->route('books.show', $book->id)->with('success', 'Book updated successfully!');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if (!Gate::allows('edit-Book',$book)) {
            abort(403,"you don't have permission to do this action");
        }
        if ($book->imgPath && \Storage::exists('public/' . $book->imgPath)) {
            \Storage::delete('public/' . $book->imgPath);
        }
        $book->delete();
        
        return redirect()->back();
        
    }
}
