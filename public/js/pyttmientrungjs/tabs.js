$.fn.contenttabs = function() {
    var selector = this;
    this.each(function() {
        var obj = $(this);
        $(obj.attr('href')).hide();
        $(obj).click(function() {
            $(selector).removeClass('selected');
            $(selector).each(function(i, element) {
                $($(element).attr('href')).hide();
            });
            $(this).addClass('selected');
            $($(this).attr('href')).fadeIn();
            return false;
        });
    });
    $(this).show();
    if (window.location.hash && window.location.hash == '#tab-review') {
        var hash = window.location.hash;
        $(this).each(function(index) {
            if ($(this).attr('href') == hash) {
                $(this).first().click();
            }
        });
    } else {
        $(this).first().click();
    }
};
