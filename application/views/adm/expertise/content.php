<style>
.btn-aksi{
    margin-left:32%;
}
</style>
                                        <div class="row">
                                            <div class="col-md-8">&nbsp;</div>
                                            <div class="col-md-4 right-menu-toolbar" style="margin-bottom:10px;">
                                                <button class="btn pull-right hidden-sm-down btn-success" onclick="new_data()"><i class="mdi mdi-plus-circle"></i> New Data</button>
                                            </div>
                                        </div>

<div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                        <?php
                                for($i=0;$i<=8;$i++)
                                    {
                                        ?>
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/assets_admin/monster/images/big/img1.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <button type="button" class="btn btn-aksi btn-primary dropdown-toggle btn-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu animated flipInX">
                                            <a class="dropdown-item" href="#" onclick="view_data()"><i class="fa fa-eye"></i> View</a>
                                            <a class="dropdown-item" href="#" onclick="edit_data()"><i class="fa fa-pencil"></i> Edit</a>
                                            <a class="dropdown-item " href="#" onclick="delete_data()"><i class="fa fa-trash btn-outline-danger"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                               
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <?php } ?>
                         
                        </div>
                        <!-- Row -->
                    </div>
</div>




<script>
function view_data() {
  alert('view_data');
}
function edit_data() {
  alert('edit_data');
}
function delete_data() {
  alert('delete_data');
}
function openmodal(){
    $('#exampleModal').modal('show');
}
function new_data(){
    $('#exampleModal').modal('show');
}
</script>
