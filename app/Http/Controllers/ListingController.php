<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [ 'listings' => Listing::paginate(20) ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $listing = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'text' => 'required'
        ]);

        $listing['user_id'] = auth()->user()->id;

        Listing::create($listing);

        return redirect()->back()->with('listing_created', 'Listing created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', [ 'listings' => Listing::find($id) ] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', ['listings' => Listing::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $forms = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'text' => 'required'
        ]);

        $forms['user_id'] = auth()->user()->id;

        $listing->update($forms);

        return redirect()->back()->with('listing_updated', 'Listing updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect()->back();
    }
}
