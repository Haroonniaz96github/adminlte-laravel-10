<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roznamcha;
use App\Models\user;
use App\Http\Requests\StoreRoznamchaRequest;

class RoznamchasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roznamchas = Roznamcha::with('user')->orderBy('created_at', 'desc')->paginate(10);
        $users = User::pluck('name', 'id');
        $totalNames = ['total' => 'Total', 'name' => 'Name'];
        $countries = ['total' => 'Total', 'name' => 'Name'];
        return view('roznamchas.index', compact('roznamchas', 'users', 'totalNames'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        $totalNames = ['total' => 'Total', 'name' => 'Name'];
    
        return view('admin.roznamchas.create', compact('users', 'totalNames'));
        // $users = User::get();
        // return view('admin.roznamchas.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoznamchaRequest $request)
    {
        $validatedData = $request->validated();

        
        $roznamcha = new Roznamcha();
        $roznamcha->fill($validatedData);
        $file = $request->file('image');
        $file_path = 'images';
        
        if ($file) {
            $path = uploadFile($file, $file_path);
            $roznamcha->image = $path;
        }
        $roznamcha->save();
        // Upload and attach the image (if needed)
        

        return redirect()->route('roznamchas.index')->with('success', 'Roznamcha created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
