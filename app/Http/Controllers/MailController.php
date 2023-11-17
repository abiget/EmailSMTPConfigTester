<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use App\Mail\DemoMail;
use App\Mail\TestEmail;

class MailController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()
    {
        $email = request('email');

        $mailData = [

            'title' => 'Test Email',

            'body' => 'This is for testing email using smtp.'

        ];



        try {
            Mail::to($email)->send(new TestEmail($mailData));
        } catch (\Throwable $th) {
            return redirect()->route('welcome', ['msg' => 'Cannot send the email!']);

        }




        return redirect()->route('welcome', ['msg' => 'You have successfully setup email configuration!']);
    }
}
