<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Webcam</title>
    </head>
    <body>
        <div id="container">
            <div id="my_camera">

        </div>
        <div id="result" style="visibility: hidden; position: absolute">

        </div>

    <!--Scripts-->
    <script src="text/javascript"> src="assets/webcam.min.js"</script>
    <script type="text/javascript">
        function configure() {
            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90
        });

        Webcam.attach('#my_camera');
    }

    function saveSnap() {
        Webcam.snap(function(data_uri) {
            document.getElementById('result').innerHTML = '<img id = "webcam" src="'+data_uri+'">';
        });

        Webcam.reset();

        var base64image = document.getElementById('webcam').src;
        Webcam.upload(base64image,'function.php',function(code,text){
            aler('Save Successfully');
            document.location.href = "image.php"
            
        });
    }
    </script>
    </body>

</html> 