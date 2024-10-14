<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers() {
        // Fetch users data
        $users = User::all();
    
        // Fetch all available fingerprint IDs
        $allFingerprintIds = DB::table('fingerprint_id')->pluck('fingerprint_id');

        $allfaceids = DB::table('new_face_id')->pluck('new_face_id');
    
        // Get the used fingerprint IDs from the 'users' table
        $usedFingerprintIds = User::pluck('fingerprint_id')->toArray();
    
        // Filter out the used fingerprint IDs
        $availableFingerprintIds = $allFingerprintIds->diff($usedFingerprintIds);

        $usedfaceids = User::pluck('new_face_id')->toArray();

        $availablefaceids = $allfaceids->diff($usedfaceids);
    
        // Pass both $users and filtered $availableFingerprintIds to the 'admin.registration' view
        return view('admin.registration', [
            'users' => $users,
            'fingerprintIds' => $availableFingerprintIds,
            'faceids' => $availablefaceids
        ]);
    }

    public function showStaff() {
        // Fetch users data
        $users = User::all();
        
        // Pass the $users data to the 'admin.staff_registration' view
        return view('admin.staff_registration', ['users' => $users]);
    }
}  
