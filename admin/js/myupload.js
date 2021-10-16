//$(document).ready(function(){
/*     $("#fileToUpload").change(function(e){
        alert(e.target,file[0].name);
        $("#avatar").attr('src','image/'+e.target.file[0].name);
    })
}) */




//14/10/2021
$(document).ready(function (e) {
    $("#form_ava").on('submit',(function(e) {
     var formdata = new FormData(this);
     formdata.append("submit","");
      e.preventDefault();
     $.ajax({
            url: "update_profile.php",
      type: "POST",
      data:  formdata,
      contentType: false,
            cache: false,
      processData:false,
      beforeSend : function()
      {
       //$("#preview").fadeOut();
       $("#err").fadeOut();
      },
      success: function(data)
         {
          $('#anh2').attr('src',data);
         },
        error: function(e) 
         {
       $("#err").html(e).fadeIn();
         }          
       });
    }));
   });