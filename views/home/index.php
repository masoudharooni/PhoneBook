<html>

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/index_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="jumbotron jum">
        <div class=" navbar">
            <h3>Phone Book <i class="fas fa-phone"></i></h3>
        </div>
        <div class="row">
            <div class="col-lg-4 inp">

                <input onkeyup="searchFunction()" id="myInput" class="form-control mt-2" placeholder="search">
                <span class="icon text-primary"><i class="fas fa-search"></i></span>

                <h5 class="mt-2">Add New Contact</h5>

                <input onblur="validateName()" class="form-control mb-3 mt-3" placeholder="add name" id="userName">
                <div id="nameAlert" class="alert alert-danger text-justify p-2 ">Please add name</div>
                <input onblur="validatePhone()" class="form-control mb-3" placeholder="add phone" id="userPhone">
                <div id="phoneAlert" class="alert alert-danger text-justify p-2 ">Please add a valid number</div>
                <input onblur="validateEmail()" class="form-control mb-3" placeholder="add e-mail" id="userEmail">
                <div id="mailAlert" class="alert alert-danger text-justify p-2 ">Please add a valid e-mail</div>
                <button onclick="addContact()" class="btn btn-info w-100 btn1">Add</button>
            </div>
            <div class="col-lg-8">
                <table id="myTable" class="table text-justify table-striped">
                    <tr>
                        <th class="">Name</th>
                        <th class="">Phone</th>
                        <th class="">E-mail</th>
                        <th class="col-1">Created At</th>
                    </tr>
                    <?php foreach ($data as $contact) : ?>
                        <tr>
                            <td><?= $contact['name'] ?></td>
                            <td><?= $contact['mobile'] ?></td>
                            <td><?= $contact['email'] ?></td>
                            <td><?= $contact['created_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/index.js"></script>
</body>

</html>