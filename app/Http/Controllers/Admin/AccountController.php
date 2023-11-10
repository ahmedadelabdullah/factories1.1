<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\Admin\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::paginate();
        return view('admin.pages.accounts.index' , compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts = Account::paginate();
        return view('admin.pages.accounts.add' , compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreAccountRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAccountRequest $request)
    {
        $account = [
          'name' => $request->name,
          'start_balance_status' => $request->start_balance_status,
            'start_balance' => 0,
            'current_balance' => $request->current_balance,
        ];
        Account::create($account);
        return redirect()->route('admin.accounts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($account)
    {
        $account_show = Account::findOrFail($account);
        return view('admin.pages.accounts.show' , ['account_show' => $account_show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($account)
    {
        $account_edit = Account::findOrFail($account);
        return view('admin.pages.accounts.edit' , ['account_edit' => $account_edit]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request,$account)
    {
        $account_update = Account::findOrFail($account);
//        dd($account_update);
        $account_update->update([
            'name' => $request->name,
            'start_balance_status' => $account_update->start_balance_status,
            'start_balance' => $account_update->start_balance,
            'current_balance' => $account_update->current_balance,
        ]);
//        Account::update($account);
        $accounts = Account::paginate();
        return view('admin.pages.accounts.index' , compact('accounts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($account)
    {
        $deleted_account = Account::findOrFail($account);
        $deleted_account->delete();
        $accounts = Account::paginate();
        return redirect()->route('admin.accounts.index' , compact('accounts'));
    }
}
