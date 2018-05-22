<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    use App\Models\Shoutbox;

public function store(Request $request) {
    $validator = Validator::make($request->all(), Shoutout::$rules);

    /**
     * Try validating the request
     * If validation failed
     * Return the validator's errors with 422 HTTP status code
    */
    if ($validator->fails())
    {
        return response($validator->messages(), 422);
    }

    $shoutout = Shoutout::create($request->only('mame', 'content'));

    // fire ShoutoutAdded event if shoutout successfully added to database
    event(new ShoutoutAdded($shoutout));

    return response($shoutout, 201);
}

}
