<?php
    $page_name = '型錄';
    $page_count = 14;
    $page_scroll = 25;
    $height = '80vmin';
    $width = '60vmin';
    $book_top = '50%';
    $book_left = '70%';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php include 'style.php'; ?>
    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title><?=$page_name;?></title>
</head>
<body>
    <div class="container">
        <div class="book">
            <div class="book__spine"></div>
            <div class="page book__page book__cover book__cover--front" style="--page-index: 1;">
                <!-- 封面 -->
                <div class="page__half page__half--front">
                    <img src="https://is.gd/1aLaSv"/>
                </div>
                <!-- 首頁 -->
                <div class="page__half page__half--back">
                    <div class="book__insert"><p class="text-center">首頁</p></div>
                </div>
            </div>
            <!-- 內頁 -->
            <div class="page book__page" style="--page-index: 2;">

                <div class="page__half page__half--front"><img src="../img/1.svg" />
                    <div class="page__number">1</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Kitkat-sketch.svg"/>
                    <div class="page__number">2</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 3;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Tcannon-sketch.svg" />
                    <div class="page__number">3</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Pokedex-sketch.svg" />
                    <div class="page__number">4</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 4;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Book-sketch.svg" />
                    <div class="page__number">5</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Pino-sketch.svg" />
                    <div class="page__number">6</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 5;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Launch-sketch.svg" />
                    <div class="page__number">7</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Record-sketch.svg" />
                    <div class="page__number">8</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 6;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Record-sketch.svg" />
                    <div class="page__number">9</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Elon-sketch.svg" />
                    <div class="page__number">10</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 7;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Cubes-sketch.svg" />
                    <div class="page__number">11</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Cubes-sketch.svg" />
                    <div class="page__number">12</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 8;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Kitkat-sketch.svg" />
                    <div class="page__number">13</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Launch-sketch.svg" />
                    <div class="page__number">14</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 9;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Kitkat-sketch.svg" />
                    <div class="page__number">15</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Launch-sketch.svg" />
                    <div class="page__number">16</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 10;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Record-sketch.svg" />
                    <div class="page__number">17</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Record-sketch.svg" />
                    <div class="page__number">18</div>
                </div>
            </div>
            <div class="page book__page" style="--page-index: 11;">
                <div class="page__half page__half--front"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Book-sketch.svg" />
                    <div class="page__number">19</div>
                </div>
                <div class="page__half page__half--back"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/Cubes-sketch.svg" />
                    <div class="page__number">20</div>
                </div>
            </div>
            <!-- 尾頁 -->
            <div class="page book__page book__cover book__cover--back" style="--page-index: 12;">
                <div class="page__half page__half--front"></div>
                <!-- <div class="page__half page__half--back"><span class="code">set(FOLD,{transformOrigin:"50% 100%",scaleY:0}),set(CLIPS,{transformOrigin:"50% 0"}),set(".cannon__shirt",{opacity:0}),set(".cannon",{y:28}),set(".text--ordered .char",{y:"100%"});const SPEED=.15,FOLD_TL=()=>new timeline().to(LEFT_ARM,{duration:SPEED,rotateY:-180,transformOrigin:`${100*(22/65.3)}% 50%`},0).to(RIGHT_ARM,{duration:SPEED,rotateY:-180,transformOrigin:`${100*((65.3-22)/65.3)}% 50%`},SPEED).to(FOLD,{duration:SPEED/4,scaleY:1},2*SPEED).to(FOLD,{duration:SPEED,y:-47},2*SPEED+.01).to(CLIPS,{duration:SPEED,scaleY:.2},2*SPEED).to(".cannon",{duration:SPEED,y:0},2*SPEED),LOAD_TL=()=>new timeline().to(".button__shirt",{transformOrigin:"50% 13%",rotate:90,duration:.15}).to(".button__shirt",{duration:.15,y:60}).to(".t-shirt__cannon",{y:5,repeat:1,yoyo:!0,duration:.1}).to(".t-shirt__cannon",{y:50,duration:.5,delay:.1}),FIRE_TL=()=>new timeline().set(".t-shirt__cannon",{rotate:48,x:-85,scale:2.5}).set(".cannon__shirt",{opacity:1}).to(".t-shirt__cannon-content",{duration:1,y:-35}).to(".t-shirt__cannon-content",{duration:.25,y:-37.5}).to(".t-shirt__cannon-content",{duration:.015,y:-30.5}).to(".cannon__shirt",{onStart:()=>CLIP.play(),duration:.5,y:"-25vmax"},"<").to(".text--ordered .char",{duration:.15,stagger:.1,y:"0%"}).to("button",{duration:.15*7,"--hue":116,"--lightness":55},"<"),ORDER_TL=new timeline({paused:!0});ORDER_TL.set(".cannon__shirt",{opacity:0}),ORDER_TL.set("button",{"--hue":260,"--lightness":20}),ORDER_TL.to("button",{scale:300/BUTTON.offsetWidth,duration:SPEED}),ORDER_TL.to(".text--order .char",{stagger:.1,y:"100%",duration:.1}),ORDER_TL.to(SHIRT,{x:BUTTON.offsetWidth/2-33,duration:.2}),ORDER_TL.add(FOLD_TL()),ORDER_TL.add(LOAD_TL()),ORDER_TL.add(FIRE_TL()),BUTTON.addEventListener("click",()=>{1===ORDER_TL.progress()?(document.documentElement.style.setProperty("--hue",360*Math.random()),ORDER_TL.time(0),ORDER_TL.pause()):0===ORDER_TL.progress()&&ORDER_TL.play()});</span></div> -->
                <div class="book__insert"><p align='center'>尾頁</p></div>
            </div>
        </div>
    </div>
    
    <script src="menu.js"></script>
</body>
</html>