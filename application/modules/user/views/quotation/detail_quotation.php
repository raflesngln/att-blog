
    <link rel="stylesheet" href="<?php echo base_url();?>asset/datatables/css/jquery.dataTables.min.css">
 
<style>
.md-card.md-card-overlay .md-card-content{
	height:auto;
	
}
sup{
	color:red;
	font-size:14px;
}

</style>


<div class="md-card uk-margin-medium-bottom">


 
 <div class="uk-grid">
 <div class="uk-width-medium-10-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                            
<button onclick="approveQuotation()"  type="button" class="md-btn md-btn-success md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Approve Quotation">
 <i class="material-icons md-color-brown-50 ">check</i>
  <span>Approve</span>                                        
</button>

<button onclick="RejectQuotation()"  type="button" class="md-btn md-btn-danger md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Approve Quotation">
 <i class="material-icons md-color-brown-50 ">close</i>
  <span>Reject</span>                                        
</button>






                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">book</i> 
 
 DETAIL QUOTATION
                            </h3>
                        </div>
                        
                    </div>
                
	</div>
    
  <div class="uk-width-medium-5-10">
  <br />
  <div class="uk-grid" style="padding-left:9px">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quotation Number</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value="45435" disabled="disabled">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Inquiry Number</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value="45435" disabled="disabled">
      <span class="md-input-bar"></span></div>         
 </div>
 <BR />      
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Customers</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value=" Haryanto" disabled>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
  </div>
  
 <div class="uk-width-medium-4-10">
 <div class="uk-alert uk-alert-warning" data-uk-alert="">
                                <a href="#" class="uk-alert-close uk-close"></a>
  <i class="material-icons md-color-grey-50">info</i> 
  This Inquiry will be Expired in 3 days later	. Please Send a Notification alert for reminder to Customer
		</div>
	</div>
	
</div>
                            
                            

                <div class="md-card-content">

<div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-1 uk-row-first">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active" aria-expanded="true"><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i> Summary</a></li>
                                <li aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">attach_file</i><span>Attachment</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                 
    <li aria-expanded="false" class=""><a href="#">
    &nbsp;<i class="md-list-addon-icon material-icons md-24">contact_mail</i><span> Cust Discuss</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                                
  <li aria-expanded="false" class="uk-disabled">
  <a href="#"></a>
  </li>
                                
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">chat</i><span> Internal Discuss</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
  
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">book</i><span> Remarks</span></a></li>
  
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i><span> Log History</span></a></li>

                            <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>Active</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li aria-hidden="false" class="uk-active">
 

     <?php $this->load->view('logistic/quotation/detail_quotation/summary');?>       
            

                                </li>
                                
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/attachment');?>
                                </li>
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/chat_quotation');?>
                                </li>
                                <li aria-hidden="true" class="">
&nbsp;
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/chat_quotation');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/remarks');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/history');?>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                </div>
  </div>
  
  
 <!-- MODAL ADD -->
<!-- <form method="post" id="formassignment" enctype="multipart/form-data" data-parsley-validate="">
--> 
 <div id="modal_cust" class="uk-modal">
           <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Load Employee</h2>
                                    
                                  <div class="uk-overflow-container">
                                
<p>&nbsp;</p>


<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Employee</label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>
   <option value="Lorem">Davied </option>
   <option value="Lorem">Surya </option>

              </select>
      </div>         
 </div>
       
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Status</label>
<select name="country" class="md-input" id="country">
   <option value="Active">Active </option>
   <option value="nonActive">non-active </option>

              </select>
      </div>         
 </div>
 
 <div class="uk-width-medium-1-3">
<button onclick="submitEmployee()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">assignment_returned</i>
        		    <span>Assigned</span>
            </button>        
 </div>
 
 
 <div class="uk-width-medium-1-1">
 <table width="55%" style="margin-top:20px">
  <tr>
    <td colspan="3"><h3>Employee has assigned</h3></td>
    </tr>
  <tr bgcolor="#EFEFEF">
    <td width="9%">#</td>
    <td width="69%">Name</td>
    <td width="22%">Status</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Daviet</td>
    <td>non-active</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Freddy</td>
    <td>Active</td>
  </tr>
</table>

 </div>
 
 
</div>
                                    </div>
                                    
                                    

                                   
                                </div>
                            </div>
    <!--      </form>-->
 <!-- MODAL ADD -->
  
 
  
  <script>

function approveQuotation(){
    var modal = UIkit.modal("#modal_cust");
   			   modal.show();
	$(".heading_a").html('<i class="material-icons md-color-green-A400">check</i>Approve Quotation !');
}
function submitEmployee(){
    var modal = UIkit.modal("#modal_cust");
   			   modal.hide();
	UIkit.modal.alert('Quotation assigment ');	   
}

function RejectQuotation(){
	var ask=UIkit.modal.confirm('Are you sure Reject data ?', 
	function(){
		
		if(ask==true){
			UIkit.modal.alert('Data Deleted!');
			
		} else {
				        // ajax delete data to database
			UIkit.modal.alert('Qoutation Rejected!');
		}
		});
 
}

</script>