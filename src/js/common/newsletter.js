$(document).ready(function() {
$("#newsletter").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "../newsletter.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
result = '<div class="notification_ok">Подписка успешно оформлена!</div>';
} else {
result = msg;
}
$('#newsletter-note').html(result).fadeIn().delay(2000).fadeOut("slow");

$("#newsletter-btn").on( "click", function() {

});
}
});
return false;
});
});