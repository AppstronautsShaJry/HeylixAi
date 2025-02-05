<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reusable Choices.js Component</title>

    <!-- Choices.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
</head>
<body>

<!-- Multi-Select with Remove Button -->
<label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">With Remove Button</label>
<select class="ti-form-select rounded-sm !py-2 !px-3"
        name="choices-multiple-remove-button"
        data-choices
        data-remove-button
        multiple>
    <option value="Choice 1" selected>Choice 1</option>
    <option value="Choice 2">Choice 2</option>
    <option value="Choice 3">Choice 3</option>
    <option value="Choice 4">Choice 4</option>
</select>

<!-- Single Select with Search -->
<label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">Single Select (With Search)</label>
<select class="ti-form-select rounded-sm !py-2 !px-3"
        name="choices-single"
        data-choices
        data-search>
    <option value="One">One</option>
    <option value="Two">Two</option>
    <option value="Three">Three</option>
</select>

<!-- Email Input with Filtering -->
<label class="ti-form-select rounded-sm !p-0 mb-2 font-medium">Email Only</label>
<input type="text"
       class="ti-form-select rounded-sm !py-2 !px-3"
       id="choices-text-email-filter"
       data-choices
       data-edit
       data-unique
       data-email
       placeholder="Enter email addresses"
       multiple />

<!-- Choices.js Script -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="choices-init.js"></script>
@vite('resources/assets/js/select-choice.js')
</body>
</html>
