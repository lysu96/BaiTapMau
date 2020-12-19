<?php

namespace App\Http\ctl_Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\ctl_Controller as Basectl_Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ctl_Controller extends Basectl_Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
}
