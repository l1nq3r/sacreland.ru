<?php
include ('engine/api/api.class.php');
if(isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], "site/MinecraftCloaks/".$member_id['name'].".png");
    echo "";
} else echo "";

?>
<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="file" id="profilepagepcloakupload">
<input type="submit" name="submit" value="загрузить" id="profilepagepskinuploading">
</form>