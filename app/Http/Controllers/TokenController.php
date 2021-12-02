<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index(){
        $tokens = Token::all();
        return view('admin', ['tokens' => $tokens]);
    }

    public function new(Request $request){
        $token = new Token;

        $token->customer = $request->customer;
        $token->token = $request->token;
        $token->edit_token = $request->edit_token;
        $token->save();

        // QrCode::size(500)
        // ->format('png')
        // ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

        return redirect ('/jyoganteng');
    }

    public function edit($token, $edit_token){
        $token = Token::where('token', '=', $token)->firstOrFail();

        if($token->edit_token == $edit_token){
            return view('edit',['token' =>$token]);
        }
    }

    public function update($token, $edit_token, Request $request){
        $tokenNew = Token::where('token', '=', $token)->firstOrFail();

        $tokenNew->template = 1;
        $tokenNew->title = $request->title;
        $tokenNew->description = $request->description;
        $tokenNew->drive = $request->drive;

        $file = $request->file('file');
        $path = 'videoCust';
        $nama_file = time()."_".$file->getClientOriginalName();


        $file->move($path,$nama_file);

        $tokenNew->video = $nama_file;

        $tokenNew->save();
        
        return redirect ('/editimage/'.$token.'/'.$edit_token);
    }

    public function editimage($token, $edit_token){
        $tokenNew = Token::where('token', '=', $token)->firstOrFail();

        $images = Image::where('id_token', '=', $tokenNew->id)->get();

        return view('editimage',['images' =>$images, 'token' =>$token, 'edit_token' =>$edit_token]);
    }

    public function updateimage($token, $edit_token, Request $request){

        $tokenNew = Token::where('token', '=', $token)->firstOrFail();

        $image = new Image();

        $image->id_token = $tokenNew->id;
        $image->image = $request->customer;
        $image->title = $request->title;
        $image->description = $request->description;

        $file = $request->file('file');
        $path = 'imageCust';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($path,$nama_file);

        $image->image = $nama_file;

        $image->save();
        
        return redirect ('/editimage/'.$token.'/'.$edit_token);
    }
}
