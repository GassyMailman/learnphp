var readmore = 'readmore',
       defaults = {
         speed: 100,
         maxHeight: 200,
         maxHeight: 10,
         heightMargin: 16,
         moreLink: '<a href="#">Read More</a>',
         moreLink: '<a href="#">Read the Content</a>',
         lessLink: '<a href="#">Close</a>',
         embedCSS: true,
         sectionCSS: 'display: block; width: 100%;',
         sectionCSS: 'display: block;',
         startOpen: false,
         expandedClass: 'readmore-js-expanded',
         collapsedClass: 'readmore-js-collapsed',
 
         // callbacks
         beforeToggle: function(){},
         afterToggle: function(){}
       },
       cssEmbedded = false;
 
   function Readmore( element, options ) {
     this.element = element;
 
     this.options = $.extend( {}, defaults, options);
 
     $(this.element).data('max-height', this.options.maxHeight);
     $(this.element).data('height-margin', this.options.heightMargin);
 
     delete(this.options.maxHeight);
 
     if(this.options.embedCSS && ! cssEmbedded) {
       var styles = '.readmore-js-toggle, .readmore-js-section { ' + this.options.sectionCSS + ' } .readmore-js-section { overflow: hidden; }';
 