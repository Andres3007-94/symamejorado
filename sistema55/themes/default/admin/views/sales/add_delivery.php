<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); 

?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">&times;</i>
            </button>
            <h4 class="modal-title" id="myModalLabel"><?php echo 'Guía de Remisión'; ?></h4>
        </div>
        <?php $attrib = array('data-toggle' => 'validator', 'role' => 'form');
        echo admin_form_open_multipart("sales/add_delivery/".$inv->id, $attrib); ?>
        <div class="modal-body">
            <p><?= lang('enter_info'); ?></p>

            <div class="row">
                <div class="col-md-6">
                    <?php if ($Owner || $Admin) { ?>
                        <div class="form-group">
                            <?= lang("date", "date"); ?>
                            <?= form_input('date', (isset($_POST['date']) ? $_POST['date'] : ""), 'class="form-control datetime" id="date" required="required"'); ?>
                        </div>
                        <div class="form-group">
                            <?= lang("Fecha De Traslado"); ?>
                            <?= form_input('date', (isset($_POST['date']) ? $_POST['date'] : ""), 'class="form-control datetime" id="date" required="required"'); ?>
                        </div>
                        <div class="form-group">
                            <?= lang("Fecha De Inicio De Traslado"); ?>
                            <?= form_input('date', (isset($_POST['date']) ? $_POST['date'] : ""), 'class="form-control datetime" id="date" required="required"'); ?>
                        </div>

                    <?php } ?>
                 
                    <div class="form-group">
                        <?= "Ubigeo";?>
                        <?php                 
                        $conn =  mysqli_connect("localhost", "alesport_sistema", "alesport_sistema", "alesport_sistema"); //LOCALHOST | USUARIO | PASS | DB
                        mysqli_set_charset($conn,'utf8');
                        $respuesta=mysqli_query($conn,"select * from sma_ubigeo");
                        
                        $dato=array('ubigeo'=>'Seleccione Ubigeo');
                        foreach ($respuesta as $res) {
                            $cod= $res['codigo'];
                            $ubigeo=$res['ubigeo'];
                            $dato[$cod]=$ubigeo;                          
                        }
                        
                        ?>
                        <?= form_dropdown('received_by', $dato, '', 'class="form-control" id="received_by" required="required" style="width:100%;"'); ?>
                    </div>

                    <div class="form-group">
                        <?= lang("sale_reference_no", "sale_reference_no"); ?>
                        <?= form_input('sale_reference_no', (isset($_POST['sale_reference_no']) ? $_POST['sale_reference_no'] : $inv->reference_no), 'class="form-control tip" id="sale_reference_no" required="required"'); ?>
                    </div>

                    
                    <input type="hidden" value="<?php echo $inv->id; ?>" name="sale_id"/>

                    <div class="form-group">
                        <?= lang("customer", "customer"); ?>
                        <?php echo form_input('customer', (isset($_POST['customer']) ? $_POST['customer'] : $customer->name), 'class="form-control" id="customer" required="required" '); ?>
                    </div>

                    <div class="form-group">
                        <?= lang("address", "address"); ?>
                        <?php
                        $av = (isset($_POST['address']) ? $_POST['address']
                            : (empty($address)
                                ? ($customer->address . " " . $customer->city . " " . $customer->state . " " . $customer->postal_code . " " . $customer->country . "<br>".lang('tel').": " . $customer->phone . " Email: " . $customer->email)
                                : ($address->line1.'<br>'.$address->line2.'<br>'.$address->city.' '.$address->city.'<br>'.$address->postal_code.' '.$address->country.'<br>'.lang('tel').': '.$address->phone)
                                )
                            );
                        echo form_textarea('address', $av, 'class="form-control" id="address" required="required"'); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    
                    <div class="form-group">
                        <?= "Estado";?>
                        <?php
                    
                       
                       
                        $opts = array('packing' => "Embalado", 'delivering' => "En proceso", 'delivered' => "Entregado");
                        ?>
                        <?= form_dropdown('status', $opts, '', 'class="form-control" id="status" required="required" style="width:100%;"'); ?>
                    </div>

                   <div class="form-group">
                        <?= "Documento del transportista (RUC/DNI)"; ?>
                        <?= form_input('doctransportista', (isset($_POST['doctransportista']) ? $_POST['doctransportista'] : ''), 'class="form-control" id="doctransportista"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "Denomicación transportista" ?>
                        <?= form_input('nomtransportista', (isset($_POST['nomtransportista']) ? $_POST['nomtransportista'] : $nomtransportista), 'class="form-control tip" id="nomtransportista"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "Dirección transportista" ?>
                        <?= form_input('dirtransportista', (isset($_POST['dirtransportista']) ? $_POST['dirtransportista'] : $dirtransportista), 'class="form-control tip" id="dirtransportista"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "DNI De Conductor(DNI)" ?>
                        <?= form_input('docconductor', (isset($_POST['docconductor']) ? $_POST['docconductor'] : $docconductor), 'class="form-control tip" id="docconductor"'); ?>
                    </div>
                     <div class="form-group">
                        <?= "Nombre De Conductor" ?>
                        <?= form_input('nomconductor', (isset($_POST['nomconductor']) ? $_POST['nomconductor'] : $nomconductor), 'class="form-control tip" id="nomconductor"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "Licencia De Conductor(XXXXXXXXX)" ?>
                        <?= form_input('licconductor', (isset($_POST['licconductor']) ? $_POST['licconductor'] : $licconductor), 'class="form-control tip" id="licconductor"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "Placa De Vehículo(ABC444)" ?>
                        <?= form_input('placa', (isset($_POST['placa']) ? $_POST['placa'] : $do_reference_no), 'class="form-control tip" id="placa"'); ?>
                    </div>
                    <div class="form-group">
                        <?= "Número de bultos(0)" ?>
                        <?= form_input('bultos', (isset($_POST['bultos']) ? $_POST['bultos'] : $do_reference_no), 'class="form-control tip" id="bultos"'); ?>
                    </div>

                    <div class="form-group">
                        <?= "Peso(0)" ?>
                        <?= form_input('peso', (isset($_POST['peso']) ? $_POST['peso'] : $do_reference_no), 'class="form-control tip" id="peso"'); ?>
                    </div>


                    <div class="form-group">
                        <?= lang("attachment", "attachment") ?>
                        <input id="attachment" type="file" data-browse-label="<?= 'Vista'; ?>" name="document" data-show-upload="false" data-show-preview="false" class="form-control file">
                    </div>

                    <div class="form-group">
                        <?= "Observacion"; ?>
                        <?php echo form_textarea('note', (isset($_POST['note']) ? $_POST['note'] : ""), 'class="form-control" id="note"'); ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <?php echo form_submit('add_delivery', 'Añadir Delivery', 'class="btn btn-primary"'); ?>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<script type="text/javascript" src="<?= $assets ?>js/custom.js"></script>
<script type="text/javascript" charset="UTF-8">
    $.fn.datetimepicker.dates['sma'] = <?=$dp_lang?>;
</script>
<?= $modal_js ?>
<script type="text/javascript" charset="UTF-8">
    $(document).ready(function () {
        $.fn.datetimepicker.dates['sma'] = <?=$dp_lang?>;
        $("#date").datetimepicker({
            format: site.dateFormats.js_ldate,
            fontAwesome: true,
            language: 'sma',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0
        }).datetimepicker('update', new Date());
    });
</script>
