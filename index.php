<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For OOSAD Exam Help</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="https://cdn.pixabay.com/photo/2015/11/03/09/03/question-mark-1019993_640.jpg" />
</head>

<body class="bg-dark-subtle vh-100" onload="load();">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mt-3">
                <div class="row">
                    <button class="btn btn-warning m-3  me-md-auto col-11 col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-star-fill"></i> Rate this Project <i class="bi bi-star-fill"></i></button>
                    <button class="btn btn-danger m-3  ms-md-auto col-11 col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New questions</button>
                </div>
            </div>
            <div class="col-12 ">
                <div class="row">
                    <?php
                    require "connection.php";
                    ?>
                    <div class="col-12 col-md-6 mx-auto mt-5 bg-body-secondary border border-primary" id="div1">
                        <h1 class="text-danger fw-bold alert alert-dark mt-3">What does Domain Analysis involve?
                        </h1>
                        <div class="form-floating mb-3 d-none" id="div2">
                            <textarea class="form-control fs-4" id="floatingTextarea2Disabled" style="height: 200px" disabled>Investigating the domain of the software to understand the specific area and terminology
                        </textarea>
                            <label for="floatingTextarea2Disabled">Answer</label>
                        </div>

                        <div class="row">
                            <div class="col-10 m-3">
                                <div class="row">
                                    <button class="btn btn-primary col-3" onclick="answer();">
                                        Get Answer
                                    </button>
                                    <button class="btn btn-primary col-3 ms-auto" onclick="next();">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Question</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Question</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-floating mb-3" id="div3">
                                    <textarea class="form-control fs-4" id="floatingTextarea2Disabled2" style="height: 200px"></textarea>
                                    <label for="floatingTextarea2Disabled2">Answer</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="add();">add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark">
                            <div class="modal-header text-white">
                                <h1 class="modal-title fs-5" id="exampleModalLabel2">Add Your rating</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body bg-warning text-dark">
                                <div class="bg-gradient m-1">
                                    <div class="mb-3">
                                        <label for="customRange2" class="form-label">Rate This</label>
                                        <input type="range" class="form-range" min="0" max="10" id="customRange2">
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea class="form-control fs-4" id="floatingTextarea2Disabled3" style="height: 200px"></textarea>
                                        <label for="floatingTextarea2Disabled3">Comment</label>
                                    </div>

                                    <div class="mt-2">
                                    <a target="_blank" href="https://github.com/Sheshan-Danuksha/questionapp"><button class="btn mx-auto btn-dark">Rate and get Project in Github <i class="bi bi-github"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="rate();">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 mx-auto mt-1 text-center fixed-bottom">
                <p class="mb-3">Design by <b><a class="text-decoration-none text-dark" target="_blank" href="https://github.com/Sheshan-Danuksha">Sheshan Danuksha</a>&trade;</b></p>
            </div>

        </div>

    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>