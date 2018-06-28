<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Cursos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Cursos::all();
        return view('alunos.form_aluno',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $aluno = new Alunos(); php atisan make:request
        Alunos::create($request->all());
//        $aluno->nome_aluno=$request->get('nome_aluno');
//        $aluno->curso=$request->get('curso');
//        $aluno->numero_maricula=$request->get('numero_maricula');
//        $aluno->semestre=$request->get('semestre');
//        $aluno->status=$request->get('status');
        //            return redirect('/login');
        return response()->json([
            'sucesso' => true,
            'message'=>'Cadastrado com sucesso',
            'redirect_to' => url('login')
        ]);
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
        $aluno = Alunos::find($id);
        return view('edit',compact('aluno','id'));
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
        Alunos::findOrFail($id)->update($request->all());
        return redirect('/');
        //return view('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alunos::destroy($id);
    }
}
