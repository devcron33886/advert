<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class EmployerIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $institutions = Company::paginate(15);

        return view('employers.index', compact('institutions'));
    }
}
