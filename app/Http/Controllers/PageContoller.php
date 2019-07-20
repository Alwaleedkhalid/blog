<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Form;
// use DB;

class PageContoller extends Controller
{
    public function index(){
        // $get = product::all();
        // dd($get);

        // $get_products_from_db = product::all();
        // return view('pages.index',compact('get_products_from_db'));

        $title = ' Welcome to Laravel';
        // //return view('pages.index', compact('title','$title')); @@@ \ .. another way to show your title**
        return view('pages.index')->with('title',$title);

    }

    public function about(){
        $title = 'About US';
        return view('pages.about')->with('title',$title); 
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web desian', 'Coding' ,'UML']
        );
        return view('pages.services')->with($data);
        // return view('pages.services', compact('data'));
    }

    public function insert_product(){
        // $table = array(
        //     'title' => 'Insert',
        //     'products' => ['nokia','apple','samsung'],
        //     'praices' => ['100','300','900']
        // );

        // $proudct = DB::select('SELECT * FROM proudct');

        // [orderby()] use it for show first insert [asc] .. last insert [desc] ..
        // $products = Product::orderby('id','desc')->get();

        // [dd()] use it for check DB ... 
        // dd();

        // $products = Product::all();

        // paginate() for small boxes to show .. 
        $products = Product::orderby('id','desc')->paginate(1);
        return view('product.insert_product')->with('products',$products);
    }
    public function store(Request $request)
    {
        $product = new Product;
        $data_from_form = $request->all();
        // $product->user_id = auth()->user()->id;
        // $product->save();
        Product::create($data_from_form);
        return redirect('insert_product');
    }
    public function index_F_P()
    {
         $product = Product::orderby('id','desc')->paginate(1);
         $form = Form::orderby('id','desc')->paginate(1);
        //  dd($form);
         return view ('form_product', compact('form','product'));
    }

    public function search()
    {
        //  $product = Product::all();
        //  $search = $product->search();

        // // $collection = collect([2, 4, 6, 8]);

        // $collection->search(8);
        
        // dd($collection);
        


        //  return view ('form_product', compact('search'));
    }



}