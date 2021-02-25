<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!-- libs -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>

    <!-- style -->
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/default.min.css">

    <!-- code -->
    <script>
    function accedeix(url) {
        $.ajax({
            method: "GET",
            url: url,
        }).done(function (msg) {
            response = JSON.parse(msg);
            for (let position = 0; position < response.length; position++) {
                const category = response[position];
                $('ul').append('<li>'+category["name"]+'</li>');
            }
        }).fail(function () {
            alert("Ajax ERROR url => "+url);
        });
    }
    </script>

    <script>hljs.initHighlightingOnLoad();</script>

    <title>AJAX i CORS</title>

</head>
<body>
    <h1>Categories carregades amb AJAX</h1>
    <p>venga!</p>
    <button onclick="accedeix('/api/cats')">Cridem /api/cats</button>
    <br>
    <button onclick="accedeix('/cats')">Cridem cats</button>
    <ul></ul>
</body>
</html>