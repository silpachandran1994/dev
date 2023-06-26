<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <div>
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <b class="text-center">Users List</b>
                        @if($users)
                        <table class="table text-center table-striped datatable-scroll-y" width="100%">
                        <thead>
                        <tr>
                            <th data-sortable="false" class="sorting-disabled">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Interests</th>
                        </tr>
                        </thead><?php $i=0; ?>
                        @foreach ($users as $user)
                        @foreach ($user->roles as $role)
                        @foreach ($interests as $inter)
                        @php
                            $i++; 
                        @endphp
                        
                        <tbody>
                        <td>{{$i}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{$user->email}}</td>
                        

                            <td>{{ $role->name }}</td>
                            <td>{{$inter->interest}}</td>
                            @endforeach
                        @endforeach

                        @endforeach
                        </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>