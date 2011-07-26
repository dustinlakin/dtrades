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

$(document).ready(function(){
    //setup the clicks for item types
    $(".qualHolder").click(function(event){
        console.log($('#'+event.currentTarget.id));
        toggleQuality($('#'+event.currentTarget.id));
        $("#item").data("quality",event.currentTarget.id);
        setupSlot($("#slotSelect"));
    });
    $.getJSON("json/itemInfo.json",function(data){
        info = data;
        html = '';
        for(var i =0; i < info.stats.length; i++){
            html += '<option value="test">'+ info.stats[i].id + ' - ' + info.stats[i].name + '</option>';
        }
        $("#slotSelect").html(html).chosen();
        $("#typeSelect").chosen();
        $("#typeSelect_chzn").hide();
    });
});

function setupSlot(jQ){
    var html = '<option value=""></option>';
    for(var i = 0; i < info.slots.length; i++){
        html += '<option value="'+ info.slots[i]+'">'+info.slots[i]+'</option>';
    }
    jQ.html(html).trigger("liszt:updated").change(function(){
        $("#item").data("slot",$("#slotSelect").val());
        selectType("typeSelect");
    });
}

function selectType(id){
    var quality = $("#item").data("quality");
    var slot = $("#item").data("slot");
    //console.log($("#item").data());
    var items;
    
    switch (quality) {
        case "Green":
            //set
            break;
        case "Gold":
            //unique
            break;
        default:
            items = info.types[slot];
            break;
    }
    
    html = '<option value="test"></option>';
    if(slot == "Weapon"){
        var weapons = ["Axes","Bows","Crossbows","Daggers","Javelins","Katars","Maces","Orbs","Polearms","Scepters","Spears","Staves","Swords","Throwing","Wands"];
        for(var w = 0; w < weapons.length; w++){
            html += '<optgroup label="'+weapons[w]+'">';
            items = info.types[slot][weapons[w]];
            for(var i=0; i < items.length; i++){
                html += '<option>' + items[i].name + '</option>';
            }
            html += '</optgroup>'
        }
    }else{
        for(var i=0; i < items.length; i++){
            html += '<option>' + items[i].name + '</option>';
        }
    }
    
    $("#"+id).html(html).trigger("liszt:updated");
    $("#"+ id + "_chzn").fadeIn();
}

function toggleQuality(jQ){
    if(!jQ.children("div").hasClass("qualSelected")){
        $(".qualHolder").children("div").removeClass("qualSelected");
        jQ.children("div").addClass("qualSelected");
    }
    $("#typeSelect_chzn").fadeOut();
}