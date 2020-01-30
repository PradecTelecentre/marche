<?php

namespace App\Http\Controllers;
use App\Marche;
use Illuminate\Http\Request;

class MarchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $current_date = new DateTime();
        $current_date->modify('-7 day');

        $products = Marche::orderBy('id', 'desc')->where('created_at', '>=', $current_date->format('Y-m-d H:i:s'))->paginate(4);
        return view('pages.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'title' => 'required',
            'images' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'number1' => 'required|min:9|max:9',
            'nom' => 'required',
            'prix' => 'required'

        ]);


        if ($request->hasFile('images')) {
            # code... recuperer le nom du fichier
            $filenameWithExt = $request->file('images')->getClientOriginalName();

            # recuperer le nom
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            # recuperer l'extension
            $extension = $request->file('images')->getClientOriginalExtension();
            #attribuer le nom a notre fichier
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            #telecharge l'image
            $destination = 'public/imagesItem'; // destination du ficher dans public/storage/files/epreuves
            $path = $request->file('images')->storeAs($destination, $fileNameToStore);
        } else {
            # code...

        }

        $item  = new Marche;

        $item->title = $request->title;
        $item->quantity = $request->quantity;
        $item->description = $request->description;
        $item->image = $fileNameToStore;
        $item->nom = $request->nom;
        $item->number1 = $request->number1;
        $item->number2 = $request->number2;
        $item->prix = $request->prix;

        $item->save();

        $products = Marche::orderBy('id', 'desc')->paginate(6);
        return redirect('/')->with('success', 'Votre article est ajouté');
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
        $products = Marche::find($id);
        return view('pages.about', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
