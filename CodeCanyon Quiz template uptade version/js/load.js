  // $( window ).load(function() {
  //       $(".register").show("slow","linear")
      
  //   });
  $(document).ready(function(){
     $questionvariantlistcount=-1;
     $questionlistcount=-1;
  	 $(".register").show("slow","linear")
  	 $(".register-button").click(function(){
  	 	$(".register").hide();
  	 	$(".quiz").show("slow","linear");
  	 })
  	 $(".options").click(function(){
  	 	$(".answer .options").removeClass("clicked");
  	 	$(this).addClass("clicked");
  	 	$(".btns a:first").removeClass("disabled")
  	 	$(".btns a:first").addClass("light-blue accent-4")
  	 })


  })