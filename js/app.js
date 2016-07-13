$(document).foundation();

if(typeof galleryImages !== 'undefined'){
	var pswpElement = document.querySelectorAll('.pswp')[0];

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
	var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, galleryImages, options);

	gallery.init();
}

var initPhotoSwipeFromDOM = function(gallerySelector) {
	var parseThumbnailElements = function(el) {
		var $el = $(el),
			items = [];
				
		$el.children('figure').each(function(){
			$child = $(this);
			
			item = {
				src : $child.children('a').attr('href'),
				w : $child.children('meta[itemprop=width]').attr('content'),
				h : $child.children('meta[itemprop=height]').attr('content'),
				title : $child.children('figcaption').html(),
				msrc :  $child.find('img').attr('src')
			};
			
			items.push(item);
		});
  

        return items;
    };

    var onThumbnailsClick = function(e) {
        e.preventDefault();
        var $target = $(e.target);
        openPhotoSwipe( $target.parents('figure').index());
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery = $('#gallery'),
            options,
            items;
			
        items = parseThumbnailElements(gallery);

        // define options (if needed)
        options = {
			arrowKeys : true,
			closeEl:true,
			captionEl: true,
			fullscreenEl: true,
			zoomEl: true,
			shareEl: true,
			counterEl: true,
			arrowEl: true,
			preloaderEl: true,

            // define gallery index (for URL)
            galleryUID: gallery.data('pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = $($('#gallery').children('figure').get(index)).find('img')[0].getBoundingClientRect();
				
                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 2;
            }
        } else {
            options.index = parseInt(index, 10) - 1;
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };
	
	var $gallery = $(gallerySelector);
	
    $gallery.data('pswp-uid', 1);	
	$gallery.find('a').on('click',onThumbnailsClick);

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('#gallery');


var $masonryGrid = $('#gallery').masonry({
  itemSelector: '.image',
  columnWidth: '.grid-sizer',
  percentPosition : true
});

// layout Masonry after each image loads
$masonryGrid.imagesLoaded().progress( function() {
  $masonryGrid.masonry('layout');
});