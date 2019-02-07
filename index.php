<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="description" content="Tone.js">
<meta http-equiv="content-type" charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Capita-Rythm</h1>
        <form name="form">
            <div class="form-group">
                <div class="row">
                    <label for="song_KEY">Choice KEY</label>
                    <select class="KEY-select ml-4" id="KEY">
                        <option selected></option>
                        <option value="1">C</option>
                        <option value="2">C#</option>
                        <option value="3">D</option>
                        <option value="4">D#</option>
                        <option value="5">E</option>
                        <option value="6">F</option>
                        <option value="7">F#</option>
                        <option value="8">G</option>
                        <option value="9">G#</option>
                        <option value="10">A</option>
                        <option value="11">A#</option>
                        <option value="12">B</option>
                    </select>
                    <select class="KEY-select2 ml-4" id="KEY2">
                        <option selected></option>
                        <option value="1">Major</option>
                        <option value="2">Minor</option>
                    </select>
                </div>
                <div class="row">
                    <label for="staff_code">Enter number<br>(allowed to input are 1~7 at the monent)<br>ex)14253741</label>
                </div>
                <div class="row">
                    <input type="number" class="barcode" max='9999999999999'>
                    <button class="ml-4" id="genrate_song" type="button">Generate</button>
                </div>
            </div>
        </form>
        <div class="row result">
            <p>Genereted chord is display here</p>
            <div class=" col display_area">none</div>
        </div>
        <div class="row">
            <button class="mr-4"id="play" type="button">Play</button>
            <button class="mr-4"id="stop" type="button">Stop</button>
            <button class="mr-4"id="clear" type="button">Clear</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://tonejs.github.io/build/Tone.js"></script>
    <script src="./js/sound.js"></script>
    <script src="./js/music_logic.js"></script>
    <script src="https://kmdsbng.github.io/zipcode_jp/api.js"></script>

</body>
</html>