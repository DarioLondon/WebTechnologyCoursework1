$(document).ready(function() {

    
    $("a.reply").click(function(e) {
        e.preventDefault();
        //Retrive data Attribute from the Link
        $id = $(this).data('id');
        //Targeting the form to show it 
        $("#form-" + $id).toggle();
    });





});