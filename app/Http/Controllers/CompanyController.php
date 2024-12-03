<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{
    public function find()
    {
        request()->validate([
            'from' => 'required',
            'to' => 'required',

        ]);
        $from = strtolower(request('from'));
        $to = strtolower(request('to'));
        $locations = Location::with('companies')
            ->whereIn('location_name', [$from, $to])
            ->get();
        $companies = array();
        foreach ($locations as $location) {
            // $companies = $location->companies->pluck('company_name');
            $companies = $location->companies;
        }

        return view('companies', [
            'companies' => $companies,
        ]);
    }
    //
}
