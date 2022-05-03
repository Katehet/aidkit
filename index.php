<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>Моя аптечка</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="p-3 mx-auto mt-5 text-info" style="width: fit-content; font-family: 'Lobster', cursive;">Лекарства в аптечке <i class="fs-1 text-danger fa-solid fa-pills"></i></h1>
        
        <!-- Add piece button -->
        <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i></button>
          
        <!-- Content table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование (дозировка)</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Единицы (вид)</th>
                    <th scope="col">Срок годности</th>
                    <th scope="col">+ / -</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Амбробене (30мг)</td>
                    <td>14</td>
                    <td>таб.</td>
                    <td>01.04.2023</td>
                    <td>
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modals -->
    <!-- Modal create -->
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Добавьте лекарство</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Название:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Количество:</label>
                            <input type="text" class="form-control" id="number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Вид:</label>
                            <input type="text" class="form-control" id="type">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Срок годности:</label>
                            <input type="date" class="form-control" id="expiry">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <!-- Modal edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Что нужно изменить?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Название:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Количество:</label>
                            <input type="text" class="form-control" id="number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Вид:</label>
                            <input type="text" class="form-control" id="type">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Срок годности:</label>
                            <input type="date" class="form-control" id="expiry">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal edit -->
    <!-- Modal delete -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Удаляем? Вы уверены?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row-cols-1 mx-lg-n1">
                        <div class="col py-3 px-2">Название:</div>
                        <div class="col py-3 px-2">Количество:</div>
                        <div class="col py-3 px-2">Срок до:</div>
                    </div>
                    <form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal delete -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/647726387b.js" crossorigin="anonymous"></script>
</body>
</html>