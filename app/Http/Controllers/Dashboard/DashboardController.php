<?php

namespace App\Http\Controllers\Dashboard;

class DashboardController
{
    public function __invoke()
    {
        return view('dashboard.index');
    }
}
