<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::simplePaginate(5);

        return view('contact.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact =
            [
                'name'       =>       $request->name,
                'last_name'  =>       $request->last_name,
                'tell'       =>       $request->tell,
                'email'      =>       $request->email,
                'address'    =>       $request->address
            ];

        Contact::create($contact);

        return redirect()->action([ContactController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::where('id', $id)->get();

        if (!empty($contact)) {
            return view('contact.show')->with('contact', $contact);
        } else {
            return redirect()->action([ContactController::class, 'index']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::where('id', $id)->get();

        if (!empty($contact)) {
            return view('contact/edit')->with('contact', $contact);
        } else {
            return redirect()->action([ContactController::class, 'index']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->name = $request->name;
        $contact->last_name = $request->last_name;
        $contact->tell = $request->tell;
        $contact->email = $request->email;
        $contact->address = $request->address;

        $contact->save();

        return redirect()->action([ContactController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact, $id)
    {
        Contact::destroy($contact->id, $id);

        return redirect()->action([ContactController::class, 'index']);
    }
}
