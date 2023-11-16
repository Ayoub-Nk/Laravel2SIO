<h1>all the shoes</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Marque</th>
        <th>Prix</th>
        <th>Couleur</th>
        <th>Date fabrication</th>
    </tr>

@foreach($shoes as $shoe)
        <tr>
            <td>{{$shoe->id}}</td>
            <td>{{$shoe->name}}</td>
            <td>{{$shoe->brand}}</td>
            <td>{{$shoe->price}}</td>
            <td>{{$shoe->color}}</td>
            <td>{{$shoe->fabrication}}</td>

        </tr>

    @endforeach

</table>

