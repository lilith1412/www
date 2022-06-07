<?php
  include '../header.php';
  echo $header_html;
  if(!isset($_SESSION["errors"])){
    unset($_SESSION["values"]);
  }
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
           <input type="text" class="form-control <?php echo isset($_SESSION["values"]["CustomerID"]) ? 'is-invalid' : '';  ?>"  value="<?php echo isset($_SESSION["values"]["CustomerID"]) ? $_SESSION["values"]["CustomerID"] : '';  ?>" maxlength="5" id="CustomerID" name="CustomerID">
         </div>
         <div class="col-sm-2"><?php echo isset($_SESSION["errors"]["CustomerID"]) ? $_SESSION["errors"]["CustomerID"] : '';  ?></div>
       </div>
       <div class="row">
         <div class="col-sm-2">Nombre</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["CompanyName"]) ? $_SESSION["values"]["CompanyName"] : '';  ?>" id="CompanyName" name="CompanyName" required>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Contacto</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["ContactName"]) ? $_SESSION["values"]["ContactName"] : '';  ?>" id="ContactName" name="ContactName">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Titulo Contacto</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["ContactTitle"]) ? $_SESSION["values"]["ContactTitle"] : '';  ?>" id="ContactTitle" name="ContactTitle">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Dirección</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["Address"]) ? $_SESSION["values"]["Address"] : '';  ?>" id="Address" name="Address">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Ciudad</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["City"]) ? $_SESSION["values"]["City"] : '';  ?>" id="City" name="City">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Región</div>
         <div class="col-sm-8">
           <input type="text" class="form-control" value="<?php echo isset($_SESSION["values"]["Region"]) ? $_SESSION["values"]["Region"] : '';  ?>" id="Region" name="Region">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">Código postal</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["PostalCode"]) ? $_SESSION["values"]["PostalCode"] : '';  ?>" id="PostalCode" name="PostalCode">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">País</div>
         <div class="col-sm-8">
           <input type="text" class="form-control"  value="<?php echo isset($_SESSION["values"]["Country"]) ? $_SESSION["values"]["Country"] : '';  ?>" id="Country" name="Country">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-2">&nbsp;</div>
         <div class="col-sm-8">
           <input type="submit" class="btn btn-primary" >
         </div>
       </div>
     </div>
   </div>
 </div>
</form>

<?php
unset($_SESSION["errors"]);
unset($_SESSION["values"]);
?>
