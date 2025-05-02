function searchOnFocus(field)
{
    if(field.value=='Tìm kiếm'){
        field.value = '';
    }
}

function searchOnBlur(field)
{
    if(field.value==''){
        field.value='Tìm kiếm';
    }
}
function checkValue1(){
    if(Trim($("#txtKey").val())=='Tìm kiếm'||Trim($("#txtKey").val())==''){
        var txtkey = document.getElementById("txtKey");
        alert("Vui long nhap tu khoa tim kiem!");
        txtkey.focus();
        return false;
    }
    else{
        window.location = $("#hid_catid").val()+"?s="+$("#txtKey").val();
        return true;
    }
}
function enterClick(ev) {
    if (ev.keyCode == 13) {
        if(Trim($("#txtKey").val())=='Tìm kiếm'||Trim($("#txtKey").val())==''){
            var txtkey = document.getElementById("txtKey");
            alert("Vui long nhap tu khoa tim kiem!");
            txtkey.focus();
            return false;
        }
        else{
            window.location = $("#hid_catid").val()+"?s="+$("#txtKey").val();
            return true;
        }
    }
    return;
}