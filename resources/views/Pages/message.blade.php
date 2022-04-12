<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
     
   </head>
   
   <body>
      <ul id = 'msg'></ul>
     
         {{ csrf_field() }}
         <button class="result">CLICK ME</button>
      
   </body>



   <script>
      
  

$('.result').on('click', function(){
    $('#msg').html('');
    $.ajax({
          type:'POST',
          url:'/getmsg',
          data: {
            '_token': $('input[name=_token]').val(),
          },
          success:function(data) {
              
              for(var i = 0; i < data.msg.length ; i++){
                console.log(data.msg[i].position);
                $("#msg").append('<li>'+data.msg[i].position+'</li>');
              }
            //  $("#msg").append(data.msg[1].position);
        //    console.log(data.msg[1].id);
          }
       });


});


 </script>

</html>