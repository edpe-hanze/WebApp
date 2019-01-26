$( document ).ready(function() {

//hide the div containing the graph

//specify active div
$(".gageli").addClass('active');

//depending which link you click you hide on of the divs and specify which is active
$(".gage").click(function(){
  $(".gageli").addClass('active');
  $(".graphli").removeClass('active');
  $("#graph_div").hide();
  $("#gage_div").show();
  return false;
});

$(".graph").click(function(){
  $(".graphli").addClass('active');
  $(".gageli").removeClass('active');
  $("#gage_div").hide();
  $("#graph_div").show();
  return false;
});

});
