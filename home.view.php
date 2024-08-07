<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?></title>
    <link rel="stylesheet" href="/assets/css/font.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
    <main class="home">
        <section class="sec-home">
            <img id="logo" class="logo lheader" src="<?= LOGOSRC ?>" alt="">
            <h1 class="ttitle">Why Eye of Egypt?</h1>
            <p  class="tdesc">Because we can do stuff more than others do</p>
            <ul class="home-nav">
                <li class="btn">
                    <a href="/packages/tours">
                        <img src="/assets/images/home/nav/tours.png" alt="">
                        <span></span>
                    </a>
                </li>
                <li class="btn">
                    <a href="/packages/excursions">
                        <img src="/assets/images/home/nav/excursions.png" alt="">
                        <span></span>
                    </a>
                </li>
                <li class="btn">
                    <a href="/packages/nilecruise">
                        <img src="/assets/images/home/nav/nilecruise.png" alt="">
                        <span></span>
                    </a>
                </li>
                <li class="btn">
                    <a href="/packages/transfer">
                        <img src="/assets/images/home/nav/transfer.png" alt="">
                        <span></span>
                    </a>
                </li>
                <!-- <li class="btn">
                    <a href="/packages/accommedetations">
                        <img src="/assets/images/home/nav/accommedetations.png" alt="">
                        <span></span>
                    </a>
                </li> -->
            </ul>
            <figure>
                <img class="ihg" src="/assets/images/home/01.jpg" alt="">
                <img class="ihg" src="/assets/images/home/03.jpg" alt="">
                <img class="ihg" src="/assets/images/home/04.jpg" alt="">
                <img class="ihg" src="/assets/images/home/07.jpg" alt="">
                <img class="ihg" src="/assets/images/home/08.jpg" alt="">                
                <img class="ihg" src="/assets/images/home/09.jpg" alt="">
                <img class="ihg" src="/assets/images/home/10.jpg" alt="">
            </figure>
            
            
        </section>
    </main>
</body>
</html>

<script>
    function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
            end = new Date().getTime();
        }
    }

    let r = document.querySelectorAll('.ihg') ;
    var currentindex = 0 ;
    var lastindex = 0 ;
    r[currentindex].classList.add('fadin');
    currentindex++ ;

    setInterval(function(){
            
            if(currentindex == 0){
                lastindex = r.length-1 ;
            }else{
                lastindex = currentindex - 1 ;
            }
            
            console.log(currentindex) ;
            r[lastindex].classList.add('fadout');
            r[lastindex].classList.remove('fadin');
            
            r[currentindex].classList.add('fadin');
            r[currentindex].classList.remove('fadout');

            currentindex++ ;

            if(currentindex == r.length) {
                currentindex = 0 ;
            }
        
    },8000);


    logo = document.getElementById('logo') ;
    setTimeout(function(){
        logo.classList.add('showLogo') ;
    },1500);


    buttons = document.querySelectorAll('.btn') ;
    setTimeout(function(){
        for(let i = 0; i < buttons.length;i++){
            setTimeout(function(){
                buttons[i].classList.add('inter_btn') ;
            }, 150*i );
        }
    },2000);


    titles = document.querySelectorAll('.ttitle , .tdesc') ;

    setTimeout(function(){
        for(let i = 0; i < titles.length;i++){
            setTimeout(function(){
                titles[i].classList.add('showTitle') ;
            }, 300*i );
        }
    },3000);


    // change text content
    desc = document.querySelector('.tdesc') ;
    arr_desc = ["Day Cairo and Luxor from Hurghada by Flight",
    "Leave you hotel in Hurghada Red Sea for a 2-day",
    "tour to see ancient Egypt's most famous monuments."];
    setTimeout(function(){

        index = 0 ;
        setInterval(function(){
            
            desc.classList.remove('showTitle') ;
            desc.style.animation = 'none';
            desc.offsetHeight; /* trigger reflow */
            desc.style.animation = null; 
            desc.innerHTML  = arr_desc[index] ;
            desc.classList.add('showTitle') ;
            index++ ;
            if(index == arr_desc.length){
                index = 0 ;
            }
        },8000);

        
    },0000);


    /* for(let i = 0; i < arr_desc.length;i++){
            desc.classList.remove('showTitle') ;
            wait(100);
            setTimeout(function(){
                
                desc.innerHTML  = arr_desc[i] ;
                desc.classList.add('showTitle') ;
            }, 1000*i );
    } */
    




</script>

