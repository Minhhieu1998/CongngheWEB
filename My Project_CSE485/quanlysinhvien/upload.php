<?php


if(!empty($_FILES))
{
 if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
 {
  sleep(1);
  $source_path = $_FILES['uploadFile']['tmp_name'];
  $target_path = 'upload/' . $_FILES['uploadFile']['name'];
  if(move_uploaded_file($source_path, $target_path))
  {
   echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
  }
 }
}

?>


<!DOCTYPE html>
 <html>
 <head>
  <title>Tải lên file</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.form.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Tải lên file</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading"><b>Khoa CNTT-ĐHTL</b></div>
    <div class="panel-body">
     <form id="uploadImage" action="upload.php" method="post">
      <div class="form-group">
       <label>File Upload</label>
       <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
      </div>
      <div class="form-group">
       <input type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
      </div>
      <div class="progress">
       <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div id="targetLayer" style="display:none;"></div>
     </form>
     <div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
    </div>
   </div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){
 $('#uploadImage').submit(function(event){
  if($('#uploadFile').val())
  {
   event.preventDefault();
   $('#loader-icon').show();
   $('#targetLayer').hide();
   $(this).ajaxSubmit({
    target: '#targetLayer',
    beforeSubmit:function(){
     $('.progress-bar').width('50%');
    },
    uploadProgress: function(event, position, total, percentageComplete)
    {
     $('.progress-bar').animate({
      width: percentageComplete + '%'
     }, {
      duration: 1000
     });
    },
    success:function(){
     $('#loader-icon').hide();
     $('#targetLayer').show();
    },
    resetForm: true
   });
  }
  return false;
 });
});
</script>


