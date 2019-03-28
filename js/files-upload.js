jQuery(document).ready(function($){
	var mediaUploader;
	$('#upload-button-vuelo').on('click',function(e){
		
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
			$('#post_meta_image_vuelo_show').attr('src',attachment.url);
		});

		mediaUploader.open();
		$('.media-router a:first-child').addClass('active');
		$('.media-router a:last-child').removeClass('active');
		$(".media-router a:first-child").trigger('click');

	});
});	
