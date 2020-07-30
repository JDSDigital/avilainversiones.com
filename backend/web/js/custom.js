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
