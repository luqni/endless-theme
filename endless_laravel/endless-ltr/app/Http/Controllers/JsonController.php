<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use JavaScript;
use Response;

class JsonController extends Controller
{
    public function ajaxRequestPost(Request $request) {
       $hi = 'Hi How are You?';
      JavaScript::put([
        'hi' => $hi
      ]);
    }
}
