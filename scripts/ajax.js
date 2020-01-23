function showList()
{
    $.ajax({
        type: 'GET',
        url : 'http://localhost/knowledgecity/getStudents.php', 
        dataType: "json",
        data:{"name":"UniversitySD", "page":1,"rows":5},
        beforeSend: function(){},
        success: function(data){
            var classColor="white";
            var json=$.parseJSON(data);
            

            var count=0;
            $.each(json,function(index, value ){
             
                
                $("#students-container").append("<div class='student-row "+classColor+"'>"
                +"<div class='student-information'>"
                +"<p class='username'>"+value.username+"</p>"
                +"<p class='name'>"+value.firstname+" "+value.surname+"</p>"
                +"</div>"
                +"<div class='group-information'>"
                   +" <p class='dat'>...</p>"
                +"<p class='group'>"+value.group+"</p>"
               +"</div>"
            +"</div>");

                count++;

            if(classColor=="white")
            {
                classColor="gray";
            }else if(classColor=="gray")
            {
                classColor="white";
            }

            

               
           });
          
            //$().append();
        },
        error: function() {},
        complete: function() {}
    })


}
function showListPerPage(page)
{

    $('#students-container').empty();

    $.ajax({
        type: 'GET',
        url : 'http://localhost/knowledgecity/getStudents.php', 
        dataType: "json",
        data:{"name":"UniversitySD", "page":page,"rows":5},
        beforeSend: function(){},
        success: function(data){
            var classColor="white";
            var json=$.parseJSON(data);
            
            
            var count=0;
            $.each(json,function(index, value ){
             
                
                $("#students-container").append("<div class='student-row "+classColor+"'>"
                +"<div class='student-information'>"
                +"<p class='username'>"+value.username+" </p>"
                +"<p class='name'>"+value.firstname+" "+value.surname+"</p>"
                +"</div>"
                +"<div class='group-information'>"
                   +" <p class='dat'>...</p>"
                +"<p class='group'>"+value.group+"</p>"
               +"</div>"
            +"</div>");

                count++;

            if(classColor=="white")
            {
                classColor="gray";
            }else if(classColor=="gray")
            {
                classColor="white";
            }

            

               
           });
           
            //$().append();
        },
        error: function() {},
        complete: function() {}
    })


}
function tokenInSystem()
{
    
    $.ajax({
        type: 'POST',
        url:'http://localhost/knowledgecity/findToken.php',
        data : {},
        dataType:'',
        beforeSend : function(){},
        success: function(data){
          
            if(data=='Token in system')
            {
                window.location.href="http://localhost/knowledgecity/students.html";

            }else
            {


            }


        },
        error : function(){},
        complete: function(){}


    })



}
function deleteToken()
{

    $.ajax({
        url: 'http://localhost/knowledgecity/deleteToken.php',
        type: 'DELETE',
        success: function(result) {
            alert('log out');
            window.location.href="http://localhost/knowledgecity/";

        }
    });
}