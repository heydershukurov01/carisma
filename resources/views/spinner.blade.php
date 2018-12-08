<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Secret Santa</title>

</head>
<body>
@if($spin !== null)
    <style>
        :root {
            --skyColor: rgb(20, 72, 99);
            --groundColor: rgb(15, 56, 78);
        }

        .santa {
            width: 60px;
            height: 105px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            top: 95px;
            will-change: transform;
            z-index: 100;
        }
        .santa::after {
            content: "";
            width: 5px;
            height: 5px;
            box-shadow: 25px 5px #f33131,30px 5px #f33131,20px 10px #f33131,25px 10px #f33131,30px 10px #f33131,35px 10px #f33131,15px 15px #f33131,20px 15px #f33131,25px 15px #f33131,30px 15px #f33131,35px 15px #f33131,15px 20px #f33131,20px 20px #c8cfdb,25px 20px #c8cfdb,30px 20px #c8cfdb,35px 20px #c8cfdb,15px 25px #c8cfdb,20px 25px #fdeaea,25px 25px #edbc83,30px 25px #fdeaea,35px 25px #edbc83,45px 25px #000000,20px 30px #000000,25px 30px #edbc83,30px 30px #000000,35px 30px #edbc83,40px 30px #cc4b20,45px 30px #d61111,50px 30px #cc4b20,15px 35px #f33131,20px 35px #c8cfdb,25px 35px #c8cfdb,30px 35px #c8cfdb,35px 35px #c8cfdb,40px 35px #f33131,45px 35px #d61111,50px 35px #a63a16,55px 35px #cc4b20,10px 40px #d61111,15px 40px #f33131,20px 40px #c8cfdb,25px 40px #8a9cb3,30px 40px #8a9cb3,35px 40px #c8cfdb,40px 40px #f33131,45px 40px #d61111,50px 40px #d61111,55px 40px #a63a16,60px 40px #a63a16,10px 45px #d61111,15px 45px #f33131,20px 45px #c8cfdb,25px 45px #c8cfdb,30px 45px #c8cfdb,35px 45px #c8cfdb,40px 45px #f33131,45px 45px #f33131,50px 45px #d61111,55px 45px #a63a16,60px 45px #a63a16,10px 50px #d61111,15px 50px #f33131,20px 50px #c8cfdb,25px 50px #c8cfdb,30px 50px #c8cfdb,35px 50px #c8cfdb,40px 50px #f33131,45px 50px #f33131,50px 50px #d61111,55px 50px #a63a16,60px 50px #a63a16,10px 55px #d61111,15px 55px #f33131,20px 55px #d61111,25px 55px #c8cfdb,30px 55px #c8cfdb,35px 55px #d61111,40px 55px #f33131,45px 55px #f33131,50px 55px #7e2f15,55px 55px #a63a16,60px 55px #7e2f15,5px 60px #d61111,15px 60px #f33131,20px 60px #f33131,25px 60px #d61111,30px 60px #fdeaea,35px 60px #f33131,40px 60px #f33131,45px 60px #f33131,50px 60px #7e2f15,55px 60px #7e2f15,5px 65px #000000,15px 65px #f33131,20px 65px #f33131,25px 65px #f33131,30px 65px #fdeaea,35px 65px #f33131,40px 65px #f33131,45px 65px #d61111,20px 70px #d61111,25px 70px #f33131,30px 70px #fdeaea,35px 70px #f33131,40px 70px #d61111,45px 70px #d61111,20px 75px #000000,25px 75px #000000,30px 75px #ee8914,35px 75px #000000,40px 75px #000000,45px 75px #000000,20px 80px #f33131,25px 80px #f33131,30px 80px #f33131,35px 80px #d61111,40px 80px #f33131,45px 80px #f33131,20px 85px #f33131,40px 85px #f33131,20px 90px #f33131,40px 90px #f33131,25px 95px #f33131,35px 95px #f33131,25px 100px #f33131,35px 100px #f33131,25px 105px #000000,35px 105px #000000,25px 115px #f33131,30px 115px #f33131,20px 120px #f33131,25px 120px #f33131,30px 120px #f33131,35px 120px #f33131,15px 125px #f33131,20px 125px #f33131,25px 125px #f33131,30px 125px #f33131,35px 125px #f33131,15px 130px #f33131,20px 130px #c8cfdb,25px 130px #c8cfdb,30px 130px #c8cfdb,35px 130px #c8cfdb,15px 135px #c8cfdb,20px 135px #fdeaea,25px 135px #edbc83,30px 135px #fdeaea,35px 135px #edbc83,45px 135px #000000,20px 140px #000000,25px 140px #edbc83,30px 140px #000000,35px 140px #edbc83,40px 140px #cc4b20,45px 140px #d61111,50px 140px #cc4b20,15px 145px #f33131,20px 145px #c8cfdb,25px 145px #c8cfdb,30px 145px #c8cfdb,35px 145px #c8cfdb,40px 145px #f33131,45px 145px #d61111,50px 145px #a63a16,55px 145px #cc4b20,10px 150px #d61111,15px 150px #f33131,20px 150px #c8cfdb,25px 150px #8a9cb3,30px 150px #8a9cb3,35px 150px #c8cfdb,40px 150px #f33131,45px 150px #d61111,50px 150px #d61111,55px 150px #a63a16,60px 150px #a63a16,10px 155px #d61111,15px 155px #f33131,20px 155px #c8cfdb,25px 155px #c8cfdb,30px 155px #c8cfdb,35px 155px #c8cfdb,40px 155px #f33131,45px 155px #f33131,50px 155px #d61111,55px 155px #a63a16,60px 155px #a63a16,10px 160px #d61111,15px 160px #f33131,20px 160px #c8cfdb,25px 160px #c8cfdb,30px 160px #c8cfdb,35px 160px #c8cfdb,40px 160px #f33131,45px 160px #f33131,50px 160px #d61111,55px 160px #a63a16,60px 160px #a63a16,10px 165px #d61111,15px 165px #f33131,20px 165px #d61111,25px 165px #c8cfdb,30px 165px #c8cfdb,35px 165px #d61111,40px 165px #f33131,45px 165px #f33131,50px 165px #7e2f15,55px 165px #a63a16,60px 165px #7e2f15,10px 170px #000000,15px 170px #f33131,20px 170px #f33131,25px 170px #d61111,30px 170px #fdeaea,35px 170px #f33131,40px 170px #f33131,45px 170px #f33131,50px 170px #7e2f15,55px 170px #7e2f15,15px 175px #f33131,20px 175px #f33131,25px 175px #f33131,30px 175px #fdeaea,35px 175px #f33131,40px 175px #f33131,45px 175px #d61111,20px 180px #d61111,25px 180px #f33131,30px 180px #fdeaea,35px 180px #f33131,40px 180px #d61111,45px 180px #d61111,20px 185px #000000,25px 185px #000000,30px 185px #ee8914,35px 185px #000000,40px 185px #000000,45px 185px #000000,20px 190px #f33131,25px 190px #f33131,30px 190px #f33131,35px 190px #d61111,40px 190px #f33131,45px 190px #f33131,20px 195px #f33131,40px 195px #f33131,20px 200px #f33131,35px 200px #f33131,25px 205px #000000,35px 205px #f33131,40px 210px #000000,25px 215px #f33131,30px 215px #f33131,20px 220px #f33131,25px 220px #f33131,30px 220px #f33131,35px 220px #f33131,15px 225px #f33131,20px 225px #f33131,25px 225px #f33131,30px 225px #f33131,35px 225px #f33131,15px 230px #f33131,20px 230px #c8cfdb,25px 230px #c8cfdb,30px 230px #c8cfdb,35px 230px #c8cfdb,15px 235px #c8cfdb,20px 235px #fdeaea,25px 235px #edbc83,30px 235px #fdeaea,35px 235px #edbc83,45px 235px #000000,20px 240px #000000,25px 240px #edbc83,30px 240px #000000,35px 240px #edbc83,40px 240px #cc4b20,45px 240px #d61111,50px 240px #cc4b20,15px 245px #f33131,20px 245px #c8cfdb,25px 245px #c8cfdb,30px 245px #c8cfdb,35px 245px #c8cfdb,40px 245px #f33131,45px 245px #d61111,50px 245px #a63a16,55px 245px #cc4b20,15px 250px #f33131,20px 250px #c8cfdb,25px 250px #8a9cb3,30px 250px #8a9cb3,35px 250px #c8cfdb,40px 250px #f33131,45px 250px #d61111,50px 250px #d61111,55px 250px #a63a16,60px 250px #a63a16,15px 255px #f33131,20px 255px #c8cfdb,25px 255px #c8cfdb,30px 255px #c8cfdb,35px 255px #c8cfdb,40px 255px #f33131,45px 255px #f33131,50px 255px #d61111,55px 255px #a63a16,60px 255px #a63a16,15px 260px #f33131,20px 260px #c8cfdb,25px 260px #c8cfdb,30px 260px #c8cfdb,35px 260px #c8cfdb,40px 260px #f33131,45px 260px #f33131,50px 260px #d61111,55px 260px #a63a16,60px 260px #a63a16,15px 265px #f33131,20px 265px #d61111,25px 265px #c8cfdb,30px 265px #c8cfdb,35px 265px #d61111,40px 265px #f33131,45px 265px #f33131,50px 265px #7e2f15,55px 265px #a63a16,60px 265px #7e2f15,15px 270px #f33131,20px 270px #f33131,25px 270px #d61111,30px 270px #fdeaea,35px 270px #f33131,40px 270px #f33131,45px 270px #f33131,50px 270px #7e2f15,55px 270px #7e2f15,15px 275px #f33131,20px 275px #f33131,25px 275px #f33131,30px 275px #fdeaea,35px 275px #f33131,40px 275px #f33131,45px 275px #d61111,20px 280px #d61111,25px 280px #f33131,30px 280px #fdeaea,35px 280px #f33131,40px 280px #d61111,45px 280px #d61111,20px 285px #000000,25px 285px #000000,30px 285px #ee8914,35px 285px #000000,40px 285px #000000,45px 285px #000000,20px 290px #f33131,25px 290px #f33131,30px 290px #f33131,35px 290px #d61111,40px 290px #f33131,45px 290px #f33131,20px 295px #f33131,45px 295px #f33131,15px 300px #f33131,45px 300px #f33131,15px 305px #f33131,45px 305px #f33131,20px 310px #000000,45px 310px #f33131,50px 315px #000000,25px 325px #f33131,30px 325px #f33131,20px 330px #f33131,25px 330px #f33131,30px 330px #f33131,35px 330px #f33131,15px 335px #f33131,20px 335px #f33131,25px 335px #f33131,30px 335px #f33131,35px 335px #f33131,15px 340px #f33131,20px 340px #c8cfdb,25px 340px #c8cfdb,30px 340px #c8cfdb,35px 340px #c8cfdb,15px 345px #c8cfdb,20px 345px #fdeaea,25px 345px #edbc83,30px 345px #fdeaea,35px 345px #edbc83,45px 345px #000000,20px 350px #000000,25px 350px #edbc83,30px 350px #000000,35px 350px #edbc83,40px 350px #cc4b20,45px 350px #d61111,50px 350px #cc4b20,15px 355px #f33131,20px 355px #c8cfdb,25px 355px #c8cfdb,30px 355px #c8cfdb,35px 355px #c8cfdb,40px 355px #f33131,45px 355px #d61111,50px 355px #a63a16,55px 355px #cc4b20,15px 360px #f33131,20px 360px #c8cfdb,25px 360px #8a9cb3,30px 360px #8a9cb3,35px 360px #c8cfdb,40px 360px #f33131,45px 360px #d61111,50px 360px #d61111,55px 360px #a63a16,60px 360px #a63a16,15px 365px #f33131,20px 365px #c8cfdb,25px 365px #c8cfdb,30px 365px #c8cfdb,35px 365px #c8cfdb,40px 365px #f33131,45px 365px #f33131,50px 365px #d61111,55px 365px #a63a16,60px 365px #a63a16,15px 370px #f33131,20px 370px #c8cfdb,25px 370px #c8cfdb,30px 370px #c8cfdb,35px 370px #c8cfdb,40px 370px #f33131,45px 370px #f33131,50px 370px #d61111,55px 370px #a63a16,60px 370px #a63a16,15px 375px #f33131,20px 375px #d61111,25px 375px #c8cfdb,30px 375px #c8cfdb,35px 375px #d61111,40px 375px #f33131,45px 375px #f33131,50px 375px #7e2f15,55px 375px #a63a16,60px 375px #7e2f15,15px 380px #f33131,20px 380px #f33131,25px 380px #d61111,30px 380px #fdeaea,35px 380px #f33131,40px 380px #f33131,45px 380px #f33131,50px 380px #7e2f15,55px 380px #7e2f15,15px 385px #f33131,20px 385px #f33131,25px 385px #f33131,30px 385px #fdeaea,35px 385px #f33131,40px 385px #f33131,45px 385px #d61111,20px 390px #d61111,25px 390px #f33131,30px 390px #fdeaea,35px 390px #f33131,40px 390px #d61111,45px 390px #d61111,20px 395px #000000,25px 395px #000000,30px 395px #ee8914,35px 395px #000000,40px 395px #000000,45px 395px #000000,20px 400px #f33131,25px 400px #f33131,30px 400px #f33131,35px 400px #d61111,40px 400px #f33131,45px 400px #f33131,20px 405px #f33131,45px 405px #f33131,15px 410px #f33131,45px 410px #f33131,15px 415px #f33131,50px 415px #f33131,55px 415px #000000,15px 420px #000000,25px 430px #f33131,30px 430px #f33131,20px 435px #f33131,25px 435px #f33131,30px 435px #f33131,35px 435px #f33131,15px 440px #f33131,20px 440px #f33131,25px 440px #f33131,30px 440px #f33131,35px 440px #f33131,15px 445px #f33131,20px 445px #c8cfdb,25px 445px #c8cfdb,30px 445px #c8cfdb,35px 445px #c8cfdb,15px 450px #c8cfdb,20px 450px #fdeaea,25px 450px #edbc83,30px 450px #fdeaea,35px 450px #edbc83,45px 450px #000000,20px 455px #000000,25px 455px #edbc83,30px 455px #000000,35px 455px #edbc83,40px 455px #cc4b20,45px 455px #d61111,50px 455px #cc4b20,15px 460px #f33131,20px 460px #c8cfdb,25px 460px #c8cfdb,30px 460px #c8cfdb,35px 460px #c8cfdb,40px 460px #f33131,45px 460px #d61111,50px 460px #a63a16,55px 460px #cc4b20,15px 465px #f33131,20px 465px #c8cfdb,25px 465px #8a9cb3,30px 465px #8a9cb3,35px 465px #c8cfdb,40px 465px #f33131,45px 465px #d61111,50px 465px #d61111,55px 465px #a63a16,60px 465px #a63a16,15px 470px #f33131,20px 470px #c8cfdb,25px 470px #c8cfdb,30px 470px #c8cfdb,35px 470px #c8cfdb,40px 470px #f33131,45px 470px #f33131,50px 470px #d61111,55px 470px #a63a16,60px 470px #a63a16,15px 475px #f33131,20px 475px #c8cfdb,25px 475px #c8cfdb,30px 475px #c8cfdb,35px 475px #c8cfdb,40px 475px #f33131,45px 475px #f33131,50px 475px #d61111,55px 475px #a63a16,60px 475px #a63a16,15px 480px #f33131,20px 480px #d61111,25px 480px #c8cfdb,30px 480px #c8cfdb,35px 480px #d61111,40px 480px #f33131,45px 480px #f33131,50px 480px #7e2f15,55px 480px #a63a16,60px 480px #7e2f15,15px 485px #f33131,20px 485px #f33131,25px 485px #d61111,30px 485px #fdeaea,35px 485px #f33131,40px 485px #f33131,45px 485px #f33131,50px 485px #7e2f15,55px 485px #7e2f15,15px 490px #f33131,20px 490px #f33131,25px 490px #f33131,30px 490px #fdeaea,35px 490px #f33131,40px 490px #f33131,45px 490px #d61111,20px 495px #d61111,25px 495px #f33131,30px 495px #fdeaea,35px 495px #f33131,40px 495px #d61111,45px 495px #d61111,20px 500px #000000,25px 500px #000000,30px 500px #ee8914,35px 500px #000000,40px 500px #000000,45px 500px #000000,20px 505px #f33131,25px 505px #f33131,30px 505px #f33131,35px 505px #d61111,40px 505px #f33131,45px 505px #f33131,20px 510px #f33131,45px 510px #f33131,15px 515px #f33131,45px 515px #f33131,15px 520px #f33131,45px 520px #f33131,15px 525px #000000,50px 525px #000000;
            position: absolute;
            top: -5px;
            left: 0;
            -webkit-animation: santa-run 450ms steps(5) infinite;
            animation: santa-run 450ms steps(5) infinite;
        }

        @-webkit-keyframes santa-run {
            100% {
                -webkit-transform: translateY(-525px);
                transform: translateY(-525px);
            }
        }

        @keyframes santa-run {
            100% {
                -webkit-transform: translateY(-525px);
                transform: translateY(-525px);
            }
        }
        .ground {
            height: 40%;
            min-height: 250px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: var(--groundColor);
            overflow: hidden;
        }

        .tree {
            position: absolute;
            height: 124px;
            width: 80px;
            background-color: red;
            left: -10%;
            bottom: calc(100% - 200px);
            will-change: transform;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAB8BAMAAAAMUSrTAAAAJFBMVEUAAACPrLkZSGI2RE1ikKVLang9Tlg9SE89YXJHV2BLeI0TOE2dAaMhAAAAAXRSTlMAQObYZgAAAV1JREFUeAFioBcQpLZCpRGpEFAunRUxDsRAGMYgLEOhKYhCUxAFURCFoRByq67KVJ7j0d5/4vvz7YVx6H8BxDzEJJSjD0MnZ6FNw4WfAW0aBjEJ4Z70QbgoyGEYOQrNw2chBHMOLgq6TcOchPBq6BiDgaqo9JqCNHiwMn0MojxCEEPQ4BUhOQ/dJqAcK/RLxwQ0+mp4zn0PAfhaQcHIvIYG7IqGUfrvhN1Bw27H1UYxcsMuIHdXfEPNkC0voFpyYm8YkhewY6wmTXkkYXeQ1erApV6v1w3cgs2iGgbf6AJCMEpQklp3BYGtzYIsTeoSfhyjOs1fQWy5c+YqzdCeQ7Szfc5MOQYJewjlDGbBA0lJFuwRxFo7MwHrKNhpnu5a+T1UnqIKMk3MXR3wNTxWOld31l7AT+dr+LMhZ2EE6z+ELI7DGoXxE6BNw0ybhZnbqgZhNoTZHPT0pi3xEP4ASfft/l2dK30AAAAASUVORK5CYII=") no-repeat 0 0;
            -ms-interpolation-mode: nearest-neighbor;
            image-rendering: -moz-crisp-edges;
            image-rendering: pixelated;
            -webkit-animation: move-tree 60s infinite linear;
            animation: move-tree 60s infinite linear;
        }
        .tree--large {
            height: 150px;
            width: 110px;
            background-size: 100% 100%;
        }
        .tree:nth-child(3) {
            left: -40vw;
        }
        .tree:nth-child(4) {
            left: -60vw;
        }
        .tree:nth-child(4) {
            left: -70vw;
        }
        .tree:nth-child(5) {
            left: -120vw;
        }

        .tree-background {
            width: 200%;
            height: 200px;
            position: absolute;
            top: 0;
            left: -100%;
            -ms-interpolation-mode: nearest-neighbor;
            image-rendering: -moz-crisp-edges;
            image-rendering: pixelated;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAABSAgMAAADGLeK9AAAACVBMVEUZSGITOE0WPlVaU/soAAABvUlEQVR4Ab3XMXIrIRCE4UlI5nQkk+zpNiHpU75iWdEsGvm5yl0iwvTvz2Vlst+cktx4ZEBSVTM75wNvDBRAXiWAfwfwFIg5hRz4XPmYfJvqBFwIJBUBfAfAj0C5HgACVQ4kFcaEx1QWAEogq3DOKfqDjykInGJgr3D2ztfptBhAVAZ/Bz5UTmA8YANcBrS8cqDv/aG8AWsgAfaKuz8mvAOuAPJq7OhTRES9pnLdrKyBAkirgaKfa/J+awRmIADyikDjFBOocmCvduDAawo9kFY3NX9mFGb8WxIgqQgcjykIMFAAWUWg7VPVA1l13Fcg+LACuAMJkFUZ0O5r0QNZ9drbB+DQAu0jcETMh1gABhIgqzAsTnPZAjUQsf03fGgpEBJgr1KAuB7IK2BAxN+AUAF5dWAj9w9VBuQVP0/A+KE9gKYC8orhaeXAfYIHCCWQV3exTK2Wwt8XAlsVpcU81axUAtZP2JUJga0K8+tyhhmsT/6abAAMBEBShY3Awuy8JrMxxQ0wcA2wVcFv4fxSjHkzYyAC9ioH7DuA/QiUav0ULYC3agVg/wEgAbYqopoBT8AXYAlcAOTV78+fgX+bVrv0m3eUNgAAAABJRU5ErkJggg==") repeat-x 0 0;
            background-size: 550px 210px;
            will-change: transform;
            -webkit-animation: move-background 50s infinite linear;
            animation: move-background 50s infinite linear;
        }

        @-webkit-keyframes move-background {
            100% {
                -webkit-transform: translateX(50%);
                transform: translateX(50%);
            }
        }

        @keyframes move-background {
            100% {
                -webkit-transform: translateX(50%);
                transform: translateX(50%);
            }
        }
        @-webkit-keyframes move-tree {
            100% {
                -webkit-transform: translateX(200vw);
                transform: translateX(200vw);
            }
        }
        @keyframes move-tree {
            100% {
                -webkit-transform: translateX(200vw);
                transform: translateX(200vw);
            }
        }
        .caption {
            font-size: 4rem;
            padding: 3rem 1rem 0rem;
            text-align: center;
        }

        .caption--small {
            font-size: 2rem;
            text-align: center;
        }

        html,
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--skyColor);
            font-family: 'Black And White Picture', sans-serif;
            color: white;
        }

    </style>
    <div class="clouds">
        <div class="caption">Sizin bəxtinizə {{$spin->whom->name}} çıxmışdır</div>
        <div class="caption--small">Xahis olunur Hədiyyəni vaxtında alıb şam ağacının altına qoyasınız</div>
    </div>
    <div class="ground">
        <div class="santa"></div>
        <div class="tree-background"></div>
        <div class="tree"></div>
        <div class="tree tree--large"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="tree"></div>
    </div>
@else
    <style type="text/css">
        text{
            font-family:Helvetica, Arial, sans-serif;
            font-size:11px;
            pointer-events:none;
        }
        #chart{
            position:absolute;
            width:1000px;
            height:1000px;
            top:0;
            left:0;
        }
        #question{
            position: absolute;
            width:500px;
            height:500px;
            top:260px;
            left:1020px;
        }
        #question h1{
            font-size: 50px;
            font-weight: bold;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            position: absolute;
            padding: 0;
            margin: 0;
            top:50%;
            -webkit-transform:translate(0,-50%);
            transform:translate(0,-50%);
        }
    </style>
<div id="chart"></div>
<div id="question"><h1></h1></div>

<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    var token = '{{csrf_token()}}'
    var padding = {top:20, right:40, bottom:0, left:0},
        w = 1000 - padding.left - padding.right,
        h = 1000 - padding.top  - padding.bottom,
        r = Math.min(w, h)/2,
        rotation = 0,
        oldrotation = 0,
        picked = 100000,
        oldpick = [],
        color = d3.scale.category20();//category20c()
    var serv = '{!! $usersList !!}';
    var data = JSON.parse(serv);
    var sels = '{!! $selected !!}';
    oldpick = JSON.parse(sels);
    var svg = d3.select('#chart')
        .append("svg")
        .data([data])
        .attr("width",  w + padding.left + padding.right)
        .attr("height", h + padding.top + padding.bottom);

    var container = svg.append("g")
        .attr("class", "chartholder")
        .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

    var vis = container
        .append("g");

    var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

    // declare an arc generator function
    var arc = d3.svg.arc().outerRadius(r);

    // select paths, use arc generator to draw
    var arcs = vis.selectAll("g.slice")
        .data(pie)
        .enter()
        .append("g")
        .attr("class", "slice");


    arcs.append("path")
        .attr("fill", function(d, i){ return color(i); })
        .attr("d", function (d) { return arc(d); });

    // add the text
    arcs.append("text").attr("transform", function(d){
        d.innerRadius = 0;
        d.outerRadius = r;
        d.angle = (d.startAngle + d.endAngle)/2;
        return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
    })
        .attr("text-anchor", "end")
        .text( function(d, i) {
            return data[i].label;
        });

    container.on("click", spin);


    function spin(d){

        container.on("click", null);

        //all slices have been seen, all done
        console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
        if(oldpick.length == data.length){
            console.log("done");
            container.on("click", null);
            return;
        }

        var  ps       = 360/data.length,
            pieslice = Math.round(2880/data.length),
            rng      = Math.floor((Math.random() * 2880) + 360);

        rotation = (Math.round(rng / ps) * ps);

        picked = Math.round(data.length - (rotation % 360)/ps);
        picked = picked >= data.length ? (picked % data.length) : picked;


        if(oldpick.indexOf(picked) !== -1){
            d3.select(this).call(spin);
            return;
        } else {
            oldpick.push(picked);
        }

        rotation += 90 - Math.round(ps/2);

        vis.transition()
            .duration(3000)
            .attrTween("transform", rotTween)
            .each("end", function(){

                //mark question as seen
                d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                    .attr("fill", "#111");

                //populate question
                d3.select("#question h1")
                    .text(data[picked].question);

                oldrotation = rotation;

                container.on("click", null);

                $.ajax({
                    url: '{{route('spin')}}',
                    data: {giud: data[picked].giud, _token: token},
                    method: 'POST',
                    success: function(data) {
                        alert('Müvəffəqiyyətlə seçim olundu');
                        window.location.reload();
                    },
                    error: function(data) {
                        alert('Bu iştirakçı artıq seçilmişdir xahiş olunur yenidən seçim edin');
                        window.location.reload();
                    }
                });
            });
    }

    //make arrow
    svg.append("g")
        .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
        .append("path")
        .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
        .style({"fill":"black"});

    //draw spin circle
    container.append("circle")
        .attr("cx", 0)
        .attr("cy", 0)
        .attr("r", 60)
        .style({"fill":"white","cursor":"pointer"});

    //spin text
    container.append("text")
        .attr("x", 0)
        .attr("y", 15)
        .attr("text-anchor", "middle")
        .text("SPIN")
        .style({"font-weight":"bold", "font-size":"30px"});


    function rotTween(to) {
        var i = d3.interpolate(oldrotation % 360, rotation);
        return function(t) {
            return "rotate(" + i(t) + ")";
        };
    }


    function getRandomNumbers(){
        var array = new Uint16Array(1000);
        var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);

        if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
            window.crypto.getRandomValues(array);
            console.log("works");
        } else {
            //no support for crypto, get crappy random numbers
            for(var i=0; i < 1000; i++){
                array[i] = Math.floor(Math.random() * 100000) + 1;
            }
        }

        return array;
    }

</script>
@endif
</body>
</html>
