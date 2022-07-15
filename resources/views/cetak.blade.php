<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* h2{
          text-align: center;
          color: red;
        } */
        h1{
            text-align: center
        }
        body {
            border-style: solid;
            padding: 20px;
        }
        p{
            font-size: 20px;
        }
        .ttd {
            text-align: end
        }
        .tab{
            margin-left: 40px
        }
        .kop{
            margin-top: 50px;
            margin-left: 40px;
         
            
        }
        .kop h2{
            margin-left: 20%;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="kop">
    <h2>Universitas 17 Agustus 1945 Surabaya</h2>  
    </div> 
    <h1>Surat Keterangan Aktif Kuliah</h1>
    <br>
    <p>Yang bertanda tangan di bawah ini:</p>
    <p>Nama    : Mr.HOD</p>
    <p>Jabatan : Kaprodi Teknik Informatika</p>
    <br>
    <p>Menyatakan dengan sebenarnya bahwa:</p>
    <p>NBI      : <span class="tab">{{$data->nbi}} </span> 
    <p>Nama     :<span class="tab">{{$data->nama}}</p> </span> 
    <p>Angkatan : <span class="tab"> {{$data->angkatan}}</p> </span> 
    <br>
    <p>Adalah benar mahasiswa di Prodi Teknik Informatika UNTAG Surabaya</p>
    <br>
    <p class="ttd">UNTAG, {{$data->created_at->format('d-m-Y')}} </p>
    <br>
    <br>
    <p class="ttd">Kaprodi Teknik Informatika</p>

</body>
</html>