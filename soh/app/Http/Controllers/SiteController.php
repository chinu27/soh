<?php
namespace App\Http\Controllers;
use Validator;
use App\Models\Shoutout;
use Illuminate\Http\Request;
use App\Events\ShoutoutAdded;
use App\Http\Controllers\Controller;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shoutouts = Shoutout::orderBy('created_at', 'desc')->paginate(5);
        return view('index', compact('shoutouts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       
        $shoutout = Shoutout::create($request->only('mame', 'content'));
        event(new ShoutoutAdded($shoutout));
        return response($shoutout, 201);
    }
}