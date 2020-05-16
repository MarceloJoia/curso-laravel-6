<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    // Criar um objeto de Request
    public function __construct(Request $request)
    {
        //dd($request);
        $this->request = $request;
        //$this->middleware('auth');
        /* $this->middleware('auth')->only([
            'create', 'store'
        ]); */
        /* $this->middleware('auth')->except([
            'index', 'show'
        ]); */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $teste2 = 321;
        $teste3 = [1,2,3,4,5];
        $products = ['TV','Geladeira','Forno','Sofá'];
        return view('admin.pages.products.index', compact('teste','teste2','teste3','products'));
    }

    /**
     * Show the form for creating a new resource.
     * Formulário
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     * Cadastro do produto
     * @param  App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        dd('OK');
        //dd($request->all())
        //dd($request->only(['name', 'description']));
        //dd($request->name);
        //dd($request->description);
        //dd($request->input('teste', 'Valor padrão'));
        //dd($request->except('_token', 'name'));
        //dd($request->file('photo')->isValid());
        if ($request->file('photo')->isValid()) {
            //dd($request->photo);
            //dd($request->photo->extension());
            //dd($request->photo->getClientOriginalName());
            //dd($request->file('photo')->store('products'));
            $nameFile = $request->name .'.'.$request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
        dd("Editar produto {{ $id }}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
