<x-app-layout>

<div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <form action="">

                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="create" method="post">
            @csrf
            <label for="name">name:</label>
            <input type="text" name="name" id="">

            <label for="email">email</label>
            <input type="email" name="email" id="">


        </form>


    </div>
</div>

</x-app-layout>

