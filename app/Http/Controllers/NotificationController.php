<?php

namespace App\Http\Controllers;

use App\Models\NotificationSetting;

class NotificationController extends Controller
{
    public function index() {
        return NotificationSetting::all();
    }
}
