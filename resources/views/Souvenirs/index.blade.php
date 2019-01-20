@extends('Shared._layout')
@section('title', 'Souvenirs Index')
@section('content')

    <h2>Index</h2>

    <p>
        <a href="{{url('Souvenirs/Create')}}">Create New</a>
    </p>
    <form method="get">
        <div class="form-actions no-color">
            <p>
                Find by name:<input class="small" type="text" name="searchName" value="{{$searchedName}}" /><input type="submit" value="Search" class="btn btn-info" />
                <a style="margin-left:50px" href="{{url('Souvenirs')}}">Back to Full List</a>
            </p>

        </div>
    </form>


    <table class="table">
        <thead>
        <tr>
            <th>
               Image
            </th>
            <th>
               Name
            </th>

            <th>
                Description
            </th>
            <th>
                Price
            </th>
            <th>
                Category
            </th>
            <th>
               Supplier
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($souvenirs as $souvenir)


            <tr>

                <td>
                    <img class="img-thumbnail" style="width: 90px; height: auto;" src="{{url($souvenir->PathOfFile)}}" alt="Souvenir Image" onerror="this.onerror = null; this.src = '{{url('public/images/Default.jpg')}}'">
                </td>

                <td>
                    {{$souvenir->Name}}
                </td>

                <td>
                    {{$souvenir->Description}}
                </td>
                <td>
                    {{$souvenir->Price}}
                </td>
                <td>
                    {{$souvenir->categoryName}}
                </td>
                <td>
                    {{$souvenir->LastName}} {{$souvenir->FirstName}}
                </td>
                <td>

                    <a href="{{url('Souvenirs/Details/'.$souvenir->id)}}" >Details</a> |
                    <a href="{{url('Souvenirs/Delete/'.$souvenir->id)}}" >Delete</a> |
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection