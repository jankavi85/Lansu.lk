//For Search By Area
function showItemArea1(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("area").innerHTML = '<span class="glyphicon glyphicon-map-marker"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","srilankan_items_search_ajax.php?district="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal1").modal("hide");
}

function showItemArea2(str) {    
    if (str == "") {
        document.getElementById("item_area3").innerHTML = "";//item_area3 value ekata unath damiya hakiya.
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area3").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","items_search_ajax.php?district="+str,true);
        xmlhttp.send();
    }
}
function showItemArea3(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("area").innerHTML = '<span class="glyphicon glyphicon-map-marker"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","district_items_search_ajax.php?district="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal1").modal("hide");
}
function showItemArea4(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("area").innerHTML = '<span class="glyphicon glyphicon-map-marker"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","full_district_items_search_ajax.php?district="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal1").modal("hide");
}

//For Search By Category
function showItemCategory1(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("category").innerHTML = '<span class="glyphicon glyphicon-tag"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","all_category_items_search_ajax.php?category="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal2").modal("hide");
}

function showItemCategory2(str) {    
    if (str == "") {
        document.getElementById("item_area5").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area5").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","items_search_ajax2.php?category="+str,true);
        xmlhttp.send();
    }
}

function showItemCategory3(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("category").innerHTML = '<span class="glyphicon glyphicon-tag"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","category_items_search_ajax.php?category="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal2").modal("hide");
}

function showItemCategory4(str) {
    document.getElementById("search").value= null;
    document.getElementById("closing_date").value = null;
    var radio;
    document.getElementById("category").innerHTML = '<span class="glyphicon glyphicon-tag"></span>   '+str;

    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }
    
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","full_category_items_search_ajax.php?category="+str+"&radiovalue="+radio,true);
        xmlhttp.send();
    }
    $("#myModal2").modal("hide");
}

function searchButtonAction() {
    var search1 = document.getElementById("search").value;
    var date1 = document.getElementById("closing_date").value;
    
    //Radio Value
    var radio;
    if (document.getElementById("bidId").checked == true) {
        radio = document.getElementById("bidId").value;
    }
    else if (document.getElementById("directId").checked == true) {
        radio = document.getElementById("directId").value;
    }

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("item_area").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","searchAction.php?search_field="+search1+"&radiovalue="+radio+"&closing_date="+date1,true);
    xmlhttp.send();
}

function inactiveClosingDate(){
    document.getElementById("closing_date").disabled = true;
}

function activeClosingDate(){
    document.getElementById("closing_date").disabled = false;
}

function onload_search_item(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("item_area").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","onload_items.php",true);
    xmlhttp.send();
    
}




