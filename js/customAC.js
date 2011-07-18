(function( $ ){

  $.fn.searchable = function( options ) {  

    var settings = {
      "items"   : ["test","test2"],
      "start"       : 0
    };
    var options = $.extend(settings, options);  
    var currentList;
    var $div;
    var $this;
    
    return this.each(function() {        

    

      var $this = $(this);
      //create the dropdown
      var html = '<div id="dropdown_' + $(this).attr("id") + '">';
      html += '<ul>';
      for(i in options.items){
          html += '<li>' + options.items[i] + '</li>';
      }
      html += '</ul>';
      html += '</div>';
      
      $this.after(html);
      
      $div = $("#dropdown_" + $(this).attr("id"));
      $div.addClass("dropdown").css("width",$this.css("width"));
      
      $this.bind("keyup",function(event) {
          $div.show();
          //enter
        if (event.keyCode == '13') {
            $this.val(currentList[options.start]);
            $div.hide();
        }else if(event.keyCode == '38'){ //up
            if(currentList[options.start - 1]){
                options.start--;
            }
        }else if(event.keyCode == '40'){ //down
            if(currentList[options.start + 1]){
                options.start++;
            }
        }else{
            currentList = new Array();
            var pattern ='^' + $this.val();
            var rx = new RegExp(pattern);
            for(var i=0; i < options.items.length; i++){
                if(rx.test(options.items[i])){
                    currentList.push(options.items[i]);
                }
            }
            refreshList();
        }
        setMarked();
      });      
      
      function refreshList(){
          options.start = 0;
          $div.html("");
          var html = '<ul>';
          for(var i = 0; i < currentList.length; i++){
              html += '<li>' + currentList[i] + '</li>';
          }
          html += '</ul>';
          $div.html(html);
      }
      
      function setMarked(){
          $div.children("ul").children("li").removeClass("selected");
          $div.children("ul").children("li:nth-child("+(options.start + 1)+")").addClass("selected");
      }

      

    });

  };
})( jQuery );