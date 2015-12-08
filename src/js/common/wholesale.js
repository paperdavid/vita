$(document).ready(function() {
$("#wholesale").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "../wholesale.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
result = '<div class="notification_ok">Сообщение успешно отправлено!</div>';
} else {
result = msg;
}
$('#wholesale-note').html(result).fadeIn().delay(2000).fadeOut("slow");

$("#wholesale-btn").on( "click", function() {

});
}
});
return false;
});
});