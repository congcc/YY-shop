<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;
use App\Http\model\user;

class VerificationController extends Controller
{
    //
    public function co(Request $request)            //发送验证码
    {   
        //获取手机号
    	$ph = $request->input('ph');

        //发送验证码
    	$config = config('alidayu');
		$code = rand(100000, 999999);
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
			session(['code'=>$code]);            //将验证码存放到session中
			echo 1;
		}
    }

    public function cos(Request $request)       //验证验证码
    {	
    	$co = session('code');             //获取存到session中的验证码
    	$cos = $request->input('cos');     //获取form表单填写的验证码
    	
        //判断是否一致
        if($cos==$co){ 
    		echo 1;
    	}else{
    		echo 0;
    	}
    }

    public function ph(Request $request)        //验证手机号是否存在
    {
        $ph = $request->input('ph');         //获取form表单填写的手机
        $res = user::where('phone',$ph)->get();            //在数据表中查询填写的手机号
        echo $res;              //返回查询结果
    }
}
