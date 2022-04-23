<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $query = ProductGallery::with(['product']);
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-bs-toggle="dropdown">
                            Aksi
                        </button>
                        <div class="dropdown-menu">
                           
                            <form action="' . route('product-gallery.destroy', $item->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '

                            <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                            </form>
                        </div>
                        </div>
                    </div>                
                ';
                })
                ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height : 80px; border-radius: 10px"; />' : '';
                })
                ->rawColumns(['action', 'photos'])
                ->make(true);
        }

        return view('pages.admin.galleries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();

        return view('pages.admin.galleries.create', [
            'products' => $products,
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
        $item = $request->all();

        $item['photos'] = $request->file('photos')->store('assets/product', 'public');

        ProductGallery::create($item);

        toast('Galeri produk berhasil disimpan👍', 'success');

        return redirect()->route('product-gallery.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductGallery::with('product')->findOrFail($id);
        $url = $item->photos;
        Storage::disk('public')->delete($url);
        $item->delete();

        toast('Galeri ' . $item->product->name . ' Berhasil dihapus', 'success');

        return redirect()->route('product-gallery.index');
    }
}
