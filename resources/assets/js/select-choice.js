(function () {
    "use strict";

    function initChoices(selector) {
        document.querySelectorAll(selector).forEach((element) => {
            if (!element.dataset.choicesInitialized) {
                element.dataset.choicesInitialized = true; // Prevent duplicate initialization

                new Choices(element, {
                    allowHTML: true,
                    removeItemButton: element.hasAttribute("data-remove-button"), // Enable remove button
                    searchEnabled: element.hasAttribute("data-search"), // Enable search
                    editItems: element.hasAttribute("data-edit"), // Enable inline editing
                    duplicateItemsAllowed: !element.hasAttribute("data-unique"), // Prevent duplicate values
                    paste: element.hasAttribute("data-unique") ? false : true, // Disable paste if unique values are required
                    addItemFilter: element.hasAttribute("data-email")
                        ? (value) => {
                            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email validation
                            return regex.test(value);
                        }
                        : null,
                });
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        initChoices("[data-choices]");
    });

})();
