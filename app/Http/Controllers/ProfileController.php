
<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        \$profile = Auth::user()->profile;
        return response()->json(\$profile);
    }

    public function update(Request \$request)
    {
        \$profile = Auth::user()->profile;
        \$profile->update(\$request->all());
        return response()->json(\$profile);
    }
}
