$(document).ready(function(){
$('#submit').click(function(){
let form1 = $('#formulario1').val();
let form1 = $('#formulario2').val();
if(form1 == 'admin' && form2 == '123456'){
    return;
}else{
    return false;
}
});
});