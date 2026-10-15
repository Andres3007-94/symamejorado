<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">&times;</i>
            </button>
            <h4 class="modal-title" id="myModalLabel"><?php echo lang('import_by_csv'); ?></h4>
        </div>
        <?php $attrib = array('data-toggle' => 'validator', 'role' => 'form');
        echo admin_form_open_multipart("suppliers/import_csv", $attrib); ?>
        <div class="modal-body">
            <p><?= lang('enter_info'); ?></p>

            <div class="well well-small">
                <a href="<?php echo base_url(); ?>assets/csv/sample.csv" class="btn btn-primary pull-right"><i
                        class="fa fa-download"></i> Descargar Archivo de Muestra</a>
                <span class="text-warning"><?= lang("csv1"); ?></span><br/><?= lang("csv2"); ?> <span class="text-info">(<?= "Empresa" . ', ' . "Nombre" . ', ' . "Email" . ', ' . "Teléfono" . ', ' . "Dirección" . ', ' . lang("city"); ?>
                    ,  <?= lang("state") . ', ' . lang("postal_code") . ', ' . lang("country") . ', ' . "Número de RUC" . ', ' . "GST" . ', ' . lang("scf1") . ', ' . lang("scf2") . ', ' . lang("scf3") . ', ' . lang("scf4") . ', ' . lang("scf5") . ', ' . lang("scf6"); ?>
                    )</span> <?= lang("csv3"); ?><br>
                <p class="text-success"><?= lang('first_6_required'); ?></p>
                <span class="text-primary"><?= lang('csv_update_tip'); ?></span>
            </div>
            <div class="form-group">
                <?= lang("upload_file", "csv_file") ?>
                <input id="csv_file" type="file" data-browse-label="<?= 'Vista'; ?>" name="csv_file" data-bv-notempty="true" data-show-upload="false"
                       data-show-preview="false" class="form-control file">
            </div>
        </div>
        <div class="modal-footer">
            <?php echo form_submit('import', lang('import'), 'class="btn btn-primary"'); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script type="text/javascript" src="<?= $assets ?>js/custom.js"></script>
<?= $modal_js ?>
