<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    th {
        text-align: start;
    }
   .table-bordered {
         border: 1px solid;
        }

</style>
<body>


   
  
  <table>
    <tfoot>
      <tr style="width: 100%;" >
        <th  scope="row" colspan="2"> <img style="width: 150px" src="img/logoherbas.jpg" alt=""></th>
        <td style="color:#fff;  font-weight: 700" colspan="2">Fecha Actual333333333333333333336666666666677 </td>
         <td style="font-weight: 700" colspan="2">Fecha Actual :<?php echo($valor['fecha_actual']) ?> </td>
      </tr>

    </tfoot>
  </table>
    <div class="nuevo">
        <h1>Reporte de Compra N°  <?php 
          print_r($valor['ingresos']->num_comprobante);
        ?> 
     
          </h1>
        <h3>ALMACEN HERBAS</h3>
    </div>
    
   <?php 
       $total = 0;
   ?>


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
            <th scope="row" colspan="2">Fecha: <?php 
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
    <table  class="table-bordered" style="width: 100%;">
        <tr class="table-bordered">
          <th class="table-bordered">#</th>
          <th class="table-bordered">Producto</th>
          <th class="table-bordered">Cantidad</th>
          <th class="table-bordered">Precio</th>
          <th class="table-bordered">Sub-T</th>
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
         <tr class="table-bordered" style="font-weight: 700">
            <td class="table-bordered"  style="text-align:right !important;" colspan="4">Total :</td>
            <td class="table-bordered"><?php print_r($valor['total']) ?> </td>
        </tr>
      </table>
</div>
</body>
</html>