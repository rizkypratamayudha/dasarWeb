<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input dengan validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Form input dengan validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama"><br>
        <span id="nama-error" class="error"></span><br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email"><br>
        <span id="email-error" class="error"></span><br>

        <input type="submit" value="Submit"><br>
    </form>

    <div id="hasil">

    </div>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if(nama === ""){
                    $("#nama-error").text("Nama harus diisi.")
                    valid = false;
                }
                else {
                    $("#nama-error").text("");
                }

                if(email === ""){
                    $("#email-error").text("Email harus diisi.")
                    valid = false;
                }
                else {
                    $("#email-error").text("")
                }

                return valid;
            })
        })
    </script>
</body>
</html>
