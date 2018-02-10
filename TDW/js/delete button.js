$(document).ready(function(){
$('.delete').click(function(){
    var ID =  $(this).attr('id');

  jQuery.ajax({
        type: "POST",
        url: "delete.php",
        data:  {delete_id : del_id};
    }).done(function(result){
    if(result== "succes"){
        $('#succes').remove('tr');
        $('#succes').html("The account is deleted. ");

    }else {
        $('#error').empty();
        $('#error').html("An error has occurred. <br/> Try again! ");
    }
    });
  });

});