<style>
.det{
    padding: 4px 10px 4px 10px;
    border-radius: 5%;
    color: #009688;
    font-size: large;
}
.uk-title{
	font-size:large;
	font-weight:bold;
}	
</style>


            <!-- statistics (small charts) --> <br />
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
               
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-title">QUOTATION</span>
                            <p><span class="det">Open </span><span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo $Prospect ;?></span></p>
                            <p><span class="det">Close</span> <span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo '20' ;?></span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                                   <span class="uk-title">INQUIRY</span>
                            <p><span class="det">Open </span><span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo $Prospect ;?></span></p>
                            <p><span class="det">Close</span> <span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo '20' ;?></span></p>
                 </div>
                    </div>
                </div>
<div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-title">SHIPMENT</span>
                            <p><span class="det">Open </span><span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo $Prospect ;?></span></p>
                            <p><span class="det">Close</span> <span class="uk-badge uk-badge-danger uk-badge-circle countUpMe"><?php echo '20' ;?></span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                            <span class="uk-text-muted uk-text-small">Customers Non-Active</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript><?php echo $nonaktive ;?></noscript></span></h2>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- large chart -->
            

            <!-- circular charts -->
            <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>


                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="100" data-bar-color="#009688">
                                <span class="epc_chart_text"><span class="countUpMe"><?php echo $nonaktive ;?></span></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                               
                                <h3 align="center">
                                    Orders
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">user</i>
                                
                                <h3>
                                    User Registrations
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </div>

            <!-- tasks -->
  


        
        
    


        