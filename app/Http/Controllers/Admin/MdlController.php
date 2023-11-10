<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Mdl;
use App\Http\Requests\StoreMdlRequest;
use App\Http\Requests\UpdateMdlRequest;

class MdlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Mdl::paginate();
        return view('admin.pages.models.index' , compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.models.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMdlRequest $request)
    {
//        dd($request->all());
        $models = [
            'description' => $request->description,
            'price' => $request->price,
            'materials' => $request->materials,
            'accessories' => $request->accessories,
            'colors' => $request->colors,
            'image' => $request->image,
        ];
        Mdl::create($models);
        return redirect()->route('admin.models.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mdl $mdl)
    {
        $mdl_show = Mdl::findOrFail($mdl);
        return view('admin.pages.models.show' , ['mdl_show' => $mdl_show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mdl $mdl)
    {
        $mdl_edit = Mdl::findOrFail($account);
        return view('admin.pages.models.edit' , ['mdl_edit' => $mdl_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMdlRequest $request, Mdl $mdl)
    {
        $model_update = Mdl::findOrFail($account);
//        dd($account_update);
        $model_update->update([
            'name' => $request->name,
            'start_balance_status' => $request->start_balance_status,
            'start_balance' => $request->start_balance,
            'current_balance' => $request->current_balance,
        ]);
//        Account::update($account);
        $models = Mdl::paginate();
        return view('admin.pages.models.index' , compact('models'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mdl $mdl)
    {
        $deleted_model = Mdl::findOrFail($account);
        $deleted_model->delete();
        $accounts = Mdl::paginate();
        return redirect()->route('admin.models.index' , compact('accounts'));
    }
}
