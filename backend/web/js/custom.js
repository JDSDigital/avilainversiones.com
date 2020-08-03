/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
 function listenerChangeStatus(url){
 	$(".switchStatus").change(function(){
 		$.ajax({
 			url: url,
 			type: 'post',
 			data: {
 				id: $(this).attr("id").replace(/status-/g, ''),
 				_csrf : yii.getCsrfToken()
 			},
 			success: function () {
 				console.log(true);
 			},
 			error: function () {
 				console.log(false);
 			}
 		});
 	});
 }

 function listenerChangeFeatured(url){
 	$(".switchFeatured").change(function(){
 		$.ajax({
 			url: url,
 			type: 'post',
 			data: {
 				id: $(this).attr("id").replace(/featured-/g, ''),
 				_csrf : yii.getCsrfToken()
 			},
 			success: function () {
 				console.log(true);
 			},
 			error: function () {
 				console.log(false);
 			}
 		});
 	});
 }

 function listenerCover() {
	$('.kv-file-cover').on('click', function() {
	    var $btn = $(this), key = $btn.data('key');
			$.ajax({
				url: 'cover',
				type: 'post',
				data: {
					id: key,
					_csrf : yii.getCsrfToken()
				},
				success: function (data) {
					$('.kv-file-cover').each(function () {
						$(this).removeClass('btn-success');
					});
					$btn.toggleClass('btn-default');
					$btn.addClass('btn-success');
				},
				error: function () {
					console.log(false);
				}
			});
	});
}

document.addEventListener('DOMContentLoaded', function() {

    // Setup
    if (document.querySelector('#courses-article') !== null) {
      CKEDITOR.replace('courses-article', {
        height: 400,
        extraPlugins: 'forms'
      });
    }

    if (document.querySelector('#blog-article') !== null) {
      CKEDITOR.replace('blog-article', {
        height: 400,
        extraPlugins: 'forms'
      });
    }

    if (document.querySelector('#consulting-description') !== null) {
      CKEDITOR.replace('consulting-description', {
        height: 400,
        extraPlugins: 'forms'
      });
    }

    if (document.querySelector('#events-article') !== null) {
      CKEDITOR.replace('events-article', {
        height: 400,
        extraPlugins: 'forms'
      });
    }

    if (document.querySelector('#properties-description') !== null) {
      CKEDITOR.replace('properties-description', {
        height: 400,
        extraPlugins: 'forms'
      });
    }

});
