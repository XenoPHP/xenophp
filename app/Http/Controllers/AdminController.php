<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessLog;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function logs()
    {
        return Inertia::render('Admin/Logs', [
            'logs' => AccessLog::latest()->paginate(50)
        ]);
    }
}
