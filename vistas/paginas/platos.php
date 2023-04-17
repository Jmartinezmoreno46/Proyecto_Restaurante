<div class="content-wrapper" style="min-height: 717px;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Administrar Platos</h1>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h1 class="box-title">Platos <button class="btn btn-success" id="btnagregar"
                            onclick="mostrarelformulario(true)"><i class="fa fa-plus-circle"></i>
                            Agregar</button>
                    </h1>
                    <div class="box-tools pull-right">
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- centro -->
                <div class="panel-body table-responsive" id="listadoregistros">
                    <table id="tablalistadoplato"
                        class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Código</th>
                            <th>Stock</th>
                            <th>Imagen</th>
                        </tfoot>
                    </table>
                </div>



                <div class="card-body" id="formularioregistros">
                    <form name="formularioplato" id="formularioplato" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>nombre</label>
                                    <input type="text" class="form-control" name="nombrep" id="nombrep"
                                        placeholder="escribir nombre" required>
                                </div>
                            </div>


                           

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>descripcion</label>
                                    <input type="text" class="form-control" name="descripcionp"
                                        id="descripcionp" placeholder="escribir descripcion" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>precio</label>
                                    <input type="text" class="form-control" name="preciop" id="preciop"
                                        placeholder="precio del plato" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>imagen</label>
                                                <input type="file" class="form-control" name="imagen" id="imagen">
                                                <input type="hidden" name="imagenactual" id="imagenactual"><br>
                                                <img src="" width="150px" height="120px" id="imagenmuestra">
                                            </div>
                            </div>



                        </div>

                       
                        <input type="hidden" name="Id_P" id="idplat">

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardarPlato"><i
                                    class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarformulario()" type="button"><i
                                    class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        </div>




                    </form>
                </div>






                <!--Fin centro -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

    <!-- /.modal-dialog -->
</div>