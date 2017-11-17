<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;

class CodesController extends Controller
{
    //
    public function co(Request $request)
    {
    	$ph = $request->input('ph');
    	/*echo $ph;*/
    	$config = config('alidayu');
		$code = rand(100000, 999999);


		// 使用方法一
		$client = new Client(new App($config));
		$req = new AlibabaAliqinFcSmsNumSend;

		$req->setRecNum($ph)
		    ->setSmsParam([
		        'number' => $code
		    ])
		    ->setSmsFreeSignName('兄弟连')
		    ->setSmsTemplateCode('SMS_75835101');

		$resp = $client->execute($req);
		if($resp->result->model){
			session(['code'=>$code]);
			echo 1;
		}
    }

    public function cos(Request $request)
    {	
    	$co = session('code');
    	$cos = $request->input('cos');
    	if($cos==$co){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
}
