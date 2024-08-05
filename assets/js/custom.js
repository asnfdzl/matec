var matec = {
    init: function () {
        matec.fancyApps()

        matec.setEqualHeight($(".justify-content-center .box-location"));
        matec.setEqualHeight($(".excitement-image-container .box-img"));

        $(window).resize(function() {
            matec.setEqualHeight($(".justify-content-center .box-location"));
            matec.setEqualHeight($(".justify-content-center .box-img"));
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

    fancyApps: function () {

    }
}


// Wait for the document to be ready
$(document).ready(function () {
    matec.init();
});