$(document).foundation();


var pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
var items = [];

for(var i = 1; i <= 12; i++){
	items.push({
		src: '/img/galleries/p' + (i < 10 ? '0' : '') + i + '.JPG',
        w: 3000,
        h: 2000
	});
}

// define options (if needed)
var options = {
    // optionName: 'option value'
    // for example:
    index: 0, // start at first slide
	arrowKeys : true,
	closeEl:true,
	captionEl: true,
	fullscreenEl: true,
	zoomEl: true,
	shareEl: true,
	counterEl: true,
	arrowEl: true,
	preloaderEl: true,
};

// Initializes and opens PhotoSwipe
var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

//gallery.init();


