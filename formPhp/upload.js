 $(function() {
   $("#submit").click(function (e) {
     e.preventDefault();
     var action = $(".form").attr("action");
     var name = $("#name").val();
     var email = $("#email").val();
     console.log(name, email);
     $.ajax({
       method: 'post',
       url: action,
       data: {
         "name": name,
         "email": email
       },
       success: function () {
         console.log("inserted")
         
       },
       error: function () {
         
       }

     }).done(function (data) {
     
       let result = $.parseJSON(data);
         console.log(result);
       let str = "";
           
           
       // let hide = $("#info").css("display", "none");
       if (result == 1) {
         str += "DATA RECEIVED";
         cls = "alert-success";

       } else if (result == 3) {
         str += "Provide all the fields!";
         cls = "alert-danger";

       } else {
         str += "Error occurred. Refresh & Try Again";
         cls = "error";

       }
        $("#info").html(str).addClass(cls).hide(3000) 
          
     })
    
 
   }) 
 
    })