import './bootstrap';
import 'bootstrap';
// import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
 
// // Register any Alpine directives, components, or plugins here...
 
// Livewire.start();



(function ($) {
    "use strict";
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });
    
})(jQuery);

// document.addEventListener('DOMContentLoaded', function () {
//     const inputs = document.querySelectorAll('input');

//     inputs.forEach(input => {
//       const label = input.nextElementSibling;

//       input.addEventListener('focus', () => {
//         label.classList.add('active');
//       });

//       input.addEventListener('blur', () => {
//         if (input.value === '') {
//           label.classList.remove('active');
//         }
//       });
//     });
//   });


  document.addEventListener('DOMContentLoaded', function () {
    const formGroups = document.querySelectorAll('.move-form-group');

    formGroups.forEach(formGroup => {
      const input = formGroup.querySelector('.move-input');
      const label = formGroup.querySelector('.move-label');

      input.addEventListener('focus', () => {
        label.classList.add('active');
      });

      input.addEventListener('blur', () => {
        if (input.value === '') {
          label.classList.remove('active');
        }
      });
    });
  });

// navbar

document.addEventListener("scroll", () => {
    const navbar = document.querySelector("#navbar");
    let scrollY = window.scrollY;
    console.log("ScrollY:", scrollY);

    if (scrollY > 80) {
        navbar.classList.add("scrolled")
    } else {
        navbar.classList.remove("scrolled")
    }
})

// filtri per prezzo
document.addEventListener("DOMContentLoaded", function() {
    let priceFilterRadios = document.getElementsByName('priceFilter');

    for (let i = 0; i < priceFilterRadios.length; i++) {
        priceFilterRadios[i].addEventListener('change', function() {
            let priceFilterValue = this.value;
            let priceRange = priceFilterValue.split('-');
            let minPrice = parseFloat(priceRange[0]);
            let maxPrice = parseFloat(priceRange[1]);

            let annunciContainers = document.querySelectorAll('.col-lg-3.col-md-6.col-sm-6.pb-1');

            annunciContainers.forEach(function(annuncioContainer) {
                let prezzoElement = annuncioContainer.querySelector('.prezzo');
                let prezzoText = prezzoElement.textContent;
                let prezzo = parseFloat(prezzoText.replace('€', '').trim());

                if ((minPrice <= prezzo && prezzo <= maxPrice) || priceFilterValue === "0-9999999") {
                    annuncioContainer.classList.remove('hidden');
                } else {
                    annuncioContainer.classList.add('hidden');
                }
            });
        });
    }
});

















