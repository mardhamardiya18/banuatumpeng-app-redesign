<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::query()->with('category');
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                Aksi
                            </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                    <form action="' . route('product.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '

                                    <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                                    <a href="' . route('product.edit', $item->id) . '" class="dropdown-item">Edit</a>
                                    </form>
                                </div>
                        </div>
                    </div>                
                ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('pages.admin.products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        Product::create($data);

        toast('Produk ' . $request->name . ' berhasil ditambahkan👍', 'success');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $product = Product::with('category')->findOrFail($id);

        return view('pages.admin.products.edit', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $request->all();
        $product = Product::findOrFail($id);

        $item['slug'] = Str::slug($request->name);

        $product->update($item);

        toast('Produk ' . $item['name'] . ' Berhasil Diupdate👍', 'success');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::findOrFail($id);

        $item->delete();

        toast('Produk ' . $item->name . ' Berhasil Dihapus', 'success');

        return redirect()->route('product.index');
    }
}
