var IMYUAN;
IMYUAN || (IMYUAN = {});

(function(a) {

    a.fn.extend({
        returntop: function() {
            if (this[0]) {
                var b = this.click(function() {
                    a("html, body").animate({scrollTop: 0},120)
                }),
              c = null;
                a(window).bind("scroll",
                function() {
                    var d = a(document).scrollTop(),
                    e = a(window).height();
                    0 < d ? b.css("bottom", "100px") : b.css("bottom", "-200px");
                })
            }
        }

    })
})

(jQuery); 

(function(a) {

    a("body")('<a class="close" href="javascript:;"></a>');

})

(function() {

    $("#returnTop").returntop()
});
  