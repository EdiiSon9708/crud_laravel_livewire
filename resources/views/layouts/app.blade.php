<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- funte google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <livewire:styles />
    <style>
        body {
            font-family: 'Patrick Hand', cursive;
            background-color: #d9d9d9;
        }
    </style>

</head>

<body>
    <livewire:students />
    <livewire:scripts />

    <!-- scripts jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- scripts bootstrap y pooper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script>
        window.livewire.on('studentAdded', () => {
            $('#addStudentModal').modal('hide');
        });
    </script>

    <script>
        window.livewire.on('studentUpdated', () => {
            $('#updateStudentModal').modal('hide');
        });
    </script>

    <script>
        window.livewire.on('studentDelete', () => {
            $('#deleteStudentModal').modal('hide');
        });
    </script>

</body>

</html>