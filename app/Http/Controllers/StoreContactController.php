<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class StoreContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return to_route('contact.index')->with('success', 'Your message has been sent we will get back to you shortly');
    }
}
