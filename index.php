<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOTEL GRAND PARADISE </title>
    <a href="style.css"></a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Common.css">
</head>
<style>
.availability-from {
    margin-top: -50px;
    z-index: 2;
    position: relative;
}

@media screen and (max-width: 575px) {
    .availability-from {
        margin-top: 0px;
        /* z-index: 2;
        position: relative; */
        padding: 0 35px;
    }

}
</style>

<body class="bg-light">
    <nav class=" navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel GRAND </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>

                </ul>
                <div class="d-flex">

                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#loginmodal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                        data-bs-target="#Registermodal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!--login Modal -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h5 class="modal-title fs-5 d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark">LOGIN </button>
                            <a href="javascript: void(0)"> forgot password</a>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

    <!--Register Modal -->
    <div class="modal fade" id="Registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h5 class="modal-title fs-5 d-flex align-items-center">
                            <i class="bi bi-person-add fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                            NOTE: Your deatils must match with your id (Aadhar card, passport, driving lincence ,etc.)
                            that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3 ">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3 ">
                                    <label class="form-label ">Phone number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Aadress</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                </div>

                                <div class="col-md-12 ps-0 mb-3 ">
                                    <label class="form-label ">Pin code</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="Date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3 ">
                                    <label class="form-label ">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Comform password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark">Register </button>

                        </div>



                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- carusoel. -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper Swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="images/carousel/IMG_15372.png " class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
                </div>
                <!-- <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                </div> -->
            </div>


        </div>

    </div>
    <!-- check avilibility -->
    <div class="container availability-from">
        <div class="row ">

            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">check booking Availability</h5>
                <form>
                    <div class="row align-items-end items-center">
                        <div class="col-lg-3 mb-2">
                            <label class="from-label" style="font-weight: 500;"> check-in </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label class="from-label" style="font-weight: 500;"> check-Out </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="from-label" style="font-weight: 500;"> Adult </label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="from-label" style="font-weight: 500;"> Children </label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-2 mt-2  ">
                            <button type="submit" class="btn text-white shadow-none custom-bg ">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- our room -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-5.21">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5> simple room</h5>
                        <h6 class="mb-4">₹2000 per night</h6>
                        <div class="features mb-2">
                            <h6 class="mb-1"> features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 balconey
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                free wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Ac
                            </span>
                        </div>
                        <div class="rating mb-2">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-yellow-400 ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5> simple room</h5>
                        <h6 class="mb-4">₹2000 per night</h6>
                        <div class="features mb-2">
                            <h6 class="mb-1"> features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 balconey
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                free wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Ac
                            </span>
                        </div>
                        <div class="rating mb-2">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-yellow-400 ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-1">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5> simple room</h5>
                        <h6 class="mb-4">₹2000 per night</h6>
                        <div class="features mb-2">
                            <h6 class="mb-1"> features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 balconey
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                free wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Ac
                            </span>
                        </div>
                        <div class="rating mb-2">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-yellow-400 ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-1">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> more rooms >>></a>

            </div>

        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-5.21">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my3 ">
                <img src="images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">wifi</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my3 ">
                <img src="images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">wifi</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my3 ">
                <img src="images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">wifi</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my3 ">
                <img src="images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">wifi</h5>

            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> more Facilities>>></a>

        </div>    </div>

    <br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".Swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }

    });
    </script>
</body>

</html>