<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Logo;
use App\Models\About;
use App\Models\Partner;
use App\Models\Message;
use App\Models\Credential;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Rule;
use App\Models\Term;
class FrontendController extends Controller
{
    //
    public function index()
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['rule'] = Rule::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();
        $data['mission'] = Mission::orderBy('id', 'desc')->first();
        $data['vision'] = Vision::orderBy('id', 'desc')->first();

        $data['team'] = Team::orderBy('id', 'desc')->get();
        $data['partner'] = Partner::orderBy('id', 'desc')->get();
        $data['about'] = About::orderBy('id', 'desc')->first();
        $data['message'] = Message::orderBy('id', 'desc')->first();
    
        return view('frontend.home',$data);
    }

    public function team()
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();
        $data['team'] = Team::orderBy('id', 'asc')->get();
      
        return view('frontend.team',$data);
    }

    public function terms()
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();

        $data['terms'] = Term::orderBy('id', 'asc')->first();
        return view('frontend.term',$data);
    }

    public function gallery()
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();

        $data['gallery'] = Gallery::orderBy('id', 'desc')->get();
        return view('frontend.gallery',$data);
    }

    public function contact()
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();
        return view('frontend.contact',$data);
    }

    public function gallery_details($id)
    {
        # code...
        $data['slider'] = Slider::first();
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::orderBy('id', 'desc')->first();
        $data['contact'] = Contact::orderBy('id', 'desc')->first();

        $data['gallery_det'] = Gallery::find($id);
        return view('frontend.gallery-details',$data);
    }

}
