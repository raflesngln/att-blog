
    <link rel="stylesheet" href="<?php echo base_url();?>asset/datatables/css/jquery.dataTables.min.css">
 
<style>
.uk-table tr td:hover{
	cursor:pointer;
}
.uk-tab > li.uk-active > a {
  color:#0277bd;
}

</style>


<div class="md-card uk-margin-medium-bottom">

<div class="uk-grid" style=" padding-top:12px">

 
 		 <div class="uk-width-medium-1-2">
            <h2 style="margin-left:10px">
			 <i class="md-list-addon-icon material-icons md-36">description</i> 
			LIST INQUIRY
             </h2>
         </div>
         
 		 <div class="uk-width-medium-1-2">
          <div class="uk-grid">
          	   <div class="uk-width-medium-1-2">
               <label for="yearst">Start Date</label>
          <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo date('Y-m-d') ;?>" readonly="readonly">
          	   </div>
          	   <div class="uk-width-medium-1-2">
               <label for="yearst">End Date</label>
<input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo date('Y-m-d') ;?>" readonly="readonly">
               </div>
<div class="uk-width-medium-1-2">
<select id="select_demo_1" data-md-selectize>
                                <option value="">Sort Coloumn	</option>
                                
                                    <option value="a">Customer Name</option>
                                    <option value="b">Origin</option>
                                    <option value="c">Destination</option>
                                    <option value="d">Service</option>
                            </select>
               </div>
<div class="uk-width-medium-1-2">
<select id="select_demo_1" data-md-selectize>
                                <option value="">Select Criteria</option>
                                
                                    <option value="a">Start With</option>
                                    <option value="b">End With</option>
                                    <option value="c">Equals</option>
                                    <option value="d">Not Equals</option>
                                    <option value="e">Contains</option>
                                    <option value="f">Not Contains</option>
                            </select>
               </div>
 <div class="uk-width-medium-8-10 uk-text-right">
 <input type="text" name="iddetailsales" required="" class="md-input validate valid" data-parsley-trigger="change" id="iddetailsales" placeholder="Type your search"  onkeyup="return getNilai(this)">
 </div>
          </div>
          

         </div>
 

 </div>

                <div class="md-card-content">

<div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-1 uk-row-first">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active" aria-expanded="true"><a href="#"><i class="md-list-addon-icon material-icons md-24">list</i><span> All</span></a></li>
                                <li onclick="changeTabs(this,'open');" aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i><span> Open</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                                <li onclick="changeTabs(this,'process');" aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">refresh</i><span>On Process</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                  <li onclick="changeTabs(this,'cancel');" aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">clear</i><span>Canceled</span></a></li>
                  <li onclick="changeTabs(this,'shipment');" aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">check</i><span>On Shipment</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>

                            </ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                
         <li aria-hidden="false" class="uk-active">

  <?php $this->load->view('logistic/inquiry/list/all');?>
                                </li>
                                
      <li aria-hidden="true" class="" id="open">
    <?php $this->load->view('logistic/inquiry/list/open');?>                          
      </li>
    <li aria-hidden="true" class="" id="process">
    <?php $this->load->view('logistic/inquiry/list/process');?>                            
    </li>
 <li aria-hidden="true" class="" id="canceled">
 <?php $this->load->view('logistic/inquiry/list/cancel');?>                               
 </li>
 <li aria-hidden="true" class="" id="shipment">
   <?php $this->load->view('logistic/inquiry/list/shipment');?>                             
 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                </div>
  </div>
  
<script type="text/javascript">


  
  
  function changeTabs(objek,data){
	  
	  var mydata=data;
	  var empty_notif=$(objek).find("sup").remove();
	  
// alert(mydata);

//  $("#open").html(mydata);
//  $("#process").html(mydata);
//  $("#canceled").html(mydata);
//  $("#shipment").html(mydata);
  }

var status=data;

if(txtsearch3 !=''){
tbl_inquiry.ajax.url('<?php echo site_url()?>logistic/Inquiry/status_inquiry/'+status).load();
	} else {
tbl_inquiry.ajax.url('<?php echo site_url()?>logistic/Inquiry/list_inquiry').load();		
	}
	
	
</script>
  
  