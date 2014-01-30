
// 2 functions from http://www.w3schools.com/js/js_cookies.asp

function setCookie(c_name,value){
    /*
    // http://stackoverflow.com/questions/1783302/clear-cookies-on-browser-close
    //var exdate=new Date();
    //exdate.setDate(exdate.getDate() + 1);
    var c_value=escape(value) + "; expires="+exdate.toUTCString();
    */
       
    var c_value=escape(value);
	if( -1 == document.URL.indexOf('http://rawofnature.com') ){
        __path = '/';
	}else{
		__path = document.URL.split("wp/")[0].split("http://rawofnature.com")[1];
	}
    document.cookie=c_name + "=" + c_value + ';  path=' + __path;
    //reload_styleswitcher_box_with_cookies();
}

function getCookie(c_name){
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++){
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name) {
            if( 'false' == y){
                return false;
            }
            return unescape(y);
        }
    }
    return false;
}

jQuery('.resetCookies').click(function () {
    __switcher_reload_all_cookies();
    location.reload();
});

function __switcher_reload_all_cookies(){

    // SKIN + ACCENT

    setCookie('skin-accent', jQuery('.switcherSkin a.skin-blue').attr('data-value') );
    setCookie('switcherHeaderLayout', 'fixed' );
    setCookie('skin-use-boxed-layout', '' );
    setCookie('skin-use-custom-background-image',1);
    setCookie('skin-boxed-background-image', jQuery('.skin-boxed-background-image a:first').attr('data-value') );
    setCookie('skin-boxed-background-color','F5D29D');

    // SWITCHER ON / OFF
    // 
    setCookie('tmplSwitcherOpened',1);
}

function reload_styleswitcher_box_with_cookies(){
    jQuery('#cookie_info').html('');
    jQuery('#cookie_info').append('switcherSkin: <b>'  +getCookie('switcherSkin')+  '</b><br />');
    jQuery('#cookie_info').append('switcherPageLayout: <b>'  +getCookie('switcherPageLayout')+  '</b><br />');
    jQuery('#cookie_info').append('switcherHeaderLayout: <b>'  +getCookie('switcherHeaderLayout')+  '</b><br />');
    jQuery('#cookie_info').append('switcherHeaderSocial: <b>'  +getCookie('switcherHeaderSocial')+  '</b><br />');
}

function reload_styleswitcher_data_by_cookies(){
    if( getCookie('skin-accent') ) {} else {
		// no cookies
        __switcher_reload_all_cookies();
	}

    jQuery('.switcherSkin .selected').click();
    jQuery('.skin-use-custom-background-image .selected').click();

    //jQuery('body').prepend('<div id="cookie_info" style="height:100px;width:200px;position:fixed;bottom:0;right:0;background:#FFF;border: 2px solid Gray;z-index:1000;padding:10px 20px"></div>');
    //reload_styleswitcher_box_with_cookies();
}
