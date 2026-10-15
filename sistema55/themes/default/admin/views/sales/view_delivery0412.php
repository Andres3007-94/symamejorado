<?php defined('BASEPATH');


 ?>
 <?php 

  ?>
<div class="modal-dialog modal-lg no-modal-header">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-2x">&times;</i>
            </button>
            <button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
                <i class="fa fa-print"></i> <?= lang('print'); ?>
            </button>
            <?php if ($logo) { ?>
                <div class="text-center" style="margin-bottom:20px;">
                    <img src="<?= base_url() . 'assets/uploads/logos/' . $biller->logo; ?>"
                         alt="<?= $biller->company != '-' ? $biller->company : $biller->name; ?>">
                </div>
            <?php } ?>
            <?php require_once 'guia.php';
            
             ?>
            <div class="table-responsive">
                <table class="table table-bordered">

                    <tbody>
                    <tr>
                        <td width="30%"><?= "Fecha"; ?></td>
                        <td width="70%"><?= $this->sma->hrld($delivery->date); ?></td>
                    </tr>
                    <tr>
                        <td><?= "Empresa de envio" ?></td>
                        <td><?= $delivery->do_reference_no; ?></td>
                    </tr>
                    <tr>
                        <td><?= "Factura Asociada"; ?></td>
                        <td><?= $delivery->sale_reference_no; ?></td>
                    </tr>
                    <tr>
                        <td><?= "Cliente"; ?></td>
                        <td><?= $delivery->customer; ?></td>
                    </tr>
                    <tr>
                        <td><?= "Dirección"; ?></td>
                        <td><?= $delivery->address; ?></td>
                    </tr>
                    <tr>
                        <td><?= lang("status"); ?></td>
                        <td><?= lang($delivery->status); ?></td>
                    </tr>
                    <?php  ?>
                        <tr>

                            <td><?= "Link"; ?></td>
                            <td><a href=<?= $link.".pdf"; ?>><?= $link.".pdf"; ?></a></td>
                        </tr>
                    <?php  ?>
                    </tbody>

                </table>
            </div>
            <h3><?= lang("items"); ?></h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center; vertical-align:middle;"><?= "No"; ?></th>
                            <th style="vertical-align:middle;"><?= lang("description"); ?></th>
                            <th style="text-align:center; vertical-align:middle;"><?= lang("quantity"); ?></th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php $r = 1;
                    foreach ($rows as $row): ?>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                            <td style="vertical-align:middle;">
                                <?= $row->product_code ." - " .$row->product_name .($row->variant ? ' (' . $row->variant . ')' : '');
                                if ($row->details) {
                                    echo '<br><strong>' . lang("product_details") . '</strong> ' .
                                    html_entity_decode($row->details);
                                }
                                ?>
                            </td>
                            <td style="width: 150px; text-align:center; vertical-align:middle;"><?= $this->sma->formatQuantity($row->unit_quantity).' '.$row->product_unit_code; ?></td>
                        </tr>
                        <?php
                        $r++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>

            <?php if ($delivery->status == 'delivered') { ?>
            <div class="row">
                <div class="col-xs-4">
                    <p><?= lang("prepared_by"); ?>:<br> <?= $user->first_name . ' ' . $user->last_name; ?> </p>
                </div>
                <div class="col-xs-4">
                    <p><?= lang("delivered_by"); ?>:<br> <?= $delivery->delivered_by; ?></p>
                </div>
                <div class="col-xs-4">
                    <p><?= lang("received_by"); ?>:<br> <?= $delivery->received_by; ?></p>
                </div>
            </div>
            <?php } else { ?>
            <div class="row">
                <div class="col-xs-4">
                    <p style="height:80px;"><?= lang("prepared_by"); ?>
                        : <?= $user->first_name . ' ' . $user->last_name; ?> </p>
                    <hr>
                    <p><?= lang("stamp_sign"); ?></p>
                </div>
                <div class="col-xs-4">
                    <p style="height:80px;"><?= lang("delivered_by"); ?>: </p>
                    <hr>
                    <p><?= lang("stamp_sign"); ?></p>
                </div>
                <div class="col-xs-4">
                    <p style="height:80px;"><?= lang("received_by"); ?>: </p>
                    <hr>
                    <p><?= lang("stamp_sign"); ?></p>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>

