<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?php include 'style.php'; ?>
    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="book">
        <div id="end">The End</div>
        <div class="page one">
            <div class="image front image3">
                Front 2
            </div>
            <div class="image back image4">
                back 2
            </div>     
        </div>
        
        <div class="page two">
            <div class="image front image1">
                Front 1
            </div>
            <div class="image back image2">
                Back 1
            </div>       
        </div>     
    </div>
    <script src="flip.js"></script>
</body>
</html>