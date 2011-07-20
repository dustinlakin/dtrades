(function( $ ){

  $.fn.searchable = function( options ) {  

    var settings = {
      items     : ["test","test2"],
      clicked   : function(){},
      destroy   : function(){
          $this.unbind();
      }
    };
    var options = $.extend(settings, options);  
    var currentList;
    var $div;
    var $this;
    
    return this.each(function(method) {        
        
        

      

    });

  };
})( jQuery );