$(document).ready(function(){
    if (document.querySelector('#inversion') !== null) {
        const id = '#inversion';
        const image = $(id);

        for (let index = 1; index <= 7; index++) {
            let map = $(id.concat(index));
            let coords = map.attr('coords').split(',');
            let newCoords = [];

            map.mouseover(function() {
                $('.inversion'+index).addClass('d-block').css({
                    left: (coords[4] * image.height()) / image.attr('height')+"px",
                    top: (coords[5] * image.height()) / image.attr('width')+"px"
                });
            }).mouseout(function(){
                $('.inversion'+index).removeClass('d-block');
            });

            coords.forEach(coord => {
                let newCoord;

                if (index % 2 === 0) {
                    newCoord = (coord * image.height()) / image.attr('height');
                } else {
                    newCoord = (coord * image.width()) / image.attr('width');
                }

                newCoords.push(newCoord.toFixed(2));
            });

            map.attr('coords', newCoords);
        }

        image.maphilight();
    }
});

(function ($) {

	$.fn.SameHeight = function () {

		diffBoxAndContent = 0;

		this.run = function () {
			// Boxes
			var bhs = this.map(function () {
				return $(this).height();
			}).get();
			var mbh = Math.max.apply(null, bhs);

			// Contents
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);

			diffBoxAndContent = mbh - mch;
			this.height(mbh);
		};

		this.update = function () {
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);
			var newHeight = mch + diffBoxAndContent;
			this.height(newHeight);
		};

		this.run();
		my = this;
		var resize = function () {
			my.update();
		};
		$(window).resize(resize);

		return this;
	};
})(jQuery);
