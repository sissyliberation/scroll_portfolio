$(document).ready(function () {

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
                    setTimeout(function () {
                        addToDepth(1);
                        addToBreadth(1);
                        setTimeout(function () {
                            addToDepth(1);
                            addToDepth(1);
                            addToBreadth(1);
                            not_visited_tree = false;
                        }, 200);
                    }, 100);
                }
            }
            else if (index == 3) {
                if (not_visited_graph) {
                    setTimeout(function () {
                        newGraph(nodes + 1);
                        setTimeout(function () {
                            newGraph(nodes + 1);
                            setTimeout(function () {
                                newGraph(nodes + 1);
                                not_visited_graph = false;
                            }, 200);
                        }, 200);
                    }, 100);
                }
            }
        }
    });
});