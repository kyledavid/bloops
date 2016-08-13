jQuery(document).ready(function($) {
    var toggled = false;
    var allowLink = false;
    $('.menu-item').click(function(event){
        if (allowLink === false) {
            var children = $(this).children('ul.sub-menu');
            if (children.length > 0) {
                console.log(children.length);
                if (toggled){
                    toggled = false;
                } else {
                    var parents = $(this).parents('li.menu-item');
                    children.slideToggle();
                    event.preventDefault();
                    if (parents.length) {
                        toggled = true;
                    }
                }
            } else {
                allowLink = true;
            }
        }
        
    });
});