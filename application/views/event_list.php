<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><?= $title ?></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php elseif ($this->session->flashdata('error')) : ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover" id="dataTables-evenement-list">
                <thead>
                    <tr>
                        <th>Nom_Event</th>
                        <th>Topic_Event</th>
                        <th>Host_Event</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users  as $row) : ?>
                        <tr>
                            <td><?php echo $row->Nom_Event; ?></td>
                            <td><?php echo $row->Topic_Event; ?></td>
                            <td><?php echo ucfirst($row->Host_Event) ?></td>

                            <td>
                                <a class="btn btn-primary" id="user-edit" onclick="edit_user_popup('<?= $row->Nom_Event ?>','<?= $row->id_Event ?>','<?= $row->Nom_Event ?>','<?= $row->Host_Event ?>');" data-toggle="modal" data-target="#editUser"> EDIT </a>
                                <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('<?= $row->Nom_Event ?>','<?= $row->id_Event ?>')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('<?= $row->Nom_Event ?>','<?= $row->id_Event ?>');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>

                            </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;">
                <img class="add_user" src="<?= base_url() ?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
            </div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>



<!-- Modal -->
<div class="modal fade" id="deactivateConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-red">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">DELETE CONFIRMATION</h4>
            </div>
            <div class="modal-body">
                <label>You are going to delete user <label id="user-email" style="color:blue;"></label>.</label><br />
                <label>Click <b>Yes</b> to continue.</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="deactivateYesButton" class="btn btn-danger">Yes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="resetConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-red">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">RESET CONFIRMATION</h4>
            </div>
            <div class="modal-body">
                <label>You are going to reset user <label id="reset-user-email" style="color:blue;"></label>'s password.</label><br />
                <label>Tempolary password will be sent to this email.</label><br />
                <label>Click <b>Yes</b> to continue.</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="resetYesButton" class="btn btn-warning">Yes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">CREATE NEW USER</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name_Event</label> &nbsp;&nbsp;
                            <label class="error" id="error_name"> field is required.</label>
                            <label class="error" id="error_name2"> name must be alphanumeric.</label>
                            <input class="form-control" id="name" placeholder="Name_Event" name="Nom_Event" type="text" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Topic_Event</label> &nbsp;&nbsp;
                            <label class="error" id="error_name2"> field is required.</label>
                            <input class="form-control" id="email" placeholder="Topic_Event" name="Topic_Event" type="text" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Host_Event</label>&nbsp;&nbsp;
                            <label class="error" id="error_role"> field is required.</label>
                            <select name="Host_Event" id="Host_Event" class="form-control">
                                <option value="0" selected="selected">-- SELECT ROLE --</option>
                                <option value="1">Elon Musk</option>
                                <option value="2">El.H MSeye</option>
                                <option value="3">Laurel Agbd</option>
                                <option value="4">Gadio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Date_Event" placeholder="Date_Event" name="Date_Event" type="date" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Categorie_Event" placeholder="Categorie_Event" name="Categorie_Event" type="text" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Leave a comment here" name="Detail_Event" id="Detail_Event" style="height: 100px"></textarea>
                        <label for="Detail_Event">Describe Event</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Adresse_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Adresse_Event" placeholder="Adresse_Event" name="Adresse_Event" type="text" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>NombrePlace</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="NombrePlace" placeholder="NombrePlace" name="NombrePlace" type="number" autofocus>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                <button id="newUserSubmit" type="button" class="btn btn-primary">CREATE</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">UPDATE USER DETAILS</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit-user-id" value="" />
                <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name_Event</label> &nbsp;&nbsp;
                            <label class="error" id="error_name"> field is required.</label>
                            <label class="error" id="error_name2"> name must be alphanumeric.</label>
                            <input class="form-control" id="name" placeholder="Name_Event" name="Nom_Event" type="text" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Topic_Event</label> &nbsp;&nbsp;
                            <label class="error" id="error_name2"> field is required.</label>
                            <input class="form-control" id="email" placeholder="Topic_Event" name="Topic_Event" type="text" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Host_Event</label>&nbsp;&nbsp;
                            <label class="error" id="error_role"> field is required.</label>
                            <select name="Host_Event" id="Host_Event" class="form-control">
                                <option value="0" selected="selected">-- SELECT ROLE --</option>
                                <option value="1">Elon Musk</option>
                                <option value="2">El.H MSeye</option>
                                <option value="3">Laurel Agbd</option>
                                <option value="4">Gadio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Date_Event" placeholder="Date_Event" name="Date_Event" type="date" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Categorie_Event" placeholder="Categorie_Event" name="Categorie_Event" type="text" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Leave a comment here" name="Detail_Event" id="Detail_Event" style="height: 100px"></textarea>
                        <label for="Detail_Event">Describe Event</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Adresse_Event</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="Adresse_Event" placeholder="Adresse_Event" name="Adresse_Event" type="text" autofocus>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>NombrePlace</label> &nbsp;&nbsp;
                        <label class="error" id="error_name2"> field is required.</label>
                        <input class="form-control" id="NombrePlace" placeholder="NombrePlace" name="NombrePlace" type="number" autofocus>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                <button id="editUserSubmit" type="button" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /#page-wrapper -->
<?php $this->load->view('frame/footer_view') ?>
<script src="<?= base_url() ?>assets/js/view/user_list.js"></script>