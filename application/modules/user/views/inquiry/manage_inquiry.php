<style>

.md-card.md-card-overlay .md-card-content{
	height:auto;
}
sup{
	color:red;
	font-size:14px;
}

.uk-width-medium-10-10 .md-btn{
	
	margin-top:-4px;
}
.uk-grid .hdr_lbl{
	color:#003;
	font-weight:bold;
}
.uk-modal{
	    margin-top: -42px;
}
#content-modal{
	height:410px;
}
.nomor{
	font-weight:bolder;
}
.box{
	border-bottom:2px #F0F0F0 solid; padding-bottom:3px; margin-bottom:4px;
}
</style>

<div class="md-card uk-margin-medium-bottom">
 

 
           
              

                
                
<div class="uk-width-medium-10-10">

<div class="uk-grid toolbar-box">
 <div class="uk-width-medium-10-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">    
	<button onclick="create_incoterm()" data-uk-modal="{target:'#modal_incoterm',bgclose:false,modal:false}" class="md-btn md-btn-default md-btn-wave-light waves-effect waves-button waves-light" data-uk-tooltip="{pos:'bottom'}" title="New Quotation">
                    <i class="material-icons">note_add</i>
        		    <span>New Quotation</span>
                    </button> 



                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">cached</i> 
 
 MANAGE QUOTATION Of INQUIRY
                            </h3>
                        </div>
                        
                    </div>
                
	</div>
   
  <div class="uk-width-medium-10-10">
  <div class="md-card">  
                <div class="md-card-content toolbar-devider" >
     
                  
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1 uk-row-first">
                            <div class="uk-form-row">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-5">
                                        <div class="md-input-wrapper md-input-filled">
                                        <label class="md-color-teal-400">Inquiry Number</label>
<p class="hdr_large"><a href="<?php echo base_url();?>logistic/Inquiry/inquiry_detail/20161118INQUERY001" data-uk-tooltip="{pos:'bottom'}" title="Click fo detail inquiry">INQ-20012017001</a></p>
                                        </div>
                                        
                                    </div>
                                    <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Customers</label>
                                         <p class="det-hdr">Haryanto</p>
                                         </div>
                                        
                                    </div>
                                <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400"> PORT ORIGIN</label>
                                         <p class="det-hdr">CGK</p>
                                         </div>
                                        
                                    </div>
                             <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">PORT DESTINATION</label>
                                         <p class="det-hdr">MAN</p>
                                         </div>
                                        
                                    </div>
                              <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Status</label>
                                         <p class="det-hdr">Open</p>
                                         </div>
                                        
                                    </div>
                             <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">isActive</label>
               <p class="det-hdr uk-badge uk-badge-warning">yes</p>
                                         </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
  </div>
  
 
	
</div>






    <div class="md-card">
        <div class="md-card-content" style="min-height:300px" id="box-content-cust">
          <table width="95%" border="0" class="table uk-table uk-table-hoverr" >
  <tr>
    <th colspan="5"><i class="fa fa-list-alt"></i> List of Quotation</th>
    <th>&nbsp;</th>
  </tr>
  <tr style="background:#E6E6E6">
    <th width="11%"><div align="center">Numb</div></th>
    <th width="11%">Date</th>
    <th width="17%">Quotation Number</th>
    <th width="21%">&nbsp;</th>
    <th width="21%">Status</th>
    <th width="14%">&nbsp;</th>
  </tr>
  <tr>
    <td height="28"><div align="center">1</div></td>
    <td>20-20-1016</td>
    <td>Quotation 01</td>
    <td>lorem ipsum dolorsitamet</td>
    <td><div align="right"><span class="uk-badge uk-badge-danger"> Reject by Manager</span></div></td>
    <td align="center">
      <button onclick="load_quotation()" data-uk-modal="{target:'#modal_detail',bgclose:false,modal:false}" class="md-btn md-btn-small"><i class="material-icons">remove_red_eye</i></button>
    </td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>17-02.2017</td>
    <td>Quotation 02</td>
    <td>lorem ipsum dolorsitamet</td>
    <td><div align="right"><span class="uk-badge uk-badge-primary"> Open Quotation</span></div></td>
    <td align="center"><button onclick="load_quotation()" data-uk-modal="{target:'#modal_detail',bgclose:false,modal:false}" class="md-btn md-btn-small"><i class="material-icons">remove_red_eye</i> </button></td>
    </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td>20-20-1016</td>
    <td>Quotation 03</td>
    <td>lorem ipsum dolorsitamet</td>
    <td><div align="right"><span class="uk-badge uk-badge-success"> Approved by customer</span></div></td>
    <td align="center">
      <button onclick="load_quotation()" data-uk-modal="{target:'#modal_detail',bgclose:false,modal:false}" class="md-btn md-btn-small"><i class="material-icons">remove_red_eye</i>
        </button>
    </td>
  </tr>
</table>
      
       </div>
    </div>
  </div>
                
</div>


    
<!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_detail" class="uk-modal">
                                <div class="uk-modal-dialog">
     <button type="button" class="uk-modal-close uk-close"></button>
   <div class="uk-modal-header">
   <i class="material-icons">info_outline</i> Detail Quotation
   </div>
 
 <!-- header title -->
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quotation Number</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="0982867257">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Date</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="2016-12-12">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
   <div class="md-input-wrapper md-input-filled">
    <label for="country"> Valid Date</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="2016-12-11">
      <span class="md-input-bar"></span></div>         
 </div>
 

</div>
 <!-- end ofheader title -->
 
 
<div class="uk-overflow-container" id="content-modal">                           
  
<div class="uk-grid" data-uk-grid-margin="">
      
<table width="99%" border="0" class="uk-table hover" id="load_quot">
  <tr >
    <td colspan="2">&nbsp;</td>
    <td>
      <div align="right"><button onclick="edit_incoterm()" data-uk-modal="{target:'#modal_edit_quot',bgclose:false,modal:false}" type="button" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">edit</i>
  <span>Edit</span>                                        
</button></div></td>
  </tr>
  <tr style="background:#E6E6E6">
    <td width="12%"><div align="center">#</div></td>
    <td width="63%"><div align="center">Item Carge</div></td>
    <td width="25%"><div align="center">Cost</div></td>
    </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>AIR FREIGHT</td>
    <td><div align="right">12.000</div></td>
    </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>DELIVERY COURIER</td>
    <td><div align="right">50.000</div></td>
  </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td>ORIGIN CUSTOMS CLEARANCE</td>
    <td><div align="right">120.000</div></td>
  </tr>
  <tr>
    <td><div align="center">4</div></td>
    <td>KARANTINA</td>
    <td><div align="right">35.000</div></td>
  </tr>
  </table>

       

</div>

<!-- FOOTER -->
<div class="uk-grid">  
<div class="uk-width-medium-10-10">
<h4><u>Information :</u></h4>
</div>
<div class="uk-width-medium-7-10">
<div class="uk-width-medium-7-10">
<i class="material-icons md-24">person</i>Admin 
<p style="padding-left:26px; margin-top:-5px">Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>
</div>
<hr />
<div class="uk-width-medium-7-10">
<i class="material-icons md-24">person</i>Manager Sales 
<p style="padding-left:26px; margin-top:-5px">Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>
</div>

<hr />
<div class="uk-width-medium-7-10">
<i class="material-icons md-24">person</i>Sales 
<p style="padding-left:26px; margin-top:-5px">Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>
</div>

</div>
</div>
<!-- END OF FOOTER -->

   </div>
                                                                        
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
 
    
  
 
     
<!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_incoterm" class="uk-modal">
     <div class="uk-modal-dialog">
   <button type="button" class="uk-modal-close uk-close"></button>
  <div class="uk-modal-header">
<i class="material-icons">insert_drive_file</i> New Quotation
  </div>
 <!-- header title -->
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Port Origin</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="CGK">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Port Destination</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="MAN">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
   <div class="md-input-wrapper md-input-filled">
    <label for="country"> Service</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="Port to port">
      <span class="md-input-bar"></span></div>         
 </div>
 

</div>
 <!-- end ofheader title -->
 
 <h4 class="uk-badge uk-badge-warning" style="margin-top:-4px; margin-bottom:-10px">INCOTERM :</h4>
<div class="uk-overflow-container" id="content-modal">                           
  
<div class="uk-grid" data-uk-grid-margin="">
      
<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Freight</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input class="uk-input-group-addon" type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">10.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Lion Freight</td>
    <td><div align="right">20.000</div></td>
  </tr>
</table>

</div>
<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Customs</strong></td>
    <td>
      <div align="right"><button onclick="new_customs()" type="button" class="md-btn md-btn-primary md-btn-small">
 <i class="material-icons md-color-brown-50 ">add</i>
  <span>Add</span>                                        
</button></div></td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck />
      <label for="checkbox"></label></td>
    <td width="103">Package</td>
    <td width="80"><div align="right">15.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Fumigasi</td>
    <td><div align="right">120.000</div></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
 
 <div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Package</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">120.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Lion Freight</td>
    <td><div align="right">120.000</div></td>
  </tr>
</table>

</div>

<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Pick Up</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">120.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck /></td>
    <td>Lion Freight</td>
    <td><div align="right">120.000</div></td>
  </tr>
</table>

</div>      

</div>

<!-- FOOTER -->
<div class="uk-grid">  
<div class="uk-width-medium-10-10">
<h4><u>Remarks</u></h4>
</div>
<div class="uk-width-medium-1-1">
<div class="uk-width-medium-1-1">
<textarea name="remarks" cols="" rows="4" style="width:75%">Lorem ipsum</textarea>
</div>
<hr />





</div>
</div>
   </div>
   <!-- Footer area -->
<div class="uk-modal-footer uk-text-right">
<a href="<?php echo base_url();?>logistic/inquiry/save_quotation"><button  type="button" class="md-btn md-btn-success md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">launch</i>
  <span>Create Quotation</span>                                        
</button></a>
                                  </div>
   <!-- end of footer area -->
                                                                        
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL EDIT--> 
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_edit_quot" class="uk-modal">
     <div class="uk-modal-dialog">
     <button type="button" class="uk-modal-close uk-close"></button>
 <div class="uk-modal-header">
 <i class="material-icons">border_color</i> Edit Quotation
 </div> 
 <!-- header title -->
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Port Origin</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="CGK">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Port Destination</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="MAN">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
   <div class="md-input-wrapper md-input-filled">
    <label for="country"> Service</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="Port to port">
      <span class="md-input-bar"></span></div>         
 </div>
 

</div>
 <!-- end ofheader title -->
 
 <h4 class="uk-badge uk-badge-warning" style="margin-top:-4px; margin-bottom:-10px">INCOTERM :</h4>
<div class="uk-overflow-container" id="content-modal">                           
  
<div class="uk-grid" data-uk-grid-margin="">
      
<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Freight</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input class="uk-input-group-addon" type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">10.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Lion Freight</td>
    <td><div align="right">20.000</div></td>
  </tr>
</table>

</div>
<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Customs</strong></td>
    <td>
      <div align="right"><button onclick="new_customs()" type="button" class="md-btn md-btn-primary md-btn-small">
 <i class="material-icons md-color-brown-50 ">add</i>
  <span>Add</span>                                        
</button></div></td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck />
      <label for="checkbox"></label></td>
    <td width="103">Package</td>
    <td width="80"><div align="right">15.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Fumigasi</td>
    <td><div align="right">120.000</div></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
 
 <div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Package</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">120.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck/></td>
    <td>Lion Freight</td>
    <td><div align="right">120.000</div></td>
  </tr>
</table>

</div>

<div class="uk-width-medium-1-2 box">
<table width="99%">
  <tr>
    <td colspan="2"><strong>Pick Up</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="checkbox" id="checkbox" checked="checked" data-md-icheck/>
      <label for="checkbox"></label></td>
    <td width="200">GA freigh</td>
    <td width="116"><div align="right">120.000</div></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck /></td>
    <td>Lion Freight</td>
    <td><div align="right">120.000</div></td>
  </tr>
</table>

</div>      

</div>

<!-- FOOTER -->
<div class="uk-grid">  
<div class="uk-width-medium-10-10">
<h4><u>Remarks</u></h4>
</div>
<div class="uk-width-medium-1-1">
<div class="uk-width-medium-1-1">
<textarea name="remarks" cols="" rows="4" style="width:75%">Lorem ipsum</textarea>
</div>
<hr />





</div>
</div>
   </div>
   <!-- Footer area -->
<div class="uk-modal-footer uk-text-right">
<button  type="button" onclick="update_quot()" class="md-btn md-btn-success">
 <i class="material-icons md-color-brown-50 ">refresh</i>
  <span>Update Quotation</span>                                        
</button>
                                  </div>
   <!-- end of footer area -->
                                                                        
                                </div>
                            </div>
                            
                            </form>
                               
<!-- MODAL ADD customs-->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_add" class="uk-modal">
         <div class="uk-modal-dialog uk-modal-dialog-small">
   <button type="button" class="uk-modal-close uk-close"></button>
    <div class="uk-modal-header">
    <i class="material-icons">insert_drive_file</i>New Customs
    </div>                                  
 
 <!-- header title -->
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Rate Name</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" placeholder="Rate Name">
      <span class="md-input-bar"></span></div>         
 </div>
 
 <h3>&nbsp;</h3>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Price</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3"  placeholder="Price">
      <span class="md-input-bar"></span></div>         
 </div>
 
 

</div>
 <!-- end ofheader title -->
 
 
                          


<!-- FOOTER -->
<div class="uk-grid">
  <div class="uk-width-medium-1-1">


<div class="uk-modal-footer uk-text-right">
<button onclick="insert_customs()" type="button" class="md-btn md-btn-success md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">exit_to_app</i>
  <span>Insert</span>                                        
</button>
                                  </div>
</div>
</div>
<!-- END OF FOOTER -->

                                                                        
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD customs-->   
 
 
<script type="text/javascript">
function load_quotation(){	
    //var modal = UIkit.modal("#modal_detail");
		//target:'#ID',modal:false
   	//modal.show();
	//write your codes here
}

function new_customs(){
	
    		   var modal = UIkit.modal("#modal_add");
   			   modal.show();
			   //your codes here
}

function create_incoterm(){
	
   // var modal = UIkit.modal("#modal_incoterm");
   	//modal.show();
	//write your codes here
}
function edit_incoterm(){
	
   // var modal = UIkit.modal("#modal_incoterm");
   	//modal.show();
	//write your codes here
}
function insert_customs(){
	
    var modal = UIkit.modal("#modal_add");
   	modal.hide();
}
function update_quot(){
	
    var modal = UIkit.modal("#modal_edit_quot");
   		modal.hide();
	UIkit.modal.alert('<i class="fa fa-check"></i>Quotation Updated');
}

function save_quotation(){
	UIkit.modal.alert('Quotation saved');
   
}

function check_quotation(){
	
    var modal = UIkit.modal("#modal_add");
   			   modal.hide();
}
</script>






            

      
