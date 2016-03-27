<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax CRUD with Bootstrap modals and Datatables</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
 
    <div class="container">
        <h1>SunatApp - Administración</h1>

        <h3>Promociones</h3>
        <br />
        <button class="btn btn-success" onclick="add_promocion()"><i class="glyphicon glyphicon-plus"></i> Agregar Promoción</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>Título</th>
                  <th>Empresa</th>
                  <th>Desc. Empresa</th>
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Desc. Descuento</th>
                  <th>Desc. Restricción</th>
                  <th>Imagen</th>
                  <th style="width:125px;">Acción</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
              <tr>
                <th>Título</th>
                <th>Empresa</th>
                <th>Desc. Empresa</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Desc. Descuento</th>
                <th>Desc. Restricción</th>
                <th>Imagen</th>
                <th>Acción</th>
              </tr>
            </tfoot>
        </table>
    </div>
 
    <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

    <script type="text/javascript">
 
        var save_method; //for save method string
        var table;
        $(document).ready(function() {
            table = $('#table').DataTable({

                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('promocion/ajax_list')?>",
                    "type": "POST"
                },

                //Set column definition initialisation properties.
                "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
                ],

            });
        });

        function add_promocion()
        {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
            $('.modal-title').text('Add Promocion'); // Set Title to Bootstrap modal title
        }

        function edit_promocion(id)
        {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals

            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('promocion/ajax_edit/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {

                    $('[name="id"]').val(data.id);
                    $('[name="empresa"]').val(data.empresa);
                    $('[name="desc_empresa"]').val(data.desc_empresa);
                    $('[name="direccion"]').val(data.direccion);
                    $('[name="telefono"]').val(data.telefono);
                    $('[name="desc_descuento"]').val(data.desc_descuento);
                    $('[name="desc_restriccion"]').val(data.desc_restriccion);
                    $('[name="imagen"]').val(data.imagen);

                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Promocion'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function reload_table()
        {
          table.ajax.reload(null,false); //reload datatable ajax
        }

        function save()
        {
            var url;
            if(save_method == 'add')
            {
                url = "<?php echo site_url('promocion/ajax_add')?>";
            }
            else
            {
              url = "<?php echo site_url('promocion/ajax_update')?>";
            }

            // ajax adding data to database
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                   //if success close modal and reload ajax table
                   $('#modal_form').modal('hide');
                   reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function delete_promocion(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
                // ajax delete data to database
                $.ajax({
                    url : "<?php echo site_url('promocion/ajax_delete')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        //if success reload ajax table
                        $('#modal_form').modal('hide');
                        reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });

            }
        }
 
    </script>
 
    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Promocion Form</h3>
                </div>
                
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id"/>
                        <div class="form-body">
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Empresa</label>
                                <div class="col-md-9">
                                    <input name="empresa" placeholder="Empresa" class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Desc Empresa</label>
                                <div class="col-md-9">
                                    <input name="desc_empresa" placeholder="Desc Empresa" class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Dirección</label>
                                <div class="col-md-9">
                                    <input name="direccion" placeholder="Direccion" class="form-control" type="text">
                                </div>
                            </div>
                            
                            <!--
                            <div class="form-group">
                                <label class="control-label col-md-3">Gender</label>
                                <div class="col-md-9">
                                    <select name="gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            -->
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Teléfono</label>
                                <div class="col-md-9">
                                    <textarea name="telefono" placeholder="Telefono"class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Desc. Descuento</label>
                                <div class="col-md-9">
                                    <textarea name="desc_descuento" placeholder="Desc Descuento"class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Desc Restricción</label>
                                <div class="col-md-9">
                                    <input name="desc_restriccion" placeholder="Desc Restriccion" class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Imagen</label>
                                <div class="col-md-9">
                                    <input name="imagen" placeholder="Imagen" class="form-control" type="text">
                                </div>
                            </div>
                            
                            <!--
                            <div class="form-group">
                                <label class="control-label col-md-3">Date of Birth</label>
                                <div class="col-md-9">
                                    <input name="dob" placeholder="yyyy-mm-dd" class="form-control" type="text">
                                </div>
                            </div>
                            -->
                            
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
    </body>
</html>