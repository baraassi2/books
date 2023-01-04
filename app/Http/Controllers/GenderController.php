<?php

namespace App\Http\Controllers;
use App\Models\gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $genders = gender::orderBy('id','desc')->paginate(5);
        return view('genders.index', compact('genders'));
    }
    public function create()
    {
        return view('genders.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        gender::create($request->post());

        return redirect()->route('genders.index')->with('success','تم اضافة ');
    }
    public function show(gender $gender)
    {
        return view('genders.show',compact('gender'));
    }
    public function edit(gender $gender)
    {
        return view('genders.edit',compact('gender'));
    }
    public function update(Request $request, gender $gender)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $gender->fill($request->post())->save();

        return redirect()->route('genders.index')->with('success','تم تعديل  ');
    }
    public function destroy(gender $gender)
    {
        $gender->delete();
        return redirect()->route('genders.index')->with('success','تم حذف ');
    }
}
