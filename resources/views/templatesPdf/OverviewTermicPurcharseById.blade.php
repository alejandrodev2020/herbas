<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<style>
  .btn-kuper{
      background: red;
      width: 350px;
      height: 10px;
      font-weight: 700;
  }
  td{
      text-align: center;
  }
  .fechas {

  }
  .nuevo{
      text-align: center
  }
  table{
    font-size: 13.0px;

  }
  th {
      text-align: start;
  }
 .table-bordered {
  border: 0.2px solid;
      }
      @page{margin: 0.0in 0.0in 0.0in 0.00in;}

</style>
<body>
     
  <table>
    <tfoot>
      <tr style="width: 100%;" >
        <th  scope="row" colspan="2"> <img style="width: 150px" src="img/logoherbas.jpg" alt=""></th>
      </tr>

    </tfoot>
  </table>

  <table>
    <tfoot>
      <tr style="width: 100%;" >
        <td colspan="2">Fecha actual:<?php echo($valor['fecha_actual']) ?> </td>
      </tr>
    </tfoot>
  </table>

   <div class="nuevo">
        <h1>Boleta de  Compra N°  <?php print_r($valor['numero']) ?>  </h1>
        <h3>ALMACEN HERBAS</h3>
    </div>



    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2">Proveedor:  <?php 
            print_r($valor['ingresos']->nombre);
          ?> </th>
          
        </tr>
  
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2">Fecha & Hora: <?php 
            print_r($valor['ingresos']->fecha_hora);
          ?></th>
        </tr>
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2">Tipo de Comprobante:<?php 
            print_r($valor['ingresos']->tipo_comprobante);
          ?> </th>
        </tr>
      </tfoot>
    </table>

    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2">Núm. Comprobante: <?php 
            print_r($valor['ingresos']->num_comprobante);
          ?>  </th>
        
        </tr>
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2">Usuario Recepcionista : <?php 
            print_r($valor['ingresos']->usuario);
          ?>  </th>
          
        </tr>
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2"><?php   if($valor['tipo_compra'] !== null){ echo "Tipo de Compra :"; }  else {echo "";}?>  <?php  print_r($valor['tipo_compra']);  ?>  </th>
        </tr>
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2"><?php   if($valor['nombre_chofer'] !== null){ echo "Nombre Chofer :"; }  else {echo "";}?> <?php 
            print_r($valor['nombre_chofer']);
          ?>  </th>
          
        </tr>
      </tfoot>
    </table>
    <table>
      <tfoot>
        <tr>
          <th scope="row" colspan="2"><?php   if($valor['placa_compra'] !== null){ echo "Placa :"; }  else {echo "";}?> <?php print_r($valor['placa_compra']);  ?>  </th>
          
        </tr>
      </tfoot>
    </table>
<br>
<table  class="table-bordered">
  <tr class="table-bordered">
    <th class="table-bordered">N°</th>
    <th class="table-bordered">Producto</th>
    <th class="table-bordered">Cant.</th>
    <th class="table-bordered">Precio</th>
    <th class="table-bordered">Sub.</th>
  </tr class="table-bordered">

  @foreach($valor['detalle'] as $team)
  <tr class="table-bordered">
      <th class="table-bordered"  scope="row">{{ $loop->index+1}}</th>
      <td class="table-bordered">{{ $team->nombre}}</td>
      <td class="table-bordered">{{ $team->cantidad}}</td>
      <td class="table-bordered">{{ $team->precio}}</td>
      <td class="table-bordered">{{ $team->cantidad *  $team->precio - $team->descuento}}</td>
 
  </tr>
  
   @endforeach
   <tr class="table-bordered" style="font-weight: 700;">
      <td class="table-bordered"  style="text-align:right !important; font-size: 20px !important;" colspan="5">Total :<?php print_r($valor['total']) ?> </td>
  </tr> 
  </tr>
</table>
<br>
<br>

</body>
</html>