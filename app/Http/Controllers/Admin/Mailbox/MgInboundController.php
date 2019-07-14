<?php

namespace App\Http\Controllers\Admin\Mailbox;

use App\Http\Controllers\Controller;
use App\Models\Mailbox;
use App\Models\Test;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Log;

class MgInboundController extends Controller
{
	public function store(Request $request){

	    app('log')->debug(request()->all());

        $mailbox = new Mailbox;
   		//$test->type = 'Sender';
   		//$test->value = $request->sender;

   		$mailbox->date = $request->Date;
   		$mailbox->mail_type = 'received';
   		$mailbox->mail_status = 'unread';
   		$mailbox->domain = $request->domain;
   		$mailbox->sender = $request->sender;
   		$mailbox->recipient = $request->recipient;
   		$mailbox->from = $request->From;
   		$mailbox->to = $request->To;




   		$mailbox->save();

   		/*$response = (new Client())->get($file['url'], [
		    'auth' => ['api', config('services.mailgun.secret')],
		]);*/

        return response()->json(['status' => 'ok']);

    	}

}
