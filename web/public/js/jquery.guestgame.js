$("#gg_bundle_partybundle_partytype_Address").bind('change blur',function(){
    if($("#gg_bundle_partybundle_partytype_Locality").val()){
        $("#addressclearfix").removeClass('error');
        $("#addressclearfix").addClass('success');
    }else{
        $("#addressclearfix").removeClass('success');
        $("#addressclearfix").addClass('error');  
    }    
});

$("#gg_bundle_partybundle_partytype_Address").focus(function() {
    $("#gg_bundle_partybundle_partytype_Locality").val('');
    $("#addressclearfix").removeClass('success');
    $("#addressclearfix").removeClass('error');    
});
