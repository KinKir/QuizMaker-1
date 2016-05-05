<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;

use App\Categories;

use App\Answers;

use App\Questions;

class UserAnswerQuizController extends Controller
{
     public function index($id)
   {
   	   $categories=Categories::all();
   	   $questions=Questions::where('category_id', $id)->get();
   	   $answers=Answers::all();

   	 	return view("user.questions",compact('questions','categories'));
   }

   public function listing(){
	  $questions = Questions::all();

	  return Response::json($questions);

	}

	   public function question($id)
   {
   	$question = Questions::find($id);
   	$answers = $question->answers;
     
  	return Response::json(array('question'=>$question,'answers'=>$answers));
   	// return response()->json(['questions'=>$questions->toArray()]);
   }
}
