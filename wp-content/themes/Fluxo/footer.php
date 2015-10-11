  <!-- Include the imagesLoaded plug-in -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.imagesloaded.js"></script>

  <!-- Include the plug-in -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
		
		//Setup sort
		 function comparatorName(a, b) {
          return $(a).data('order') < $(b).data('order') ? -1 : 1;
        }
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 20, // Optional, the distance between grid items
          itemWidth: 210, // Optional, the width of a grid item
		  comparator: comparatorName, // Used to sort the items
          fillEmptySpace: true // Optional, fill the bottom of each column with widths of flexible height
		  
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li'),
		    $sortbys = $('#sortbys li');
            filters = $('#filters li');

        // Call the layout function.
        handler.wookmark(options);

        /**
         * When a filter is clicked, toggle it's active state and refresh.
         */
        var onClickFilter = function(event) {
          var item = $(event.currentTarget),
              activeFilters = [];
          item.toggleClass('active');

          // Collect active filter strings
          filters.filter('.active').each(function() {
            activeFilters.push($(this).data('filter'));
          });

          handler.wookmarkInstance.filter(activeFilters, 'or');
        }

        // Capture filter click events.
        filters.click(onClickFilter);
      });
    })(jQuery);
  </script>
  
  <script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>

<script src="<?php bloginfo('template_url'); ?>/js/blueimp-gallery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/blueimp-gallery-indicator.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/blueimp-gallery-video.js"></script>
<script type="text/javascript">
blueimp.Gallery.prototype.textFactory = function (obj, callback) {
    var jQueryelement = jQuery('<div>')
            .addClass('text-content')
            .attr('title', obj.title);
    jQuery.get(obj.href)
        .done(function (result) {
            jQueryelement.html(result);
            callback({
                type: 'load',
                target: jQueryelement[0]
            });
        })
        .fail(function () {
            callback({
                type: 'error',
                target: jQueryelement[0]
            });
        });
    return jQueryelement[0];
};
</script>
<?php wp_footer(); ?>  
</body>
</html>