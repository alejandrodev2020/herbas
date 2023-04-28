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
        <h1>Boleta de  Venta N°  <?php print_r($valor['venta']->serie_comprobante) ?>  </h1>
        <h3>ALMACEN HERBAS</h3>
    </div>
    
   
    <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Cliente: </th>
            <td colspan="2"><?php print_r($valor['venta']->nombre) ?> </td>
          </tr>
    
        </tfoot>
      </table>
      <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Fecha: </th>
            <td colspan="2"><?php print_r($valor['venta']->fecha_hora) ?> </td>
          </tr>
    
        </tfoot>
      </table>
      <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Tipo de Comprobante: </th>
            <td colspan="2"><?php print_r($valor['venta']->tipo_comprobante) ?> </td>
          </tr>
        </tfoot>
      </table>
      <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Núm. Comprobante:  </th>
            <td colspan="2"><?php print_r($valor['venta']->num_comprobante) ?> </td>
          </tr>
        </tfoot>
      </table>
      <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Usuario Vendedor : </th>
            <td colspan="2"><?php print_r($valor['venta']->usuario) ?> </td>
          </tr>
        </tfoot>
      </table>


      <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Tipo de Venta: </th>
            <td colspan="2"><?php print_r($valor['venta']->tipo_venta) ?> </td>
          </tr>
        </tfoot>
      </table>
     <table>
        <tfoot>
          <tr>
            <?php
             if($valor['chofer'] != null){?> <th scope="row" colspan="2">Chofer Responsable : </th><?php }?>
            <td colspan="2"><?php if($valor['chofer'] != null){ print_r($valor['chofer']->nombre);  } ?>
            </td>
          </tr>
        </tfoot>
      </table> 

      <table>
        <tfoot>
          <tr>
            <?php
             if($valor['venta']->placa != null){?> <th scope="row" colspan="2">Placa : </th><?php }?>
            <td colspan="2"><?php if($valor['venta']->placa != null){ print_r($valor['venta']->placa);  } ?>
            </td>
          </tr>
        </tfoot>
      </table> 






 <br>
 <br>


    <table  class="table-bordered" style="width: 100%;">
        <tr class="table-bordered">
          <th class="table-bordered">#</th>
          <th class="table-bordered">Producto</th>
          <th class="table-bordered">Cantidad</th>
          <th class="table-bordered">Precio</th>
          <th class="table-bordered">Descuento</th>
          <th class="table-bordered">Sub-T</th>
        </tr class="table-bordered">

        @foreach($valor['detalle'] as $team)
        <tr class="table-bordered">
            <th class="table-bordered"  scope="row">{{ $loop->index+1}}</th>
            <td style="text-align: start" class="table-bordered">{{ $team->articulo}}</td>
            <td class="table-bordered">{{ $team->cantidad}}</td>
            <td class="table-bordered">{{ $team->precio}}</td>
            <td class="table-bordered">{{ $team->descuento}}</td>
            <td class="table-bordered">{{ $team->cantidad *  $team->precio - $team->descuento}}</td>
        </tr>
         @endforeach
         <tr class="table-bordered" style="font-weight: 700">
            <td class="table-bordered"  style="text-align:right !important;" colspan="5">Total :</td>
            <td class="table-bordered"><?php print_r($valor['total']) ?> </td>
        </tr>
      </table>
   <br>
   <br>
    
</div>
    <script>
        // document.getElementById("current_date").innerHTML = Date();
        date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = " "+day + "/ " + month + "/ " + year;
</script>
</body>
</html>