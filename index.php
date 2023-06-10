<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>News Website</title>
</head>

<body>

    <div class="container-fluid">
        <div>
            <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">Daily Bulletin</a>
                   
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#home" id="home">Home</a>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#genral" id="genral">Genral</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#business" id="business" >Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sports" id="sport">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#tehnology" id="technology">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#entertainment" id="entertainment">Entertainment</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-warning" type="button" id="searchBtn">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!-- News  -->
        <div>
            <div class="row m-3" id="newsType"></div>
            <div class="row me-2 ms-2" id="newsdetails"></div>
        </div>

        <!-- footer -->
        <div class="mt-5">
            <div>
                <nav class="navbar navbar-expand-lg mt-4">
                  
                    <h5 class="text-white me-auto ms-auto">~By <span class="text-warning">Ashritha Bikumalla</span></h5>
                  </div>
                </nav>
              </div>
        </div>

    </div>


    <script src="Main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
