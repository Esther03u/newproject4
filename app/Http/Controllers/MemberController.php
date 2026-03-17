<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        return '<h1>Member Page</h1>';
    }

    function all()
    {
        $members = DB::select("SELECT * FROM member4");
        return $members;
    }

    function show($id)
    {
        $data['result'] = DB::select("SELECT * FROM member4 WHERE id = ?", [$id]);
        return view('member_show', $data);
    }

    function insert()
    {
        return view('member_insert');
    }

    function insert2(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');

        DB::insert("INSERT INTO member4 (fname, lname, address) VALUES (?, ?, ?)", [$fname, $lname, $address]);
        return redirect('/member/list');
    }


    function member_list()
    {
        $data['result'] = DB::select("SELECT * FROM member4");
        return view('member_list', $data);
    }

    function update($id)
    {
        $data['result'] = DB::select("SELECT * FROM member4 WHERE id = ?", [$id]);
        return view('member_update', $data);
    }

    function update2(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $id = $request->input('id');

        DB::update("UPDATE member4 SET fname = ?, lname = ?, address = ? WHERE id = ?", [$fname, $lname, $address, $id]);
        return redirect('/member/list');
    }

    function delete($id)
    {
        DB::delete("DELETE FROM member4 WHERE id = ?", [$id]);
        return redirect('/member/list');
    }
}
