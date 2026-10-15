<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?>
<script>
    $(document).ready(function () {
        oTable = $('#REData').dataTable({
            "aaSorting": [[1, "desc"], [2, "desc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "<?=lang('all')?>"]],
            "iDisplayLength": <?=$Settings->rows_per_page?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?=admin_url('returns/getReturns' . ($warehouse_id ? '/' . $warehouse_id : '')); ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?=$this->security->get_csrf_token_name()?>",
                    "value": "<?=$this->security->get_csrf_hash()?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                nRow.id = aData[0];
                nRow.className = "oreturn_link";
                return nRow;
            },
            "aoColumns": [{"bSortable": false,"mRender": checkbox}, {"mRender": fld}, null, null , null, {"mRender": currencyFormat}, {"bSortable": false,"mRender": attachment},{"mRender": sunat_status}, {"bSortable": false}],
            "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
                var gtotal = 0;
                for (var i = 0; i < aaData.length; i++) {
                    gtotal += parseFloat(aaData[aiDisplay[i]][5]);
                }
                var nCells = nRow.getElementsByTagName('th');
                nCells[5].innerHTML = currencyFormat(parseFloat(gtotal));
            }
        }).fnSetFilteringDelay().dtFilter([
            {column_number: 1, filter_default_label: "[<?='Fecha';?> (yyyy-mm-dd)]", filter_type: "text", data: []},
            {column_number: 2, filter_default_label: "[<?='N° de Referecia';?>]", filter_type: "text", data: []},
            {column_number: 3, filter_default_label: "[<?=lang('biller');?>]", filter_type: "text", data: []},
            {column_number: 4, filter_default_label: "[<?=lang('customer');?>]", filter_type: "text", data: []},
			{column_number: 5, filter_default_label: "[<?='Estado';?>]", filter_type: "text", data: []},
        ], "footer");

        if (localStorage.getItem('remove_rels')) {
            if (localStorage.getItem('reitems')) {
                localStorage.removeItem('reitems');
            }
            if (localStorage.getItem('rediscount')) {
                localStorage.removeItem('rediscount');
            }
            if (localStorage.getItem('retax2')) {
                localStorage.removeItem('retax2');
            }
            if (localStorage.getItem('reref')) {
                localStorage.removeItem('reref');
            }
            if (localStorage.getItem('rewarehouse')) {
                localStorage.removeItem('rewarehouse');
            }
            if (localStorage.getItem('renote')) {
                localStorage.removeItem('renote');
            }
            if (localStorage.getItem('reinnote')) {
                localStorage.removeItem('reinnote');
            }
            if (localStorage.getItem('recustomer')) {
                localStorage.removeItem('recustomer');
            }
            if (localStorage.getItem('rebiller')) {
                localStorage.removeItem('rebiller');
            }
            if (localStorage.getItem('redate')) {
                localStorage.removeItem('redate');
            }
            localStorage.removeItem('remove_rels');
        }

        <?php if ($this->session->userdata('remove_rels')) {?>
        if (localStorage.getItem('reitems')) {
                localStorage.removeItem('reitems');
            }
            if (localStorage.getItem('rediscount')) {
                localStorage.removeItem('rediscount');
            }
            if (localStorage.getItem('retax2')) {
                localStorage.removeItem('retax2');
            }
            if (localStorage.getItem('reref')) {
                localStorage.removeItem('reref');
            }
            if (localStorage.getItem('rewarehouse')) {
                localStorage.removeItem('rewarehouse');
            }
            if (localStorage.getItem('renote')) {
                localStorage.removeItem('renote');
            }
            if (localStorage.getItem('reinnote')) {
                localStorage.removeItem('reinnote');
            }
            if (localStorage.getItem('recustomer')) {
                localStorage.removeItem('recustomer');
            }
            if (localStorage.getItem('rebiller')) {
                localStorage.removeItem('rebiller');
            }
            if (localStorage.getItem('redate')) {
                localStorage.removeItem('redate');
            }
        <?php $this->sma->unset_data('remove_rels');}
        ?>

        $(document).on('click', '.reedit', function (e) {
            if (localStorage.getItem('reitems')) {
                e.preventDefault();
                var href = $(this).attr('href');
                bootbox.confirm("<?=lang('you_will_loss_return_data')?>", function (result) {
                    if (result) {
                        window.location.href = href;
                    }
                });
            }
        });
    });

</script>

<?php if ($Owner || $GP['bulk_actions']) {
        echo admin_form_open('returns/return_actions', 'id="action-form"');
    }
?>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i
                class="fa-fw fa fa-random"></i><?= "Notas de Credito" . ' (' . ($warehouse_id ? $warehouse->name : lang('all_warehouses')) . ')';?>
        </h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon fa fa-tasks tip" data-placement="left" title="<?=lang("actions")?>"></i>
                    </a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li>
                            <a href="<?=admin_url('returns/add')?>">
                                <i class="fa fa-plus"></i> Añadir Nota de Crédito
                            </a>
                        </li>
                        <li>
                            <a href="#" id="excel" data-action="export_excel">
                                <i class="fa fa-file-excel-o"></i> <?=lang('export_to_excel')?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                </li>
                <?php if (!empty($warehouses)) {
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-building-o tip" data-placement="left" title="<?=lang("warehouses")?>"></i></a>
                        <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                            <li><a href="<?=admin_url('returns')?>"><i class="fa fa-building-o"></i> <?=lang('all_warehouses')?></a></li>
                            <li class="divider"></li>
                            <?php
                                foreach ($warehouses as $warehouse) {
                                        echo '<li><a href="' . admin_url('returns/' . $warehouse->id) . '"><i class="fa fa-building"></i>' . $warehouse->name . '</a></li>';
                                    }
                                ?>
                        </ul>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext"><?=lang('list_results');?></p>

                <div class="table-responsive">
                    <table id="REData" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th><?= "Fecha"; ?></th>
                            <th><?= "'N° de Referecia"; ?></th>
                            <th><?= lang("biller"); ?></th>
                            <th><?= "Cliente"; ?></th>
                            <th><?= "Total"; ?></th>
                            <th style="min-width:30px; width: 30px; text-align: center;"><i class="fa fa-chain"></i></th>
							<th><?= "Estado"; ?></th>
                            <th style="width:80px; text-align:center;"><?= lang("actions"); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="9" class="dataTables_empty"><?= lang("loading_data"); ?></td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th></th><th></th><th></th><th></th>
                            <th><?= "Total"; ?></th>
                            <th style="min-width:30px; width: 30px; text-align: center;"><i class="fa fa-chain"></i></th>
							<th></th>
                            <th style="width:80px; text-align:center;"><?= lang("actions"); ?> </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script> window.jQuery || document.write('<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js">\x3C/script>')</script> 
	<script> window.jQuery || document.write('<script src="<?=$assets?>js/jquery-2.2.4.min.js">\x3C/script>')</script> 



<?php if ($Owner || $GP['bulk_actions']) {?>
    <div style="display: none;">
        <input type="hidden" name="form_action" value="" id="form_action"/>
        <?=form_submit('performAction', 'performAction', 'id="action-form-submit"')?>
    </div>
    <?=form_close()?>
<?php }
?>
