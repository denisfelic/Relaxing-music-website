<?php
$dir    = './audios';
$scannedFiles = scandir($dir, 1);
$files = [];

foreach ($scannedFiles as $fileName) {
    $fileExtension = substr($fileName, strlen($fileName) - 4, 4);

    if ($fileName == "." || $fileName == ".." || $fileExtension != ".mp3") continue;
    $files[] = $fileName;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relax Audio</title>

    <style>
        * {
            padding: 0;
            margin:  0;
            box-sizing: border-box;
        }

        .title{
            text-align: center;
        }

        ul, ol{
            list-style: none;
        }
        body {
            background-color: #111;
            color: #eee;
            font-family: sans-serif;
            display: grid;
            place-content: center;
        }

        .audio-container {
            display: flex;
            flex-direction: column;
        }

        .audio-container_audio {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
        }

        .audio-container_audio span {
            margin: 5px auto;
        }

      
    </style>
</head>

<body>

    <h1 class="title">Relax website</h1>
    <ul class="audio-container">
        <?php foreach ($files as $file) : ?>
            <li class="audio-container_audio">
                <span><?php echo $file; ?></span>
                <audio controls>
                    <source src="audios/<?php echo $file; ?>" type="audio/mpeg">
                </audio>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>