<!DOCTYPE html>
<html>
<head>
    
    <title><b>TUGAS</b></title>
    
</head>
<body>
<center><b><h1>TUGAS</h1></b></center>
<b><hr></b>
<form action="tugasproses.php" method="POST" name="Pilih">
    
   <pre>
                                                       Nama :       <input type="text" name="nama" ><br>
                                                       NIS  :       <input type="number" name="nis"><br>

                                                     ALAMAT :       <textarea type="text" name="alamat" cols="40" rows="5"></textarea><br>
                                              Jenis Kelamin :       <input type="radio" name="jalu" value="Laki">Jalu<input type="radio" name="bikang" value="Cewe">Bikang
                                                      AGAMA :       <select name="agama">
          <option value="ISLAM">ISLAM</option>
          <option value="KRISTEN">KRISTEN</option></select><br>
                                                Asal Sekolah        <input type="text" name="sekolah"><br>
                                                   Nama Ortu        <input type="text" name="ortu"><br>

                               Mata Pelajaran Yang Di Sukai :       <input type="checkbox" name="mapel01" value= "ipa" checked> ipa <input type="checkbox" name="mapel02" value= "ips" > pkn
                                                                    <input type="checkbox" name="mapel03" value= "mtk" > mtk
                                                                   
                                        Total Nilai Ijazah SMK  :   <input type="number" name="ijazah"><br>
                                                     EMAIL      :   <input type="email" name="email" require><br>

                                                                    <input type="submit" name="Pilih" value="lanjot">           <input type="reset" name="Pilih" value="reset">
                                                                    

    </pre>
    
    </form>
    
</body>
</html>