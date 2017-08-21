<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Mail;

class AboutController extends Controller {

    public function detailsOfBranch($name, $location, $phone, $moderator) {

        return view('about.detailsofbranches', compact('name', 'location', 'phone', 'moderator'));
    }

    public function person() {

        return view('about.personofmonth');
    }

    public function moreaboutcrc() {


        return view('about.moreaboutcrc');
    }

    public function tahkem() {


        return view('about.tahkem');
    }

    public function agraya() {
        $teachers = Teacher::limit(3)->get();

        return view('about.agraya', compact('teachers'));
    }

    public function momyzat() {
        $teachers = Teacher::limit(3)->get();

        return view('about.momyzat', compact('teachers'));
    }

    public function branches() {


        $teachers = Teacher::limit(3)->get();

        return view('about.branches', compact('teachers'));
    }

    public function astshara(Request $request) {

        $name = $request->get('name');
        $telephone = $request->get('telephone');
        $email = $request->get('email');
        $country = $request->get('country');
        $astshara = $request->get('astshara');

        Mail::send('template.astshara', ['name' => $name, 'telephone' => $telephone, 'email' => $email, 'country' => $country, 'astshara' => $astshara], function($message) use ($name, $telephone, $email, $country, $astshara) {

            $message->from('crc@info.com', 'Publisher');
            $message->to('SALLY.NADER.AHMED@hotmail.com', 'sally')->subject('استشارة قانونية');
        });


        return redirect()->back();
    }

    public function suggestion(Request $request) {




        $name = $request->get('name');

        $suggestion = $request->get('suggestion');

        Mail::send('template.suggestion', ['name' => $name, 'suggestion' => $suggestion], function($message) use ($suggestion, $name) {

            $message->from('crc@info.com', 'Publisher');
            $message->to('SALLY.NADER.AHMED@hotmail.com', 'sally')->subject('مقترح جديد');
        });


        return redirect("/")->withMessage('...لقد تم أرسال الأقتراح و سيتم مراجعته');
    }

    public function dwlya() {

        $teachers = Teacher::limit(3)->get();



        return view('about.dwlya', compact('teachers'));
    }

}
