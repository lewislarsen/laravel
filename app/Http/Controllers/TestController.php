<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VanguardBackup\Vanguard\VanguardClient;

class TestController extends Controller
{
    public function __invoke(Request $request): void
    {
        $apiKey = 'RJaZoKxVYIODDBwgL2BZdtOpoHqvTg5EWBBfYmYV39cf1b37';

        $vanguard = new VanguardClient($apiKey);

        $user = $vanguard->backupTasks();

        dd($user);
    }
}
