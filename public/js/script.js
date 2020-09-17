
// ======================= MODEL VIDEO SCRIPT

    // on preview show iframe
    $('#agentModel').on('show.bs.modal', function (e) {
      var idVideo = $(e.relatedTarget).data('id');
      $('#agentModel .modal-body').html('<iframe width="100%" height="auto" src="https://www.youtube.com/embed/' + idVideo + '?autoplay=true" frameborder="0" allowfullscreen></iframe>');
    });
    //on close remove
    $('#agentModel').on('hidden.bs.modal', function () {
       $('#agentModel .modal-body').empty();
    });


// ======================= NAVIGATION SCRIPT

    var $scrollStatus = $('.scroll-status');

    $('.nav').navScroll({
      mobileDropdown: true,
      mobileBreakpoint: 768,
      scrollSpy: true,
      onScrollStart: function() {
        $scrollStatus.show();
        $scrollStatus.text('Started scrolling');
      },
      onScrollEnd: function() {
        $scrollStatus.text('Scrolling ended');
        setTimeout(function() {
          $scrollStatus.fadeOut(200);
        }, 1000);
      }
    });

    $('.click-me').navScroll({
      navHeight: 0
    });

    $('.nav').on('click', '.nav-mobile', function (e) {
      e.preventDefault();
      $('.nav ul').slideToggle('fast');
    });




// ======================= TEAM CAROUSEL SCRIPT

$(document).ready(function() {
$("#teamMembers").owlCarousel({
//animateOut: 'fadeOut',
//transitionStyle : "fade",
items:3,
nav:false,
dots:true,
loop:true,
autoplay:true,
autoplayTimeout:4000,
autoplayHoverPause:true,
smartSpeed:1000,
rtl:false,
singleItem:true,

responsive:{
0:{items:1},
600:{items:3},
1000:{items:3}}
});
});



// ======================= SHOW AND HIDE

function myFunction() {
  var x = document.getElementById("faqsData");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


// ======================= COLLAPSABLE PANNEL


$(document).on('click', '.panel-heading .panel-title', function(e){
var $this = $(this);
if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
} else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
}
})


// ======================= MOVE TO TOP

var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="images/up-arrow.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();