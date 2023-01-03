<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;


class ChuyendiController extends Controller
{
    public function index()
    {
        $data = DB::table('chuyendi')->get();
        return view('chuyendi.index', ['data' => $data]);
    }
    public function create()
    {
        return view('chuyendi.create');
    }
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        DB::table('chuyendi')->insert($data);

        return redirect()->route('index')->with('success', "Thanh cong roi ne!!");
    }
    public function edit($id)
    {
        // dd($id);
        $data = DB::table('chuyendi')->where('id', $id)->first();
        // dd($data);
        return view('chuyendi.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        DB::table('chuyendi')->where('id', $id)->update($data);

        return redirect()->route('index')->with('success', "Cap Nhat Thanh Cong!!");
    }

    public function delete($id)
    {
        DB::table('chuyendi')->where('id', $id)->delete();
        return redirect()->route('index')->with('success', "Xoa Thanh Cong!!");
    }

}