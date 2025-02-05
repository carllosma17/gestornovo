<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LicenseService;
use Illuminate\Support\Facades\Log;

class LicenseController extends Controller
{
    protected $licenseService;

    public function __construct(LicenseService $licenseService)
    {
        $this->licenseService = $licenseService;
    }

    public function index(Request $request)
    {
        return view('index');
    }

    public function statusDomain(Request $request)
    {
        $domain = $request->getHost();
        $result = $this->licenseService->checkStatus($domain);

        return response()->json($result);
    }

    public function verifyLicense(Request $request)
    {
        $domain = $request->input('domain');
        $license_key = $request->input('license_key');
        $result = $this->licenseService->activateLicense($domain, $license_key);

        if ($result['success']) {
            return redirect()->back()->with('success', $result['message']);
        } else {
            return redirect()->back()->withErrors(['license' => $result['message']]);
        }
    }

    public function ActiveModele(Request $request)
    {
        $domain = $request->input('domain');
        $license_key = $request->input('license_key');
        $result = $this->licenseService->activateModule($domain, $license_key);

        if ($result['success']) {
            return redirect()->back()->with('success', $result['message']);
        } else {
            return redirect()->back()->withErrors(['license' => $result['message']]);
        }
    }
public function fetchUpdates()
{
    $result = $this->licenseService->fetchUpdates();
    Log::info('fetchUpdates', (array) $result->getData(true));

    return response()->json($result);
}

public function startUpdate(Request $request)
{
    $result = $this->licenseService->startUpdate($request);

    return response()->json($result);
}
public function extractAndUpdate(Request $request)
{
    $version = $request->input('version');

    $result = $this->licenseService->startUpdate($request);

    return response()->json($result);
}
}