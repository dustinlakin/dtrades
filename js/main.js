

function setupList(jQ,callback){
    var $this = jQ;
    var items = $this.data("items");
    //create the dropdown
    var html = '<div id="dropdown_' + $this.attr("id") + '">';
    html += '<ul>';
    for(i in items){
        html += '<li id="dropdown_'+$this.attr("id")+'_'+ items[i].replace(" ","_") +'">' + items[i] + '</li>';
    }
    html += '</ul>';
    html += '</div>';
    $this.after(html);
    $div = $("#dropdown_" + $this.attr("id"));
    $div.addClass("dropdown").css("width",$this.css("width")).hide();

    //add onclicks
    for(i in items){
        $('#dropdown_'+$this.attr("id")+'_'+ items[i].replace(" ","_")).bind("click",function(event){
            $this.html($(this).html());
            callback($(this).html());
            $div.slideUp();
        });
    }

    $this.bind("click",function(event){
        if($div.is(":hidden")){
            $div.slideDown();
        }else{
            $div.slideUp();
        }
    })
    console.log($this.data("items"))
}

function initializeType(slot){
    console.log(slot);
}

$(document).ready(function(){
    $("#slot").data("items", ["Amulet","Belt","Boots","Charm","Chest","Gloves","Helm","Jewel","Ring","Rune","Sheild","Weapon"]);
    setupList($("#slot"),initializeType);
});




