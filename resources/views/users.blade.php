<div class="col-12">
    <div class="jumbotron">
        <form action="{{route('store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group"><label for="">Ad Soyad:</label><input name="name" type="text" class="form-control"></div>
            <div class="form-group"><label for="">E-Poçt:</label><input name="email" type="email" class="form-control"></div>
            <div class="form-group"><label for="">Şifrə:</label><input name="password" type="password" class="form-control"></div>
            <hr class="my-4">
            <div class="alert alert-info">İştirakçıların adlarını, korporativ e-poçt ünvanlarını, və şifrəsini qeyd edin və Əlavə et düyməsini sıxın</div>
            <button type="submit" class="btn btn-primary btn-lg" href="#" role="button">Əlavə et!</button>
        </form>
    </div>
</div>
<div class="col-12">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>№</th>
            <th>Ad Soyad:</th>
            <th>E-Poçt</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{{(++$key)}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td data-id="{{$user->id}}"></td>
            </tr>
        @endforeach
        <tr>
        </tr>
        </tbody>
    </table>
</div>

