$(document).ready(function(){
		/*********************** Ajax script for showing cities by state id *************************/
		$( "#state_selch" ).change(function() {
			var stateid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/city/getcities",
			dataType:"text",
			data:{
			action:'get_cities',
			stateid:stateid
			},
			success:function(response){
				if(response != '' ){
					$("#city_selch").html("");
					$("#city_selch").append(response);
				}
				else
				{
					$("#city_selch").html("");
					$("#city_selch").append("<option value=''>Select State Firstly</option>");
				}
			}
			});	 
		});
		
		$( "#state_selcha" ).change(function() {
			var stateid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/city/getcities",
			dataType:"text",
			data:{
			action:'get_cities',
			stateid:stateid
			},
			success:function(response){
				if(response != '' ){
					$("#city_selcha").html("");
					$("#city_selcha").append(response);
				}
				else
				{
					$("#city_selcha").html("");
					$("#city_selcha").append("<option value=''>Select State Firstly</option>");
				}
			}
			});	 
		});
		/**************end*******************/
		
		/*********************** Ajax script for showing Mall by mall  *************************/
		$( "#mall_selch" ).change(function() {
			var mallid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/mall/getfloors",
			dataType:"text",
			data:{
			action:'get_cities',
			mallid:mallid
			},
			success:function(response){
				 if(response != ""){
					$("#floor_selch").html("");
					$("#floor_selch").append(response);
				}else{
					$("#floor_selch").html("");
					$("#floor_selch").append('<option value="">Select Floor</option>');
				} 
			}
			});	 
		});
		/**************end*******************/
		
		/*********************** show hide with individual and mall *************************/
		$(':radio[name="tc"]').on('change', function() {
		if ($(this).val() == 'mall') { 
			$('.mall-sec').show();
			$('.ind-sec').hide();
		}
		if ($(this).val() == 'individual') {
			$('.ind-sec').show();
			$('.mall-sec').hide();
		}
		});
		/**************end*******************/
		
		/*********************** show hide with product*************************/
		$(':radio[name="tcn"]').on('change', function() {
		if ($(this).val() == 'shop') { 
			$('.ind-shop').show();
			$('.ind-rest').hide();
			$('.ind-brand').hide();
		}
		if ($(this).val() == 'rest') {			
			$('.ind-rest').show();
			$('.ind-shop').hide();
			$('.ind-brand').hide();
		}
		if ($(this).val() == 'brand') {	
			$('.ind-brand').show();	
			$('.ind-rest').hide();
			$('.ind-shop').hide();			
		}
		});
		/**************end*******************/
		
		/*********************** show hide with events*************************/
		$(':radio[name="tcm"]').on('change', function() {
		if ($(this).val() == 'mall') { 
			$('table').hide();
			$('.ind-mall').show();
		}
		if ($(this).val() == 'shop') {	
			$('table').hide();
			$('.ind-shop').show();
		}
		if ($(this).val() == 'rest') {	
			$('table').hide();
			$('.ind-rest').show();			
		}
		if ($(this).val() == 'brand') {	
			$('table').hide();
			$('.ind-brand').show();			
		}
		if ($(this).val() == 'event') {	
			$('table').hide();
			$('.ind-event').show();			
		}
		if ($(this).val() == 'online') {	
			$('table').hide();
			$('.ind-online').show();			
		}
		});
		/**************end*******************/
		
		
		
		/**************remove featured image*******************/
			$('#img-edit a').click(function(e) {
				e.preventDefault();
			  $( '#img-edit' ).html("");
			  $( '#img-edit' ).append("<input type='file'  name='userfile'  />");
			});
			
			$('#img-edit32 a').click(function(e) {
				e.preventDefault();
			  $( '#img-edit32' ).html("");
			  $( '#img-edit32' ).append("<input type='file'  name='banner'  />");
			});
			
			$('.makedisplaynone').hide();
			$('#img-edit33 a').click(function(e) {
				e.preventDefault();
				$('.makedp').hide();
				$('.makedisplaynone').show();
			});
		/**************end*******************/
		
		/**************remove featured image*******************/
			$('#img-edit2 a').click(function(e) {
				e.preventDefault();
			  $( '#img-edit2' ).hide();
			  $( '#img-edit3' ).show();
			});
		/**************end*******************/
		
		/***********Onload state and city ************/
		if($('#states_onload_by_id').length > 0){
			var stateid = $('#states_onload_by_id').val();
			var cityid = $('#city_onload').val();
			if(stateid != "" && cityid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/city/getcities2",
				dataType:"text",
				data:{
				action:'get_cities',
				stateid:stateid,
				cityid:cityid
				},
				success:function(response){
					 if(response){
						$("#city_selcha").html("");
						$("#city_selcha").append(response);
					} 
				}
				});	
			}
			else
			{
				return false;
			}
		}
		/***********end ************/	
		
		/***********Onload state and city ************/
		if($('#state_selch').length > 0){
			var stateid = $('#state_selch').val();
			var cityid = $('#city-id').val();
			if(stateid != "" && cityid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/city/getcities2",
				dataType:"text",
				data:{
				action:'get_cities',
				stateid:stateid,
				cityid:cityid
				},
				success:function(response){
					 if(response){
						$("#city_selch").html("");
						$("#city_selch").append(response);
					} 
				}
				});	
			}
			else
			{
				return false;
			}
		}
		/***********end ************/	
		
		/***********Onload state and city ************/
		if($('#mall_selch').length > 0){
			 var mall_id = $('#mall_selch').val();			
			 var floorno = $('#floor-get').val();	
			if(stateid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/mall/getfloors2",
				dataType:"text",
				data:{
				action:'get_floor',
				mallid:mall_id,
				floorno:floorno
				},
				success:function(response){
					 if(response){
					$("#floor_selch").html("");
					$("#floor_selch").append(response);
					}
				}
				});	
			}
			else
			{
				return false;
			} 
		}
		/***********end ************/
		
		/***********Onload Shop and shop location ************/
		$( "#sp-id" ).change(function() {
			var shopid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/shoplocation/shoploc",
			dataType:"text",
			data:{
			action:'get_cities',
			shopid:shopid
			},
			success:function(response){
				 if(response != ''){
					$("#sp-loc-id").html("");
					$("#sp-loc-id").append(response);
				}else{
						$("#sp-loc-id").html("");
						$("#sp-loc-id").append("<option value=''>Select Shop Location</option>");
					}   
			}
			});	 
		});
		/***********end ************/
		/***********Onload Restaurent and Restaurent location ************/
		$( "#rest_selch" ).change(function() {
			var restid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/restaurantlocation/restloc",
			dataType:"text",
			data:{
			action:'get_cities',
			restid:restid
			},
			success:function(response){
				  if(response != ''){
					$("#rest_loc_selch").html("");
					$("#rest_loc_selch").append(response);
				}else{
						$("#rest_loc_selch").html("");
						$("#rest_loc_selch").append("<option value=''>Select Restaurant Location</option>");
					}     
			}
			});	 
		});
		/***********end ************/
		
		/***********Onload Brand and brand location ************/
		$( "#brand_selch" ).change(function() {
			var brandid = $(this).val(); 
			url = $("#base_url_header").val();
			jQuery.ajax({
			type:"POST",
			url:url+"admin/brandlocation/brandloc",
			dataType:"text",
			data:{
			action:'get_cities',
			brandid:brandid
			},
			success:function(response){
				   if(response != ''){
					$("#brand_loc_selch").html("");
					$("#brand_loc_selch").append(response);
				}else{
						$("#brand_loc_selch").html("");
						$("#brand_loc_selch").append("<option value=''>Select Brand Location</option>");
					}    
			}
			});	 
		});
		/***********end ************/
		
		
		
		
		
		
		/***********Onload Shop location on edit product location ************/
		if($('#shop_lc_edit').length > 0){
			 var sp_loc = $('#shop_lc_edit').val();			
			 var sp_id = $('#sp-id').val();	
			if(stateid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/shoplocation/shoploc23",
				dataType:"text",
				data:{
				action:'get_floor',
				sp_loc:sp_loc,
				sp_id:sp_id
				},
				success:function(response){
					  if(response != ''){
					$("#sp-loc-id").html("");
					$("#sp-loc-id").append(response);
					}else{
						$("#sp-loc-id").html("");
						$("#sp-loc-id").append("<option value=''>Select Shop Location</option>");
					} 
				}
				});	
			}
			else
			{
				return false;
			} 
		}
		/***********end ************/
		
		
		
			
		
		
		
		
		/***********Onload Restaurant location on edit  location ************/
		if($('#rest_lc_edit').length > 0){
			 var rest_loc = $('#rest_lc_edit').val();			
			 var rest_lo = $('#rest_selch').val();	
			if(stateid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/restaurantlocation/restloc23",
				dataType:"text",
				data:{
				action:'get_floor',
				rest_loc:rest_loc,
				rest_lo:rest_lo
				},
				success:function(response){
					   if(response != ''){
					$("#rest_loc_selch").html("");
					$("#rest_loc_selch").append(response);
					}else{
						$("#rest_loc_selch").html("");
						$("#rest_loc_selch").append("<option value=''>Select Restaurant Location</option>");
					}  
				}
				});	
			}
			else
			{
				return false;
			} 
		}
		/***********end ************/
		
			
		
		
		/***********Onload brand location on edit  location ************/
		if($('#brand_lc_edit').length > 0){
			 var brand_loc = $('#brand_lc_edit').val();			
			 var brand_lo = $('#brand_selch').val();	
			if(stateid != ""){
				url = $("#base_url_header").val();
				jQuery.ajax({
				type:"POST",
				url:url+"admin/brandlocation/brandloc23",
				dataType:"text",
				data:{
				action:'get_floor',
				brand_loc:brand_loc,
				brand_lo:brand_lo
				},
				success:function(response){
					   if(response != ''){
					$("#brand_loc_selch").html("");
					$("#brand_loc_selch").append(response);
					}else{
						$("#brand_loc_selch").html("");
						$("#brand_loc_selch").append("<option value=''>Select Brand Location</option>");
					} 
				}
				});	
			}
			else
			{
				return false;
			} 
		}
		/***********end ************/
		
		/************show hide edit profile*************/
			$('#imgup').click(function(e) {
				e.preventDefault();
				$('.p-field').show();
			});
		
		
		
		
		
		
	});