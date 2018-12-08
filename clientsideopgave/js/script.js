(function(){
    var header = $("#html_header");
    var footer = $("#html_footer");
    var main = $("#html_content");
    var viewPort = $(window);
    
    function setContentHeight(){
        main.css("minHeight", viewPort.height() - footer.height() - header.height());
    }
    setContentHeight();
    viewPort.resize(function() {
        setContentHeight();
        console.log("fired resize");
    });

})();
