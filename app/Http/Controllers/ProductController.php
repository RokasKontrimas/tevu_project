<?php

namespace App\Http\Controllers;

use App\Models\Product;


use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();

        return view('products', compact('data'));
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048'
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than :max characters.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least :min.',
            'image.image' => 'The file must be an image.',
            'image.max' => 'The file may not be greater than :max kilobytes.'
        ];

        $validatedData = $request->validate($rules, $messages);

        $product = new Product();
        $product->title = $validatedData['title'];
        $product->price = $validatedData['price'];
        // Upload and save the image, if provided
        $product->save();
        if ($request->hasFile('image')) {
            $image = $request->file('image');

    // dd($request->image->getClientOriginalName());

            // $imageName = $request->image->extension();

            // $imageName = $request->image->getClientOriginalName();


      // $product->image = $image->storeAs('public/products', $imageName);

            $path = $image->storeAs(
                'product_images',
                Str::slug($product->title) . "_" . $product->id . "." . $image->clientExtension(),
                'public'
            );
            $product->image = $path;

            // $product->image = $validatedData['image'];

            $product->save();
        }


        // dd($product);
        return redirect()->route('products.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */



    public function destroy(Product $product)
    {
         // $product = Product::find($id);

            // if (!$product) {
            //     return response()->json([
              //         'message' => 'Product not found'
          //     ], 404);
        // }

     // dd($product->image);
        if(Storage::disk('public')->exists($product->image)){
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
