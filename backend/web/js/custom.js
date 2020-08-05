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

// Setup module
// ------------------------------

const GooglePieBasic = function() {

    //
    // Setup module components
    //

    // Pie chart
    const _googlePieBasic = (array) => {
        if (typeof google == 'undefined') {
            console.warn('Warning - Google Charts library is not loaded.');
            return;
        }

        // Initialize chart
        google.charts.load('current', {
            callback: () => {

                // Draw chart
                drawPie();

                // Resize on sidebar width change
                $(document).on('click', '.sidebar-control', drawPie());

                // Resize on window resize
                let resizePieBasic;
                $(window).on('resize', function() {
                    clearTimeout(resizePieBasic);
                    resizePieBasic = setTimeout(function () {
                        drawPie();
                    }, 200);
                });
            },
            packages: ['corechart']
        });

        // Chart settings
        const drawPie = () => {

            // Define charts element
            const pie_chart_element = document.getElementById('google-pie');

            // Data
            const data = google.visualization.arrayToDataTable([
                ['Post', 'Vistas'],
                ...array
            ]);

            // Options
            const options_pie = {
                fontName: 'Roboto',
                height: 300,
                width: 500,
                chartArea: {
                    left: 50,
                    width: '90%',
                    height: '90%'
                }
            };

            // Instantiate and draw our chart, passing in some options.
            const pie = new google.visualization.PieChart(pie_chart_element);
            pie.draw(data, options_pie);
        }
    };

    //
    // Return objects assigned to module
    //
    return {
        init: (array) => {
            _googlePieBasic(array);
        }
    }
}();
