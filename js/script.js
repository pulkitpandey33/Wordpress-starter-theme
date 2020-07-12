$(document).ready(function () {
  $(".menu-icon").click(function () {
    $(this).toggleClass("is-active");
  });

  $(".menu-icon").on("click", function (e) {
    e.stopPropagation();
    var menu = document.getElementById("user-nav");
    var isExpanded = menu.getAttribute("aria-expanded") === "true";
    menu.setAttribute("aria-expanded", !isExpanded);
  });

  if ($("#user-nav").children().length === 0) {
    $(".menu-icon").hide();
  }

  // Show hamburger icon if header links increase
  var headerLinksLength = $(".main-menu").children().length;
  console.log(headerLinksLength);
  if (headerLinksLength > 7) {
    $(".main-menu").hide();
    //  $('.nav-wrapper .header-search').hide();
    $(".header").addClass("toggle-mobile-menu");
    //  $('.icon-menu, .header-search .search-icon').addClass('show');
  }
});
