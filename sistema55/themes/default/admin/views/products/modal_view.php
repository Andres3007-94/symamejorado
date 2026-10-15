<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="fa fa-2x">&times;</i>
        </button>
        <button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
            <i class="fa fa-print"></i> <?= lang('print'); ?>
        </button>
        <h4 class="modal-title" id="myModalLabel"><?= $product->name.(SHOP && $product->hide != 1 ? ' ('.lang('shop_views').': '.$product->views.')' : ''); ?></h4>
    </div>
        <div class="modal-body">

            <div class="row">
<div class="col-xs-5">
    <?php
    // Obtener SKU desde la categoría
    $sku = !empty($product->category_id) ? $this->site->getCategoryByID($product->category_id)->name : '';

    // Inicializar URL de imagen
    $main_image_url = base_url('assets/uploads/no_image.png');

    if (!empty($sku)) {
        // Conexión a la base de datos de WordPress
        $conn = new mysqli('localhost', 'wp833', '@E315dcSfb.2(-p!', 'wp833');
        if ($conn->connect_error) {
            echo "Error de conexión a WordPress: " . $conn->connect_error;
        } else {
            // Convertimos a minúsculas para coincidencia insensible a mayúsculas
            $sku_lc = strtolower($sku);
            $sku_esc = $conn->real_escape_string($sku_lc);

            // Buscar la imagen que contenga SKU_1
            $sql = "
                SELECT meta_value
                FROM wpj9_postmeta pm
                INNER JOIN wpj9_posts p ON pm.post_id = p.ID
                WHERE p.post_type = 'attachment'
                  AND pm.meta_key = '_wp_attached_file'
                  AND LOWER(pm.meta_value) LIKE '%{$sku_esc}_1.%'
                ORDER BY pm.meta_value ASC
                LIMIT 1
            ";
            $result = $conn->query($sql);

            if ($result && $row = $result->fetch_assoc()) {
                $ruta_relativa = $row['meta_value'];
                $main_image_url = "https://www.kaimanwatch.pe/wp-content/uploads/" . $ruta_relativa;
            }

            $conn->close();
        }
    }
    ?>
    <img id="pr-image" src="<?= $main_image_url ?>" alt="<?= $product->name ?>" class="img-responsive img-thumbnail"/>

    <div id="multiimages" class="padding10">
        <?php if (!empty($images)) {
            // Mostrar la imagen principal como primer thumbnail
            echo '<a class="img-thumbnail change_img" href="' . $main_image_url . '" style="margin-right:5px;">
                    <img class="img-responsive" src="' . $main_image_url . '" alt="' . $sku . '" style="width:' . $Settings->twidth . 'px; height:' . $Settings->theight . 'px;" />
                  </a>';

            // Mostrar las demás imágenes del producto
            foreach ($images as $ph) {
                echo '<div class="gallery-image">
                        <a class="img-thumbnail change_img" href="' . base_url() . 'assets/uploads/' . $ph->photo . '" style="margin-right:5px;">
                            <img class="img-responsive" src="' . base_url() . 'assets/uploads/thumbs/' . $ph->photo . '" alt="' . $ph->photo . '" style="width:' . $Settings->twidth . 'px; height:' . $Settings->theight . 'px;" />
                        </a>';
                if ($Owner || $Admin || $GP['products-edit']) {
                    echo '<a href="#" class="delimg" data-item-id="'.$ph->id.'"><i class="fa fa-times"></i></a>';
                }
                echo '</div>';
            }
        } ?>
        <div class="clearfix"></div>
    </div>
</div>


                <div class="col-xs-7">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped dfTable table-right-left">
                            <tbody>
                                <tr>
                                    <td colspan="2" style="background-color:#FFF;"></td>
                                </tr>
                                <tr>
                                 
                                    
                                      
                                    </td>
                                </tr>
                                <tr>
                                    <td><?='Tipo'?></td>
                                    <td><?= lang($product->type); ?></td>
                                </tr>
                                <tr>
                                    <td><?= "Nombre"; ?></td>
                                    <td><?= $product->name; ?></td>
                                </tr>
                                <tr>
                                    <td><?= 'Código De barras'; ?></td>
                                    <td><?= $product->code; ?></td>
                                </tr>
                                <tr>
                                    <td><?= lang("brand"); ?></td>
                                    <td><?= $brand ? $brand->name : ''; ?></td>
                                </tr>
                                <tr>
                                    <td><?= lang("category"); ?></td>
                                    <td><?= $category->name; ?></td>
                                </tr>
                                <?php if ($product->subcategory_id) { ?>
                                    <tr>
                                        <td><?= lang("subcategory"); ?></td>
                                        <td><?= $subcategory->name; ?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td><?= lang("unit"); ?></td>
                                        <td><?= $unit ? $unit->name.' ('.$unit->code.')' : ''; ?></td>
                                    </tr>
                                    <?php if ($Owner || $Admin) {
                                        echo '<tr><td>' . lang("cost") . '</td><td>' . $this->sma->formatMoney($product->cost) . '</td></tr>';
                                        echo '<tr><td>' . lang("price") . '</td><td>' . $this->sma->formatMoney($product->price) . '</td></tr>';
                                        if ($product->promotion) {
                                            echo '<tr><td>' . lang("promotion") . '</td><td>' . $this->sma->formatMoney($product->promo_price) . ' ('.$this->sma->hrsd($product->start_date).' - '.$this->sma->hrsd($product->end_date).')</td></tr>';
                                        }
                                    } else {
                                        if ($this->session->userdata('show_cost')) {
                                            echo '<tr><td>' . lang("cost") . '</td><td>' . $this->sma->formatMoney($product->cost) . '</td></tr>';
                                        }
                                        if ($this->session->userdata('show_price')) {
                                            echo '<tr><td>' . lang("price") . '</td><td>' . $this->sma->formatMoney($product->price) . '</td></tr>';
                                            if ($product->promotion) {
                                                echo '<tr><td>' . lang("promotion") . '</td><td>' . $this->sma->formatMoney($product->promo_price) . ' ('.$this->sma->hrsd($product->start_date).' - '.$this->sma->hrsd($product->end_date).')</td></tr>';
                                            }
                                        }
                                    }
                                    ?>

                                    <?php if ($product->tax_rate) { ?>
                                    <tr>
                                        <td><?= lang("tax_rate"); ?></td>
                                        <td><?= $tax_rate->name; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= lang("tax_method"); ?></td>
                                        <td><?= $product->tax_method == 0 ? 'Precio Incluido IGV' : 'Precio sin IGV'; ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if ($product->alert_quantity != 0) { ?>
                                    <tr>
                                        <td><?= lang("alert_quantity"); ?></td>
                                        <td><?= $this->sma->formatQuantity($product->alert_quantity); ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if ($variants) { ?>
                                    <tr>
                                        <td><?= lang("product_variants"); ?></td>
                                        <td><?php foreach ($variants as $variant) {
                                            echo '<span class="label label-primary">' . $variant->name . '</span> ';
                                        } ?></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <?php if ($product->cf1 || $product->cf2 || $product->cf3 || $product->cf4 || $product->cf5 || $product->cf6) { ?>
                                <h3 class="bold">Detalles</h3>
                                <div class="table-responsive">
                                    <table
                                    class="table table-bordered table-striped table-condensed dfTable two-columns">
                                    <thead>
                                        <tr>
                                            <th>Detalle</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($product->cf1) {
                                            echo '<tr><td>' . "GENERO" . '</td><td>' . $product->cf1 . '</td></tr>';
                                        }
                                        if ($product->cf2) {
                                            echo '<tr><td>' . "USA" . '</td><td>' . $product->cf2 . '</td></tr>';
                                        }
                                        if ($product->cf3) {
                                            echo '<tr><td>' . "EUR" . '</td><td>' . $product->cf3 . '</td></tr>';
                                        }
                                        if ($product->cf4) {
                                            echo '<tr><td>' . "RETAIL" . '</td><td>' . $product->cf4 . '</td></tr>';
                                        }
                                        if ($product->price) {
                                            echo '<tr><td>' . "PRECIO DE VENTA" . '</td><td>' . $product->price . '</td></tr>';
                                        }
                                        if ($product->rebajado) {
                                            echo '<tr><td>' . "REBAJADO" . '</td><td>' . $product->rebajado . '</td></tr>';
                                        }
                                        if ($product->precio_asesor) {
                                            echo '<tr><td>' . "ASESOR" . '</td><td>' . $product->precio_asesor . '</td></tr>';
                                        }
                                        if ($product->precio_mayorista) {
                                            echo '<tr><td>' . "MAYORISTA" . '</td><td>' . $product->precio_mayorista . '</td></tr>';
                                        }
                                        if ($product->falabella) {
                                            echo '<tr><td>' . "FALABELLA" . '</td><td>' . $product->falabella . '</td></tr>';
                                        }
                                        if ($product->ripley) {
                                            echo '<tr><td>' . "RIPLEY" . '</td><td>' . $product->ripley . '</td></tr>';
                                        }
                                        if ($product->intercorp) {
                                            echo '<tr><td>' . "INTERCORP" . '</td><td>' . $product->intercorp . '</td></tr>';
                                        }
                                        if ($product->mercado) {
                                            echo '<tr><td>' . "MERCADO LIBRE" . '</td><td>' . $product->mercado . '</td></tr>';
                                        }
                                        if ($product->juntoz) {
                                            echo '<tr><td>' . "JUNTOZ" . '</td><td>' . $product->juntoz . '</td></tr>';
                                        }
                                        if ($product->cf5) {
                                            echo '<tr><td>' . "TIPO DE PRODUCTO" . '</td><td>' . $product->cf5 . '</td></tr>';
                                        }
                                        if ($product->cf6) {
                                            echo '<tr><td>' . "DEPORTE" . '</td><td>' . $product->cf6 . '</td></tr>';
                                        }
                                        if ($product->cf7) {
                                            echo '<tr><td>' . "UBICACIÓN" . '</td><td>' . $product->cf7 . '</td></tr>';
                                        }
                                        if ($product->cf8) {
                                            echo '<tr><td>' . "ESTADO SUNAT" . '</td><td>' . $product->cf8 . '</td></tr>';
                                        }
                                        if ($product->cf9) {
                                            echo '<tr><td>' . "FECHA DE INGRESO" . '</td><td>' . $product->cf9 . '</td></tr>';
                                        }
                                        if ($product->cf10) {
                                            echo '<tr><td>' . "ESTADO" . '</td><td>' . $product->cf10 . '</td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>

                            <?php if ((!$Supplier || !$Customer) && !empty($warehouses) && $product->type == 'standard') { ?>
                            <h3 class="bold"><?= lang('warehouse_quantity') ?></h3>
                            <div class="table-responsive">
                                <table
                                class="table table-bordered table-striped table-condensed dfTable two-columns">
                                <thead>
                                    <tr>
                                        <th><?= lang('warehouse_name') ?></th>
                                        <th><?= 'Cantidad' . ' (' . lang('rack') . ')'; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($warehouses as $warehouse) {
                                        if ($warehouse->quantity != 0) {
                                            echo '<tr><td>' . $warehouse->name . ' (' . $warehouse->code . ')</td><td><strong>' . $this->sma->formatQuantity($warehouse->quantity) . '</strong>' . ($warehouse->rack ? ' (' . $warehouse->rack . ')' : '') . '</td></tr>';
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xs-7">
                        <?php if ($product->type == 'combo') { ?>
                        <h3 class="bold"><?= lang('combo_items') ?></h3>
                        <div class="table-responsive">
                            <table
                            class="table table-bordered table-striped table-condensed dfTable two-columns">
                            <thead>
                                <tr>
                                    <th><?= 'Nombre del Producto' ?></th>
                                    <th><?= 'Cantidad' ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($combo_items as $combo_item) {
                                    echo '<tr><td>' . $combo_item->name . ' (' . $combo_item->code . ') </td><td>' . $this->sma->formatQuantity($combo_item->qty) . '</td></tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
                    <?php if (!empty($options)) { ?>
                    <h3 class="bold"><?= lang('product_variants_quantity'); ?></h3>
                    <div class="table-responsive">
                        <table
                        class="table table-bordered table-striped table-condensed dfTable">
                        <thead>
                            <tr>
                                <th><?= lang('warehouse_name') ?></th>
                                <th><?= lang('product_variant'); ?></th>
                                <th><?= 'Cantidad' . ' (' . lang('rack') . ')'; ?></th>
                                <?php if ($Owner || $Admin) {
                                    echo '<th>' . 'Precio Adicional' . '</th>';
                                } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($options as $option) {
                                if ($option->wh_qty != 0) {
                                    echo '<tr><td>' . $option->wh_name . '</td><td>' . $option->name . '</td><td class="text-center">' . $this->sma->formatQuantity($option->wh_qty) . '</td>';
                                    if ($Owner || $Admin && (!$Customer || $this->session->userdata('show_cost'))) {
                                        echo '<td class="text-right">' . $this->sma->formatMoney($option->price) . '</td>';
                                    }
                                    echo '</tr>';
                                }

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">

        <?= $product->details ? '<div class="panel panel-success"><div class="panel-heading">' . lang('product_details_for_invoice') . '</div><div class="panel-body">' . $product->details . '</div></div>' : ''; ?>
        <?= $product->product_details ? '<div class="panel panel-primary"><div class="panel-heading">' . lang('product_details') . '</div><div class="panel-body">' . $product->product_details . '</div></div>' : ''; ?>

    </div>
</div>
<?php if (!$Supplier || !$Customer) { ?>
    <div class="buttons">
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="<?= admin_url('products/print_barcodes/' . $product->id) ?>" class="tip btn btn-primary" title="<?= lang('print_barcode_label') ?>">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"><?= lang('print_barcode_label') ?></span>
                </a>
            </div>
            <div class="btn-group">
                <a href="<?= admin_url('products/pdf/' . $product->id) ?>" class="tip btn btn-primary" title="<?= lang('pdf') ?>">
                    <i class="fa fa-download"></i>
                    <span class="hidden-sm hidden-xs"><?= lang('pdf') ?></span>
                </a>
            </div>
            <div class="btn-group">
                <a href="<?= admin_url('products/edit/' . $product->id) ?>" class="tip btn btn-warning tip" title="<?= lang('edit_product') ?>">
                    <i class="fa fa-edit"></i>
                    <span class="hidden-sm hidden-xs"><?= lang('edit') ?></span>
                </a>
            </div>
            <div class="btn-group">
                <a href="#" class="tip btn btn-danger bpo" title="<b><?= lang("delete_product") ?></b>"
                    data-content="<div style='width:150px;'><p><?= '¿Estás Seguro?' ?></p><a class='btn btn-danger' href='<?= admin_url('products/delete/' . $product->id) ?>'><?= 'Estoy Seguro' ?></a> <button class='btn bpo-close'><?= 'No' ?></button></div>"
                    data-html="true" data-placement="top">
                    <i class="fa fa-trash-o"></i>
                    <span class="hidden-sm hidden-xs"><?= lang('delete') ?></span>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.tip').tooltip();
    });
    </script>
<?php } ?>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.change_img').click(function(event) {
        event.preventDefault();
        var img_src = $(this).attr('href');
        $('#pr-image').attr('src', img_src);
        return false;
    });
});
</script>
