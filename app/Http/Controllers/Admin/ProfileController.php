<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('admin.profile.index');
    }

    public function edit()
    {
    	return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
    	$data = $request->all();

    	if ($data['password'] != null)
            $data['password'] = bcrypt($data['password']);
        else
            unset($data['password']);

    	$update = auth()->user()->update($data);

    	if ($update)
            return redirect()
                        ->route('admin.profile')
                        ->with('success', 'Sucesso ao atualizar!');
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar o perfil...');
    } 
}
