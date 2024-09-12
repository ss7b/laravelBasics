<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">عنوان المقال</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">المقال</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">اسم الكاتب</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <button type="submit" class="btn btn-primary ">حقظ</button>
        </form>
    </div>


    
</body>
</html>