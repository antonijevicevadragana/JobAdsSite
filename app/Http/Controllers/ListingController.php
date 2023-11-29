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
        //
        
        return view('listings.index', [
            // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
             'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formFilds = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'tags'=>'required',
            'location'=>'required',
            'email'=>['required' ,'email'],
            'website'=>'nullable',
            'description'=>'required',
            'logo'=>'image'
        ]);

        $formFilds['user_id']=auth()->id();

        if ($request->hasFile('logo')) {
            $formFilds['logo'] = $request->file('logo')->store('img', 'public'); //ako ima slike da se cuva u img u public folderu(store)
        }
        Listing::create($formFilds);


        session()->flash('alertType', 'success');
        session()->flash('alertMsg', 'Listing crated successfully!');

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
        return view('listings.edit', ['listing'=>$listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //make sure login user is owner
        // if ($listing->user_id !=auth()->id()) {
        //     abort(403);
        //     # code...
        // }

        $formFilds = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'tags'=>'required',
            'location'=>'required',
            'email'=>['required' ,'email'],
            'website'=>'nullable',
            'description'=>'required',
            'logo'=>'image'
        ]);

        if ($request->hasFile('logo')) {
            $formFilds['logo'] = $request->file('logo')->store('img', 'public'); //ako ima slike da se cuva u img u public folderu(store)
        }
       $listing->update($formFilds);

      session()->flash('alertType', 'success');
      session()->flash('alertMsg', 'Listing updated successfully!');

       // return back()->with('message', 'Listing updated successfully!');
       return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
        $listing->delete();
       
       session()->flash('alertType', 'success');
       session()->flash('alertMsg', 'Listing deleted successfully!');
        return redirect('/');
    }


    public function manage() {
        return view('listings.manage', ['listings'=> auth()->user()->listings()->get()]);
    }
}
