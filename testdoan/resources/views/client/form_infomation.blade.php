<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontend/css/login.css">
</head>

<body>
    <div class="container infomationSection">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thông tin</h4>
                <form action="{{URL::to('/form-infomation')}}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" name="ho" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="ten" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh:</label>
                        <input type="date" name="ngaysinh" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>SDT</label>
                        <input type="text" name="sdt" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="emailtk" class="form-control" placeholder="" required>
                    </div>
                    <div class="d-flex justify-content-center">                   
                        <input class="btn btn-primary m-1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>