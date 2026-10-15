<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-2x">&times;</i>
            </button>
            <button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
                <i class="fa fa-print"></i> <?= lang('print'); ?>
            </button>
            <h4 class="modal-title" id="myModalLabel"><?= 'Empaquetado'; ?></h4>
        </div>
        <div class="modal-body">
        <div class="well well-sm">
            <?= lang('biller').': '.$sale->biller; ?><br>
            <?= 'Referencia'.': '.$sale->reference_no; ?><br>
            <?= 'Almacen'.': '.$warehouse->name.' ('.$warehouse->code.')'; ?>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= 'Nombre'; ?></th>
                        <th><?= 'Cantidad'; ?></th>
                        <th><?= lang('rack'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    
            <?php foreach ($packaging as $item) {
                echo '<tr>';
                echo '<td>'.$item['name'].'</td>';
                echo '<td>'.$item['quantity'].'</td>';
                echo '<td>'.$item['rack'].'</td>';
                echo '</tr>';
            } ?>         
                </tbody>
            </table>
        </div>
            

        </div>
    </div>
</div>
