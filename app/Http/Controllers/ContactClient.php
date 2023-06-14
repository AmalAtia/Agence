<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactClient extends Controller
{

    /** Contact client **/
    public function index()
    {
        
        return view('FrontendClient.contactclient');
    }

    public function store(Request $request){
        $rules = array([
            'nom' => 'required',
            'email' => 'required',
            'subject' => '',
            'commentaire' => 'required',
        ]);

        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->commentaire = $request->commentaire;

        $contact->save();

        //return view('FrontendClient.contactclient');
        return back()->with('success','Votre message a étè bien envoyée');
    }

        /**Contact Admin**/
        public function liste() {
            $contacts = Contact::all();
            return view('contact.index',compact('contacts'));
        }
        public function destroy($id) {
            $contact = Contact::find($id);
            $contact->delete();
            return redirect()->route('contact.index')->with('success', 'Contact supprimé avec succés');
        }

        public function show($id) {
            $contact = Contact::find($id);
            return view('contact.show' , compact('contact'));
        }
}