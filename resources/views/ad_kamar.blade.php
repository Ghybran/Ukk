<x-app-layout>
    <style>
        .bingkai {
          border: 3px solid ;
          }
      
          /* Kode margin untuk gambar */
          .margin-gambar {
          margin: 30px;
          }
        </style>

<br>
<br>
<br>
<br>
<br>
<div class="bindai">
    <form action="update_ad" method="POST">
        @csrf
            <center>
            <table class="table">
                <p>
                    <b>
                        DATA KAMAR
                    </b>
                </p><br><br>
               <thead>
                <tr>

                    <th><b>id</b></th>
                    <th><b>nomor kamar</b></th>
                    <th><b>type_kamar</b></th>
                    <th colspan="2"><b>aksi</b></th>
                
                </tr>
                <tbody>
                    @foreach ($room as $t)
                        
                    <tr>
                        <td><input type="text" value="{{$t->id}}"></td>
                        <td><input type="text" value={{$t->nomor_kamar}}></td>
                        <td>
                            <select  id="" value="{{$t->type_kamar}}">
                                <option value="vip">vip</option>
                                <option value="reguler">reguler</option>
                                <option value="standart">standart</option>
                            </select>
                        </td>
                        <td><button type="submit" class="bg-green-500 h-5" value="{{$t->id}}">update</button> </td>
                    </tr>
                    @endforeach
                   
                </tbody>
              
            </table>
        </form>
        <br>
        <br>
        <br>
        <form action="create_ad" method="POST">
            @csrf
            <span>FORM MENAMBAHKAN DATA KAMAR</span>
            <div>
                <label for="nomor_kamar">nomor kamar</label>
                <input type="text" name="nomor_kamar">
            </div>
            <div>
                <label for="type_kamar">type kamar</label>
                <select name="type_kamar" id="">
                    <option value="vip">vip</option>
                    <option value="reguler">reguler</option>
                    <option value="standart">standart</option>
                </select>
            </div>
            <br>
            <button class="bg-green-500 h-5">tambahkan</button>
        </form>
    </div>
</center>
</x-app-layout>