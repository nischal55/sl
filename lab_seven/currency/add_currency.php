<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency ADD</title>
</head>

<body>
    <div class="content">
        <h1>Country Currency</h1>
        <hr>
        <form action="" method="post">
            <div class="form_input">
                <label for="country_id">Country</label>
                <select name="country_id" id="">
                    <option value="">Nepal</option>
                </select>
            </div>
            <div class="form-input">
                <label for="currency_rate">Currency Rate</label>
                <input type="number" name="currency_rate" id="">
            </div>
            <div class="form-input">
                <label for="date_of_rate">Date of Rate</label>
                <input type="text" name="data_of_rate" value="">
            </div>
            <input type="submit" value="ADD" name="btnAdd">
        </form>
    </div>
</body>

</html>