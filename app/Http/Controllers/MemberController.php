<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required|in:L,P',
        ]);

        $member = new Member([
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'phone' => $request->get('phone')
        ]);
        $member->save();

        return redirect()->route('home')
        ->withstatus('Berhasil tambah member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('member.edit', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
         $result = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required|in:L,P',
        ]);

        $member->name =  $request->get('name');
        $member->gender = $request->get('gender');
        $member->phone = $request->get('phone');
        $member->save();

        return redirect()->route('home')
        ->withstatus('Berhasil edit member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        
        return redirect()->route('home')
        ->withstatus('Berhasil hapus member');
    }
}
