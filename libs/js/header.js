"use strict";

var scroll = false;
var lastScroll = 0;
var headerHeight = $(".header").height();
var windowHeight = $(window).height();

$(document).ready(function () {
  $(window).scroll(function () {
    var currentScroll = $(window).scrollTop();

    if (currentScroll == 0) {
      // Keep the header in place until we have scrolled past it.
      $(".header").css({ position: "static", transform: "none" });
      // Reset the gallery margin when the header is in the document flow.
      $(".services-gallery").css("margin-top", 0);
    }

    if (currentScroll < windowHeight) {
      // Stops transitions firing in the default position.
      $(".header").removeClass("header-scrolling");
    }

    if (currentScroll >= windowHeight) {
      // Enables transitions when the header is past the default position.
      $(".header").addClass("header-scrolling");
      // Set fixed positioning to display over page when scrolling up.
      $(".header").css("position", "fixed");
      // Add a margin to the next element after the header to position it correctly after a fixed element.
      $(".services-gallery").css("margin-top", headerHeight);
      // Detect scroll down.
      if (currentScroll > lastScroll) {
        $(".header").css({ top: headerHeight * -1, transform: "" });
        // Detect scroll up.
      } else if (currentScroll < lastScroll) {
        $(".header").css({
          top: headerHeight * -1,
          transform: "translateY(" + headerHeight + "px)",
        });
      }
    }

    lastScroll = currentScroll;
  });
});
