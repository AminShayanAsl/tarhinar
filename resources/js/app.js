import './bootstrap';
import jQuery from 'jquery';
import { createIcons, icons } from 'lucide';
import Swal from 'sweetalert2';

window.$ = jQuery;

// Initialize Lucide Icons
createIcons({ icons });

document.addEventListener("DOMContentLoaded", function () {
    loadAnimation();
    initMobileMenu();
    initScrollToTop();
    initHorizontalScroll();
    initAccordion();
    initAjaxForm();
});

// animate
function isInViewport(elem) {
    const elementTop = $(elem).offset().top;
    const elementBottom = elementTop + $(elem).outerHeight();

    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
}

function triggerAnimations() {
    $('.animate-on-scroll').each(function () {
        const $el = $(this);
        if (!$el.hasClass('animate__animated') && isInViewport($el)) {
            const animation = $el.data('animation') || 'animate__fadeIn';
            const delay = $el.data('delay') || '0s';

            $el.css('animation-delay', delay);
            $el.addClass('animate__animated ' + animation);
        }
    });
}

function loadAnimation() {
    $(window).on('scroll load', function () {
        triggerAnimations();
    });
}

// Mobile Menu
function initMobileMenu() {
    $('#menu-toggle').on('click', function () {
        $('#mobile-menu').removeClass('-translate-x-full');
    });

    $('#menu-close, #mobile-menu a').on('click', function () {
        $('#mobile-menu').addClass('-translate-x-full');
    });
}

// Scroll To Top
function initScrollToTop() {
    const $btn = $('#scrollToTopBtn');

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 300) {
            $btn.fadeIn();
        } else {
            $btn.fadeOut();
        }
    });

    $btn.on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });
}

// Horizontal Scroll (Drag + Button)
function initHorizontalScroll() {
    const $container = $('#scrollContainer');

    $('#scrollLeft').on('click', function () {
        $container.animate({ scrollLeft: '+=400' }, 400);
    });

    $('#scrollRight').on('click', function () {
        $container.animate({ scrollLeft: '-=400' }, 400);
    });

    let isDragging = false;
    let startX, scrollLeft;

    $container.on('mousedown', function (e) {
        isDragging = true;
        startX = e.pageX - $container.offset().left;
        scrollLeft = $container.scrollLeft();
        $container.addClass('cursor-grabbing').removeClass('cursor-grab');
    });

    $(document).on('mouseup', function () {
        isDragging = false;
        $container.addClass('cursor-grab').removeClass('cursor-grabbing');
    });

    $container.on('mousemove', function (e) {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - $container.offset().left;
        const walk = (x - startX) * 2;
        $container.scrollLeft(scrollLeft - walk);
    });

    $container.on('dragstart', () => false);
}

// Ajax Contact Form
function initAjaxForm() {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#contactForm').on('submit', function (e) {
        e.preventDefault();
        const url = $(this).data('url');

        Swal.fire({
            title: 'در حال ارسال...',
            html: 'لطفاً کمی صبر کنید',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        $.ajax({
            url: url,
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'ارسال موفق!',
                    text: 'درخواست شما با موفقیت ارسال شد.',
                    confirmButtonText: 'باشه'
                });

                $('#contactForm')[0].reset();
            },
            error: function (xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'خطا در ارسال',
                    text: 'ارسال اطلاعات با مشکل مواجه شد. لطفاً دوباره تلاش کنید.',
                    confirmButtonText: 'باشه'
                });
            }
        });
    });
}

// Accordion
function initAccordion() {
    $('#accordion button').on('click', function () {
        const $content = $(this).next();
        const $icon = $(this).find('span');

        $('#accordion div > div').slideUp();
        $('#accordion button span').removeClass('rotate-180');

        if (!$content.is(':visible')) {
            $content.slideDown();
            $icon.addClass('rotate-180');
        }
    });
}
