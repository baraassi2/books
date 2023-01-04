<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Publishers = Publisher::orderBy('id','desc')->paginate(5);
        return view('Publishers.index', compact('Publishers'));
    }
    public function create()
    {
        return view('Publishers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_publisher' => 'required',
        ]);

        Publisher::create($request->post());

        return redirect()->route('Publishers.index')->with('success','تم اضافة اسم ناشر جديد');
    }
    public function show(Publisher $Publisher)
    {
        return view('Publishers.show',compact('Publisher'));
    }
    public function edit(Publisher $Publisher)
    {
        return view('Publishers.edit',compact('Publisher'));
    }
    public function update(Request $request, Publisher $Publisher)
    {
        $request->validate([
            'name_publisher' => 'required',
        ]);

        $Publisher->fill($request->post())->save();

        return redirect()->route('Publishers.index')->with('success','تم تعديل اسم الناشر');
    }
    public function destroy(Publisher $Publisher)
    {
        $Publisher->delete();
        return redirect()->route('Publishers.index')->with('success','تم حذف اسم الكاتب');
    }
}
