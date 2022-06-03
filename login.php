<?php
  include 'header.php';
  echo $header_html;
 ?>
 <div class="container-fluid p-5 bg-primary text-white text-center">
   <h1>Ingresar al sistema</h1>
   <p>Coloque su correo y contraseña para ingresar.</p>
 </div>
<form action="authenticate.php" method="post">
  <div class="container mt-5">
   <div class="row">
     <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
       <h3>Credenciales</h3>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">

       <div class="row">
         <div class="col-sm-2">email</div>
         <div class="col-sm-8">
           <input type="text" id="email" name="email">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Contraseña</div>
         <div class="col-sm-8">
           <input type="password" id="password" name="password">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">&nbsp;</div>
         <div class="col-sm-8">
           <input type="submit">
         </div>
       </div>
     </div>
   </div>
 </div>
</form>
<?php echo $footer_html; ?>
