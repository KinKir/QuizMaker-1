@extends('../layout')
<!-- Start Search Input -->
@section('search')
<form class="left">
    <div class="input-field">
        <input id="search" type="search" required>
        <label for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
    </div>
</form>
@endsection
<!-- End Search Input -->
<!-- Start Side Nav Content -->
@section('side-nav')
<div class="sidebar-heading">Student</div>
<li><a href="/user/category" class=""><i class="sidebar-menu-icon material-icons left">search</i>Browse Category</a></li>
<li><a href="/user/takequiz" class=""><i class="sidebar-menu-icon material-icons left">dvr</i>Take Quiz</a></li>
<li><a href="/user/quizresult" class=""><i class="sidebar-menu-icon material-icons left">poll</i>Quiz Result</a></li>
<li><a href="/user/editaccount" class=""><i class="sidebar-menu-icon material-icons left">account_box</i>Edit Account</a></li>
<li><a href="/user/messages" class=""><i class="sidebar-menu-icon material-icons left">comment</i>Messages</a></li>
<li><a href="/user/logout" class=""><i class="sidebar-menu-icon material-icons left">lock_open</i>Log Out</a></li>
@endsection
<!-- End Side Nav Content -->
@section('content')
<div class="container">
    <div class="row" id="forstatistica">
        <div class="categories">
            <!--    /////////////////////////////// Start Choose Category /////////////////////////// -->
            <!-- Start Add Category Button -->
            <div class="col s12 m12">
                <a  href="/admin/addcategory" style="margin-bottom:10px;" class="waves-effect waves-light btn right"> <i class="material-icons right">playlist_add</i>Add Category</a>
            </div>
            <!-- End Add Category Button -->
            <!-- Start Style Category Design -->
            <div class="col s12 m12">
                <p class="btn-group right">
                    <a href="#" class="btn btn-white active"><i class="material-icons">list</i></a>
                    <a href="#" class="btn btn-white"><i class="material-icons">dashboard</i></a>
                </p>
            </div>
            <!-- End Style Category Design -->
            <div class="row">
                <div class="col s9 m9 left">
                    <div class="col s3 m3">
                        <div class="card-panel center">
                            <h4><strong>25</strong></h4>
                            <p class="grey-text darken-4"><strong>TOTAL</strong></p>
                        </div>
                    </div>
                    <div class="col s3 m3">
                        <div class="card-panel center">
                            <h4 class="green-text accent-4"><strong>3</strong></h4>
                            <p class="grey-text darken-4"><strong>CORRECT</strong></p>
                        </div>
                    </div>
                    <div class="col s3 m3">
                        <div class="card-panel center">
                            <h4 class="red-text lighten-2"><strong>5</strong></h4>
                            <p class="grey-text darken-4"><strong>WRONG</strong></p>
                        </div>
                    </div>
                    <div class="col s3 m3">
                        <div class="card-panel center">
                            <h4 class="blue-text lighten-2"><strong>17</strong></h4>
                            <p class="grey-text darken-4"><strong>LEFT</strong></p>
                        </div>
                    </div>
                    <div class="col s12 m12">
                        <form action="#">
                            <ul class="collection with-header">
                                <li class="collection-header">
                                    <h4 class="left"><strong>#9</strong></h4>
                                    <h4 class="quiz-title"id="question-title">Github command to deploy comits? </h4>
                                </li>
                                <li class="collection-item" id="collection-item">
                                    <p>
                                        <input name="group1" type="radio" id="test1" />
                                        <label for="test1" class="black-text">git push</label>
                                    </p>
                                </li>
                                <li class="collection-item blue-grey lighten-5">
                                    <div>
                                        <a class="btn white black-text" href="#">Skip</a>
                                        <button class="secondary-content btn waves-effect waves-light" id="ChangeQuestion" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col s3 m3 right sidebar-right">
                    <div class="sidebar-heading">
                        <p class="grey-text darken-4"><strong>TIME LEFT</strong></p>
                    </div>
                    
                       <div class="digits"></div>
                    
                    <div class="sidebar-heading">
                        <p class="grey-text darken-4"><strong>PENDING</strong></p>
                    </div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <span class="btn btn-floating grey circle">#9</span>
                            <span class="title">Github command to deploy comits?</span>
                        </li>
                        <li class="collection-item avatar">
                            <span class="btn btn-floating grey circle">#10</span>
                            <span class="title"> What's the difference between private and public repos?</span>
                        </li>
                        <li class="collection-item avatar">
                            <span class="btn btn-floating grey circle">#11</span>
                            <span class="title">What is the purpose of a branch?</span>
                        </li>
                        <li class="collection-item avatar">
                            <span class="btn btn-floating grey circle">#12</span>
                            <span class="title">Final Question?</span>
                        </li>
                    </ul>
                </div>
            </div>
    </div>

 <!--    Start End Statictica  -->
                <div class="col s7 m7 offset-m2 total-info">
                    <div class="col s12 m12 chart-view">
                        <div class="user">
                            <img src="/images/user.png" class="user-image">
                            <p class="user-name">Kenan</p>
                        </div>
                        <div id="chart" width="100%" height="300"></div>
                        <div class="legend">
                            <div class="item-legend correct">Correct: 3</div>
                            <div class="item-legend mistake">Mistake: 2</div>
                        </div>
                    </div>
                    <div class="col s12 m12 result-view" id="UrResult">
         
                    </div>
                     <div class="col s12 m12 result-view" id="UrScore">
        
                    </div>
                </div>
  <!--    End End Statictica  -->
            <!--    ///////////////////////////////End Choose Category /////////////////////////// -->
        </div>
    </div>
</div>


<script type="text/javascript">
$correctvariant=0;
$falsevariant=0;
$true_false=0;
$endscore=0;
$(document).ready(function(){
$innerquestionarraycount=-1
$questionsarray = new Array(); // Bu  Her Categorynin questionn id sini ozunde saxliyir
@foreach($questions as $question)
$questionsarray.push('{{$question->id}}');
@endforeach
$lengthquestionarray=$questionsarray.length;
console.log($lengthquestionarray);
});



$('#ChangeQuestion').click(function(){
$('.p').remove();
$('.input').remove();
$('label').remove();
$idandforcounter=0;
$innerquestionarraycount++;
$addanswercount=0;


console.log("nese:"+$innerquestionarraycount);  
console.log("test:"+$questionsarray.length)


if($innerquestionarraycount<$questionsarray.length)
{
$.getJSON("http://localhost:8000/question/"+$questionsarray[$innerquestionarraycount], function(data){  // 4-un yerine oz istenilen ID-ni qoya bilersen;
console.log(data);




//  //////////////////////////////// Start Add Question Part///////////////////////////////////
console.log("question-name:"+data['question']['question_name']);
var addquestiontext =  data['question']['question_name'];
document.getElementById("question-title").innerHTML=addquestiontext;
$limitanswer=0;
console.log("Answerarrayininlengthi:"+data['answers'].length)
$answerlength=data['answers'].length;
// //////////////////////////////// End Add Question Part /////////////////////////////////////




// //////////////////////////////// Start Add Answer Part //////////////////////////////////////
      while($limitanswer<data['answers'].length)
      {
         var answerparagraph     =    document.createElement('p');
         document.getElementById('collection-item').appendChild(answerparagraph);
         answerparagraph.className   =    "p";

         var answerinput         =    document.createElement("input");
         answerinput.className   =    "input";
         answerinput.type        =    "radio";
         answerparagraph.appendChild(answerinput);
         answerinput.setAttribute('id','answer'+$idandforcounter);
         answerinput.setAttribute('name','answer');
         answerinput.setAttribute('value',$addanswercount);

         var answerlabel         =    document.createElement("label");
         answerlabel.className   =    "label black-text";
         answerparagraph.appendChild(answerlabel);
         answerlabel.setAttribute('for','answer'+$idandforcounter);
         answerlabel.setAttribute('value',$addanswercount);

        var addanswertext        =    ( data['answers'][$addanswercount].desc);
        answerlabel.innerHTML=addanswertext
         
         $idandforcounter++;
         $limitanswer++;
         $addanswercount++;
         console.log('addanswercount:'+$addanswercount);

      }

         $('.label').click(function(){
          value = $(this).attr('value');
            if(data['answers'][value].true_false == 1)
            {
                $correctvariant++;
               $questionscore=data['question']['score_question'];
               $endscore=$endscore+$questionscore;

            }else{
               $falsevariant++
            }
            console.log("Your Score:"+$endscore);
            console.log("Correct:"+$correctvariant);
            console.log("False:"+$falsevariant);

            $(".label").off("click");
        })
// //////////////////////////////// End Add Answer Part /////////////////////////////////////////
});
}else{
   $('.categories').remove();

   var sendstatisticaform      =    document.createElement('form');
   sendstatisticaform.setAttribute('action','send/statistica');
   sendstatisticaform.setAttribute('method','POST');



   var sendstatisticainput     =    document.createElement('input');
   sendstatisticainput.setAttribute('value',$endscore);
   sendstatisticainput.setAttribute('name','statisctica');

   var sendstatisticabutton    =    document.createElement('button');
   sendstatisticabutton.className += " waves-effect waves-light btn";
   sendstatisticabutton.innerHTML= "Send!";
   sendstatisticabutton.setAttribute('value','Send');
   sendstatisticabutton.setAttribute('type','submit');
   sendstatisticabutton.setAttribute('class','right');

   document.getElementById('forstatistica').appendChild(sendstatisticaform);
   sendstatisticaform.appendChild(sendstatisticainput);
   sendstatisticaform.appendChild(sendstatisticabutton);
  

   $('.total-info').show();

            CanvasJS.addColorSet("greenShades",
                [//colorSet Array
                "#76A463",
                "#D86565"             
                ]);
            
            var chart = new CanvasJS.Chart("chart", {
                colorSet: "greenShades",
                backgroundColor: "transparent",
                theme: "theme2",
                animationEnabled: true, 
                animationDuration: 1000,
                data: [
                    {
                        type: "doughnut",
                        dataPoints: [
                            {
                                label: "correct",
                                y: $correctvariant
                                
                            },
                            {
                                label: "mistake",
                                y: $falsevariant
                            }
            ]
        }
        ]
            });
            chart.render();


 
document.getElementById('UrScore').innerHTML = "Your score is  "+$endscore+". !"


}
})

</script>




@endsection