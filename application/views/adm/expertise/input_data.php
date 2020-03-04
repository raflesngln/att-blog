                
<div class="card-block p-b-0">
                                <h4 class="card-title">Expertise</h4>
                                <h6 class="card-subtitle">Use default tab with class </code></h6>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs customtab2" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">LAND</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">AIR</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">OCEAN</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">CONTRACT LOGISTICS</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab5" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">SPECIAL PRODUCTS</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home7" role="tabpanel">
                                        <div class="p-20">
                                        <h4 class="d-inline">LAND</h4>

                                        
<!-- ========================================================= -->
<?php echo $this->load->view('adm/expertise/content');?>
<!-- ======================================================== -->
                                        </div>
                                    </div>

                                    <div class="tab-pane  p-20" id="profile7" role="tabpanel">
                                    <h4 class="d-inline">AIR</h4>

<!-- ====================================== -->
<?php echo $this->load->view('adm/expertise/content');?>
<!-- ==================================================== -->
                                    </div>


                                    <div class="tab-pane p-20" id="messages7" role="tabpanel">
                                    <h4 class="d-inline">OCEAN</h4>

<!-- ====================================== -->
<?php echo $this->load->view('adm/expertise/content');?>
<!-- ==================================================== -->
                                    </div>

                                    <div class="tab-pane p-20" id="tab4" role="tabpanel">
                                    <h4 class="d-inline">CONTRACT LOGISTICS</h4>

<!-- ====================================== -->
<?php echo $this->load->view('adm/expertise/content');?>
<!-- ==================================================== -->
                                    </div>

                                    <div class="tab-pane p-20" id="tab5" role="tabpanel">
                                    <h4 class="d-inline">SPECIAL PRODUCTS</h4>

<!-- ====================================== -->
<?php echo $this->load->view('adm/expertise/content');?>
<!-- ==================================================== -->
                                    </div>

                                </div>
                            </div>



<!-- MODALS -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Message:</label>
                                                        <textarea class="form-control" id="message-text1"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
</div>
                                <!-- /.modal -->


<script>

function new_data(){
    $('#exampleModal').modal('show');
}
</script>