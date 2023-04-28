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
        
      @page{margin: 0.0in 0.0in 0.0in 0.05in;}


</style>
<body>


    <img style="width: 150px" src="img/logoherbas.jpg" alt="">
    <div class="nuevo">
        <h1>Reporte de Compras</h1>
        <h3>ALMACEN HERBAS</h3>
    </div>
    
   
    <table>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Fecha del Reporte : </th>
            <td colspan="2"><?php echo($valor['fecha_actual'])?></td>
          </tr>
    
        </tfoot>
      </table>
    <div class="container">
        <div class="row">
            <div class="col-3">
               
            </div>
            <div class="col-3">
               
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>
    </div>
<div class="" style="">
    <table >
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Fecha Inicio :</th>
            <td colspan="2"><?php           
                if(isset($valor['fecha_inicial'])) 
                   {  echo $valor['fecha_inicial'];}
                 else {echo "   sin definir";}  
                   ?></td>
          </tr>
          <tr>
            <th scope="row" colspan="2">Fecha Fin :</th>
            <td colspan="2"><?php 
              
                if(isset($valor['fecha_final'])) 
                   {  echo $valor['fecha_final'];
                   }
                 else {echo "   sin definir";}  
                   ?>
                   </td>
          </tr>
          <tr>
            <th scope="row" colspan="2">Proveedor :</th>
            <td colspan="2"><?php 
              
                if(isset($valor['clientName'])) 
                   {  echo $valor['clientName'];}
                 else {echo "   sin definir";}  
                   ?></td>
          </tr>
        </tfoot>
      </table>
<br>

<?php
 $total = 0;
?>

    <table  class="table-bordered" style="width: 100%;">
        <tr class="table-bordered">
          <th class="table-bordered">#</th>
          <th class="table-bordered">Proveedor</th>
          <th class="table-bordered">Fecha</th>
          <th class="table-bordered">Total</th>
        </tr class="table-bordered">



        @foreach($valor['ingresos'] as $team)
        <tr class="table-bordered">
            <td class="table-bordered">{{ $team->num_comprobante}}</td>
            <td class="table-bordered">{{ $team->nombre}}</td>
            <td class="table-bordered">{{ $team->fecha_hora}}</td>
            <td class="table-bordered">{{ $team->total}}</td>
        </tr>
             <?php $total =  $team->total + $total ?>
             @endforeach
      </table>
      <br>
      <br>
            <table>
              <tfoot>
                <tr>
                  <th scope="row" colspan="1" style="color: #fff">asdasas</th>
                  <th scope="row" colspan="2">Total Gastos : Bs </th>
                  <td colspan="2"><?php echo$total;?></td>
                </tr>
          
              </tfoot>
            </table>
    
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