jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:1280,
        height:463,
        skinsfoldername:"",
        loadimageondemand:false,
        enabletouchswipe:true,
        fullscreen:false,
        autoplayvideo:false,
        addmargin:true,
        randomplay:false,
        isresponsive:true,
        pauseonmouseover:false,
        playvideoonclickthumb:true,
        slideinterval:5000,
        fullwidth:false,
        transitiononfirstslide:false,
        scalemode:"fill",
        loop:0,
        autoplay:true,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        descriptioncssresponsive:"font-size:12px;",
        shownumbering:false,
        skin:"Showcase",
        textautohide:true,
        addgooglefonts:false,
        navshowplaypause:false,
        navshowplayvideo:false,
        navshowplaypausestandalonemarginx:8,
        navshowplaypausestandalonemarginy:8,
        navbuttonradius:0,
        navpreviewposition:"top",
        navmarginy:-27,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"",
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        texteffectresponsivesize:600,
        arrowwidth:36,
        texteffecteasing:"easeOutCubic",
        texteffect:"slide",
        navspacing:27,
        playvideoimage:"playvideo-64-64-0.png",
        ribbonimage:"ribbon_topleft-0.png",
        navwidth:12,
        navheight:12,
        arrowimage:"arrows-36-80-0.png",
        timeropacity:0.6,
        titlecssresponsive:"font-size:12px;",
        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",
        navshowplaypausestandalone:false,
        texteffect1:"slide",
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        navborder:4,
        navthumbtitleheight:20,
        textpositionmargintop:24,
        texteffectdelay:500,
        navswitchonmouseover:false,
        navarrowimage:"navarrows-28-28-0.png",
        arrowtop:50,
        textstyle:"none",
        playvideoimageheight:64,
        navfonthighlightcolor:"#666666",
        showbackgroundimage:false,
        navpreviewborder:4,
        navopacity:0.8,
        shadowcolor:"#aaaaaa",
        navbuttonshowbgimage:true,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        navthumbnavigationarrowimageheight:32,
        textbgcss:"display:none;",
        navpreviewarrowwidth:16,
        playvideoimagewidth:64,
        navshowpreviewontouch:false,
        bottomshadowimagewidth:96,
        showtimer:false,
        navradius:0,
        navshowpreview:false,
        navpreviewarrowheight:8,
        navmarginx:0,
        navfeaturedarrowimage:"featuredarrow-16-8-0.png",
        showribbon:false,
        navstyle:"bullets",
        textpositionmarginleft:24,
        descriptioncss:"display:block; position:relative; font:14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333; margin-top:8px;",
        navplaypauseimage:"navplaypause-28-28-0.png",
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        numberingformat:"%NUM/%TOTAL ",
        navfontsize:12,
        navhighlightcolor:"#333333",
        texteffectdelay1:1000,
        navimage:"bullet-12-12-0.png",
        texteffectduration1:600,
        navshowplaypausestandaloneautohide:false,
        navbuttoncolor:"#999999",
        navshowarrow:true,
        texteffectslidedirection:"left",
        navshowfeaturedarrow:false,
        lightboxbarheight:48,
        titlecss:"display:block; position:relative; font:bold 16px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333;",
        ribbonimagey:0,
        ribbonimagex:0,
        texteffectslidedistance1:120,
        texteffectresponsive:true,
        navshowplaypausestandaloneposition:"bottomright",
        shadowsize:5,
        arrowhideonmouseleave:1000,
        navshowplaypausestandalonewidth:28,
        navfeaturedarrowimageheight:8,
        navshowplaypausestandaloneheight:28,
        backgroundimagewidth:120,
        navcolor:"#999999",
        navthumbtitlewidth:120,
        texteffectseparate:false,
        arrowheight:80,
        arrowmargin:8,
        texteffectduration:600,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        border:0,
        timerposition:"bottom",
        navfontcolor:"#333333",
        navthumbnavigationstyle:"arrow",
        borderradius:0,
        navbuttonhighlightcolor:"#333333",
        textpositionstatic:"bottomoutside",
        navthumbstyle:"imageonly",
        texteffecteasing1:"easeOutCubic",
        textcss:"display:block; padding:12px 0px; text-align:center; margin-top:4px;",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-16-8-0.png",
        showbottomshadow:false,
        texteffectslidedistance:30,
        navdirection:"horizontal",
        textpositionmarginstatic:0,
        backgroundimage:"",
        navposition:"bottom",
        texteffectslidedirection1:"right",
        arrowstyle:"mouseover",
        textformat:"Underneath center",
        bottomshadowimagetop:95,
        textpositiondynamic:"bottomleft",
        navshowbuttons:false,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        fade: {
            duration:1400,
            easing:"easeOutCubic",
            checked:true
        },
        transition:"fade",
        isfullscreen:false,
        textformat: {

        }
    });
});