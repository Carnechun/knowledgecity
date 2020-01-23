$(document).ready(function(){



    showList();

    $("#num-pageOne").click(function(){

     
        showListPerPage($(this).text());

    })
    $("#num-pageTwo").click(function(){

        showListPerPage($(this).text());

    })
    $("#logoutbutton").click(function(){
        
        deleteToken();

    })

});