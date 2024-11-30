<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function stopages($company)
    {
        $target_company = Company::findOrFail($company);
        $locations = $target_company->locations->pluck('location_name');
        return view('buses', [
            'locations' => $locations,
            'company' => $target_company->company_name,
        ]);
    }
}
