<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function index(){

        # tutti gli studenti
        //$students = Student::all();
        //dump($students);

        # i primi 10 studenti
        // $students = Student::limit(10)->get();
        // dump($students);

        # i primi 100 studenti ordinati per nome ascendente  e cognome discendente
        //$students = Student::orderBy('name')->orderBy('surname', 'desc')->limit(100)->get();

        # i primi 5 studenti che  si chiamano rocco
        //$students = Student::where('name','Rocco')->limit(5)->get();

        # i primi 5 studenti che  si chiamano rocco e hanno un ID > 74
        $students = Student::where('name','Rocco')->where('id','>',74)->limit(10)->get();
        //dump($students);

        # prendo il primo record
        // con first ottengo direttamente un oggetto mentre negli altri casi un array di oggetti
        //$my_student = Student::where('name','Rocco')->where('id','>',74)->limit(5)->first();
        //dump($my_student);
        //dd($my_student);

        # cerco lo studente con ID = 301 - anche find mi restituisce un singolo oggetto
        // find accetto solo l'id
        $my_student = Student::find(301);
        # i primi 5 studenti che non si chiamano rocco
        //$students = Student::where('name', '!=' ,'Rocco')->limit(5)->get();

        return view('student', compact('students','my_student'));
    }
}
