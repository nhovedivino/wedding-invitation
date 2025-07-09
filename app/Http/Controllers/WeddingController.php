<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;
use Illuminate\Support\Facades\Validator;

class WeddingController extends Controller
{
    public function index()
    {
        return view('wedding.invitation');
    }

    public function showRsvp()
    {
        return view('wedding.rsvp');
    }

    public function storeRsvp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'attending' => 'required|boolean',
            'relationship' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Rsvp::create($request->all());

        return back()->with('success', 'Thank you for your RSVP! We can\'t wait to celebrate with you.');
    }

    public function admin()
    {
        $rsvps = Rsvp::orderBy('created_at', 'desc')->get();
        return view('wedding.admin', compact('rsvps'));
    }
}
