require('./bootstrap');

require('datatables.net');
require('datatables.net-bs4'); 
import Clipboard from 'clipboard';

// document.getElementById("uploadBtn").onchange = function () {
//     document.getElementById("uploadFile").value = this.files[0].name;
// };

(function($) {
    "use strict"; // Start of use strict
  
    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
      $("body").toggleClass("sidebar-toggled");
      $(".sidebar").toggleClass("toggled");
      if ($(".sidebar").hasClass("toggled")) {
        $('.sidebar .collapse').collapse('hide');
      };
    });
  
    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
      if ($(window).width() < 768) {
        $('.sidebar .collapse').collapse('hide');
      };
    });
  
    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
      if ($(window).width() > 768) {
        var e0 = e.originalEvent,
          delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
      }
    });
  
    // Scroll to top button appear
    $(document).on('scroll', function() {
      var scrollDistance = $(this).scrollTop();
      if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
  
    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(e) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top)
      }, 1000, 'easeInOutExpo');
      e.preventDefault();
    });

    $(document).ready( function () {
      $('#articles').DataTable();
    });
  
    toastr.options = {
      "positionClass": "toast-top-right",
    }

    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    
    /**
     * TOOLTIP
     */
    $('.copy-btn').tooltip({
      trigger: 'click',
      placement: 'bottom'
    });

    function setTooltip(btn, message) {
      $(btn).tooltip('hide')
        .attr('data-original-title', message)
        .tooltip('show');
    }

    function hideTooltip(btn) {
      setTimeout(function() {
        $(btn).tooltip('hide');
      }, 1000);
    }

    /**
     * CLIPBOARD
     */
    var clipboard = new Clipboard('.copy-btn');

    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
    });

    clipboard.on('error', function(e) {
      setTooltip(e.trigger, 'Failed!');
      hideTooltip(e.trigger);
    });

})(jQuery); // End of use strict
  

















// $(document).ready( function () {

// /**
//  * Show insta news from calling our api method in NewsController
//  */
// let load_more_btn = document.querySelector('#load_more');
// load_more_btn.addEventListener("click", load_more);

// let end_cursor = '';

// fetch('/instaApi?end_cursor=')
//         .then(response => {
//             console.log(response);
//             return response.json();
//         })
      
//         .then(insta => {
//             console.log(insta.posts)
//             $.each(insta.posts, function(i, item) {
//                 $('#card-body').append("<button class='instaBtn'  type='button' data-toggle='modal' data-target='#addModal'> <img width='100%' height='100%' src=" + item.node.display_url + " data-taken_at_timestamp="+ item.node.taken_at_timestamp +"  data-typename="+ item.node.__typename +"> </button>");
//             })
//           end_cursor = insta.end_cursor; 
//         })

// function load_more(){
//       load_more_btn.innerHTML ='Loading';

//       fetch('/instaApi?end_cursor='+ end_cursor)
//           .then(response => {
//               console.log(response);
//               return response.json();
//           })
//           .then(insta => {
//               console.log(insta.posts)
//               $.each(insta.posts, function(i, item) {
//                   $('#card-body').append("<button class='instaBtn' type='button' data-toggle='modal' data-target='#addModal'> <img width='100%' height='100%' src=" + item.node.display_url + " data-taken_at_timestamp="+ item.node.taken_at_timestamp +"  data-typename="+ item.node.__typename +"> </button>");
//               })
//               end_cursor = insta.end_cursor; 
//           })
//           .then(
//             function() {
//               load_more_btn.innerHTML ='Load more';
//           })
// };
// });
// /**
//  * End of insta api 
//  */



// $(document).ready( function(){
//   $('#addModal').on('shown.bs.modal', function (e) {
//       let img_src = e.relatedTarget.children.item(0).getAttribute('src');
//       let taken_at = e.relatedTarget.children.item(0).getAttribute('data-taken_at_timestamp');
//       let type_name = e.relatedTarget.children.item(0).getAttribute('data-typename');
//       console.log(taken_at);
//       console.log(type_name);
//       $('#article_image').attr('value', img_src);
//       $('#taken_at').attr('value', taken_at);
//       $('#type_name').attr('value', type_name);

//   })
// })


