<?php
  include '../header.php';
  echo $header_html;
 ?>
 <div class="container-fluid p-5 bg-primary text-white text-center">
   <h1>Crear un nuevo cliente</h1>
   <p>En esta opción ustéd podrá crear un nuevo cliente</p>
 </div>
<form action="create.php" method="post">
  <div class="container mt-5">
   <div class="row">
     <div class="col-sm-2"><a href="./index.php">Volver</a></div>
     <div class="col-sm-8">
       <h3>Datos del cliente</h3>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">

       <div class="row">
         <div class="col-sm-2">ID</div>
         <div class="col-sm-8">
           <input type="text" id="CustomerID" name="CustomerID">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Nombre</div>
         <div class="col-sm-8">
           <input type="text" id="CompanyName" name="CompanyName">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Contacto</div>
         <div class="col-sm-8">
           <input type="text" id="ContactName" name="ContactName">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Titulo Contacto</div>
         <div class="col-sm-8">
           <input type="text" id="ContactTitle" name="ContactTitle">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Dirección</div>
         <div class="col-sm-8">
           <input type="text" id="Address" name="Address">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Ciudad</div>
         <div class="col-sm-8">
           <input type="text" id="City" name="City">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Región</div>
         <div class="col-sm-8">
           <input type="text" id="Region" name="Region">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Código postal</div>
         <div class="col-sm-8">
           <input type="text" id="PostalCode" name="PostalCode">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">País</div>
         <div class="col-sm-8">
           <input type="text" id="Country" name="Country">
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
