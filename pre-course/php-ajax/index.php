<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function showSuggestion(value) {
            if (value.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX Request
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "suggest.php?q="+value, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Search Users</h1>
    <form action="">
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
</div>
</body>
</html>
