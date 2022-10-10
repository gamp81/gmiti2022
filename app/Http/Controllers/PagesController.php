<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Session;
class PagesController extends Controller
{
    // public function index()
    // {
    //     return view('index');
    // }
    public function home()
    {
        return view('home');
    }
    public function enviomail(Request $request){
       //return $request;
        $data= request()->all();
        return  $data;
        try{
            Mail::to("gmitiweb@gmail.com")->send(new ContactoMail($data));
           
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
             Session::flash('message','El mensaje NO se envio correctamente');
        }else{
    
           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
           Session::flash('message','Enviado correctamente. Pronto responderemos su mensaje...');
        }
        
        //return back()->with('flash','Tu mensaje ha sido recibido !');
        return view('contacto');
        //return response()->json(compact('this'));
    }
}
