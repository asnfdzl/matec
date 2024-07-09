var matec = {
    init: function () {
        matec.setEqualHeight($(".justify-content-center .box-location"));

        $(window).resize(function() {
            matec.setEqualHeight($(".justify-content-center .box-location"));
        });
    },

    setEqualHeight: function (elements) {
        var maxHeight = 0;

        // Loop through each element to find the maximum height
        elements.each(function() {
            var currentHeight = $(this).height();
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });

        // Set the maximum height to all div elements
        elements.height(maxHeight);
    },
}


// Wait for the document to be ready
$(document).ready(function () {
    matec.init();
});