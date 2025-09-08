<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(50); 

        return view('admin.contact.index', compact('messages'));
    }
}
