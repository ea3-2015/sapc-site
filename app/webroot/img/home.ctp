<style type="text/css"> 
img {
	margin: -3px;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
	 box-shadow: 0px 10px 29px #000000;
   
}
{
    box-sizing: border-box;
}



input[name="slider-select-element"] {
    display: none;
}

#slider-arrows {
    margin: -10% auto 0 auto;
    width: 80%;
}

#slider-box {
    -moz-animation: autoSlider 15s infinite linear;
    -o-animation: autoSlider 15s infinite linear;
    -webkit-animation: autoSlider 15s infinite linear;
    animation: autoSlider 15s infinite linear;

    -webkit-transition: all 0.80s ease;
    -moz-transition: all 0.80s ease;
    -ms-transition: all 0.80s ease;
    -o-transition: all 0.80s ease;
    transition: all 0.80s ease;

    height: 100%;
    width: 300%;
}

#slider-container {
    height: 20%;
    margin: 0 auto;
    overflow: hidden;
    text-align: left;
    width: 101%;
    box-shadow: 0px 10px 29px #000000;
}

.element-foto3,
.element-foto2,
.element-foto1 {
    min-height: 400px;
    max-height: 100%;
    width: 100%;
    
}

.element-foto3 {
    /*background: blue;*/
    background-image: url('../img/foto3.jpg');
}

.element-foto2 {
    /*background: green;*/
    background-image: url('../img/foto2.jpg');
}

.element-foto1 {
    background-image: url('../img/foto1.jpg');
}

.slider-element {
    float: left;
    width: 33.333%;
}

@-moz-keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

@-webkit-keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

@keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

</style>

 			
 <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="right"><img src="../img/barnner.png" alt="Alcadia del Estado Guárico" width="780" height="129"></marquee>
 <br> <br> <br>
        <Titulo>
            <h2>Bienvenidos </h2><hr>
        </Titulo>
			 <div id="page">
			            <section>
			                
			                <div id="slider-container">
			                    <div id="slider-box">
			                        <div class="slider-element">
			                            <article class="element-foto1">
			                                
			                            </article>
			                        </div>
			                        <div class="slider-element">
			                            <article class="element-foto2">
			                                
			                            </article>
			                        </div>
			                        <div class="slider-element">
			                            <article class="element-foto3">
			                               
			                                    
			                            </article>                            
			                        </div>
			                      
			                    </div>
			                </div>
			                
			            </section>            
			    </div>