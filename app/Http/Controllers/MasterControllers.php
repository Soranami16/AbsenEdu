<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Absen;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MasterControllers extends Controller
{

    public function indexUser()
    {
        $users = User::latest()->paginate(5);
        return view('master.masteruser.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function formUser()
    {
        $data = [];
        echo json_encode($data);
    }

    public function submitUser(Request $request)
    {
        $data = $request->all();
        $user = new User([
            'keterangan' => $data['keterangan'],
        ]);
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
        ]);
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return response()->json(['user' => $user]);
    }

    public function updateUser(Request $request, $id)
    {
        $data = $request->all();

        $user = User::find($id);
        $user->update([
            'keterangan' => $data['keterangan'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User Berhasil Dihapus!.',
        ]);
    }
    
    public function indexRole()
    {
        $roles = Role::latest()->paginate(5);
        return view('master.masterrole.index', compact('roles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function formRole()
    {
        $data = [];
        echo json_encode($data);
    }

    public function submitRole(Request $request)
    {
        $data = $request->all();
        $role = new Role([
            'namaRole' => $data['namaRole'],
        ]);
        $role->save();
        return response()->json([
            'success' => true,
            'message' => 'Role created successfully',
        ]);
    }

    public function editRole($id)
    {
        $role = Role::find($id);
        return response()->json(['role' => $role]);
    }

    public function updateRole(Request $request, $id)
    {
        $data = $request->all();

        $role = Role::find($id);
        $role->update([
            'namaRole' => $data['namaRole'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Role updated successfully',
        ]);
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json([
            'success' => true,
            'message' => 'Role Berhasil Dihapus!.',
        ]);
    }

    public function indexAbsen()
    {
        $absens = Absen::latest()->paginate(5);
        return view('master.masterabsen.index', compact('absens'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function formAbsen()
    {
        $data = [];
        echo json_encode($data);
    }

    public function submitAbsen(Request $request)
    {
        $data = $request->all();
        $absen = new Absen([
            'keterangan' => $data['keterangan'],
        ]);
        $absen->save();
        return response()->json([
            'success' => true,
            'message' => 'Absen created successfully',
        ]);
    }

    public function editAbsen($id)
    {
        $absen = Absen::find($id);
        return response()->json(['absen' => $absen]);
    }

    public function updateAbsen(Request $request, $id)
    {
        $data = $request->all();

        $absen = Absen::find($id);
        $absen->update([
            'keterangan' => $data['keterangan'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Absen updated successfully',
        ]);
    }

    public function deleteAbsen($id)
    {
        $absen = Absen::find($id);
        $absen->delete();

        return response()->json([
            'success' => true,
            'message' => 'Absen Berhasil Dihapus!.',
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('dktr.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'idDokter' => 'required',
    //         'namaDokter' => 'required',
    //         'tanggalLahir' => 'required',
    //         'spesialisasi' => 'required',
    //         'lokasiPraktik' => 'required',
    //         'jamPraktik' => 'required',
    //     ]);
    //     Dokter::create($request->all());
    //     return redirect()->route('dktr.index')->with('succes', 'Data Berhasil di Input');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Dokter $dktr)
    // {
    //     return view('dktr.show', compact('dktr'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Dokter $dktr)
    // {
    //     return view('dktr.edit', compact('dktr'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Dokter $dktr)
    // {
    //     $request->validate([
    //         'idDokter' => 'required',
    //         'namaDokter' => 'required',
    //         'tanggalLahir' => 'required',
    //         'spesialisasi' => 'required',
    //         'lokasiPraktik' => 'required',
    //         'jamPraktik' => 'required',
    //     ]);
    //     $dktr->update($request->all());
    //     return redirect()->route('dktr.index')->with('succes', 'Dokter Berhasil di Update');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Dokter $dktr)
    // {
    //     $dktr->delete();
    //     return redirect()->route('dktr.index')->with('succes', 'Dokter Berhasil di Hapus');
    // }
}
