$(document).ready(function(){
    $('.filter-item').click(function(){
        
        var keyControl = $(this).attr('data-key');
        var valControl = $(this).attr('data-value');
        var newUrl = '';
        console.log('click:'+keyControl+'='+valControl);
        
        if(keyControl == 'type') {            
            newUrl= location.origin+location.pathname+'?'+keyControl+'='+valControl;
        }else{
            newUrl = replaceQueryParam(
                keyControl,
                valControl, 
                window.location.search
            );
        }

        if($(this).attr('disabled') != 'disabled') {
            setTimeout(function(){
                window.location = newUrl;
            }, 300);                  
        }        
    })
})