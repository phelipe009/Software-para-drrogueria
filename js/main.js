$(document).ready(function(){
$('#search').keyup(function(e){
e.preventDefault();
let data = $('#form').serializeArray();

$.post({
    url:'actions.php',
    data:data,
    success: function(response){
        $('#response').html(response);
    }
})
})
});