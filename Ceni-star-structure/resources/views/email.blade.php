<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .division {
        border-radius: 10px;
        background-color: black;
    }

    h4 {
        color: red;
    }

    .division2 {
        border-radius: 10px;

        background-color: black;

    }










    .card {
        width: 245px;
        height: 155px;
        background: lightgrey;
        position: relative;
        border-radius: 15px;
        overflow: hidden;
    }

    .foreground {
        border-radius: 15px;
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.18);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(2.8px);
        -webkit-backdrop-filter: blur(2.8px);
        padding: 16px;
        color: white;
    }

    .credit-card-header {
        display: flex;
        justify-content: space-between;
    }

    .credit-card-chip-container {
        margin: 8px 0;
        height: 40px;
        width: 40px;
    }

    .chip {
        width: 100%;
        height: 100%;
    }

    .category,
    .bank {
        font-size: smaller;
    }

    .info-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .names {
        align-self: flex-end;
        text-transform: uppercase;
        font-size: smaller;
    }

    .serial {
        align-self: flex-end;
        letter-spacing: 2px;
        font-size: 15px;
        font-family: monospace;
    }

    .expire {
        margin-left: 3px;
        font-size: smaller;
    }
</style>

<body class="columns-12">
    <!-- <div class="d-felx col-12">
        <div class=" division col-5">
            <h4>CINESTAR</h4>

            <img src="" alt="" class="">
            <h1 class="text-light">CINESTAR CINEMA</h1>



        </div>

    </div> -->



    <div class=" card col-8 mx-5 bg-dark">
        <div class="foreground">
            <div class="credit-card-header">
                <div class="category"> <strong>CINE</strong>STAR</div>
                <div class="bank">bank-name</div>
            </div>
            <div class="credit-card-chip-container">
                <img src="{{asset('/img/icons8-clapperboard-52.png') }}" alt="">
            </div>
            <div class="info-container">
                <p class="names">Owner name</p>
                <p class="serial">ROOM ZONE SEATNUMBER</p>
                <p class="serial ml-0">00 000 00000</p>

            </div>
        </div>

    </div>













    <!-- <div class="card col-8 mx-5 bg-dark"> -->

    <!-- <svg viewBox="0 0 1600 800" height="100%" width="100%" class="background">
            <rect height="800" width="1600" fill="#ff9d00"></rect>
            <g transform="rotate(-30 500 100)" stroke-opacity="0.05" stroke-width="66.7" stroke="#000">
                <circle r="1800" cy="0" cx="0" fill="#ff9d00"></circle>
                <circle r="1700" cy="0" cx="0" fill="#fb8d17"></circle>
                <circle r="1600" cy="0" cx="0" fill="#f47d24"></circle>
                <circle r="1500" cy="0" cx="0" fill="#ed6e2d"></circle>
                <circle r="1400" cy="0" cx="0" fill="#e35f34"></circle>
                <circle r="1300" cy="0" cx="0" fill="#d85239"></circle>
                <circle r="1200" cy="0" cx="0" fill="#cc453e"></circle>
                <circle r="1100" cy="0" cx="0" fill="#be3941"></circle>
                <circle r="1000" cy="0" cx="0" fill="#b02f43"></circle>
                <circle r="900" cy="0" cx="0" fill="#a02644"></circle>
                <circle r="800" cy="0" cx="0" fill="#901e44"></circle>
                <circle r="700" cy="0" cx="0" fill="#801843"></circle>
                <circle r="600" cy="0" cx="0" fill="#6f1341"></circle>
                <circle r="500" cy="0" cx="0" fill="#5e0f3d"></circle>
                <circle r="400" cy="0" cx="0" fill="#4e0c38"></circle>
                <circle r="300" cy="0" cx="0" fill="#3e0933"></circle>
                <circle r="200" cy="0" cx="0" fill="#2e062c"></circle>
                <circle r="100" cy="0" cx="0" fill="#210024"></circle>
            </g>
        </svg> -->

    <!-- </div> -->



    <!-- 


    <div class="relative group w-72 h-96 rounded-xl border border-red-800 overflow-hidden bg-black m-auto ">
        <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
        <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
        <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
            <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">mmm</p>
            </div>
            <div class="absolute w-full flex place-content-center mt-20">
                <p class="font-sans text-center w-4/5 text-white mt-5">mmmm</p>
            </div>
            <a href="" class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg p-2 border border-red-600" style="border-color: red;">book this film</a>
        </div>
    </div>
    Image
 -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>