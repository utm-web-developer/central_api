jsonURL = "http://www.utm.my/dev/api/api.php?";
function utm_central_api(type_get,hooks,parameter)
    {
    parameter['interface'] = type_get;
    jQuery.ajax({
        url: jsonURL,
        dataType: 'jsonp',
        data:parameter,
        cache:true,
        jsonpCallback:'callback',
        timeout:20000,
        success:function(data){
		console.dir(data);
            if (data.length == 1)
                {
                jQuery(document).triggerHandler(hooks,data);
                }                
            else if (data.length > 1)
                {
                // if data is sent (not Array(data)), only the first item in array will be sent.
                // this is to ensure we sent everything
                jQuery(document).triggerHandler(hooks,Array(data));
                }
            },
        
        });
    }
