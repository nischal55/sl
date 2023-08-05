<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Data|Form</title>
</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1 class="text-center mt-5 ">Nepali Currency converter</h1>
            <div class="card p-5">
                <form method="post" action="function.php">
                    <div class="form-group mb-2">
                        <label for="amount">Amount:</label>
                        <input type="number" name="amount" id="amount" class="form-control mb-2">
                        <label for="currency">Select Currency</label><br>
                        <select name="country" class="form-control">
                            <option value="1">China</option>
                            <option value="2">India</option>
                            <option value="3">America</option>
                            <option value="4">United Kingdom</option>
                            <option value="5">Australia</option>
                            <option value="6">Japan</option>
                        </select>
                    </div>
                    <input type="submit" name="convert" value="Convert" class="btn btn-primary col-12 text-upper mt-4">
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>

    </div>

</body>

</html>