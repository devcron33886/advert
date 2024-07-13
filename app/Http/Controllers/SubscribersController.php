<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreSubscriberRequest $request)
    {
        $subscriber = Subscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return to_route('faqs')->with('success', 'Thank you for subscribing to our newsletter.');
    }
}
