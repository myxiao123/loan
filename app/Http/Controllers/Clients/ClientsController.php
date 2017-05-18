<?php
/**
 * Created by PhpStorm.
 * User: PC-xiao
 * Date: 2017-5-14
 * Time: 0:59
 */

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use Validator;

class ClientsController extends Controller
{
    public function setClientsData(Request $request) {
        if($request->isMethod('post')) {
            //验证
            $this->validate($request, [
                'username'  => 'required',
                'telephone' => 'required|distinct|digits:11',
                'total'     => 'required|min:0',
                'type'      => 'required|array',
                'type.*'    => 'required|between:1,5'
            ]);

            $input = $request->only([
                'username',
                'telephone',
                'total',
                'type',
            ]);
            //提交数据
            $client = new Client;
            $client->username   = $input['username'];
            $client->telephone  = $input['telephone'];
            $client->total      = $input['total'];
            $client->type       = implode(',', $input['type']);
            if($client->save()) {
                return view('front.success');
            }else {
                return redirect('/');
            }
        }
    }

    public function getClientsData() {
        //取数据
        $clients = Client::where('delete',0)->get();
        foreach($clients as &$v) {

            $types =  explode(',', $v->type);
            $res   =  [];

            foreach($types as $value) {
                $res[] = Client::$type[$value];
            }
            $v->type = implode(',',$res);
        }
        return view('back.clientslist', ['data' => $clients]);
    }
}