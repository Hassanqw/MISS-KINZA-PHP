<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Marks Part 1</h2>

        <form action="Marksheet.php" method="post">
            <div class="form-group mt-3">
                <label for="my-input">URDU PART 1</label>
                <input id="my-input" name="uUrdu" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">English PART 1</label>
                <input id="my-input" name="uEng" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Islamic PART 1</label>
                <input id="my-input" name="uIsla" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Physics PART 1</label>
                <input id="my-input" name="uPhys" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Chemistry PART 1</label>
                <input id="my-input" name="uChem" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Mathematics PART 1</label>
                <input id="my-input" name="uMath" class="form-control" type="number">
            </div>




            <h2 class="text-center mt-3">Marks Part 2</h2>

            <div class="form-group mt-3">
                <label for="my-input">URDU PART 2</label>
                <input id="my-input" name="uUrdu2" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">English PART 2</label>
                <input id="my-input" name="uEng2" class="form-control" type="number">
            </div>
            
            <div class="form-group mt-3">
                <label for="my-input">Pakistan Studies PART 2</label>
                <input id="my-input" name="uPakis2" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Physics PART 2</label>
                <input id="my-input" name="uPhys2" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Chemistry PART 2</label>
                <input id="my-input" name="uChem2" class="form-control" type="number">
            </div>
            <div class="form-group mt-3">
                <label for="my-input">Mathematics PART 2</label>
                <input id="my-input" name="uMath2" class="form-control" type="number">
            </div>
            <button class="btn btn-info mt-3" name="sub" type="submit">Submit</button>

        </form>

    </div>

</body>

</html>