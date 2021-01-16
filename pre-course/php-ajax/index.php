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
            value = value.trim();

            const outputElement = document.getElementById('output');
            if (value.length === 0) {
                outputElement.innerHTML = '';
            } else {
                // AJAX Request
                const url = `suggest.php?q=${value}`;

                fetch(url)
                .then(response => response.text())
                .then(data => {
                    outputElement.innerHTML = data;
                })
                .catch(err => {
                    console.log(err);
                });
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
