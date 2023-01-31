<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="content">

        <table>
            <?php $state = true ?>
            <?php for ($i=0; $i < 8; $i++) : ?>
                <tr>
                    <?php  $state = !$state ?>
                    <?php for ($j=0; $j < 8; $j++) : ?>
                        <?php  $state = !$state ?>
                        <td class="<?= $state ? "box-white" : "box-black" ?>"></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>

    </div>
</body>
</html>