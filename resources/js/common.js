var Common = function() {

    var hide_notify = function () {
        $('.alert').delay(5000).slideUp("slow");
    };

    return {
        init:function () {
            hide_notify();
        }
    }
}();

$(function () {
    Common.init();
});
