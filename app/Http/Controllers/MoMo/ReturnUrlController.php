<?php

namespace App\Http\Controllers\MoMo;

use App\Http\Controllers\Controller;
use App\Models\ReturnUrlModel;
use Illuminate\Http\Request;
use Session;

class ReturnUrlController extends Controller
{
    //
    public function index()
    {
        $data['secretKey'] = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        if (!empty($_GET)) {
            $data['partnerCode'] = $_GET['partnerCode'];
            $data['accessKey'] = $_GET['accessKey'] ?? null;
            $data['orderId'] = $_GET['orderId'] ?? null;
            $data['localMessage'] = utf8_encode($_GET['localMessage'] ?? null);
            $data['message'] = $_GET['message'] ?? null;
            $data['transId'] = $_GET['transId'] ?? null;
            $data['orderInfo'] = utf8_encode($_GET['orderInfo'] ?? null);
            $data['amount'] = $_GET['amount'] ?? null;
            $data['errorCode'] = $_GET['errorCode'] ?? null;
            $data['responseTime'] = $_GET['responseTime'] ?? null;
            $data['requestId'] = $_GET['requestId'] ?? null;
            $data['extraData'] = $_GET['extraData'] ?? null;
            $data['payType'] = $_GET['payType'] ?? null;
            $data['orderType'] = $_GET['orderType'] ?? null;
            $data['m2signature'] = $_GET['signature'] ?? null; //MoMo signature
            //Checksum
            $data['rawHash'] = 'partnerCode=' . $data['partnerCode'] . '&accessKey=' . $data['accessKey'] . '&requestId=' . $data['requestId'] . '&amount=' . $data['amount'] . '&orderId=' . $data['orderId'] . '&orderInfo=' . $data['orderInfo'] . '&orderType=' . $data['orderType'] . '&transId=' . $data['transId'] . '&message=' . $data['message'] . '&localMessage=' . $data['localMessage'] . '&responseTime=' . $data['responseTime'] . '&errorCode=' . $data['errorCode'] . '&payType=' . $data['payType'] . '&extraData=' . $data['extraData'];
            $data['partnerSignature'] = hash_hmac('sha256', $data['rawHash'], $data['secretKey']);
            $returnUrl = new ReturnUrlModel();
            $returnUrl->partnerCode = $data['partnerCode'];
            $returnUrl->orderId = $data['orderId'];
            $returnUrl->message = $data['message'];
            $returnUrl->transId = $data['transId'];
            $returnUrl->orderInfo = $data['orderInfo'];
            $returnUrl->amount = $data['amount'];
            $returnUrl->responseTime = $data['responseTime'];
            $returnUrl->requestId = $data['requestId'];
            $returnUrl->extraData = $data['extraData'];
            $returnUrl->payType = $data['payType'];
            $returnUrl->orderType = $data['orderType'];
            $returnUrl->save();
        }
        $returnUrl = ReturnUrlModel::where('orderId', $data['orderId'])->first();
        return view('main.momo.returnurl')->with('returnUrl', $returnUrl);
    }
}
