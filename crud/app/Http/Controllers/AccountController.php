<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountPostRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountPostRequest $request):RedirectResponse
    {

        $validated = $request->validated();





        // $validate=$request->validate([
        //     'firstname'=>'required|max:50',
        //     'lastname'=>'required|max:50',
        //     'username'=>'required|max:50',
        //     'contact'=>'required|max:10',
        //     'email'=>'required|email|unique:users',
        //     'country'=>'required',
        //     'state'=>'required',
        //     'street'=>'required',
        //     'pincode'=>'required'
        // ]);

      
        $accounts = Account::create($request->all());
        $accounts->save();
        return redirect()->route('accounts.index')->with('status', 'user created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $account = Account::find($id);
        return view('accounts.edit', ['account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
        $account->update($request->all());
        return redirect()->route('accounts.index')->with('sucess', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
        $account->delete();
        return redirect()->route('accounts.index')->with('sucsess', 'deleted successfully');
    }
}
