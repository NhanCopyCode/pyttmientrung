/*---------------------------------------------------------------------------*/
function getDateClient(para) {
    var d = new Date();
    var y = parseInt(d.getYear());
    y %= 100;
    if (y < 10) y = "0" + y;
    if (para == "en") {
        var weekday 	= ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        var monthday 	= ['January','February','March','April','May','June','July','August','September','October','November','December'];
        document.getElementById("spnDate").innerHTML = "<b>" + weekday[d.getDay()] + "</b>,&nbsp;" + monthday[d.getMonth()] + "&nbsp;" + d.getDate() + ",&nbsp;" + "20" + y;
    } else {
        var weekday 	= ['Ch&#7911; nh&#7853;t','Th&#7913; hai','Th&#7913; ba','Th&#7913; t&#432;','Th&#7913; n&#259;m','Th&#7913; s&aacute;u','Th&#7913; b&#7843;y'];
        var monthday 	= ['01','02','03','04','05','06','07','08','09','10','11','12'];
        document.getElementById("spnDate").innerHTML = "<b>" + weekday[d.getDay()] + "</b>,&nbsp;ng&agrave;y&nbsp;" + d.getDate() + "/"  + monthday[d.getMonth()] + "/" + "20" + y;
    }
}

function showImage(url) {
    var img = new Image();
    img.src = url;
    w = img.width;
    h = img.height;
    t=(screen.availHeight - h)/2;
    l=(screen.availWidth - w)/2;
    window.open(url,"","width=" + (w + 20)+ "px,height=" + (h + 20)+ ",top=" + t +"px,left=" + l + "px,resizable=0,status=0,scrollbars=yes");
}

// tim control
function $$(id) {
    return document.getElementById(id);
}
function trimSpace(s) {
    if(s!="" && s!=null){
        for(i=0;i<s.length;i++)
            s = s.replace("&nbsp;"," ");
        s = s.replace("<p>"," ");
        s = s.replace("</p>"," ");
        while (s.charCodeAt(0)==32 && s.length>1)
        {
            s=s.substr(1,s.length)
        }		
        //-------------------------
        if(s.charCodeAt(0)==32 && s.length==1){
            return "";
        }else{
            return s;
        }
    }
    else
        return "";
}
function isEmail(email) {
    var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return filter.test(email);
}

function Trim(s) {
    return trimSpace(s);
}

function download(id,tbl){
    window.open("download.php?id="+id+"&tbl="+tbl);
}
function isNumber(textNum)
{
    var re = /^[0-9]{1,5}$/;	
    sNum = document.getElementById(textNum).value;
    if (!re.test(sNum) ){
        alert("Vui long nhap vao kieu so !");		
        $("#"+textNum).focus();
        return false;
    }
}

function CompDateE(strDate1,strDate2){
    var m1, d1, y1;
    var m2, d2, y2;
    var s, pos1, pos2;
    var s = strDate1, s1 = strDate2;
    if (s.length == 0 || s1.length == 0) return true;

    pos1 = s.indexOf("/",0);
    pos2 = s.indexOf("/",pos1+1);
    d1 = parseInt(s.substr(0,pos1),10);
    m1 = parseInt(s.substr(pos1+1,pos2-pos1-1),10);
    y1 = parseInt(s.substr(pos2+1,s.length-pos2),10);
		
    pos1 = s1.indexOf("/",0);
    pos2 = s1.indexOf("/",pos1+1);
    d2 = parseInt(s1.substr(0,pos1),10);
    m2 = parseInt(s1.substr(pos1+1,pos2-pos1-1),10);
    y2 = parseInt(s1.substr(pos2+1,s1.length-pos2),10);
		
    var d1 = new Date(y1,d1,m1);
    var d2 = new Date(y2,d2,m2);
    if (d1 > d2 || d1 == d2) 
        return true;
    else
        return false;
}
function CompDate(strDate1,strDate2){
    var m1, d1, y1;
    var m2, d2, y2;
    var s, pos1, pos2;
    var s = strDate1, s1 = strDate2;
    if (s.length == 0 || s1.length == 0) return true;

    pos1 = s.indexOf("/",0);
    pos2 = s.indexOf("/",pos1+1);
    d1 = parseInt(s.substr(0,pos1),10);
    m1 = parseInt(s.substr(pos1+1,pos2-pos1-1),10);
    y1 = parseInt(s.substr(pos2+1,s.length-pos2),10);
	
    pos1 = s1.indexOf("/",0);
    pos2 = s1.indexOf("/",pos1+1);
    d2 = parseInt(s1.substr(0,pos1),10);
    m2 = parseInt(s1.substr(pos1+1,pos2-pos1-1),10);
    y2 = parseInt(s1.substr(pos2+1,s1.length-pos2),10);
	
    var date1 = new Date(y1,m1,d1);
    var date2 = new Date(y2,m2,d2);
    //        alert(date1 + "+"+ date2);
    if (date1 > date2 || date1 == date2)
        return true;
    else
        return false;
}
function checkFile(file,type){
    var is_return = false;
    if(file==""){
        alert("Tap tin khong tin tai!");
        is_return = false;
    }else{
        arr = Array ();
        arr = file.split(".");
        var ext = arr[arr.length-1];
        switch(type){
            case "doc":
                if(ext!="doc" && ext!="txt" && ext!="pdf" && ext!="xsl" && ext!="ppt"){
                    is_return = false;
                }else{
                    is_return = true;
                }
                break;
            case "image":
                if(ext!="jpg" && ext!="JPG" && ext!="gif" && ext!="GIF" && ext!="bmp" && ext!="BMP" && ext!="png" && ext!="PNG"){
                    is_return = false;
                }else{
                    is_return = true;
                }
                break;
            case "video":
                if(ext!="flv" && ext!="avi" && ext!="dat" && ext!="wma" && ext!="wmv"){
                    is_return = false;
                }else{
                    is_return = true;
                }
                break;
        }
    }
    return is_return;
}
function showWindow(url, isStatus, isResizeable, isScrollbars, isToolbar, isLocation, isFullscreen, isTitlebar, isCentered, width, height, top, left)  
{  
    if (isCentered)  
    {  
        top = (screen.height - height) / 2;  
        left = (screen.width - width) / 2;  
    }  
  
    open(url, '_blank', 'status=' + (isStatus ? 'yes' : 'no') + ','  
        + 'resizable=' + (isResizeable ? 'yes' : 'no') + ','  
        + 'scrollbars=' + (isScrollbars ? 'yes' : 'no') + ','  
        + 'toolbar=' + (isToolbar ? 'yes' : 'no') + ','  
        + 'location=' + (isLocation ? 'yes' : 'no') + ','  
        + 'fullscreen=' + (isFullscreen ? 'yes' : 'no') + ','  
        + 'titlebar=' + (isTitlebar ? 'yes' : 'no') + ','  
        + 'height=' + height + ',' + 'width=' + width + ','  
        + 'top=' + top + ',' + 'left=' + left);  
}  