<style>
.boxaddress .mdcard{
	margin-bottom:15px;
}
.md-card-content .box-remarks{
    width: 97%;
    padding-left: 10px;
    height: 180px;
    overflow: auto;
}

</style>

                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                    <li>
           <button href="#" onclick="add_address()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                   <i class="material-icons md-color-grey-50">add_circle_outline</i>
        		    <span>New</span>
                    </button>
                </li>              
                <li>&nbsp;</li>
                
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">book</i> Remarks
                            </h3>
                        </div>
                        
                        
                        <div class="md-card-content">


<div class="boxaddress">
<div class="uk-grid " data-uk-grid-margin="">
 <?php
 
 $record=array('1','2');
  foreach($record as $rw){ 
	
 ?> 

                <div class="uk-width-medium-1-2 uk-row-first mdcard">
                
             

 <div class="md-card md-card-hover md-card-overlay">
  <div class="md-card-toolbar">
          <div class="md-card-toolbar-actions">                     
           <i class="md-icon material-icons md-color-light-blue-500" onclick="editAddress('<?php echo '1';?>','<?php echo '2';?>')">edit</i>
                                
                                
            <i class="md-icon material-icons md-color-red-500" onclick="deleteAddress('<?php echo '1';?>','<?php echo '2';?>')">delete</i>
            <span class="md-card-toolbar-heading-text"></span></div>
            <h3 class="md-card-toolbar-heading-text">
               
                  <span class="md-input-wrapper md-input-filled">
                                  <input type="hidden" name="id_detail_address" id="id_detail_address" value=""/>
            </span></h3>
          </div>
     <h4 align="center"><strong><?php echo 'Inquery approved on 19 February 2016';?></strong></h4>               
   <div class="box-remarks">
 Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dol
 
 </div>
                            
                            

                    </div>
                   
                    
                </div>
                
                <?php } ?>
                
                
            </div>
 
</div>
                        </div>
                        
                        
 <!-- MODAL ADD -->
 <form method="post" action="#" enctype="multipart/form-data" id="foramaddaddress">
 <div id="modal_add" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Add Remarks</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>
<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Subject</label>
  <input type="text" name="idaddress2" required="" class="md-input" data-parsley-id="4" id="idaddress2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
  
  <div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarks2">Remarks</label>
     
     <textarea name="remarks2" cols="20" rows="2" class="md-input" id="remarks2"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>   
                         
                             
                                    </div>
                                    
                                    
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button onclick="saveAddressType()" type="button" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->

 <!-- MODAL EDIT -->
 <form method="post" action="#" enctype="multipart/form-data" id="formeditaddress">
 <div id="modal_edit" class="uk-modal">
                                <div class="uk-modal-dialog">
                                
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Edit Remarks</h2>
                                    
                                    <div class="uk-overflow-container">
                                
 <div class="md-card-content truncate-text is-truncated" style="word-wrap:break-word;height:260px">
  
  
 
                                    
                                    
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Subject	</label>
     <input type="text" name="postal1" required="" class="md-input" data-parsley-id="4" id="postal1" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idaddress1" id="idaddress1" />
	  <input type="hidden" name="idhead" id="idhead" value="23"/>
	</div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
  
  <div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarks2">Remarks</label>
     
     <textarea name="remarks1" cols="20" rows="2" class="md-input" id="remarks1"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>                                   
                                    


                                   
                                </div>
                                
                            </div>
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button onclick="UpdateEditAddress()" type="button" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                  </div>
                                  </form>
 <!-- MODAL EDIT -->


<script type="text/javascript">
function add_address(idheader,iddetail){
		var idheader=$("#idheadercompany").val();
		       var modal = UIkit.modal("#modal_add");
   			   modal.show();
			   $("#idhead2").val(idheader);
	
}
function editAddress(idheader,iddetail){
	
	var idheader=idheader;
	var iddetail=iddetail;
			
				
      $.ajax({
           url : "<?php  echo site_url('logistic/Customer/editAddress')?>",
           dataType: "JSON",
		   type: "POST",
		   data:({idheader:idheader,iddetail:iddetail}),
           success: function(data){;
		       var modal = UIkit.modal("#modal_edit");
   			   modal.show();
                     for (var i =0; i<data.length; i++){
						 $("#idhead").val(data[i].IdCustHeader);	
						 $("#idaddress1").val(data[i].Id);	
                          $("#postal1").val(data[i].Postal);	
						  $("#telp1").val(data[i].Telp1);	
						  $("#telp3").val(data[i].Telp2);
						  $("#fax1").val(data[i].Fax);
						  $("#address1").val(data[i].Address);	
						  $("#isdefault1").val(data[i].isDefault);	
						  $("#remarks1").val(data[i].Remarks);			
                       }
  
               }
       }); 
}

function deleteAddress(idheader,id_det){
	
	var idHead=idheader;
	var id=id_det;
	var nmtable='trcust_dtladdress';
	var kolom='Id';
	
	var ask=UIkit.modal.confirm('Are you sure delete data ?', 
	function(){
		
		if(ask==true){
			alert('oke');
			
		} else {
				        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('logistic/Customer/deleteData')?>",
            type: "POST",
            data:({id:id,nmtabel:nmtable,kolom:kolom}),
            dataType: "JSON",
            success: function(data)
            {
				UIkit.modal.alert('Data deleted!');
                reloadcontent('address',idHead);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
		}
		
	});
 
}

function reloadcontent(mycontent,myid){
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
		});
	var mydata=mycontent;
	var myid=myid;
				$.ajax({
                type: "POST",
                url : "<?php echo base_url('logistic/Customer/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
function UpdateEditAddress()
    {
		var idHead=$("#idhead").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/UpdateEditAddress')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formeditaddress').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   //swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_edit");
   				modal.hide();
				UIkit.modal.alert('Data Updated!');
				reloadcontent('address',idHead);
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	  
    }
function saveAddressType()
    {
		var idHead=$("#idheadercompany").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/saveAddressType')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#foramaddaddress').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_add");
   				modal.hide();
				reloadcontent('address',idHead);
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	  
    }

</script>