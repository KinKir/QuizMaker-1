  // $( window ).load(function() {
  //       $(".register").show("slow","linear")
      
  //   });
  $(document).ready(function(){
  	 $(".register").show("slow","linear")
  	 $(".register-button").click(function(){
  	 	$(".register").hide();
  	 	$(".quiz").show("slow","linear");
  	 })
  	 $(".options").click(function(){
  	 	$(".answer .options").removeClass("clicked");
  	 	$(this).addClass("clicked");
  	 	$(".btns a:first").removeClass("blue-grey lighten-3")
  	 	$(".btns a:first").addClass("light-blue accent-4")
  	 })
  })