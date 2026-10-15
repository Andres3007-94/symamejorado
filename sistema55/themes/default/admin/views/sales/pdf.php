<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('sale') . ' ' . $inv->reference_no; ?></title>
    <link href="<?= $assets ?>styles/pdf/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
<div >
    <div >
        <div class="col-lg-16">
            <div class="col-xs-8">
             <?php if ($logo) {
                $path = base_url() . 'assets/uploads/logos/' . $biller->logo;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                }
                require 'funciones1.php';
                ?>
                <div class="text-left" >
                    <img src="<?= $base64; ?>" alt="<?= $biller->company != '-' ? $biller->company : $biller->name; ?>">
                </div>   
            </div>
            <div class="text-right">
                <div class="table-bordered">
                    <?php 
                        $tf=substr($inv->reference_no, 0, 1);
                        if($tf=='F')
                            {$texto='FACTURA ELECTRÓNICA';}
                        elseif($tf=='B')
                            {$texto='BOLETA ELECTRÓNICA';}
                        else{
                            $texto='COTIZACIÓN';
                        }
                     ?>
                      <div class="text-center">
                                Ruc:<?= $biller->vat_no.'<br>'.$texto.'<br>'.'Nro.'.$inv->reference_no ?>
                      </div>
                  </div>
            </div>
    
                <div class="col-xs-6">
                  
                    <h6><?php  echo $biller->address . '-' . $biller->city . ' ' . $biller->postal_code . ' ' . $biller->state . '<br />' ;
                    echo lang('tel') . ': ' . $biller->phone . ' ' . 'Email' . ': ' . $biller->email;
                    ?></h6>

                    <h6><?php  if ($customer->vat_no != "-" && $customer->vat_no != "") {
                            echo  "RUC" . " : " . $customer->vat_no.'<br>'.'Cliente :'.$customer->company.'<br>'.'Dirección :'.$customer->address . '-' . $customer->city  . $customer->state;} ?></h6>
                                </div>
                <div  class="text-right">
                <div class="text-right"> <br><br>
               
                    <?= 'Fecha  '; ?>:<?= $this->sma->hrld($inv->date); ?><br>
                    <?= 'Estado  '?>:<?= lang($inv->payment_status); ?>
                        <?php if ($inv->payment_status != 'paid') {
                          //  echo '<br>'. "Fecha de la Deuda" .': '.$this->sma->hrsd($inv->due_date);
                        } ?>
                
                </div>
                </div>

            </div>
     
            <div class="clearfix"></div>
            <?php
                $col = $Settings->indian_gst ? 5 : 4;
                if ( $Settings->product_discount && $inv->product_discount != 0) {
                    $col++;
                }
                if ($Settings->tax1 && $inv->product_tax > 0) {
                    $col++;
                }
                if ( $Settings->product_discount && $inv->product_discount != 0 && $Settings->tax1 && $inv->product_tax > 0) {
                    $tcol = $col - 2;
                } elseif ( $Settings->product_discount && $inv->product_discount != 0) {
                    $tcol = $col - 1;
                } elseif ($Settings->tax1 && $inv->product_tax > 0) {
                    $tcol = $col - 1;
                } else {
                    $tcol = $col;
                }
            ?>
            <div class="col-xs-14" style="margin-top: 5px;">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th  class="text-center"><?= 'No'; ?></th>
                        <th class=" text-center"><p>Descripción</p></th>
                        <th class=" text-center"><p>Talla</p></th>
                        <?php if ($Settings->indian_gst) { ?>
                            <th ><?= lang("hsn_code"); ?></th>
                        <?php } ?>
                        <th class=" text-center"><?= 'Cantidad'; ?></th>
                        <th class=" text-center"><?= lang('unit_price'); ?></th>
                        <?php
                            if ($Settings->tax1 && $inv->product_tax > 0) {
                                echo '<th>' . "Impuesto" . '</th>';
                            }
                            if ( $Settings->product_discount && $inv->product_discount != 0) {
                                echo '<th>' . lang('discount') . '</th>';
                            }
                        ?>
                        <th class=" text-center"><?= lang('subtotal'); ?></th>
                    </tr>
                    </thead>

                    <?php
                        $n=0;

                     foreach ($rows as $row):
                        $gt=$gt+$row->quantity;
                            $categoriax=getcodcate($row->product_id);
                            $arreglo[$n]=$categoriax;
                            $n++;
                            endforeach;
                             $arre=array_unique($arreglo);
                             $a=0;
                     foreach ($arre as $arr) {
                        $arreglocategoria[$a]=$arr;
                        
                        foreach ($rows as $row) {
                            
                            if(getcodcate($row->product_id)===$arr)
                            {   $cantidad[$a]=$cantidad[$a]+$row->quantity;
                                $detalle[$a]=$detalle[$a].gettallaprodu($row->product_id)."(".number_format($row->quantity).")"." /";
                                $pu[$a]=$row->unit_price;
                                $st[$a]=$st[$a]+$row->unit_price;
                                $it[$a]=$it[$a]+$row->item_tax;
                            }
                        }

                             $a++;   

                        }?>
                    
                    <tbody>
                    <?php $r = 1;$uni=0;
                            $c=0;
                        foreach ($arre as $arr):
                          
                            ?>
                            <tr>
                                <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                                <td style="vertical-align:middle;">                                  <?= $arr ?>
                                    
                                </td>
                                <td style="vertical-align:middle;">                                  <?= $detalle[$c] ?>
                                    
                                </td>
                                <?php if ($Settings->indian_gst) { ?>
                                <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $row->hsn_code; ?></td>
                                <?php } ?>
                                <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $cantidad[$c]?></td>
                                <td style="text-align:right; width:90px;"><?= $this->sma->formatMoney($pu[$c]); ?></td>
                                <?php
                                    if ($Settings->tax1 && $inv->product_tax > 0) {
                                        echo '<td style="width: 90px; text-align:right; vertical-align:middle;">' . ($row->item_tax != 0 ? '<small>(' . ($Settings->indian_gst ? $row->tax : $row->tax_code) . ')</small> ' : '') . $this->sma->formatMoney($it[$c]) . '</td>';
                                    }
                                    if ( $Settings->product_discount && $inv->product_discount != 0) {
                                        echo '<td style="width: 90px; text-align:right; vertical-align:middle;">' . ($row->discount != 0 ? '<small>(' . $row->discount . ')</small> ' : '') . $this->sma->formatMoney($row->item_discount) . '</td>';
                                    }
                                ?>
                                <td style="vertical-align:middle; text-align:right; width:110px;"><?= $this->sma->formatMoney($st[$c]); ?></td>
                            </tr>
                            <?php
                            $c++;
                            $r++;
                            $uni=$uni+$row->quantity;

                        
                        endforeach;

                            
                       
                        if ($return_rows) {
                            echo '<tr class="warning"><td colspan="'.($col+1).'" class="no-border"><strong>'."Devoluciones".'</strong></td></tr>';
                            foreach ($return_rows as $row):
                            ?>
                                <tr class="warning">
                                    <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                                    <td style="vertical-align:middle;"><p>
                                        <?= $row->product_code.' - '.$row->product_name . ($row->variant ? ' (' . $row->variant . ')' : ''); ?>
                                        <?= $row->second_name ? '<br>' . $row->second_name : ''; ?>
                                        <?= $row->details ? '<br>' . $row->details : ''; ?>
                                        <?= $row->serial_no ? '<br>' . $row->serial_no : ''; ?></p>
                                    </td>
                                    <?php if ($Settings->indian_gst) { ?>
                                    <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $row->hsn_code; ?></td>
                                    <?php } ?>
                                    <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $this->sma->formatQuantity($row->quantity).' '.$row->product_unit_code; ?></td>
                                    <td style="text-align:right; width:90px;"><?= $this->sma->formatMoney($row->unit_price); ?></td>
                                    <?php
                                    if ($Settings->tax1 && $inv->product_tax > 0) {
                                        echo '<td style="text-align:right; vertical-align:middle;">' . ($row->item_tax != 0 ? '<small>('.($Settings->indian_gst ? $row->tax : $row->tax_code).')</small>' : '') . ' ' . $this->sma->formatMoney($row->item_tax) . '</td>';
                                    }
                                    if ($Settings->product_discount && $inv->product_discount != 0) {
                                        echo '<td style="text-align:right; vertical-align:middle;">' . ($row->discount != 0 ? '<small>(' . $row->discount . ')</small> ' : '') . $this->sma->formatMoney($row->item_discount) . '</td>';
                                    }
                                    ?>
                                    <td style="text-align:right; width:110px;"><?= $this->sma->formatMoney($row->subtotal); ?></td>
                                </tr>
                                <?php
                                $r++;

                                
                           
                            endforeach;
                        }
                    ?>
                    </tbody>
                    <tfoot>

                    <?php if ($inv->grand_total != $inv->total) {
                        ?>
                        <tr> <td colspan="3" style="text-align:right;"><?= 'Total'; ?>
                                (<?= $default_currency->code; ?>)
                            </td>
                             <td colspan="1" style="text-align:right;"><?php  echo $gt; ?>
                             
                            </td>
                            <td></td>
                           
                            <?php
                                if ($Settings->tax1 && $inv->product_tax > 0) {
                                    echo '<td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->product_tax+$return_sale->product_tax) : $inv->product_tax) . '</td>';
                                }
                                if ( $Settings->product_discount && $inv->product_discount != 0) {
                                    echo '<td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->product_discount+$return_sale->product_discount) : $inv->product_discount) . '</td>';
                                }
                            ?>
                            <td style="text-align:right;"><?= $this->sma->formatMoney($return_sale ? (($inv->total + $inv->product_tax)+($return_sale->total + $return_sale->product_tax)) : ($inv->total + $inv->product_tax)); ?></td>
                        </tr>
                    <?php }
                    ?>
                    <?php
                    if ($return_sale) {
                        echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang("return_total") . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($return_sale->grand_total) . '</td></tr>';
                    }
                    if ($inv->surcharge != 0) {
                        echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang("return_surcharge") . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($inv->surcharge) . '</td></tr>';
                    }
                    ?>

                    <?php if ($Settings->indian_gst) {
                        if ($inv->cgst > 0) {
                            $cgst = $return_sale ? $inv->cgst + $return_sale->cgst : $inv->cgst;
                            echo '<tr><td colspan="' . $col . '" class="text-right">' . 'CGST' . ' (' . $default_currency->code . ')</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($cgst) : $cgst) . '</td></tr>';
                        }
                        if ($inv->sgst > 0) {
                            $sgst = $return_sale ? $inv->sgst + $return_sale->sgst : $inv->sgst;
                            echo '<tr><td colspan="' . $col . '" class="text-right">' . 'SGST' . ' (' . $default_currency->code . ')</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($sgst) : $sgst) . '</td></tr>';
                        }
                        if ($inv->igst > 0) {
                            $igst = $return_sale ? $inv->igst + $return_sale->igst : $inv->igst;
                            echo '<tr><td colspan="' . $col . '" class="text-right">' . 'IGST' . ' (' . $default_currency->code . ')</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($igst) : $igst) . '</td></tr>';
                        }
                    } ?>

                    <?php if ($inv->order_discount != 0) {
                        echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang('order_discount') . ' (' . $default_currency->code . ')</td><td style="text-align:right;">'.($inv->order_discount_id ? '<small>('.$inv->order_discount_id.')</small> ' : '') . $this->sma->formatMoney($return_sale ? ($inv->order_discount+$return_sale->order_discount) : $inv->order_discount) . '</td></tr>';
                    }
                    ?>
                    <?php if ($Settings->tax2 && $inv->order_tax != 0) {
                        echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . 'Impuesto de la Orden' . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->order_tax+$return_sale->order_tax) : $inv->order_tax) . '</td></tr>';
                    }
                    ?>
                    <?php if ($inv->shipping != 0) {
                        echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang('shipping') . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($inv->shipping) . '</td></tr>';
                    }
                    ?>
                    <tr>
                        <td colspan="6"
                            style="text-align:right; font-weight:bold;">Op. Gravada
                            (<?= $default_currency->code; ?>)
                        </td>
                        <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($inv->total); ?></td>
                    </tr>
                    <tr>
                        <td colspan="6"
                            style="text-align:right; font-weight:bold;">IGV
                            (<?= $default_currency->code; ?>)
                        </td>
                        <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($inv->total_tax); ?></td>
                    </tr>

                    <tr>
                        <td colspan="6"
                            style="text-align:right; font-weight:bold;"><?= 'Importe Total'?>
                            (<?= $default_currency->code; ?>)
                        </td>
                        <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total); ?></td>
                    </tr>

                    <tr>
                        <td colspan="6" style="text-align:right; font-weight:bold;"><?= lang('paid'); ?>
                            (<?= $default_currency->code; ?>)
                        </td>
                        <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid); ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right; font-weight:bold;"><?= 'Balance'; ?>
                            (<?= $default_currency->code; ?>)
                        </td>
                        <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney(($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total) - ($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid)); ?></td>
                    </tr>

                    </tfoot>
                </table>
            </div>
            <?= $Settings->invoice_view > 0 ? $this->gst->summary($rows, $return_rows, ($return_sale ? $inv->product_tax+$return_sale->product_tax : $inv->product_tax)) : ''; ?>
            </div>
            <div class="clearfix"></div>

                <div class="col-xs-12">
                    <?php if ($inv->note || $inv->note != '') { ?>
                        <h1>djfip</h1>
                        <div class="well well-sm">

                            <p class="bold">yufftututy:</p>

                            <div><?= $this->sma->decode_html($inv->note); ?></div>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-4 pull-left">

                    <p style="height: 80px;"><?= lang('seller'); ?>
                        : <?= $biller->company != '-' ? $biller->company : $biller->name; ?> </p>
                    <hr>
                    <p><?= lang('stamp_sign'); ?></p>
                </div>
                <div class="col-xs-4 pull-right">
                    <p style="height: 80px;"><?= lang('customer'); ?>
                        : <?= $customer->company ? $customer->company : $customer->name; ?> </p>
                    <hr>
                    <p><?= lang('stamp_sign'); ?></p>
                    
                    <!--<p><?php var_dump($inv) ?></p>-->
                    <!--<img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo 'trd' ?>" title="Codigo qr" />--> 
                    <?php if ($customer->award_points != 0 && $Settings->each_spent > 0) { ?>
                        <div class="well well-sm">
                            <?=
                            '<p>'.'Esta Venta'.': '.floor(($inv->grand_total/$Settings->each_spent)*$Settings->ca_point)
                            .'<br>'.
                            'Total'.' '.'Puntos Bonus'.': '. $customer->award_points . '</p>';?>
                        </div>
                      

                    <?php } ?>
                </div>

                <div class="clearfix"></div>
        </div class="col-xs-12">
        <div class="text-left">
                 <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $inv->cod_qr ?>" title="Codigo qr" />    
        </div>

    </div>
</div>
</body>
</html>
