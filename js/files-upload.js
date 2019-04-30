jQuery(document).ready(function($){
	var mediaUploader;

	$('#upload-button-vuelo').on('click',function(e){
		//alert('bottonUpload');
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			$(".media-router a:first-child").trigger("click");
			return;
		}

		mediaUploader = wp.media.frames.file_frame = new wp.media({
			title: 'Seleccionar imagen',
			button: {
				text: 'Seleccionar Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();

			$('#post_meta_image_vuelo').val(attachment.id);
			//$('#post_meta_image_vuelo_show').attr('src',attachment.url);
			postId = $("#post_id").val();
			urlAjax = $("#ajax_post").val();
			guardarVuelo(attachment.id,postId,urlAjax);
		});

		mediaUploader.open();
		$('.media-router a:first-child').addClass('active');
		$('.media-router a:last-child').removeClass('active');
		$(".media-router a:first-child").trigger('click');
		$('.media-router a:last-child').css('display','none');
		$('li.attachment.save-ready').css('display','none');
		//$('li.attachment.save-ready:first-child').css('display','block');

		function guardarVuelo(idImg, postId ,urlAjax){
    		//alert('guardarVuelo');
    		//alert(postId);
    		
		    $.ajax({
		      type: 'POST',
		      url: urlAjax,
		      data: {
		        'action': 'my_upload_afc_vuelo',
		        'id_img': idImg,
		        'id_post': postId,
		      },
		      success: function(data, textStatus, XMLHttpRequest)      {
		        //$("#rutaRegional1").append(data);
		        alert('Confirmación subida');
		      },
		      complete: function(XMLHttpRequest, textStatus)      {
		        //alert('complete');
		      }
		    });
	    
	  	}

	});

	$('#upload-button-hotel').on('click',function(e){
		//alert('bottonUpload');
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			$(".media-router a:first-child").trigger("click");
			return;
		}

		mediaUploader = wp.media.frames.file_frame = new wp.media({
			title: 'Seleccionar imagen',
			button: {
				text: 'Seleccionar Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();

			$('#post_meta_image_hotel').val(attachment.id);
			//$('#post_meta_image_vuelo_show').attr('src',attachment.url);
			postId = $("#post_id").val();
			urlAjax = $("#ajax_post").val();
			guardarHotel(attachment.id,postId,urlAjax);
		});

		mediaUploader.open();
		$('.media-router a:first-child').addClass('active');
		$('.media-router a:last-child').removeClass('active');
		$(".media-router a:first-child").trigger('click');
		$('.media-router a:last-child').css('display','none');
		$('li.attachment.save-ready').css('display','none');
		//$('li.attachment.save-ready:first-child').css('display','block');

		function guardarHotel(idImg, postId ,urlAjax){
    		//alert('guardarVuelo');
    		//alert(postId);
    		
		    $.ajax({
		      type: 'POST',
		      url: urlAjax,
		      data: {
		        'action': 'my_upload_afc_hotel',
		        'id_img': idImg,
		        'id_post': postId,
		      },
		      success: function(data, textStatus, XMLHttpRequest)      {
		        //$("#rutaRegional1").append(data);
		        alert('Confirmación subida');
		      },
		      complete: function(XMLHttpRequest, textStatus)      {
		        //alert('complete');
		      }
		    });
	    
	  	}
	});  	

	$('#upload-button-tour').on('click',function(e){
		//alert('bottonUpload');
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			$(".media-router a:first-child").trigger("click");
			return;
		}

		mediaUploader = wp.media.frames.file_frame = new wp.media({
			title: 'Seleccionar imagen',
			button: {
				text: 'Seleccionar Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();

			$('#post_meta_image_tour').val(attachment.id);
			//$('#post_meta_image_vuelo_show').attr('src',attachment.url);
			postId = $("#post_id").val();
			urlAjax = $("#ajax_post").val();
			guardarTour(attachment.id,postId,urlAjax);
		});

		mediaUploader.open();
		$('.media-router a:first-child').addClass('active');
		$('.media-router a:last-child').removeClass('active');
		$(".media-router a:first-child").trigger('click');
		$('.media-router a:last-child').css('display','none');
		$('li.attachment.save-ready').css('display','none');
		//$('li.attachment.save-ready:first-child').css('display','block');

		function guardarTour(idImg, postId ,urlAjax){
    		//alert('guardarVuelo');
    		//alert(postId);
    		
		    $.ajax({
		      type: 'POST',
		      url: urlAjax,
		      data: {
		        'action': 'my_upload_afc_tour',
		        'id_img': idImg,
		        'id_post': postId,
		      },
		      success: function(data, textStatus, XMLHttpRequest)      {
		        //$("#rutaRegional1").append(data);
		        alert('Confirmación subida');
		      },
		      complete: function(XMLHttpRequest, textStatus)      {
		        //alert('complete');
		      }
		    });
	    
	  	}
	});
});	
