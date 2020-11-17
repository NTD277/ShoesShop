<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandPost as BrandPost;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $data['mess'] = $request->session()->get('mess');
        if (session('id')) {
            $data['brand'] = DB::table('brands')
                ->orderByDesc('status')
                ->get();
            return view('backend.brand.index', $data);
        }
        else {
            redirect(route('admin.login'));
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandPost $request,Brand $brand)
    {
        $nameBrand = $request->nameBrand;
        $slug = Str::slug($nameBrand, '-');
        $file = $request->file('image');
        $img = $file->getClientOriginalName();
        $check = Brand::Where('name',$nameBrand)->get();
        if ($check->all() == null){
            //co the create
            $dataInsert = [
                'name' => $nameBrand,
                'slug' => $slug,
                'status' => 1,
                'image' => $img,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
            ];
            $upload = $file->move('upload/image/brand',$img);
            if ($upload) {
                move_uploaded_file($img, 'upload/image/brand');
                $insert = $brand->insertDataBrand($dataInsert);
                $request->session()->flash('mess', 'Add successful');
                return redirect(route('admin.brand.index'));
            }
        }else{
            $request->session()->flash('mess', 'Add fail');
            return redirect(route('admin.brand.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data = DB::table('brands')
            ->where('status', 1)
            ->where('id',$id)
            ->get();
        foreach ($data as $key => $items)
        {
            $data['id'] = $id;
            $data['name'] = $items->name;
            $data['image'] = $items->image;
            $data['status'] = $items->status;
        }
        return view('backend.brand.edit',$data);
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
//        dd($id);
        $infoBrand = DB::table('brands')
            ->where('id',$id)
            ->first();
        if ($infoBrand) {
            $nameBrand = $request->nameBrand;
            $slugBrand = Str::slug($nameBrand, '-');
            $imageBrand = $infoBrand->image; // anh trc khi cap nhat
            $status = $request->statusBrand;
            $uploadImage = null;
            $newImage = null;
            if ($request->hasFile('imageBrand')) {
                if ($request->file('imageBrand')->isValid()) {
                    $file = $request->file('imageBrand');
                    $newImage = $file->getClientOriginalName();
                    $uploadImage = $file->move('upload/image/brand', $newImage);
                }
            }
            if ($uploadImage && $newImage){
                //xoa anh cu
                unlink(public_path('upload/image/brand' ) . "/" . $imageBrand);
                $update = DB::table('brands')
                    ->where('id' , $id)
                    ->update([
                        'name' => $nameBrand,
                        'slug' => $slugBrand,
                        'image' => $newImage,
                        'status' => $status,
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
            }
            else{
//                $request->session()->flash('editLogoBrand','Khong load duoc anh');
//                return redirect()->route('admin.brand.detail',['slug' =>$infoBrand->slug, ' id' => $id])
                $update = DB::table('brands')
                    ->where('id' , $id)
                    ->update([
                        'name' => $nameBrand,
                        'slug' => $slugBrand,
                        'image' => $imageBrand,
                        'status' => $status,
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
            }if ($update){
                $request->session()->flash('mess', 'Update thanh cong');
                return redirect()->route('admin.brand.index');
            }else{
                $request->session()->flash('mess', 'Update khong thanh cong');
                return redirect()->route('admin.brand.edit');
            }
        }else{
            return abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $update = DB::table('brands')
            ->where('id', $id)
            ->update([
                'status' => 0,
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
        if ($update) {
            $request->session()->flash('mess', 'Xóa thành công');
            return redirect()->route('admin.brand.index');
        }
        else{
            $request->session()->flash('mess', 'Xóa không thành công');
            return redirect()->route('admin.brand.index');
        }
    }
}
