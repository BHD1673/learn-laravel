<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmMail;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class OrderController extends Controller
{
    public function index() {}

    public function create() {

        $email_nguoi_nhan = 'duongbhph41427@fpt.edu.vn';
        Mail::to($email_nguoi_nhan)->send(new ConfirmMail($ThongTinSanPhams));
    }
}
