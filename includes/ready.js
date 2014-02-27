$(document).ready(function () {



  $('.description').hide();

  $('.work li a').on('click',function(e){
    if( $(this).siblings().is( ":hidden" )  ) {
      $('.description').hide();
      $(this).siblings().show();
    }
    else {
      $('.description').hide();
      $(this).siblings().hide();
    }
  });



  var not_visited_graph = true;
  var not_visited_tree = true;
  $('.contactFormBtn').on("click", function () {
    if ($('.contactFormBtn input [name="name"]').val() == "" ||
      $('.contactFormBtn input [name="email"]').val() == "" ||
      $('.contactFormBtn textarea [name="message"]').val() == "") {
      alert("Please fill out the form completely");
    } else {
        $(this).closest('form').submit();
    }
  });

  $(".main").onepage_scroll({
    sectionContainer: "section",
    loop: true,
    responsiveFallback: 800,
    keyboard:false,
    afterMove: function (index) {
      if (index == 2) {
        if (not_visited_tree) {
          not_visited_tree = false;
          setTimeout(function () {
            addToDepth(1);
            addToBreadth(1);
            setTimeout(function () {
              addToDepth(1);
              addToDepth(1);
              addToBreadth(1);
            }, 200);
          }, 100);
        }
      }
      else if (index == 3) {
        if (not_visited_graph) {
          not_visited_graph = false;
          setTimeout(function () {
            var repeatGraph = setInterval(function(){
              newGraph(nodes + 1);
              ++nodes;
              console.log(nodes);
              if(nodes > 21) {
                console.log("****");
                clearInterval(repeatGraph);
              }
            },100);

          }, 100);
        }
      }
    }
  });
});