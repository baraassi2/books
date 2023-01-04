<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Writers = Writer::orderBy('id','desc')->paginate(5);
        return view('Writers.index', compact('Writers'));
    }
    public function create()
    {
        return view('Writers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_writer' => 'required',
        ]);

        Writer::create($request->post());

        return redirect()->route('Writers.index')->with('success','تم اضافة اسم كاتب جديد');
    }
    public function show(Writer $Writer)
    {
        return view('Writers.show',compact('Writer'));
    }
    public function edit(Writer $Writer)
    {
        return view('Writers.edit',compact('Writer'));
    }
    public function update(Request $request, Writer $Writer)
    {
        $request->validate([
            'name_writer' => 'required',
        ]);

        $Writer->fill($request->post())->save();

        return redirect()->route('Writers.index')->with('success','تم التعدبل اسم الكاتب');
    }
    public function destroy(Writer $Writer)
    {
        $Writer->delete();
        return redirect()->route('Writers.index')->with('success','تم حذف اسم الكاتب');
    }
}
