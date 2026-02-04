<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Kernel as SymfonyKernel;
use Cake\Core\Configure as CakeConfigure;

class WelcomeController extends Controller
{
    public function index()
    {
        $cakeVersion = class_exists(CakeConfigure::class) ? CakeConfigure::version() : 'N/A';
        $symfonyVersion = class_exists(SymfonyKernel::class) ? SymfonyKernel::VERSION : 'N/A';
        $ciVersion = defined('CI_VERSION') ? CI_VERSION : 'N/A';

        return view('welcome', [
            'laravelVersion' => app()->version(),
            'phpVersion' => PHP_VERSION,
            'cakeVersion' => $cakeVersion,
            'symfonyVersion' => $symfonyVersion,
            'ciVersion' => $ciVersion,
        ]);
    }
}
