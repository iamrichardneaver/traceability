
<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function show()
    {
        \$wallet = Auth::user()->wallet;
        return response()->json(\$wallet);
    }

    public function loadCredits(Request \$request)
    {
        \$wallet = Auth::user()->wallet;
        \$wallet->balance += \$request->amount;
        \$wallet->save();
        return response()->json(\$wallet);
    }
}
