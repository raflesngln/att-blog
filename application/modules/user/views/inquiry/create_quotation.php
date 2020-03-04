<style>
#load_quot .material-icons{
	cursor:pointer;
}
#load_quot .material-icons:hover{
	color:#33F;#	
}
/* notofication customs */
.uk-notify-message-success {
    border: 1px #ddd solid;
    background: #8dd641;
    color: #fafafa;
    font-weight: bold;
    box-shadow: 6px 4px 11px #ddd;
    border-left: 5px #7cb342 solid;
    padding: 3px 0px 5px 10px;
    line-height: 40px;
    width: 78%;
    position: relative;
    left: 19%;
}
.uk-notify-message-success div span:after{
	content:' X';
	right:20px;
	position:absolute;
	
}

.md-card{
	box-shadow:none;
}
#txt-template{
	min-height:700px;
	border:none;
}

</style>
<script src="<?php echo base_url();?>asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#txt-template",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<div class="md-card uk-margin-medium-bottom">
 
<div class="uk-grid toolbar-box">
 <div class="uk-width-medium-10-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">    
<button onclick="load_quotation()"  type="button" class="md-btn md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Load Others Quotation">
 <i class="material-icons">refresh</i>
  <span>Load Others Quotation</span>                                        
</button>

<button onclick="edit_incoterm()" data-uk-modal="{target:'#modal_edit_quot',bgclose:false,modal:false}"  type="button" class="md-btn md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Edit Quotation">
 <i class="material-icons">edit</i>
  <span>Edit this Quotation</span>                                        
</button>

<button onclick="printArea('txt-template')"  type="button" class="md-btn md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Print this Quotation">
 <i class="material-icons">print</i>
  <span>Print</span>                                        
</button>



                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">note_add</i> 
 Create Quotation & Template
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
                                        <label class="md-color-teal-400">Quotation Number</label>
<p class="hdr_large">Quo-20012017001</p>
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
                                         <label class="md-color-teal-400">PORT DEST.</label>
                                         <p class="det-hdr">MAN</p>
                                         </div>
                                        
                                    </div>
                              <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Quantity</label>
                                         <p class="det-hdr">4 pcs/251 kg</p>
                                         </div>
                                        
                                    </div>
                             <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Service</label>
               <p class="det-hdr uk-badge uk-badge-warning">PTP</p>
                                         </div>
                                        
                                    </div>
<div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Inquiry</label>
<p class="det-hdr"><a href="<?php echo base_url();?>logistic/Inquiry/inquiry_detail/20161118INQUERY001" data-uk-tooltip="{pos:'bottom'}" title="Click fo detail inquiry">INQ-2001201701</a></p>
                                         </div>
                                        
                                    </div>
<div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Status</label>
                  <p class="det-hdr">active</p>
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

                
                
<div class="md-card-content">

    <div class="md-card">
    
        <div class="md-card " style="padding:20px 10px 20px 10px">

<textarea id="txt-template" class="txt-template">
<p style="text-align:center; margin-top:-5px">PT ANUGERAH TANGKAS TRANSPORTINDO</p>
<p style="text-align:center; margin-top:-5px">Grand Slipi Tower Lantai 35 Jl.S.Parman Kav 22-24</p>
<p style="text-align:center; margin-top:-5px">Slipi, Jakarta 11480, Indonesia</p>

<hr />
<p style="margin-top:-5px">Kepada Yth,</p>
<p style="margin-top:-5px">Bpk. Hairul Devan</p>
<p style="margin-top:-5px">Dengan ini kami informasikan biaya untuk rencana export dari Jakarta ke Hyderabad, sebagai berikut :</p>
<p style="margin-top:-5px">Valid : 31 Oktober 2016</p>
<p style="margin-top:-5px"Commodity : General Cargo</p>
<p style="margin-top:-5px">Quantity : 4 Pieces / 251 kgs</p>
<p style="margin-top:-5px">Service : Door to Port</p>


<table border="0" cellpadding="1" cellspacing="1" class="uk-table hover" style=" width:90%;border:1px #CCC solid">
	<tbody>
		<tr style="background:#E9E9E9; line-height:30px; border:none">
			<td style="border:1px #CCC solid">#</td>
			<td style="border:1px #CCC solid">Choose</td>
			<td style="border:1px #CCC solid">Item Charges</td>
			<td style="border:1px #CCC solid">Cost</td>
			<td style="border:1px #CCC solid">FSC</td>
			<td style="border:1px #CCC solid">SSC</td>
		</tr>
		<tr>
			<td>1</td>
			<td><input type="checkbox" name="checkbox" id="checkbox" data-md-icheck>
		    <label for="checkbox"></label></td>
			<td>AIR FREIGHT</td>
			<td>12.000</td>
			<td>Include</td>
			<td>Include</td>
		</tr>
		<tr>
			<td>2</td>
			<td><input type="checkbox" name="checkbox2" id="checkbox2" data-md-icheck></td>
			<td>ORIGIN CUSTOMS CLEARANCE</td>
			<td>15.000</td>
			<td>Include</td>
			<td>Include</td>
		</tr>
		<tr>
			<td>3</td>
			<td><input type="checkbox" name="checkbox3" id="checkbox3" data-md-icheck></td>
			<td>PACKAGING</td>
			<td>55.000</td>
			<td>Include</td>
			<td>Include</td>
		</tr>

	</tbody>
</table>
<br/>

<p>Local handling charges di Jakarta :</p>
<table width="55%" style="border:1px #CCC solid">
  <tr bgcolor="#EAEAEA">
    <td height="26">Item Charge</td>
    <td align="center">Rate</td>
  </tr>
  <tr>
    <td>AWB Fee</td>
    <td align="right">120.000</td>
  </tr>
    <tr>
    <td>Handling</td>
    <td align="right">110.000</td>
  </tr>
     <tr>
    <td>PEB</td>
    <td align="right">80.000</td>
  </tr>
     <tr>
    <td>Pick Up</td>
    <td align="right">30.000</td>
  </tr>
     <tr>
    <td>Outward Manifest</td>
    <td align="right">90.000</td>
  </tr>
     <tr>
    <td>Storage</td>
    <td align="right">150.000</td>
  </tr>
</table>


<br />
<p>Biaya di atas belum termasuk :</p>
<p>- Destination charges in Hyderabad</p>
<p>- VAT : 1 %</p>
<p>Demikian biaya ini kami informasikan dan semoga sesuai dengan harapan Bapak.</p>

<p>Tertanda,</p>
<br />

<p>(.........................)</p>
</textarea>


    </div>
  </div>
 <div class="uk-grid uk-width-medium-1-1">
        
<div class="uk-width-medium-1-2">
	<p>&nbsp;</p>       
 </div>
       
<div class="uk-width-medium-1-2 uk-text-right">
	<button onclick="saveQuotationDraft()" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >
                    <i class="material-icons md-color-brown-50 ">drafts</i>
        		    <span>Save as Draft</span>
                    </button>    
                    

	<button onclick="saveQuotation()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">save</i>
        		    <span>Save Quotation</span>
                    </button>     
                          
 </div>
</div>
<br />               
</div>


</div>


      
   
 <!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_add" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Load Quotation</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>


<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Customer</label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>
   <option value="Lorem">Lorem </option>
   <option value="Lorem">Ipsum </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Inquiry</label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>
   <option value="Lorem">Lorem </option>
   <option value="Lorem">Ipsum </option>
                </select>
      <span class="md-input-bar"></span></div>         
 </div>      
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Valid Date</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<hr style="border:1px #F93 dashed" />  
<div class="uk-grid" data-uk-grid-margin="">
      
<table width="99%" border="0" class="uk-table hover" id="load_quot">
  <tr>
    <td width="13%"><div align="center">Numb</div></td>
    <td width="37%">Item Carge</td>
    <td width="29%">Cost</td>
    <td width="21%"><div align="center">Action</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>AB</td>
    <td>$5</td>
    <td align="center"><i onclick="check_quotation()" class="md-list-addon-icon material-icons md-24">file_download</i></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>ABC</td>
    <td>$8</td>
    <td align="center"><i onclick="check_quotation()" class="md-list-addon-icon material-icons md-24">file_download</i></td>
  </tr>
  </table>

       

</div>




 
 
    
                         
                             
                                    </div>
                                    
                                    

                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
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

<textarea name="remarks" cols="" rows="4" style="width:55%">Lorem ipsum</textarea>
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
<!-- MODAL EDIT QUOTATION -->


<form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_custom" class="uk-modal">
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
<!-- END OF MODAL EDIT -->
   


<script>

function load_quotation(){
    var modal = UIkit.modal("#modal_add");
   	modal.show();
}
function check_quotation(){
    var modal = UIkit.modal("#modal_add");
   	modal.hide();
}
function saveQuotation(){
	UIkit.modal.alert('<i class="material-icons md-24">check</i> Quotation saved !');
/*	$.UIkit.notify({
                  message : '<i class="material-icons md-color-grey-50">check</i> <span>Saved Quotation Successfull !</span>',
                  timeout : 2000,
				  pos     : 'top-right',
                  status  : 'success'
              });*/
}
function saveQuotationDraft(){
	UIkit.modal.alert('<i class="material-icons md-24">check</i>Quotation saved as Draft');
/*	$.UIkit.notify({
                  message : '<i class="material-icons md-color-grey-50">check</i> <span>Saved Quotation Successfull !</span>',
                  timeout : 2000,
				  pos     : 'top-right',
                  status  : 'success'
              });*/
}

function edit_incoterm(){
	
   // var modal = UIkit.modal("#modal_incoterm");
   	//modal.show();
	//write your codes here
}

function update_quot(){
	
    var modal = UIkit.modal("#modal_edit_quot");
   		modal.hide();
	UIkit.modal.alert('<i class="fa fa-check"></i>Quotation Updated');
}


function printArea(areaName) {
       var printContents = document.getElementById(areaName).value;
        w = window.open();

        w.document.write(printContents);
        w.document.write('<scr' + 'ipt type="text/javascript">' + 'window.onload = function() { window.print(); window.close(); };' + '</sc' + 'ript>');

        w.document.close(); // necessary for IE >= 10
        w.focus(); // necessary for IE >= 10
        return true; 
}


function new_customs(){
    		   var modal = UIkit.modal("#modal_custom");
   			   modal.show();
			   //your codes here
}
function insert_customs(){
    var modal = UIkit.modal("#modal_custom");
   	modal.hide();
}	
</script>
