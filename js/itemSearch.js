// WHEN CLICK A DISTRICT BUTTON, TO HIDE THE POPUP WINDOW
$(document).ready(function(){
    $("#AmparaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#AnuradhapuraId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#BadullaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#BatticaloaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#ColomboId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#GalleId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#GampahaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#HambantotaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#JaffnaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#KalutaraId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#KandyId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#KegalleId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#KilinochchiId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#KurunegalaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#MannarId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#MataleId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#MataraId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#MonaragalaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#MullaitivuId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#NuwaraEliyaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#PolonnaruwaId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#PuttalamId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#RatnapuraId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#TrincomaleeId").click(function(){
        $("#myModal1").modal("hide");
    });
});
$(document).ready(function(){
    $("#VavuniyaId").click(function(){
        $("#myModal1").modal("hide");
    });
});


//ITEM SEARCH BY DISTRICT AJAX CODE
function showItem(str) {
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
        xmlhttp.open("GET","items_search_ajax.php?district="+str,true);
        xmlhttp.send();
    }
}




