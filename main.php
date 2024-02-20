<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    gjgj

    <script>
        extensionImg.setAttribute("src", "chrome-extension://nenlahapcbofgnanklpelkaejcehkggg/assets/images/blue-plus.png"); // See below for discussion of how to find this

        /*
         * Add event listeners for both "load"- and "error"-event
         * Set the variable showing the existence of the extension by
         * setting it to "true" or "false" according to the fired event
         */
        extensionImg.addEventListener("load", function (e) {
            extensionExists = true;
            alert('you haave installed CapitalOneShopping');
            removeImgTag(e);
        }, false);
        extensionImg.addEventListener("error", function (e) {
            extensionExists = false;
            alert('you have not installed CapitalOneShopping');
            removeImgTag(e);
        }, false);

        function removeImgTag(e) {
            e.currentTarget.parentNode.removeChild(e.currentTarget);
        }
    </script>
</body>

</html>