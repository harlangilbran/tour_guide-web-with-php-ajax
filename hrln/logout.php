<?php
session_start();
session_unset();//menghilangkan variabel session
session_destroy();//hilangkan nilai session
echo" <script>
      alert('anda telah log out')
      window.location='login.php' ;
      
    </script>";

?>