/**
 * Functions required for Tabler
 */
let hexToRgba = function(hex, opacity) {
    let result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    let rgb = result
        ? {
              r: parseInt(result[1], 16),
              g: parseInt(result[2], 16),
              b: parseInt(result[3], 16)
          }
        : null;

    return "rgba(" + rgb.r + ", " + rgb.g + ", " + rgb.b + ", " + opacity + ")";
};

/**
 *
 */
$(document).ready(function() {
    /** Constant div card */
    const DIV_CARD = "div.card";

    /** Initialize tooltips */
    $('[data-toggle="tooltip"]').tooltip();

    /** Initialize popovers */
    $('[data-toggle="popover"]').popover({
        html: true
    });

    /** Function for remove card */
    $('[data-toggle="card-remove"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.remove();

        e.preventDefault();
        return false;
    });

    /** Function for collapse card */
    $('[data-toggle="card-collapse"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass("card-collapsed");

        e.preventDefault();
        return false;
    });

    /** Function for fullscreen card */
    $('[data-toggle="card-fullscreen"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass("card-fullscreen").removeClass("card-collapsed");

        e.preventDefault();
        return false;
    });
});

/**
 * Functions to implement address autocomplete using Algolia places
 */

import places from "places.js";

(function() {
    const placesAutocomplete = places({
        appId: "pl0CJ7FEFC3X",
        apiKey: "db29b60150a0402860bd2632f6c74afa",
        container: document.querySelector("#address"),
        templates: {
            value: function(suggestion) {
                return suggestion.name;
            }
        }
    }).configure({
        type: "address"
    });
    placesAutocomplete.on("change", function resultSelected(e) {
        if (
            document.querySelector("#address2") !== null &&
            document.querySelector("#address2") !== undefined
        ) {
            document.querySelector("#address2").value =
                e.suggestion.administrative || "";
        }
        document.querySelector("#city").value = e.suggestion.city || "";
        document.querySelector("#postcode").value = e.suggestion.postcode || "";
        document.querySelector("#country").value = e.suggestion.country || "";
    });
})();
