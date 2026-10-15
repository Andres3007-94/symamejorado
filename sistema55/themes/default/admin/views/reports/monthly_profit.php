<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-2x">&times;</i>
            </button>
            <button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
                <i class="fa fa-print"></i> <?= lang('print'); ?>
            </button>
            <h4 class="modal-title" id="myModalLabel"><?= 'Ganancias mensuales'.' ('.$date.')'; ?></h4>
        </div>
        <div class="modal-body">
            <!-- <p><?= lang('unit_and_net_tip'); ?></p> -->
            <div class="form-group">
                <?php
                
                $opts[] = lang('all_warehouses');
                foreach ($warehouses as $warehouse) {
                    $opts[$warehouse->id] = $warehouse->name.' ('.$warehouse->code.')';
                }


                define('BASEPATH', "foobar");
require ('app/config/database.php');
global $hostname,$database,$username,$password;
foreach ($db as $key ) {
  # code...
  $hostname=$key['hostname'];
  $database=$key['database'];
  $username=$key['username'];
  $password=$key['password'];
}

 //SESSION_START();
//var_dump($db['default']);
//echo $hostname;
global $conexion;
global $fecha;

function dbsyma () {
    static $conn;
    global $hostname,$database,$username,$password;
    if ($conn===NULL){ 
        //$conn = mysqli_connect ("localhost", "root", "", "admin_syma"); //LOCALHOST | USUARIO | PASS | DB
         $conn = mysqli_connect ("".$hostname."", "".$username."", "".$password."", "".$database."");
         mysqli_set_charset($conn,'utf8');
    }
    return $conn;
}
//modifica las referecnias de admin_syma


function consultar($min,$max){
  $conn = dbsyma();

  $respuesta=
  mysqli_query($conn," SELECT sum(detalle.subtotal -(detalle.quantity*productos.cost)), sum(detalle.quantity) as Ganancia fROM sma_sales as ventas INNER JOIN sma_sale_items as detalle ON ventas.id = detalle.sale_id INNER JOIN sma_products as productos on detalle.product_id=productos.id where ventas.date> '$min' and ventas.date < '$max' ");
  return $respuesta; 
  }


                $fecha=$year."-".$month."-1";
                   $nuevomes=$month+1;
                $nuevafecha=$year."-".$nuevomes."-1";
                //$nuevafecha = strtotime ( '+1 day' , strtotime ( $date ) ) ;
                //$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                
                $marcio=consultar($fecha,$nuevafecha);              
                $resultado=$marcio->fetch_all();
                foreach ($resultado as $res) {
                    $gan=$res[0];
                    $can=$res[1];
                }
                




                ?>
                <?= form_dropdown('warehouse', $opts, set_value('warehouse', $swh), 'class="form-control select" id="warehouse"'); ?>
            </div>
            <div class="table-responsive">
            <table width="100%" class="stable">
                <tr>
                    <td style="border-bottom: 1px solid #EEE;"><h4>Productos vendidos:</h4></td>
                    <td style="text-align:right; border-bottom: 1px solid #EEE;">
                            <h4><span><?= $this->sma->formatMoney($costing->sales); ?></span></h4>
                            <!-- <h4><span><?= $this->sma->formatMoney($costing->sales).' ('.$this->sma->formatMoney($costing->net_sales).')'; ?></span></h4>-->
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #DDD;"><h4>Descuentos:</h4></td>
                    <td style="text-align:right;border-bottom: 1px solid #DDD;">
                        <h4>
                            <span><?php $discount = $discount ? $discount->order_discount : 0; echo $this->sma->formatMoney($discount); ?></span>
                        </h4>
                    </td>
                </tr>
                <!--
                <tr>
                    <td style="border-bottom: 1px solid #EEE;"><h4>Costo de productos:</h4></td>
                    <td style="text-align:right; border-bottom: 1px solid #EEE;">
                        <h4><span><?= $this->sma->formatMoney($costing->cost); ?></span></h4>
                         <h4><span><?= $this->sma->formatMoney($costing->cost).' ('.$this->sma->formatMoney($costing->net_cost).')'; ?></span></h4> 
                    </td>
                </tr>
                -->
                <tr>
                    <td style="border-bottom: 1px solid #DDD;"><h4><?= lang('expenses'); ?>:</h4></td>
                    <td style="text-align:right;border-bottom: 1px solid #DDD;">
                        <h4>
                            <span><?php $expense = $expenses ? $expenses->total : 0; echo $this->sma->formatMoney($expense); ?></span>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td width="300px;" style="font-weight:bold;"><h4><strong>Ganancias:</strong>:</h4>
                    </td>
                    <td style="text-align:right;">
                        <h4>
                             <span><strong><?= $this->sma->formatMoney($gan); ?></strong></span>
                             <!--
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense); ?></strong></span>
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense).' ('.$this->sma->formatMoney($costing->net_sales - $costing->net_cost - $discount - $expense).')'; ?></strong></span> -->
                        </h4>
                    </td>
                </tr>
                 <tr>
                    <td width="300px;" style="font-weight:bold;"><h4><strong>Productos vendidos:</strong>:</h4>
                    </td>
                    <td style="text-align:right;">
                        <h4>
                             <span><strong><?= $can; ?></strong></span>
                             <!--
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense); ?></strong></span>
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense).' ('.$this->sma->formatMoney($costing->net_sales - $costing->net_cost - $discount - $expense).')'; ?></strong></span> -->
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td width="300px;" style="font-weight:bold;"><h4><strong>Ganancia promedio</strong>:</h4>
                    </td>
                    <td style="text-align:right;">
                        <h4>
                             <span><strong><?= $this->sma->formatMoney($gan/$can); ?></strong></span>
                             <!--
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense); ?></strong></span>
                            <span><strong><?= $this->sma->formatMoney($costing->sales - $costing->cost - $discount - $expense).' ('.$this->sma->formatMoney($costing->net_sales - $costing->net_cost - $discount - $expense).')'; ?></strong></span> -->
                        </h4>
                    </td>
                </tr>
                <?php if (isset($returns->total)) { ?>
                <tr>
                    <td width="300px;" style="font-weight:bold;"><h4><strong><?= lang('return_sales'); ?></strong>:</h4>
                    </td>
                    <td style="text-align:right;"><h4>
                            <span><strong><?= $this->sma->formatMoney($returns->total); ?></strong></span>
                        </h4></td>
                </tr>
                <?php } ?>
            </table>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#warehouse').select2({minimumResultsForSearch: 7});
        $('#warehouse').change(function(e) {
            var wh = $(this).val();
            $.get('<?= admin_url('reports/monthly_profit/'.$year.'/'.$month); ?>/'+wh+'/1', function(data) {
                $('#myModal').empty().html(data);
                $('#warehouse').select2({minimumResultsForSearch: 7});
            });
        });
    });
</script>