<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\model\user;

class VerificationController extends Controller
{
    //
    public function co(Request $request)            //发送验证码
    {   


/*$config = [
    'accessKeyId'    => 'LTAIbVA2LRQ1tULr',
    'accessKeySecret' => 'ocS48RUuyBPpQHsfoWokCuz8ZQbGxl',
];

$client  = new Client($config);
$sendSms = new SendSms;
$sendSms->setPhoneNumbers('1500000000');
$sendSms->setSignName('叶子坑');
$sendSms->setTemplateCode('SMS_77670013');
$sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
$sendSms->setOutId('demo');

print_r($client->execute($sendSms));*/

        //获取手机号
    	$ph = $request->input('ph');

        //发送验证码
    	$config = config('alidayu');
        /*$config = [
            'accessKeyId'    => 'LTAI2TNH8YaDnuSQ',
            'accessKeySecret' => 'eA9DXIT60xU6BBbX6xD3req12w5M0p',
        ];*/
		$code = rand(100000, 999999);
		$client  = new Client($config);
		$sendSms = new SendSms;
        $sendSms->setPhoneNumbers($ph);
        $sendSms->setSignName('高聪');
        $sendSms->setTemplateCode('SMS_110835182');
        $sendSms->setTemplateParam(['code' => $code]);
        $sendSms->setOutId('demo');
        $client->execute($sendSms);
		
		if($client->execute($sendSms)){
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
