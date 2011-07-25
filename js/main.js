function setupSlots(){
    slots = info.slots;
    html = '<ul>';
    for(var i =0; i < slots.length; i++){
        html += '<li id="slot_'+ slots[i] +'">' + slots[i] + '</li>'
    }
    html += '</ul>';
    $("#slot_dropdown").append(html);
    $("#slot").bind("click",function(){
        toggleDropdown($("#slot_dropdown"))
    });
    
    //setup clicks
    $("#slot_dropdown").css("width",$("#slot").css("width"));
    $("#slot_dropdown li").each(function(){
       $(this).click(function(){
           $("#slot").html($(this).html());
           $("#item").data("slot",$(this).html());
           toggleDropdown($("#slot_dropdown"));
           showType($(this).html());
       }) 
    });
}

function toggleDropdown(jQ){
   if($(jQ).is(":visible")){
       $(jQ).slideUp();
   }else{
       $(jQ).slideDown();
   }
}

function showType(slot){
    console.log(slot);
    var choices = info.types[slot];
    for(var i = 0; i<choices.length; i++){
        $("#type_dropdown ul").append('<li id="'+ choices[i].name.replace(" ", "_") +'">'+ choices[i].name +'</li>')
        //console.log(choices[i].name, choices.length);
    }
    $("#type").bind("click",function(){
        toggleDropdown($("#type_dropdown"))
    });
    $("#type_dropdown").css("width",$("#type").css("width"));
    $("#type_dropdown li").each(function(){
        $(this).click(function(){
            $("#type").html($(this).html());
            $("#item").data("type",$(this).html());
            toggleDropdown($("#type_dropdown"));
        })
    })
    
}

$(document).ready(function(){
    $.getJSON("json/itemInfo.json",function(data){
        info = data;
        
    });
});

function step2(){
    var html = '<option value=""></option>';
    for(var i = 0; i < info.slots.length; i++){
        html += '<option value="'+ info.slots[i]+'">'+info.slots[i]+'</option>';
    }
    $("#itemSelect").html(html);
    $("#itemSelect").chosen();
}



