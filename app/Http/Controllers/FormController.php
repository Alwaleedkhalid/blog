<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Form;
use DB;

// use App\Product;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $form = Form::orderby('id','desc')->paginate(2);
        // $form =  Form::orderby('id','asc')->get();

        // $product = Product::orderby('id','desc')->paginate(2);
        // return view('form')->with('form',$form);
        $form =  Form::orderby('id','desc')->get();
        // $product =  Product::all();
        return view ('form', compact('form'));
    }

    /**
    * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $forms = Form::all();
        // $products = Product::all();
        // return view('create', compact('forms'));
        // $product =  Product::find($id);
        // $form =  Form::all();
        // return view ('show', compact('form'));
        return view ('create', compact('form'));
        // dd('form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_from_form = $request->all();
        // dd($data_from_form);
        // dd($data_from_form);
        Form::create($data_from_form);
        // Product::create($data_from_form);
        return redirect('form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $form =  Form::find($id);
        // $product =  Product::find($id);
        // return view ('show', compact('form'));
        // dd($form);
        return view ('show', compact('form'));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form =  Form::find($id);
        return view ('edit', compact('form','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $form =  Form::find($id);
        $this->validate($request, [
            'fn' => 'required',
            'ln' => 'required'
        ]);
        $form =  Form::find($id);
        $form->fn = $request->get('fn');
        $form->ln = $request->get('ln');
        $form->save();
        // $data_from_form = $request->get();
        // dd($data_from_form);
        // Form::create($data_from_form)->update();
        return redirect('form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form =  Form::find($id);
        $form->delete();
        return redirect('form');
    }
    
}
