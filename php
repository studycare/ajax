		 <div id="view_orders"></div>
        </aside>
        <article id="" class="article-item">
          <div class="header" id="search-head">
            <div class="search-box">
              <input type="text" class="form-control search" onkeyup="autosearch(this.value)"  placeholder="Search by: item name, item code.">
            <span><i class="fas fa-search"></i></span>
            </div>
            <a class="sync-box">
              <span>Sync</span>
              <i class="fas fa-sync-alt fa-spin"></i>
            </a>
          </div>
			 <div class="header" id="back-head" style="display:none;">
            <a href="#" onclick="cancel()" class="cancel-box">
              <i class="fas fa-arrow-left"></i>
              <span>Back</span>
            </a>

            <a href="" class="sync-box">
              <span>Sync</span>
              <i class="fas fa-sync-alt fa-spin"></i>
            </a>
          </div>
          <div class="items-area">
            <div class="item-category">
            <div class="slim-scroll2">
              <ul>
              	<?php 
						if(!empty($categories)){
$notvisible= array(25, 26, 27, 28, 29, 30);
							foreach( $categories as $row )
							{

 
if (!in_array($row['itcat_id'], $notvisible)){
					?>
                <li><a href="#" onclick="select_category(<?php echo $row['itcat_id']; ?>)"><div id="cat_<?php echo $row['itcat_id']; ?>" class="category"><?php echo $row['itcat_name']; ?><span></span></div></a></li>
                <?php
}
                		}
						}else
						{
							echo 'No Categories Found';
						}
                ?>

              </ul>
            </div>
            </div>

            
            <div class="items-sec" id="view_items">

           
            </div>
          </div>

        </article>
        <article id="" class="calculation" style="display:none;">
          <div class="header">
            <a href="#" onclick="cancel()" class="cancel-box">
              <i class="fas fa-arrow-left"></i>
              <span>Cancel</span>
            </a>

            <a href="" class="sync-box">
              <span>Sync</span>
              <i class="fas fa-sync-alt fa-spin"></i>
            </a>
          </div>

          <div class="slim-scroll">

         <div class="cash-inner2">
	<div class="centering">
		<span>
			<button class="btn cash-btn waves-effect" onclick="cash()">Cash</button>
			<button class="btn card-btn waves-effect" onclick="card()">Card</button>
		</span>
	</div>
</div>
<div class="calc-area" id="cash" style="display:none;">        

                <div class="centering">

                 <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="one">

                        <div class="calc-pad">
                          <div class="tot-view">

                            <div class="switch-box">
                              <span class="curr">Balance: </span>
                             <label class="switch">                            
                              </label>
                              <span class="pers"><div id="balance">0.00</div></span>
                            </div>

                            <div class="dis-price-box">
                              <span class="dis-price2">0.00</span>
                              <a href="#" onclick="type_number_cash('clear')"><i class="fas fa-times-circle"></i></a>
                            </div>

                          </div>
                          <div class="special">
                            <ul>
                              <li></li>
                              <li></li>
                              <li></li>
                            </ul>
                          </div>
                          <div class="keys">
                            <button class="rip-btn" onclick="type_number_cash('1')">1</button>
                            <button class="rip-btn" onclick="type_number_cash('2')">2</button>
                            <button class="rip-btn" onclick="type_number_cash('3')">3</button>

                            <button class="rip-btn" onclick="type_number_cash('4')">4</button>
                            <button class="rip-btn" onclick="type_number_cash('5')">5</button>
                            <button class="rip-btn" onclick="type_number_cash('6')">6</button>

                            <button class="rip-btn" onclick="type_number_cash('7')">7</button>
                            <button class="rip-btn" onclick="type_number_cash('8')">8</button>
                            <button class="rip-btn" onclick="type_number_cash('9')">9</button>

                            <button class="rip-btn" onclick="type_number_cash('0')">0</button>
                            <button class="rip-btn" onclick="type_number_cash('00')">00</button>
                            <button class="rip-btn" onclick="type_number_cash('back')"><img src="<?php echo base_url(); ?>assets/pos/images/backspace.png"></button>

                          </div>
                        </div>

                    </div>

                  </div>

                  <a class="done rip-btn" onclick="payment('cash')" href="#">Done</a>

                </div>

          </div>
          <div class="calc-area" id="card" style="display:none;">        

                <div class="centering">

                 <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="one">

                        <div class="calc-pad">
                          <div class="tot-view">

                            <div class="switch-box">
                              <span class="curr" id="title-cal">Amount: </span>
                             <label class="switch">                            
                              </label>
                            </div>

                            <div class="dis-price-box">
                              <span class="dis-price2">0.00</span>
                              <a href="#" onclick="type_number_cash('clear')"><i class="fas fa-times-circle"></i></a>
                            </div>

                          </div>
                          <div class="special">
                            <ul>
                              <li></li>
                              <li></li>
                              <li></li>
                            </ul>
                          </div>
                          <div class="keys">
                            <button class="rip-btn" onclick="type_number_cash('1')">1</button>
                            <button class="rip-btn" onclick="type_number_cash('2')">2</button>
                            <button class="rip-btn" onclick="type_number_cash('3')">3</button>

                            <button class="rip-btn" onclick="type_number_cash('4')">4</button>
                            <button class="rip-btn" onclick="type_number_cash('5')">5</button>
                            <button class="rip-btn" onclick="type_number_cash('6')">6</button>

                            <button class="rip-btn" onclick="type_number_cash('7')">7</button>
                            <button class="rip-btn" onclick="type_number_cash('8')">8</button>
                            <button class="rip-btn" onclick="type_number_cash('9')">9</button>

                            <button class="rip-btn" onclick="type_number_cash('0')">0</button>
                            <button class="rip-btn" onclick="type_number_cash('00')">00</button>
                            <button class="rip-btn" onclick="type_number_cash('back')"><img src="<?php echo base_url(); ?>assets/pos/images/backspace.png"></button>

                          </div>
                        </div>

                    </div>

                  </div>

                  <a class="done rip-btn" onclick="next()" href="#" id="next-but">Next</a>
                  <a class="done rip-btn" onclick="payment('card')" style="display:none;" id="done-but" href="#">Done</a>
                </div>

          </div>
<div class="cash-inner4" id="card2" style="display:none;">
	<div class="centering">
		<ul>
			<li><span>Amount :</span><input type="text" name="card_amount" id="card_amount" required=""></li>
			<li><span>Card No :</span><input type="text" name="card_no" id="card_no"></li>
			<div class="clear-fix"></div>
			<li><button class="waves-effect" onclick="payment('card')">Done</button></li>
		</ul>
	</div>
</div>
<div class="cash-inner6" id="drawer" style="display:none;">
	<div class="centering">
		<ul>
		<?php
		if($dr_id != 0) {
		?>
			<li><span>Open Time : </span><?php echo $dr_open_time; ?></li>
			<li><span>No of Orders :</span><input type="text" name="dr_total_order_count" id="dr_total_order_count" readonly=""></li>
			<li><span>Amount :</span><input type="text" name="dr_total_amount" id="dr_total_amount" readonly=""></li>
			<li><span>Actual Amount :</span><input type="text" name="dr_actual_amount" id="dr_actual_amount" required=""></li>
			<div class="clear-fix"></div>
			<li><button class="waves-effect" onclick="closedrawer()">Close Drawer</button></li>
			<?php }else { ?>
			<li><button class="waves-effect" onclick="opendrawer()">Open Drawer</button></li>
			<?php } ?>
		</ul>
	</div>
</div>
          <div class="calc-area" id="discount" style="display:none;">        

                <div class="centering">

                 <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="one">

                        <div class="calc-pad">
                          <div class="tot-view">

                            <div class="switch-box">
                              <span class="curr">₹</span>
                              <label class="switch">                            
                                <input type="checkbox" onclick="checkcal_percent()" id="checkPercent" checked>
                                <span class="slider round"></span>
                              </label>
                              <span class="pers">%</span>
                            </div>

                            <div class="dis-price-box">
                              <span class="dis-price">0.00</span>
                              <span class="type" id="dis_per">%</span>
                              <a href="#" onclick="type_number('clear')"><i class="fas fa-times-circle"></i></a>
                            </div>

                          </div>
                          <div class="special">
                            <ul>
                              <li></li>
                              <li></li>
                              <li></li>
                            </ul>
                          </div>
                          <div class="keys">
                            <button class="rip-btn" onclick="type_number('1')">1</button>
                            <button class="rip-btn" onclick="type_number('2')">2</button>
                            <button class="rip-btn" onclick="type_number('3')">3</button>

                            <button class="rip-btn" onclick="type_number('4')">4</button>
                            <button class="rip-btn" onclick="type_number('5')">5</button>
                            <button class="rip-btn" onclick="type_number('6')">6</button>

                            <button class="rip-btn" onclick="type_number('7')">7</button>
                            <button class="rip-btn" onclick="type_number('8')">8</button>
                            <button class="rip-btn" onclick="type_number('9')">9</button>

                            <button class="rip-btn" onclick="type_number('0')">0</button>
                            <button class="rip-btn" onclick="type_number('00')">00</button>
                            <button class="rip-btn" onclick="type_number('back')"><img src="<?php echo base_url(); ?>assets/pos/images/backspace.png"></button>

                          </div>
                        </div>

                    </div>

                  </div>

                  <a class="done rip-btn" onclick="done_cal()" href="#">Done</a>

                </div>

          </div>

          </div>

        </article>
        <article id="" class="refund" style="display:none;">
  			 <div id="view_orders_list"></div>
        </article>
        
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="print_output">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/pos/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/pos/'); ?>js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('assets/pos/'); ?>js/wow-min.min.js"></script>
    <script src="<?php echo base_url('assets/pos/'); ?>js/waves.min.js"></script>


    <script type="text/javascript">
    var base_url = "<?php echo base_url();?>";
    var ord_id = "<?php echo $ord_id; ?>";
    var dr_id = "<?php echo $dr_id; ?>";
    var total_amount = 0;
    var net_amount = 0;
    var round_difference = 0;
    var dis_cal = '';
    var dis_cal2 = '';
    var percent_cal = true;
    var cal_amount = 0; 
    var card_no = ''; 
    var next_type = '';
    var kitchenstatus = new Array();
	
	setInterval(function(){
		$.ajax({
			 url:base_url+"pos/order/kitchen_status",
			 type:'POST',
			 dataType:'html',
			 data:{kitchenstatus:kitchenstatus, ord_id:ord_id},
          success: function(content) {
			  if(content != false)
				$("#view_orders").html(content);
          }
		});
			
		}, 5000);
		
    function select_category(itcat_id) {
    	
    		$(".category").removeClass('active');
 	   	$("#cat_"+itcat_id).addClass('active');
 	   	$(".item-category, #search-head").hide();
 	   	$("#back-head").show();
			$.ajax({
			 url:base_url+"pos/order/view_items",
			 type:'POST',
			 dataType:'html',
			 data:{itcat_id:itcat_id},
			 beforeSend: function() {
				$("#view_items").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_items").html(content);
          }
		});
    }
    function add_order(item_id, item_rate) {
    	if (ord_id != 0) {
			$.ajax({
			 url:base_url+"pos/order/add_order",
			 type:'POST',
			 dataType:'html',
			 data:{item_id:item_id, item_rate:item_rate, ord_id:ord_id},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = $(content).filter('#ord_id').val();
          }
		});
		}
		else {
			alert('First you Choose the order type(Table / Room)');

		}
    }
    function delete_order_item(item_id) {
    	if(confirm('Are you sure you want to remove this item from order?')){
			$.ajax({
			 url:base_url+"pos/order/delete_order_item",
			 type:'POST',
			 dataType:'html',
			 data:{item_id:item_id, ord_id:ord_id},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = $(content).filter('#ord_id').val();
          }
		});
		}
    }
    function place_order(order_id) {
      if( place_order_table(order_id) )
      {
			$.ajax({
			 url:base_url+"pos/order/place_order_print",
			 type:'POST',
			 dataType:'html',
			 data:{ord_id:order_id},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          }
		});
    }
  }
  function place_order_table(order_id) 
      {
      $.ajax({
       url:base_url+"pos/order/place_order",
       type:'POST',
       dataType:'html',
       data:{ord_id:order_id},
       beforeSend: function() {
        $("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
       },
          success: function(content) {
            $("#view_orders").html(content);
          }
    });
    }
     /*   function place_print(order_id) {
      $.ajax({
       url:base_url+"pos/order/place_print",
       type:'POST',
       dataType:'html',
       data:{ord_id:order_id},
       beforeSend: function() {
       // $("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
       },
          success: function(content) {//alert(content);
            //window.location = '<?php echo base_url(); ?>pos/order/details/'order_id; 
           // redirect(base_url('pos/order/details/'$order);
            //$("#print_output").html(content);
          }
    });
    }
    */
      function place_print(order_id) { 
          if(confirm('Are you sure to print this bill?')){
      $.ajax({
       url:base_url+"pos/order/place_print",
       type:'POST',
       dataType:'html',
       data:{ord_id:order_id},
       beforeSend: function() {
       // $("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
       },
          success: function(content) {//alert(content);
            //window.location = '<?php echo base_url(); ?>pos/order/details/'order_id;
           // redirect(base_url('pos/order/details/'$order);
            //$("#print_output").html(content);
          }
    });
    }
    }
       function drawer_print(order_id) { 
          if(confirm('Are you sure to print this receipt?')){
      $.ajax({
       url:base_url+"pos/order/drawer_print",
       type:'POST',
       dataType:'html',
       data:{ord_id:order_id},
       beforeSend: function() {
       },
          success: function(content) {//alert(content);
          }
    });
    }
    }
    function delete_order() {
		if(ord_id != 0){
    	if(confirm('Are you sure you want to remove complete order?')){
			$.ajax({
			 url:base_url+"pos/order/delete_order",
			 type:'POST',
			 dataType:'html',
			 data:{ord_id:ord_id},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = 0;
          	history.pushState(null, null, base_url+'pos/order');
          }
		});
		}
		}
		else {
			alert('No Orders selected for delete..');

		}
    }
    function split_order() {
    	if(ord_id != 0){
			$.ajax({
			 url:base_url+"pos/order/split_order",
			 type:'POST',
			 dataType:'html',
			 data:{ord_id:ord_id},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = $(content).filter('#ord_id').val();
          	history.pushState(null, null, base_url+'pos/order/details/'+ord_id);
          	cancel();
          }
		});
		}
		else {
			alert('No Orders selected for splitting');

		}
    }
    function autosearch(search) {
    		$(".category").removeClass('active');
    		 	   	
			$.ajax({
			 url:base_url+"pos/order/autosearch",
			 type:'POST',
			 dataType:'html',
			 data:{search:search},
			 beforeSend: function() {
				$("#view_items").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_items").html(content);
          }
		});
    }
    function select_type(type_name) {
	   	
			$.ajax({
			 url:base_url+"pos/order/view_types",
			 type:'POST',
			 dataType:'html',
			 data:{type_name:type_name},
          success: function(content) {
          	$("#view_types").html(content);
          }
		});
    }
    function view_current() {
	   	
			$.ajax({
			 url:base_url+"pos/order/view_current",
			 dataType:'html',
          success: function(content) {
          	$("#view_current").html(content);
          }
		});
    }
    function view_current_page(id) {	 
    		ord_id = id;
		 $.ajax({
			 url:base_url+"pos/order/view_order?ord_id="+ord_id,
			 type:'GET',
			 dataType:'html',
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	history.pushState(null, null, base_url+'pos/order/details/'+ord_id);
          	cancel();
          }
		});
    }
    function select_type_num(type_name, type_num) {
	   	$.ajax({
			 url:base_url+"pos/order/select_type_num",
			 type:'POST',
			 dataType:'html',
			 data:{type_name:type_name, type_num:type_num},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = $(content).filter('#ord_id').val();
          	history.pushState(null, null, base_url+'pos/order/details/'+ord_id);
          	cancel();
          }
		});
    }
    function cash_option() {
    	if (dr_id != 0) {
    	if (ord_id != 0) {
    		reset();
    	 $(".calculation, .cash-inner2").show();
    	 }else {
			alert('First you Choose the order type(Table / Room)');

		}
		}
		else {
			alert('Please open Drawer');

		}
    	
    }
    function cash() {
    	if (ord_id != 0) {
    			reset();
    	 $("#cash").show();
    	 }else {
			alert('First you Choose the order type(Table / Room)');

		}
    	
    }
    function reset() {
    	$('#card_amount, #card_no, #dr_total_amount, #dr_actual_amount').val('');
    	$('#balance, .dis-price2').html('');
    	 $(".cash-inner2, #cash, .article-item, .refund, #drawer, #card, #discount, #done-but").hide();
    	 dis_cal2 = '';
    	 cal_amount = 0; 
    	 card_no = ''; 
    	 next_type = '';
    	 $('#title-cal').html('Amount:');
    }
    function cancel() {
    	 $('#view_items').html('');
    	 $(".category").removeClass('active');
    	 $(".calculation, .refund, #cash, #back-head").hide();
    	 $(".article-item, .cash-inner2, .item-category, #search-head").show();
    }
    function card() {
    	if (ord_id != 0) {
    			reset();
    	 $("#card").show();
    	 $("#next-but").show();
    	 }else {
			alert('First you Choose the order type(Table / Room)');

		}
    	
    }
    function payment(paytype) {
    	if(dr_id != 0){
    	if(ord_id != 0){
    		if(total_amount != 0){
    		if (paytype == 'cash') {
    			 var param={ 
					ord_id	:	ord_id,
					paytype	:	paytype,
					amount :	cal_amount,
					dr_id : dr_id,
					total_amount : total_amount,
					net_amount : net_amount,
					round_difference : round_difference
					};
    			
    		}
    		else if (paytype == 'card') {
    			 var param={ 
    			 	ord_id	:	ord_id,
					paytype	:	paytype,
					card_amount :	cal_amount,
					card_no : card_no,
					dr_id : dr_id,
					total_amount : total_amount,
					net_amount : net_amount,
					round_difference : round_difference
					};
    			
    		}
    		
    		if(cal_amount != null && cal_amount != ''){
    		if(Number(cal_amount) >= Number(total_amount)){
		$.ajax({
			 url:base_url+"pos/order/payment",
			 type:'POST',
			 dataType:'html',
			 data:param,
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	ord_id = 0;
          	cancel();
          	history.pushState(null, null, base_url+'pos/order/');
          },
          error:function(err){
					alert('Something went wrong while payment. Please try again.');
				}
		});
		}
		else {
			alert('Amount is less than total amount');
		} 
		}
		else {
			alert('Please Enter Amount');

		}
		}
		else {
			alert('No items added into order');

		}
		}
		else {
			alert('No Orders selected');

		}
		}
		else {
			alert('Please open Drawer');

		}
    }
    function check_amount(amount) {
    	if (isNaN(amount)) 
  		{
   		alert("Must input numbers");
    		return false;
  		}else {
  			$('#balance').val( amount - total_amount );
  		}
    	
    }
    
    function drawer() {
   	reset();
    	 $(".calculation, #drawer").show();
    	 $.ajax({
			 url:base_url+"pos/order/draweramount",
			 type:'POST',
			 dataType:'json',
          success:function(data){
					if(data.status){
						$('#dr_total_amount').val( data.dr_total_amount );	
						$('#dr_total_order_count').val( data.dr_total_order_count );	
					}else{
						alert(data.message);
					}
					
				},
				error:function(err){
					alert('Something went wrong while open Drawer amount. Please try again.');
				}
		});
    	
    }
    function discount() {
    	if (ord_id != 0) {
    		reset();
    	 	$(".calculation, #discount").show(); 
    	 }else {
			alert('First you Choose the order type(Table / Room)');
		}   	   	
    }
    function orders_list() {
    	if (dr_id != 0) {
    		cancel();
    		reset();
    	 	$(".refund").show(); 
    	 	$.ajax({
			 url:base_url+"pos/order/view_orders_list",
			 type:'POST',
			 dataType:'html',
			 data:{dr_id:dr_id},
			 beforeSend: function() {
				$("#view_orders_list").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders_list").html(content);
          }
		});
    	 }else {
			alert('Please open Drawer');
		}   	   	
    }
    function drawers_list() {
    		cancel();
    		reset();
    	 	$(".refund").show(); 
    	 	$.ajax({
			 url:base_url+"pos/order/view_drawers_list",
			 type:'POST',
			 dataType:'html',
			 beforeSend: function() {
				$("#view_orders_list").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders_list").html(content);
          }
		});  	   	
    }
    function refund(ref_ord_id) {
    	if (dr_id != 0) {
    		if(confirm('Are you sure you want to refund this order?')){
    	 	$.ajax({
			 url:base_url+"pos/order/refund",
			 type:'POST',
			 dataType:'html',
			 data:{dr_id:dr_id, ord_id: ref_ord_id},
			 beforeSend: function() {
				$("#view_orders_list").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders_list").html(content);
          }
		});
		}
    	 }else {
			alert('Please open Drawer');
		}   	   	
    }
    function opendrawer() {
			$.ajax({
			 url:base_url+"pos/order/opendrawer",
			 type:'POST',
			 dataType:'json',
          success:function(data){
					if(data.status){
						window.location =  base_url+"pos/order";	
					}else{
						alert(data.message);
					}
					
				},
				error:function(err){
					alert('Something went wrong while open Drawer. Please try again.');
				}
		});
    }
    function closedrawer() {
    	if(dr_id != 0){
    	 var dr_actual_amount = document.getElementById('dr_actual_amount').value;
    	 var dr_total_amount = document.getElementById('dr_total_amount').value;
    	 if(dr_actual_amount != null && dr_actual_amount != ''){
    	var param={
					dr_id : dr_id,
					dr_actual_amount : dr_actual_amount,
					dr_total_amount : dr_total_amount
					};
			$.ajax({
			 url:base_url+"pos/order/closedrawer",
			 type:'POST',
			 dataType:'json',
			 data:param,
          success:function(data){//alert(data);
					if(data.status){
						window.location =  base_url+"pos/order";	
					}else{
						alert(data.message);
					}
					
				},
				error:function(err){//alert(err);
					window.location =  base_url+"pos/order";	
					alert('Something went wrong while close Drawer. Please try again.');
				}
		});
		}
		else {
			alert("Please Enter actual Amount in the drawer..");
		}
		}
		else {
			alert("Please open drawer..");
		}
    }
    
    //// Calculator Functions
    
    function type_number(num) {
    	if (num == 'clear')
    		dis_cal = '';
    	else if (num == 'back')
    		dis_cal = dis_cal.slice(0, -1); 
   	else
	    	dis_cal = dis_cal.concat(num);
	    if (percent_cal == false && Number(dis_cal) > Number(net_amount)) 
	    {	
	    	dis_cal = dis_cal.slice(0, -1);
	    	alert('amount cant larger than total amount');
	    }
	    else if (percent_cal == true && dis_cal > 99) 
	    {	
	    	dis_cal = dis_cal.substring(0, 2); 
	    	alert('Percentage cannot greater than 100');
	    }
    	$('.dis-price').html( dis_cal );
    	
    }
    function type_number_cash(num) {
    	if (num == 'clear')
    		dis_cal2 = '';
    	else if (num == 'back')
    		dis_cal2 = dis_cal2.slice(0, -1); 
   	else
	    	dis_cal2 = dis_cal2.concat(num);
	    if ((Number(dis_cal2) > (Number(total_amount)+5000)) && next_type != 'card_no') 
	    {	
	    	dis_cal2 = dis_cal2.slice(0, -1);
	    	dis_cal2 = dis_cal2.substring(0, 8); 
	    	alert('Amount is very large');
	    }
	  if(next_type == 'card_no')
		card_no = dis_cal2;
		 else
		cal_amount = dis_cal2;
    	$('.dis-price2').html( dis_cal2 );
    	$('#balance').html( dis_cal2 - total_amount );
    	
    }
	function next() {
		if(cal_amount != null && cal_amount != ''){
    	 dis_cal2 = '';
	  	 next_type = 'card_no';
  	  	 $('#title-cal').html('Card_No:');
    	 $('.dis-price2').html( dis_cal2 );
    	 $("#next-but").hide();
    	 $("#done-but").show();
    	}
    	else {
    		alert('Please Enter Amount');
    	}
    }
    function checkcal_percent() {
		// Get the checkbox
 	 	var checkBox = document.getElementById("checkPercent");

		if (checkBox.checked == true){
			percent_cal = true;
			 $("#dis_per").show();
		}
		else{
			percent_cal = false;
			 $("#dis_per").hide();	
		}
		 if (percent_cal == true && dis_cal > 99) 
    	{	
    		dis_cal = dis_cal.substring(0, 2); 
    		$('.dis-price').html( dis_cal );
    		alert('Percentage cannot greater than 100');
    	}
	}
	 function done_cal() {
	 	if (ord_id != 0) {
	 	if (dis_cal != '') {
    	 $.ajax({
			 url:base_url+"pos/order/done_cal",
			 type:'POST',
			 dataType:'html',
           data:{ord_id:ord_id, ord_discount_type:percent_cal, dis_cal : dis_cal},
			 beforeSend: function() {
				$("#view_orders").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders").html(content);
          	cancel();
          },
				error:function(err){
					alert('Something went wrong while done calculator. Please try again.');
				}
		});
		}else {
			alert('Enter number');
		} 
    	}else {
			alert('First you Choose the order type(Table / Room)');
		} 
    }
    

      function sync() {
    		cancel();
    		reset();
    	 	$(".refund").show(); 
    	 	$.ajax({
			 url:base_url+"pos/order/sync",
			 type:'GET',
			 dataType:'html',
			 beforeSend: function() {
				$("#view_orders_list").html('<img src="<?php echo base_url(); ?>assets/pos/images/loader.gif" alt="" >');
			 },
          success: function(content) {
          	$("#view_orders_list").html(content);
          }
		});  	   	
    }
    var sync_status = 0;
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var limit = 0.10;
  var id = setInterval(frame, 100);
  function frame() {
  if (sync_status == 1) {
    
      var id = setInterval(frame, 1);
   }
   else if (width >= 90) {
   	limit = 0.0001;
   	}
   else if (width >= 70) {
   	limit = 0.01;
   	}
   else if (width >= 40) {
   	limit = 0.02;
   	}
   else if (width >= 30) {
   	limit = 0.05;
   	}
   
    if (width >= 100) {
    
      clearInterval(id);
    } else {
    
      width += limit; 
      elem.style.width = width + '%'; 
    }
  }
}
    function backup() {
    		sync_status = 0;
    		$("#myProgress").show(); 
    	 	$.ajax({
			 url:base_url+"pos/sync",
			 type:'GET',
			 dataType:'html',
			 beforeSend: function() {
move();
   
 
			 },
          success: function(content) {
				sync_status = 1;
          	$("#progress").html("Backup Successfully Done");
          	
          	setTimeout(function() { sync(); }, 5000);

          },
          error:function(err){
					sync_status = 1;
          	$("#progress").html("Backup Failed");
          	document.getElementById("myBar").style.backgroundColor = "red";
				}
		});  	   	
    }

    
    $(document).ready(function(){
    var default_url = "<?php echo base_url(); ?>pos/order/view_order?ord_id="+ord_id;
	 $("#view_orders").load(default_url);
	 });
	</script>
  
  
  
  
  
  
  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller
{
 	/**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */
	public function __construct()
   {
		parent::__construct();
		 $this->load->model('pos/order_model');
		 $this->load->model('pos/common_model');
		 $login_type_list =  array('3', '4');
		 if( !empty($_SESSION['user_id']) && in_array($this->session->userdata('login_type'), $login_type_list))
		  {
			return true;
			}else
			{ 
				$this->session->sess_destroy();				
				redirect( base_url('admin'), 'refresh');
				return false;
			}

      
    }	
    public function index()
	{

			$data = array();	
			$id = $this->uri->segment(4);
			$data['ord_id'] = ($id != '')? $id : 0;
		
			$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$where=array("dr_user_id"=>$user_id, "dr_status"=>0);
			$fields="dr_id, dr_open_time";
			$drawer_result = $this->common_model->select_row($fields, 'ht_drawers',$where);			
			$data['dr_id'] = (!empty($drawer_result['dr_id']))? $drawer_result['dr_id'] : 0;
			$data['dr_open_time'] = (!empty($drawer_result['dr_open_time']))? $drawer_result['dr_open_time'] : '';
							
			$data['categories'] = $this->order_model->get_categories();
			$this->load->view('pos/common/header');
			$this->load->view('pos/common/left_menu');
			$this->load->view('pos/common/top_navigation');	
			$this->load->view('pos/order',$data);	
			$this->load->view('pos/common/footer');	

	}
	public function view_items()
	{
		$itcat_id = $this->input->post('itcat_id');
		$data['items'] = $this->order_model->view_items($itcat_id); 
		$this->load->view('pos/ajax_items',$data);		
	}
	public function view_types()
	{
		$type_name = $this->input->post('type_name');
		$data['type_name'] = $type_name;
		if($type_name != 'takeaway') {
			$where=array("orty_type"=>$type_name);
			$fields="orty_limit";
			$data['type_limit'] = $this->common_model->select_row($fields, 'ht_order_types',$where);
			$where2=array("ord_type"=>$type_name, "ord_status!=" => 3);
			$fields="GROUP_CONCAT(DISTINCT ord_type_no) AS typelist";
			$data['types'] = $this->common_model->select_row($fields, 'ht_orders',$where2); 
		}
		else {
			$where2=array("ord_type"=>$type_name);
			$fields="MAX(ord_type_no) AS max";
			$data['max'] = $this->common_model->select_row($fields, 'ht_orders',$where2); 
		}
		$this->load->view('pos/ajax_types',$data);		

	}
	public function view_current()
	{
		
			$where=array("ord_type"=>'takeaway', "ord_status!=" => 3);
			$orderBy='ord_type_no ASC';
			$fields="ord_id, ord_type_no, ord_type_split, ord_status";
			$data['takeaway'] = $this->common_model->select_array($fields, 'ht_orders',$where, $orderBy); 
			$where=array("ord_type"=>'table', "ord_status!=" => 3);
			$data['table'] = $this->common_model->select_array($fields, 'ht_orders',$where,$orderBy); 
			$where=array("ord_type"=>'room', "ord_status!=" => 3);
			$data['room'] = $this->common_model->select_array($fields, 'ht_orders',$where, $orderBy); 

		$this->load->view('pos/ajax_current',$data);
			
	}
	public function autosearch()
	{
		$data = array();
		$search = $this->input->post('search');
		if($search != '') {
		$data['items'] = $this->order_model->autosearch($search); 
		}
		$this->load->view('pos/ajax_items',$data);		
	}
	public function select_type_num()
	{
	
		$data_result=array('status'=>false,'message'=>'error occurred while choose order type.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_type = $this->input->post('type_name');
			$ord_type_no = $this->input->post('type_num');
			$added_time = date('Y-m-d H:i:s');
			$ord_date = date('Y-m-d');	
			$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$where=array("ord_type"=>$ord_type, "ord_type_no"=>$ord_type_no, "ord_status!=" => 3);
			$count1 = $this->common_model->count_row('ht_orders',$where); 
			if($count1 == 0) {
			$insert=array(
							'ord_type' 		=>$ord_type,
							'ord_type_no' 	=>$ord_type_no,
							'ord_sup_id' 	=>$ord_user_id,
							'ord_date' 		=>$ord_date,
							'ord_added_time'=>$added_time
							);
			if($ord_id=$this->common_model->insert_lastid('ht_orders',$insert)){
				$data_result=array('status'=>true,'message'=>'Successfully Added.');			
				$data['order_details'] = $this->order_model->order_details($ord_id); 		
				}
			}
			else {
				$data['type_availablity'] = ucfirst($ord_type).' No.'.$ord_type_no.' Not Available.. Please Choose Split Option';
			}
				
		}
		$this->load->view('pos/ajax_orders',$data);

	}
	public function split_order()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while split order.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0') {
				$where=array("ord_id"=>$ord_id);
				$fields="ord_type_no, ord_type";
				$splited_order = $this->common_model->select_row($fields, 'ht_orders',$where);
				$where2=array("ord_type"=>$splited_order['ord_type'], "ord_type_no"=>$splited_order['ord_type_no']);
				$fields="MAX(ord_type_split) AS max";
				$new_order = $this->common_model->select_row($fields, 'ht_orders',$where2);
				
			
			$added_time = date('Y-m-d H:i:s');
			$ord_date = date('Y-m-d');	
			$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');

			$insert=array(
							'ord_type' 		=>$splited_order['ord_type'],
							'ord_type_no' 	=>$splited_order['ord_type_no'],
							'ord_type_split' 	=>++$new_order['max'],
							'ord_sup_id' 	=>$ord_user_id,
							'ord_date' 		=>$ord_date,
							'ord_added_time'=>$added_time
							);
			if($ord_id=$this->common_model->insert_lastid('ht_orders',$insert)){
				$data_result=array('status'=>true,'message'=>'Successfully Added.');			
				$data['order_details'] = $this->order_model->order_details($ord_id); 		
				}
			}
		}
		$this->load->view('pos/ajax_orders',$data);
		
	}
	public function place_order()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while ordering.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0') {
										
			$added_time = date('Y-m-d H:i:s');
			$ord_date = date('Y-m-d');	
			$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');

			$update=array(
							'orit_status'  =>'1',
							'orit_view_status'  =>'0',
							'orit_updated_time'=>$added_time
							);
			$where=array("orit_ord_id"=>$ord_id, "orit_status"=>0);	
			
			if($this->common_model->update('ht_order_items',$update, $where)){
				$update2=array(
							'ord_status'  =>'1',
							'ord_updated_time'=>$added_time
							);
			$where2=array("ord_id"=>$ord_id);
			$this->common_model->update('ht_orders',$update2, $where2);
				$data_result=array('status'=>true,'message'=>'Successfully Updated.');			
				$data['order_details'] = $this->order_model->order_details($ord_id); 	
				}
			}
		}
		$this->load->view('pos/ajax_orders',$data);
		
	}
		public function place_order_print()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while ordering.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0') {
				$data['order_details_recep'] = $this->order_model->order_details_recep($ord_id,array("ord_id"=>$ord_id,"orit_print_status"=>'0')); 
				$this->common_model->update('ht_order_items',array("orit_print_status"=>'1'),array("orit_ord_id"=>$ord_id));	
				
				}
			
		}
		$this->load->view('pos/print/example/receipt-kitchen-ethernet',$data);
	}
	public function place_print()
	{
		//echo "test";
		$data_result=array('status'=>false,'message'=>'error occurred while ordering.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0') {
				$data['order_details'] = $this->order_model->order_details($ord_id);
				//echo $data['order_details'][0]['orit_quantity'];exit;
				if(empty($data['order_details'][0]['orit_quantity']))
				{
					echo "No items in bill";exit;
				}	
				$this->load->view('pos/print/example/receipt-with-logo',$data);					
			}
		}
		
	}
	public function drawer_print()
	{
		//echo "test";
		$data_result=array('status'=>false,'message'=>'error occurred while ordering.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			if($ord_id != '0') {
				$where=array("dr_id"=>$ord_id, "dr_user_id"=>$user_id);	
 				$condition='ht_drawers.dr_id=ht_orders.ord_dr_id';
				$print['data']=$this->common_model->select_join('ht_drawers','ht_orders',$condition,$where);	
				$condition1='ht_orders.ord_id=ht_order_items.orit_ord_id';
				$condition2='ht_order_items.orit_item_id=ht_items.item_id';
					
				$result=$this->order_model->get_count($ord_id);	
				foreach ($result as $val) {
					$where1=array("ord_dr_id"=>$ord_id,"orit_item_id"=>$val['orit_item_id']);
					$fields=array('item_name','sum(orit_quantity)','item_category');
					$row[]=$this->common_model->select_join_three_ord('ht_orders','ht_order_items','ht_items',$condition1,$condition2,$where1,$fields);	
				}
				//print_r($row);exit;
				//$print['results']=$result;
				$print['rows']=$result;					
			}
			//echo '<pre>';print_r($print);exit;
		}
		$this->load->view('pos/print/example/print_drawer',$print);
	}
	public function view_order()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while view orders.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='GET')
		{
			$ord_id = $this->input->get('ord_id');
			$data['order_details'] = $this->order_model->order_details($ord_id);	
		}
		$this->load->view('pos/ajax_orders',$data);
	}	
	public function add_order()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while adding product into order.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$item_id = $this->input->post('item_id');
			$item_rate = $this->input->post('item_rate');
			$ord_id = $this->input->post('ord_id');
			$item_tax = 0;
			$item_discount = "0";
			$added_time = date('Y-m-d H:i:s');
			if($ord_id == '0') {
				$ord_type = "table";
				$ord_type_no = "1";
				$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
				$ord_date = date('Y-m-d');
				
				$insert=array(
								'ord_type' 		=>$ord_type,
								'ord_type_no' 	=>$ord_type_no,
								'ord_sup_id' 	=>$ord_user_id,
								'ord_date' 		=>$ord_date,
								'ord_added_time'=>$added_time
							);
				$ord_id=$this->order_model->add_order($insert);
			}
			if($ord_id != '0') {
			$where=array("orit_item_id"=>$item_id, "orit_ord_id"=>$ord_id);
			$fields="orit_status";
//				$count1	= $this->order_model->check_order_item($item_id, $ord_id);
				if($checkreult = $this->common_model->select_row($fields, 'ht_order_items',$where)) {
					$item_to_store=array(
								'orit_updated_time'=>$added_time,
								'orit_view_status'=>'0'
							);
					if($checkreult['orit_status'] == 2)
						$item_to_store['orit_status'] = 1;
					if($this->order_model->update_order_item($item_id, $ord_id, $item_to_store)){
						$data_result=array('status'=>true,'message'=>'Successfully Added.');				
					}
				}
				else {
					$item_to_store=array(
								'orit_ord_id' 	=>$ord_id,
								'orit_item_id' =>$item_id,
								'orit_rate' 	=>$item_rate,
								'orit_tax' 		=>$item_tax,
								'orit_discount'=>$item_discount,
								'orit_added_time'=>$added_time
							);
					if($this->order_model->add_order_items($item_to_store)){
						$data_result=array('status'=>true,'message'=>'Successfully Added.');				
					}
				}
				$data['order_details'] = $this->order_model->order_details($ord_id); 	
			}			
		}
		$this->load->view('pos/ajax_orders',$data);

	}
	public function delete_order_item()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while delete item from order.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$item_id = $this->input->post('item_id');
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0' && $item_id != '0') {
				
				$where=array("orit_ord_id"=>$ord_id, "orit_item_id"=>$item_id);
				if($this->common_model->delete_rows('ht_order_items',$where)){
						$data_result=array('status'=>true,'message'=>'Successfully Deleted.');				
					}
				$data['order_details'] = $this->order_model->order_details($ord_id); 
				$this->load->view('pos/ajax_orders',$data);	
			}			
		}
		
	}
	public function delete_order()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while delete order.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			if($ord_id != '0') {
				
				$where=array("orit_ord_id"=>$ord_id);
				if($this->common_model->delete_rows('ht_order_items',$where)){
						$data_result=array('status'=>true,'message'=>'Successfully Deleted.');
					}
					$where2=array("ord_id"=>$ord_id);		
					$this->common_model->delete_rows('ht_orders',$where2);	
				$this->load->view('pos/ajax_orders',$data);	
			}			
		}
		
	}
	public function payment()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while payment.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			$dr_id = $this->input->post('dr_id');
			$paytype = $this->input->post('paytype');
			$total_amount = $this->input->post('total_amount');
			$net_amount = $this->input->post('net_amount');
			$round_difference = $this->input->post('round_difference');
			if($ord_id != '0') {
				
				
			$where_dis=array("orit_ord_id"=>$ord_id);
			$fields_dis="SUM(orit_rate * orit_quantity) AS total_amount";
			$total_result_dis = $this->common_model->select_row($fields_dis, 'ht_order_items',$where_dis);
			$total_amount_dis = $total_result_dis['total_amount'];
										
			$added_time = date('Y-m-d H:i:s');
			$ord_date = date('Y-m-d');	
			$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$global = $this->order_model->global_settings('pos'); 

			$update=array(
							'orit_status'  =>'3',
							'orit_updated_time'=>$added_time
							);
			$where=array("orit_ord_id"=>$ord_id);	
			
			if($this->common_model->update('ht_order_items',$update, $where)){
				$update2=array(
							'ord_user_id'  =>$ord_user_id,
							'ord_total_amount'  =>$total_amount,
							'ord_round'  =>$round_difference,
							'ord_dr_id'  =>$dr_id,
							'ord_status'  =>'3',
							'ord_updated_time'=>$added_time
							);
				if($paytype == 'card') {
						$update2['ord_paytype'] = $paytype;
						$update2['ord_card_amount'] = $this->input->post('card_amount');
						$update2['ord_card_no'] = $this->input->post('card_no');
						$glb_customer_id = $global['glb_card_id'];
						$glb_cust_account_group = $global['card_account_group'];
						$glb_cust_account_head = $global['card_account_head'];						
					}
					else {
						$glb_customer_id = $global['glb_customer_id'];
						$glb_cust_account_group = $global['cust_account_group'];
						$glb_cust_account_head = $global['cust_account_head'];					
						}
			$where2=array("ord_id"=>$ord_id);
			$this->common_model->update('ht_orders',$update2, $where2);
				$data_result=array('status'=>true,'message'=>'Successfully Paid.');
				$data['order_details_update'] = $this->order_model->order_details($ord_id); 
				foreach( $data['order_details_update'] as $row )
				{
					$ord_discount = $row['ord_discount'];
					$ord_discount_type = $row['ord_discount_type'];
					$orit_id = $row['orit_id'];
					$orit_qty = $row['orit_quantity'];
					$orit_rate  = $row['orit_rate'];
									
					
					if($ord_discount_type == 'true')
            		$discount = ($orit_rate * $ord_discount) / 100;
              	else{
               	$discount = ($orit_rate / $total_amount_dis) * $ord_discount;
               }
           		$total = $orit_rate - $discount; 
          		$tax = ($total * 5 )/100;
           		$total = $total + $tax; 
           		$total = round($total); 
           		$tax = ($row['orit_quantity'] * $tax);
           		$discount = ($row['orit_quantity'] * $discount);
           		$total = ($row['orit_quantity'] * $total);	
           		$update3=array(
							'orit_tax'  =>$tax,
							'orit_discount'=>$discount,
							'orit_total_amount'=>$total
							);
					$where3=array("orit_ord_id"=>$ord_id, "orit_id"=>$orit_id);	
			
					$this->common_model->update('ht_order_items',$update3, $where3);
				}
				
							
				$data['order_details'] = $this->order_model->order_details($ord_id); 
				$insertitems = array();

				$i =0;
				foreach( $data['order_details'] as $row )
				{
					$insertitems[$i]['txn_type'] = 'SL';
					$insertitems[$i]['docno'] = $row['ord_id'];
					$insertitems[$i]['docdt'] = $row['ord_date'];
					$insertitems[$i]['qty'] = $row['orit_quantity'];
					$insertitems[$i]['rate'] = $row['orit_rate'];
					$insertitems[$i]['tax'] = $row['orit_tax'];
					$insertitems[$i]['disc'] = $row['orit_discount'];
					$insertitems[$i]['amount'] = $row['orit_total_amount'];
					$insertitems[$i]['cost'] = $row['orit_total_amount'];
					$insertitems[$i]['item'] = $row['item_id'];
					$insertitems[$i]['time'] = $added_time;
					$insertitems[$i]['user'] = $ord_user_id;
					$insertitems[$i]['loc'] = $global['glb_location_id'];
					$insertitems[$i]['name'] = $glb_customer_id;
					$insertitems[$i]['srep'] = 10;

					$i++;
				}
				$ledgeritems = array(
 											 array(
   											 'docno' => $ord_id,
   											 'DOCDT' => $ord_date,
   											 'ACC_MASTER' => $glb_customer_id,
   											 'ACCOUNT_GROUP' => $glb_cust_account_group,
   											 'ACCOUNT_HEAD' => $glb_cust_account_head,
   											 'DRAMT' => $total_amount,
   											 'CRAMT' => 0,
   											 'USER' => $ord_user_id,
   											 'DATE' => $ord_date,
   											 'TIME' => $added_time
											  ),
											  array(
   											 'docno' => $ord_id,
   											 'DOCDT' => $ord_date,
   											 'ACC_MASTER' => $global['glb_sales_id'],
   											 'ACCOUNT_GROUP' => $global['sales_account_group'],
   											 'ACCOUNT_HEAD' => $global['sales_account_head'],
   											 'DRAMT' => 0,
   											 'CRAMT' => $total_amount,
   											 'USER' => $ord_user_id,
   											 'DATE' => $ord_date,
   											 'TIME' => $added_time
											  )

										);
				$this->common_model->insert_batch('ht_transactions',$insertitems);										
				$this->common_model->insert_batch('ht_ledger',$ledgeritems);										
				}
			}
		}
		$this->load->view('pos/ajax_orders',$data);
	}
	public function opendrawer()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while open drawer.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$added_time = date('Y-m-d H:i:s');
			$date = date('Y-m-d');	
			$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$where=array("dr_user_id"=>$user_id, "dr_status"=>0);
			$fields="dr_id, dr_open_time";
			$drawer_result = $this->common_model->select_row($fields, 'ht_drawers',$where);
			if(empty($drawer_result)) {
			$insert=array(
							'dr_user_id'	=>$user_id,
							'dr_open_time' =>$added_time
							);
			$dr_id=$this->common_model->insert_lastid('ht_drawers',$insert);
		
			}
				$data_result=array('status'=>true,'message'=>'Successfully Added.');
		}
		echo json_encode($data_result);exit;	
		
	}
	public function closedrawer()
	{	

		//$data_result=array('status'=>false,'message'=>'error occurred while close drawer.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$dr_id = $this->input->post('dr_id');
			$actual_amount = $this->input->post('dr_actual_amount');
			$total_amount = $this->input->post('dr_total_amount');
			$added_time = date('Y-m-d H:i:s');
			$date = date('Y-m-d');	
			$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$update=array(
							'dr_total_amount'  =>$total_amount,
							'dr_actual_amount'  =>$actual_amount,
							'dr_status'  =>'1',
							'dr_close_time'=>$added_time
							);
			$where=array("dr_id"=>$dr_id, "dr_user_id"=>$user_id, "dr_status"=>0);	
			if($this->common_model->update('ht_drawers',$update, $where)){	
			   $data_result=array('status'=>true,'message'=>'Successfully Added.');
			}
		}		
		//$data_result=array('status'=>true,'message'=>'Successfully Added.');
		echo json_encode($data_result);	
	}
	public function draweramount()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while open drawer amount.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$where=array("dr_user_id"=>$user_id, "dr_status"=>0);
			$fields="dr_id, dr_open_time";
			$drawer_result = $this->common_model->select_row($fields, 'ht_drawers',$where);			
			$data['dr_id'] = (!empty($drawer_result['dr_id']))? $drawer_result['dr_id'] : 0;
			
			$where2=array("ord_dr_id"=>$data['dr_id'], "ord_status" => 3, "ord_paytype" => 'cash');
			$fields="SUM(ord_total_amount) AS total_amount, COUNT(ord_total_amount) AS total_order_count";
			$total_amount_details = $this->common_model->select_row($fields, 'ht_orders',$where2);
			$total_amount = (!empty($total_amount_details) && $data['dr_id']!= 0)? $total_amount_details['total_amount'] : 0;	
			$total_order_count = (!empty($total_amount_details) && $data['dr_id']!= 0)? $total_amount_details['total_order_count'] : 0;	

			$data_result=array('status'=>true,'message'=>'Successfully view.', 'dr_total_amount' => $total_amount, 'dr_total_order_count' => $total_order_count);
		}
		echo json_encode($data_result);exit;	
		
	}
	public function done_cal()
	{
		
		$data_result=array('status'=>false,'message'=>'error occurred while ordering.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$ord_id = $this->input->post('ord_id');
			$dis_cal = $this->input->post('dis_cal');
			$ord_discount_type = $this->input->post('ord_discount_type');
			if($ord_id != '0') {
										
			$added_time = date('Y-m-d H:i:s');
			$ord_date = date('Y-m-d');	
			$ord_user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');

			$update=array(
							'ord_discount'  =>$dis_cal,
							'ord_discount_type'  =>$ord_discount_type,
							'ord_updated_time'=>$added_time
							);
			$where=array("ord_id"=>$ord_id);
			
			if($this->common_model->update('ht_orders',$update, $where)){
				$data_result=array('status'=>true,'message'=>'Successfully Updated.');			
				$data['order_details'] = $this->order_model->order_details($ord_id); 		
				}
			}
		}
		$this->load->view('pos/ajax_orders',$data);
		
	}
	public function kitchen_status()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while delete item from order.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$count1 = 0;
			$kitchenstatus = $this->input->post('kitchenstatus');
			$ord_id = $this->input->post('ord_id');
			if($kitchenstatus != '')
			{
			$where=array("orit_ord_id"=>$ord_id, "orit_id"=>array('Available','Notavailable'), "orit_status" => 2);
			$count1 = $this->order_model->count_kitchenstatus($ord_id,$kitchenstatus);
			}
			if($count1 > 0){
				$data_result=array('status'=>true,'message'=>'Order Done.');				
				$data['order_details'] = $this->order_model->order_details($ord_id); 
				$this->load->view('pos/ajax_orders',$data);		
			}
			else
				return false;
		}
		
	}
	public function view_orders_list()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while view orders.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$dr_id = $this->input->post('dr_id');
			
			$where=array("ord_dr_id" => $dr_id);
			$orderBy='ord_id DESC';
			$fields="ord_id, ord_total_amount, ord_paytype, ord_status";
			$data['orders_list'] = $this->common_model->select_array($fields, 'ht_orders',$where, $orderBy); 
		}

		$this->load->view('pos/ajax_orders_list',$data);
	}
	public function view_drawers_list()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while view orders.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$orderBy='dr_id DESC';
			$fields="*";
			$data['drawers_list'] = $this->common_model->select_array_limit($fields, 'ht_drawers','', $orderBy, 0, 31); 
		}

		$this->load->view('pos/ajax_drawers_list',$data);
	}
	public function refund()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while view orders.');
		$data = array();
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$dr_id = $this->input->post('dr_id');
			$ord_id = $this->input->post('ord_id');
			
			$update=array(
							'ord_paytype'  =>'refund'

							);
			$where=array("ord_id"=>$ord_id);			
			$this->common_model->update('ht_orders',$update, $where);
			$where=array("docno"=>$ord_id);
			$update=array(
							'status'  =>0
							);
			$this->common_model->update('ht_transactions',$update, $where);
			$this->common_model->update('ht_ledger',$update, $where);
			
			$where=array("ord_dr_id" => $dr_id);
			$orderBy='ord_id DESC';
			$fields="ord_id, ord_total_amount, ord_paytype, ord_status";
			$data['orders_list'] = $this->common_model->select_array($fields, 'ht_orders',$where, $orderBy); 
		}

		$this->load->view('pos/ajax_orders_list',$data);
	}	
	public function sync()
	{
		$data_result=array('status'=>false,'message'=>'error occurred while view orders.');
		$data = array();
		$where=array("sync_id"=>1);
		$fields="*";
		$data['sync_details'] = $this->common_model->select_row($fields, 'ht_sync',$where);

		$this->load->view('pos/ajax_sync',$data);
	}
	// public function mail_send()
	// {
	// 	//echo "tets";exit();
	// 		$user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
	// 		$where=array("dr_user_id"=>$user_id);
	// 		$fields="dr_id, dr_open_time,dr_close_time";
	// 		$drawer_result = $this->common_model->select_row1($fields, 'ht_drawers',$where);			
	// 		//$data['dr_id'] = (!empty($drawer_result['dr_id']))? $drawer_result['dr_id'] : 0;
	// 		//print_r($drawer_result);exit;
	// 		$ord_id=$drawer_result['dr_id'];

	// 			$where=array("dr_id"=>$ord_id, "dr_user_id"=>$user_id);	
 // 				$condition='ht_drawers.dr_id=ht_orders.ord_dr_id';
	// 			$print['data']=$this->common_model->select_join('ht_drawers','ht_orders',$condition,$where);					
	// 			$result=$this->order_model->get_count($drawer_result['dr_id']);	



	// $this->load->library('mailer');

 //    $to        =   'bony@ariussoft.in';
 //    $subject    =    "Daily Sales Report";

 //    $mail_body    =    
    
 //    '<div style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;">
 //    <div>	Drawer Open Time:'.$drawer_result['dr_open_time'].'<br>
 //    	Drawer Close Time:'.$drawer_result['dr_close_time'].'</div>
 //                    <table style="padding: 10px;font-size:14px; width:100%;" border="1">
 //                    <tr><th>Item Name</th><th>Rate</th><th>Quantity</th><th>Discount</th><th>Total Amount</th></tr>
 //                        ';

 //      foreach($result as $row)
 //      {
 //      	$rate=$row['rate']+$row['rate']*(5/100);
 //         $mail_body  .=  '<tr><td>'. $row['item_name'].'</td><td>'.round($rate).'</td><td>'. $row['qty'].'</td><td>'. round($row['discount']).'</td><td>'. round($row['total_amount']).'</td></tr>';
 //      }
    
 //    $mail_body  .= '
 //                    </table>
 //                </div>
 //    ';
 //    $this->mailer->send_mail( $to, $subject, $mail_body );
	// }
	public function mail_send()
	{
		//echo "tetd";exit;
		ini_set('memory_limit', '256M');
		// load library
		$this->load->library('pdf');
        $pdf = $this->pdf->load();
		//echo "tetd";exit;
       $user_id = (!$this->session->userdata('user_id'))? 0 : $this->session->userdata('user_id');
			$where=array("dr_user_id"=>$user_id);
	 		$fields="dr_id, dr_open_time,dr_close_time";
	 		$drawer_result = $this->common_model->select_row1($fields, 'ht_drawers',$where);			
	 		//$data['dr_id'] = (!empty($drawer_result['dr_id']))? $drawer_result['dr_id'] : 0;
	 		//print_r($drawer_result);exit;
	 		$ord_id=$drawer_result['dr_id'];

				$where=array("dr_id"=>$ord_id, "dr_user_id"=>$user_id);	
 				$condition='ht_drawers.dr_id=ht_orders.ord_dr_id';
				$print['data']=$this->common_model->select_join('ht_drawers','ht_orders',$condition,$where);					
				$result['data']=$this->order_model->get_count($drawer_result['dr_id']);	
		//print_r($result);exit;
        //$data['title'] = "items";

        // boost the memory limit if it's low ;)
        $html = $this->load->view('pos/mail_report',$result,true);
        
		// render the view into HTML

		$pdfFilePath = base_url().'assets/email-pdf/pdf_name.pdf';
		//echo $pdfFilePath;exit;
		$pdf->WriteHTML($html);
		$output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
		//$pdf->Output();
		//$pdf->Output('',"S");
		//$content=Output($pdfFilePath,"S");
			//$f=fopen($pdfFilePath,'wb');
			//echo $f;exit;
			//if(!$f) $this->Error('Unable to create output file: '.$pdfFilePath);
			//fwrite($f,"1");
			//fclose($f);
 $config = Array(    

      'protocol' => 'mail',

      'smtp_host' => 'smtp.gmail.com',

      'smtp_port' => 25,

      'smtp_user' => 'sales@rahaelsrecipes.com',

      'smtp_pass' => 'rahael#18',

      'smtp_timeout' => '4',

      'mailtype' => 'text/html',

      'charset' => 'UTF-8'

    );

    $this->load->library('email');
    $this->email->initialize($config);
/*    $this->email->initialize(array(
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.sendgrid.net',
  'smtp_user' => 'sales@rahaelsrecipes.com',
  'smtp_pass' => 'rahael#18',
  'smtp_port' => 587,
  'crlf' => "\r\n",
  'newline' => "\r\n"
));*/

  $this->email->set_newline("\r\n");

			
			//$this->load->library('email');

		//$result = $this->email
		            $this->email->from('sales@rahaelsrecipes.com', 'Raheals hotel');
		            $this->email->to('ctsoni@yahoo.com');
		            $this->email->subject('Sales Report');
		            $this->email->message('Sales Report');
		           // $this->email->_headers("MIME-Version: 1.0");
		            $this->email->attach($pdf->Output($output, 'S'),'attachment', 'report.pdf', 'application/pdf');
		            //$this->email->attach($f);
		            $this->email->send();
		            //echo "tet";exit;
		$this->email->clear($pdfFilePath);

	}

				
}



<?php


class Order_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
	
	public function get_categories()
    {	
		$this->db->select('*');
		$this->db->from('ht_item_category');
		$this->db->where('itcat_status', '1');
		$query = $this->db->get();
		return $query->result_array();
    }
    public function view_items($itcat_id)
    {	
		$this->db->select('*');
		$this->db->from('ht_items');
		$this->db->where('item_status', '1');
		$this->db->where('item_sale', '1');
		$this->db->where('item_category', $itcat_id);
		$query = $this->db->get();
		return $query->result_array();
    }
    public function autosearch($search)
    {	
		$this->db->select('*');
		$this->db->from('ht_items');
		$this->db->where('item_status', '1');
		$this->db->where('item_sale', '1');
//		$this->db->like('item_name', $search);
	//	$this->db->or_like('item_code', $search);
		$where = "(item_name LIKE '%$search%' OR item_code LIKE '%$search%')";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
    }
    public function add_order($insert)
	{

		if(!empty($insert)){
			$this->db->insert('ht_orders',$insert);
			$ord_id=$this->db->insert_id();
			return $ord_id;
		}else{
			return false;
		}
	}
	function add_order_items($data)
    {
		$insert = $this->db->insert('ht_order_items', $data);
	    return $insert;
	}
	public function global_settings($glb_category)
    {	
		$this->db->select('a.glb_location_id, a.glb_customer_id, a.glb_sales_id, a.glb_card_id, b.account_group as cust_account_group, b.account_head as cust_account_head, c.account_group as sales_account_group, c.account_head as sales_account_head , d.account_group as card_account_group, d.account_head as card_account_head');
		$this->db->from('ht_global_settings as a');
		$this->db->join('account_master as b', 'b.master_id = a.glb_customer_id', 'left');
		$this->db->join('account_master as c', 'c.master_id = a.glb_sales_id', 'left');
		$this->db->join('account_master as d', 'd.master_id = a.glb_card_id', 'left');
		$this->db->where('a.glb_category', $glb_category);
		$query = $this->db->get();
		return $query->row_array();
    }
	 public function order_details($ord_id)
    {	
		$this->db->select('b.orit_quantity, b.orit_rate, b.orit_id, b.orit_total_amount, b.orit_tax, b.orit_discount, b.orit_status, c.item_name, a.ord_id, c.item_id, a.*');
		$this->db->from('ht_orders as a');
		$this->db->join('ht_order_items as b', 'b.orit_ord_id = a.ord_id', 'left');
		$this->db->join('ht_items as c', 'c.item_id = b.orit_item_id', 'left');
		$this->db->where('ord_id', $ord_id);
		$query = $this->db->get();
		//echo $this->db->last_query();exit(); 
		return $query->result_array();
    }
    public function order_details_recep($ord_id,$where)
    {	
		$this->db->select('b.orit_quantity, b.orit_rate, b.orit_id, b.orit_total_amount, b.orit_tax, b.orit_discount, b.orit_status, c.item_name, a.ord_id, c.item_id, a.*');
		$this->db->from('ht_orders as a');
		$this->db->join('ht_order_items as b', 'b.orit_ord_id = a.ord_id', 'left');
		$this->db->join('ht_items as c', 'c.item_id = b.orit_item_id', 'left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query();exit(); 
		return $query->result_array();
    }
    public function orders()
    {	
		$this->db->select('b.orit_quantity, b.orit_rate,b.orit_view_status,b.orit_ord_id, b.orit_status, b.orit_id, c.item_name, a.ord_id, c.item_id, a.*');
		$this->db->from('ht_orders as a');
		$this->db->join('ht_order_items as b', 'b.orit_ord_id = a.ord_id', 'left');
		$this->db->join('ht_items as c', 'c.item_id = b.orit_item_id', 'left');
		$this->db->where('ord_status', '1');
		$this->db->where('orit_status !=', '0');
		$this->db->order_by('ord_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
    }
    function check_order_item($item_id, $ord_id)
    {
		$this->db->from('ht_order_items');
		$this->db->where('orit_item_id', $item_id);
		$this->db->where('orit_ord_id', $ord_id);
		$query = $this->db->get();
		return $query->num_rows();
    }
    function update_order_item($item_id, $ord_id, $data)
    {
		$this->db->where('orit_ord_id', $ord_id);
		$this->db->where('orit_item_id', $item_id);
		$this->db->set('orit_updated_num', 'orit_updated_num+1', FALSE);
		$this->db->set('orit_quantity', 'orit_quantity+1', FALSE);
		
		$report = $this->db->update('ht_order_items', $data);
		return $report;
	}
	public function update($table,$data,$where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($table);
		//echo $this->db->last_query();exit(); 
		return TRUE;
	}
	public function count_kitchenstatus($ord_id,$kitchenstatus)
    {
		$this->db->from('ht_order_items');
		$this->db->where('orit_ord_id', $ord_id);
		$this->db->where('orit_status', 2);
		$this->db->where_in('orit_id',$kitchenstatus);
		$query=$this->db->get();
		return $query->num_rows();
	} 
	public function timer()
	{
		$ord_id=$_POST['ord_id'];
	}
	public function select_filter($ord_id)
	{
		$sql = "SELECT distinct(ht_order_items.orit_item_id),'ht_items.item_category' FROM `ht_orders` JOIN `ht_order_items` ON `ht_orders`.`ord_id`=`ht_order_items`.`orit_ord_id` JOIN ht_items  WHERE  `ht_orders`.`ord_dr_id` = $ord_id ORDER BY `ht_items.item_category` DESC ";
		//echo $sql;exit;
        $query = 	$this->db->query($sql);        
		$record=	$query->result_array();
		return $record;
	}
    public function get_count($ord_id)
    {
		$sql = "SELECT DISTINCT(b.orit_item_id),SUM(b.orit_quantity) AS qty,SUM(b.orit_total_amount) AS total_amount,SUM(b.orit_discount) AS discount,a.item_rate as rate,a.item_name FROM ht_items AS a LEFT JOIN ht_order_items AS b ON b.orit_item_id=a.item_id LEFT JOIN ht_orders AS c ON c.ord_id=b.orit_ord_id WHERE c.ord_dr_id=$ord_id AND c.ord_paytype!='refund' GROUP BY b.orit_item_id ORDER BY a.item_category DESC";
		//echo $sql;exit;
        $query = 	$this->db->query($sql);        
		$record=	$query->result_array();
		return $record;
		// $this->db->select(`SUM(b.orit_quantity) AS qty`,`a.item_name`,`distinct(b.orit_item_id)`);
		// $this->db->from('ht_items as a');
		// $this->db->join('ht_order_items as b', 'b.orit_item_id = a.item_id', 'left');
		// $this->db->join('ht_orders as c', 'c.ord_id = b.orit_ord_id', 'left');
	 	//$this->db->order_by('b.orit_id', 'ASC');
		// $where = "(c.ord_dr_id=$ord_id)";
		// $this->db->where($where);
		// $this->db->group_by('b.orit_item_id'); 
		// $query = $this->db->get();echo $this->db->last_query();exit;
		// return $query->result_array(); 	
    }
      /*  public function view_types($type_name)
    {	
    	
		$this->db->select('DISTINCT(ord_type_no)');
		$this->db->from('ht_orders');
		$this->db->where('ord_status !=', '2');
		$this->db->where('ord_type', $type_name);
		$query = $this->db->get();
		return $query->result_array();
    }
    */
}
?>




#AddType x-mapp-php5 .php
#AddHandler x-mapp-php5 .php

RewriteEngine ON
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php/$0 [PT,L]
#RewriteRule ^(.*)$ /index.php?q=$1 [L,QSA]

Options All -Indexes




<?php
class Common_model extends CI_Model {
 
   //var $where='';echo $this->db->last_query();
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
	 public function get_query_alls()
    {
		$this->db->select($this->allfield);
		$this->db->from($this->table);
		$this->db->where($this->where);
		if($this->limit>0){
		$this->db->limit($this->limit, $this->start);
		} 
		if(isset($this->groupby))
		{
			if($this->groupby!='')
			{
				$this->db->group_by($this->groupby);
			} 
		}
		if(isset($this->order) && $this->order!=''){
			$this->db->order_by($this->order, $this->order_type);
		} 
		$query = $this->db->get();//echo $this->db->last_query(); 
		// echo $this->db->last_query();
		//echo $this->db->last_query(); 
		return $query->result_array(); 
    }

    public function get_query()
    {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($this->where);
		if($this->limit>0){
		$this->db->limit($this->limit, $this->start);
		} 
		if(isset($this->groupby))
		{
			if($this->groupby!='')
			{
				$this->db->group_by($this->groupby);
			} 
		}
		if(isset($this->order) && $this->order!=''){
			$this->db->order_by($this->order, $this->order_type);
		} 
		$query = $this->db->get();//echo $this->db->last_query(); 
		// echo $this->db->last_query();
		//echo $this->db->last_query();
		 
		return $query->result_array(); 
    }
  public function create_query()
    {
		$insert = $this->db->insert($this->table, $this->datas);
		//echo $this->db->last_query();exit;
	    return $insert;
    }

    function count_select_data()
    {
		$this->db->select($this->id);
		$this->db->from($this->table);
	    $this->db->order_by($this->orderId,$this->ordertype);
		$query = $this->db->get();
		return $query->num_rows();        
    }
  public function delete_tab()
    {
	    $this->db->where($this->id, $this->delvalue);
		$this->db->delete($this->table); 
    }
	 public function update_tab()
    {
	   	$this->db->where($this->id, $this->delvalue);
		$this->db->update($this->table, $this->data_to_store);
		 
    }
//////////////////////////////////////////

public function insert_row($table,$insertitems)
	{
		
		$this->db->insert($table,$insertitems);
		return TRUE; 
	}
	public function insert_batch($table,$insertitems)
	{
		$this->db->insert_batch($table,$insertitems);
		return TRUE; 
	}
	public function insert_lastid($table,$insertitems)
	{
		
		$this->db->insert($table,$insertitems);
		$insert_id = $this->db->insert_id();
     	return  $insert_id;
	}
   public function select_row($fields, $table,$where)
    {
		$this->db->select($fields);
		$this->db->from($table);
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		$query=$this->db->get();
		return $query->row_array();
	} 
	public function select_row1($fields, $table,$where)
    {
		$this->db->select($fields);
		$this->db->from($table);
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		$this->db->order_by('dr_id',DESC);	
		$query=$this->db->get();
		$result=$query->result_array();
		//echo $this->db->last_query();exit;
		return $result[0];
	} 
	 public function select_array($fields, $table,$where, $orderBy)
    {
		$this->db->select($fields);
		$this->db->from($table);
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		if($orderBy != NULL)
		{
			$this->db->order_by($orderBy);
		}
		$query=$this->db->get();
		return $query->result_array();
	}
	public function select_array_limit($fields, $table,$where, $orderBy, $start, $limit)
    {
		$this->db->select($fields);
		$this->db->from($table);
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		if($orderBy != NULL)
		{
			$this->db->order_by($orderBy);
		}
		if($limit != NULL)
		{
			$this->db->limit($limit, $start);
		}
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function count_row($table,$where)
    {
		$this->db->from($table);
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		$query=$this->db->get();
		return $query->num_rows();
	}  
	public function select_group($table,$where,$groupby)
    {
		$this->db->select('*');
		 $this->db->group_by($groupby); 
		$this->db->from($table);
		
		//$this->db->order_by();
			if($where!=NULL)
			{
				$this->db->where($where);
			}
			
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	} 
	
	public function select_details($table,$where)
    {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query=$this->db->get();
		$result = $query->result_array();
		return $result[0];
	} 
	public function select_one($field,$table,$where)
    {
    	//print_r($where);exit();
		$this->db->select($field);
		$this->db->from($table);
        if($where!=NULL)
			{
				$this->db->where($where);
			}
		$query=$this->db->get();
		$result = $query->result_array();
		//return $result[0];
		//echo $this->db->last_query();exit(); 
		return $query->row();
	} 
	 
	public function delete_rows($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		
	}
	public function update($table,$data,$where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($table);
		//echo $this->db->last_query();exit(); 
		return TRUE;
	}
	public function select_join($table1,$table2,$condition,$where)
	{
		$this->db->select('*');
		$this->db->from($table1);
		if($where!="")
		{
			$this->db->where($where);
		}
		$this->db->join($table2,$condition);
		$query = $this->db->get();
		$result = $query->result_array();
		//echo $this->db->last_query();exit(); 
		return $result;
	}


	public function getLastInserted($table, $id)
	 {
	$this->db->select_max($id);
	$Q = $this->db->get($table);
	$row = $Q->row_array();
	return $row[$id];
 }
 public function select_like($table,$like1,$like2,$where)
    {
		$this->db->select('*');
		$this->db->from($table);
		//$this->db->order_by();
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		$this->db->like($like1);
		$this->db->or_like($like2);
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	} 
	 public function select_not($table,$like1,$like2,$where,$not)
    {
		$this->db->select('*');
		$this->db->from($table);
		//$this->db->order_by();
			
		$this->db->like($like1);
		$this->db->or_like($like2);
		if($where!=NULL)
			{
				$this->db->where($where);
			}
		$this->db->where_not_in($not);
		$query=$this->db->get();
		$result=$query->result_array();
		//echo $this->db->last_query();exit(); 
		return $result;
	} 
	 public function select_like_one($fields,$table,$like1,$where)
    {
		$this->db->select($fields);
		$this->db->from($table);
		//$this->db->order_by();
			if($where!=NULL)
			{
				$this->db->where($where);
			}
		$this->db->like($like1);
		$query=$this->db->get();
		$result=$query->result_array();
		//echo $this->db->last_query();exit(); 
		return $result;
	} 
		public function fetch_page_record_one($table,$orderBy, $condition1, $start)
	{
		$this->db->select('*');
		$this->db->from($table);
		
		if($orderBy != NULL)
		{
			$this->db->order_by($orderBy);
		}
		//$this->db->like($like);
		$this->db->limit(20, $start);
        if($condition1 != NULL)
		{
			$this->db->where($condition1);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		//echo  $this->db->last_query(); exit;
		return $result;
	}
	public function fetch_page_record($table,$table2,$condition,$fields, $orderBy, $condition1, $start)
	{
		$this->db->select($fields);
		$this->db->from($table);
		
		if($orderBy != NULL)
		{
			$this->db->order_by($orderBy);
		}
		$this->db->join($table2,$condition);
		//$this->db->like($like);
		$this->db->limit(20, $start);
        if($condition != NULL)
		{
			$this->db->where($condition1);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		//echo  $this->db->last_query(); exit;
		return $result;
	}
  	public function select_join_three($table1,$table2,$table3,$condition,$condition1,$where,$fields)
	{
		$this->db->select($fields);
		$this->db->from($table1);
		if($where!="")
		{
			$this->db->where($where);
		}
		$this->db->join($table2,$condition);
		$this->db->join($table3,$condition1);
		$query = $this->db->get();
		$result = $query->result_array();
		//echo  $this->db->last_query(); exit;
		return $result;
	}
	public function select_join_three_ord($table1,$table2,$table3,$condition,$condition1,$where,$fields)
	{
		$this->db->select($fields);
		$this->db->from($table1);
		if($where!="")
		{
			$this->db->where($where);
		}
		$this->db->join($table2,$condition);
		//$this->db->order_by('ht_items.item_category',ASC);
		$this->db->join($table3,$condition1);
		
		$query = $this->db->get();
		$result = $query->result_array();
	//echo  $this->db->last_query(); exit;
		return $result;
	}
 
}
?>






<?php

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packages
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database', 'pagination', 'session', 'user_agent','encrypt', 'form_validation','upload');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url', 'form', 'cookie','file');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array();
