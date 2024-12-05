<center>
    <form action="/home/simpan" name="input" method="post">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="namasiswa" id="namasiswa"></td>
            </tr>
            <tr>
                <td>Poin Pelanggaran A</td>
                <td><input type="text" name="pelanggaranA" id="pelanggaranA" oninput="a()"></td>
            </tr>
            <tr>
                <td>Poin Pelanggaran B</td>
                <td><input type="text" name="pelanggaranB" id="pelanggaranB" oninput="a()"></td>
            </tr>
            <tr>
                <td>Total Poin</td>
                <td><input type="text" name="totalpoin" id="totalpoin"></td>
            </tr>
            <tr>
                <td>Sanksi</td>
                <td><input type="text" name="sanksi" id="sanksi"></td>
            </tr>
            <tr>
                <td><button type="Submit">Simpan</button></td>
                <td><button type="button" onclick="window.location='home/laporann'">Laporan</button></td>
            </tr>
        </table>
    </form>
</center>

<script>
    function a(){
        var a = parseInt(document.input.pelanggaranA.value);
        var b =parseInt(document.input.pelanggaranB.value);
        var totalpoin=document.input.totalpoin.value = a+b || 0;

        if (totalpoin >50) {
            document.input.sanksi.value ='panggil org tua'
        }else {
            document.input.sanksi.value ='peringatan'
        }
    }
</script>