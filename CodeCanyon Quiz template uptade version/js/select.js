$(document).ready(function(){
	$selectdisabled=$(".btns a:first").attr("class").split(' ')[4];
        $(".btns a:first").click(function(){
        	$selectdisabled=$(".btns a:first").attr("class").split(' ')[4];
	if($selectdisabled=="disabled"){
		alert("fuck you")
		}
		else{
      $questionlistcount=$questionlistcount+1;
      $questionvariantlistcount=$questionvariantlistcount+1;
    console.log($questionlistcount)
	$(".question").html($questionlist[$questionlistcount])
    $(".question1").html($questionvariantlist[$questionvariantlistcount][0])
	$(".question2").html($questionvariantlist[$questionvariantlistcount][1])
	$(".question3").html($questionvariantlist[$questionvariantlistcount][2])
	$(".question4").html($questionvariantlist[$questionvariantlistcount][3])
		$(".answer .options").removeClass("clicked");
		$(".btns a:first").addClass("disabled")
		
}
})
    
})