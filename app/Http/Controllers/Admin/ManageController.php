<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class ManageController extends Controller
{
    private $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function index()
    {
        $movies = $this->movie->paginate(10);

        return view('admin.manage.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Filme';

        $genres = ['acao', 'animacao', 'aventura', 'comedia', 'drama', 'fantasia', 'ficcao', 'romance', 'suspense', 'terror'];

        return view('admin.manage.create',compact('title','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega os dados do formulario
        $dataForm = $request->all();

        //Verifica se é um arquivo valido
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            //Cria o nome da imagem
            $name = $request->title.'-'.$request->year;

            //Pega a extensao
            $extenstion = $request->image->extension();

            //Cria o nome do arquivo de imagem
            $nameFile = "{$name}.{$extenstion}";

            $dataForm['image'] = $nameFile;

            $create = $request->image->storeAs('movies', $nameFile);
            
            if (!$create)
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer o upload da imagem');
        }

        //Faz o cadastro
        $insert = $this->movie->create($dataForm);

        if($insert)
            return redirect()
                        ->route('manage.index')
                        ->with('success', 'Novo Filme adicionado!');
        else
            return redirect()
                        ->route('manage.create')
                        ->with('error', 'Falha ao adicionar novo filme...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Recuperando o filme
        $movie = $this->movie->find($id);

        $title = "Filme: {$movie->title}";

        return view('admin.manage.show', compact('movie', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recuperando o filme
        $movie = $this->movie->find($id);

        $title = "Editar Filme: {$movie->title}";

        $genres = ['acao', 'animacao', 'aventura', 'comedia', 'drama', 'fantasia', 'ficcao', 'romance', 'suspense', 'terror'];

        return view('admin.manage.edit',compact('movie', 'title','genres'));
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
        //Recupera o Filme
        $movie = $this->movie->find($id);

        //Pega os dados do formulario
        $dataForm = $request->all();

        //Verifica se é um arquivo valido
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            if ($movie->image)
                $name = $movie->image;
            else
                $name = $request->title.'-'.$request->year;

            //Pega a extensao
            $extenstion = $request->image->extension();

            //Cria o nome do arquivo de imagem
            $nameFile = "{$name}.{$extenstion}";

            $dataForm['image'] = $nameFile;

            $upload = $request->image->storeAs('movies', $nameFile);
            
            if (!$upload)
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer o upload da imagem');
        }

        //Faz o cadastro
        $update = $movie->update($dataForm);

        if($update)
            return redirect()
                        ->route('manage.index')
                        ->with('success', 'Filme atualizado com sucesso');
        else
            return redirect()
                        ->route('manage.edit')
                        ->with('error', 'Falha ao atualizar filme...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Recupera o Filme
        $movie = $this->movie->find($id);

        //Deletando Filme
        $delete = $movie->delete();

        if($delete)
            return redirect()
                        ->route('manage.index')
                        ->with('success', 'Filme deletado com sucesso');
        else
            return redirect()
                        ->route('manage.show', $id)
                        ->with('error', 'Falha ao deletar filme...');
    }
}
