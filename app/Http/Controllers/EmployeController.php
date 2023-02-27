<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true, 'employes' => Employe::all()], 200);
    }

    public function store(CreateRequest $request)
    {
        $employe = Employe::query()->create([
            'name'      => $request->name,
            'lastname'  => $request->lastname,
            'address'       => $request->address,
            'phone'     => $request->phone,
        ]);

        return response()->json(['success' => true, 'employe' => $employe], 201);
    }

    public function show(Employe $employe)
    {
        return response()->json(['success' => true, 'employe' => $employe], 200);
    }

    public function update(UpdateRequest $request, Employe $employe)
    {
        $data = $request->only('name', 'lastname', 'address', 'phone');
        $employe->update($data);

        return response()->json(['success' => true, 'employe' => $employe], 200);
    }

    public function destroy(Employe $employe)
    {
        $employe->delete();
        return response()->json([], 204);
    }
}
