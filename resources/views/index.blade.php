<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>My Blog Project</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/maradjaw logo.png">
<style>
label {
    color: #46376d;
    font-weight: bold;
}
.searchbar{
    display: flex;
    
}
.form-control{
    background: transparent;
    border: none;
}
header{
    background-image: url("dpkoto.JPEG");
    background-repeat: no-repeat;
    background-size: cover;
    height: 100Vh;
    width: 205vh;
}
.signupbutton{
    border: 0;
    background-color:#afdb9a;
    color: white;
}
.btn{
    border: none;
}
h1{
    margin-top: 200px;
    margin-left: 600px;
    letter-spacing: 3px;
    font-weight: bolder;
    font-family: "Merienda", sans-serif;
    letter-spacing: 15px;
    font-size: 90px;
    color: #46376d;
}
h4{
    margin-top: 10px;
    margin-left: 550px;
    letter-spacing: 3px;
    font-family: "Mulish", sans-serif;
}
.container-fluid{
    padding-top: 20px;
}
@media screen and (min-width: 375px) and (max-width: 767px){

        header{
            overflow: scroll;
        }
        .texthide{
            font-size: 0;
        }

        .btn:hover + .texthide{
            font-size: x-small;
            display: block;
         }
         .signupbutton{
            font-size: 8px;
         }
         .btn{
            font-size: 8px;
         }
         h1{
            margin-top: 50px;
            margin-left: 120px;
            font-size: 20px;
         }
         h4{
            margin-top: 5px;
            margin-left: 60px;
            font-size: 10px;
         }
    }
    @media screen and (min-width: 768px) and (max-width: 1024px){
        .texthide{
            font-size: 0;
        }
        .btn:hover + .texthide{
            font-size: medium;
            display: block;
         }
        header{
            overflow: scroll;
        }
        .signupbutton{
            font-size: 10px;
        }
        h1{
            margin-top: 100px;
            margin-left: 200px;
        }
        h4{
            margin-left: 130px;
        }
    }
    @media screen and (min-width: 950px) and (max-width: 1280px){
        h1{
            margin-left: 400px;
        }
        h4{
            margin-left: 350px;
        }
    }
</style>
</head>
<body>
    <!-- Loader -->
		<div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div>
			<!-- /Loader -->
<header>
    <div class="container-fluid">
        <div class="row p-3 ">
            <div class="col">
                <i class='bx bx-restaurant'></i>
            </div>
            <div class="col border border-1 rounded-pill">
                <div class="searchbar">
                    <input type="text" class="form-control" placeholder="Search.." >
                    <i class=" fa fa-search mt-2" type="submit"></i>
                </div>
            </div>
        </div>
    </div>
    <h1> Maradjaw</h1>
    <h4>Thousands of smile under one site.</h4>
    <div class="col d-flex justify-content-center">
        <a type="button" class="signupbutton btn" onclick="location.href='{{ url('home') }}'">Lets go!</a>
    </div>
</header>


</body>
</html>