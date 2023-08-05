<html>

<head>
    <title>MVC TRY</title>
    <script src="jquery-3.6.3.min.js"></script>
</head>

<body>
    <button id="buttonFetch">Click Me</button>
    <script>
        $('#buttonFetch').click(function() {
            $.post("../Model/inde.php")
        })
    </script>