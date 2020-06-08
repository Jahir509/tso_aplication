/*var checkbox = document.getElementById('is_active_');
if(checkbox.checked == true){
    document.getElementById('is_active').value = 1;
}
else{
    document.getElementById('is_active').value = 0;
}
*/
setTimeout(function () {
    document.getElementById('hideMe').style.display='none';
}, 3000);

function test(){
    var checkbox = document.getElementById('is_active_');
    var data =  document.getElementById('is_active').value;
    if(checkbox.checked == true){
        data = document.getElementById('is_active').value = 1;
    }
    else{
        data = document.getElementById('is_active').value = 0;
    }
    console.log(data);

}

var data=document.getElementById('is_active').value;
if(data == 1){
    document.getElementById('is_active_').checked = true;
}
else{
    document.getElementById('is_active_').checked = false;
}





