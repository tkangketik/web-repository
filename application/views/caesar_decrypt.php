<?php
//---- Enkripsi Chipper Key
function enkripsi($plainText, $key)
{
    $plainText = strtoupper($plainText);
    $plainText = preg_replace('/[^A-Z]+/', '', $plainText);

    $string = '';

    $key = strtoupper($key);
    $key = preg_replace('/[^A-Z]+/', '', $key);

    $alfabetSatu    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alfabetDua     = ' ' . $key;
    $alfabetDuaString = '';

    for ($h = 0; $h < strlen($alfabetDua); $h++) {
        $huruf = substr($alfabetDua, $h, 1);

        if (!strpos($alfabetDuaString, $huruf)) {
            $alfabetDuaString .= $huruf;
        }
    }

    $alfabetDua = $alfabetDuaString;

    for ($i = 0; $i < strlen($alfabetSatu); $i++) {
        $huruf = substr($alfabetSatu, $i, 1);

        if (!strpos($alfabetDua, $huruf)) {
            $alfabetDua .= $huruf;
        }
    }

    $alfabetDua = trim($alfabetDua);

    for ($j = 0; $j < strlen($plainText); $j++) {
        $huruf = substr($plainText, $j, 1);
        $posisi = strpos($alfabetSatu, $huruf);

        $string .= substr($alfabetDua, $posisi, 1);
    }

    return $string;
}

//---- Dekripsi Chipper Key
function dekripsi($chiperText, $key)
{
    $string = '';

    $key = strtoupper($key);
    $key = preg_replace('/[^A-Z]+/', '', $key);

    $alfabetSatu    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alfabetDua     = ' ' . $key;
    $alfabetDuaString = '';

    for ($h = 0; $h < strlen($alfabetDua); $h++) {
        $huruf = substr($alfabetDua, $h, 1);

        if (!strpos($alfabetDuaString, $huruf)) {
            $alfabetDuaString .= $huruf;
        }
    }

    $alfabetDua = $alfabetDuaString;

    for ($i = 0; $i < strlen($alfabetSatu); $i++) {
        $huruf = substr($alfabetSatu, $i, 1);

        if (!strpos($alfabetDua, $huruf)) {
            $alfabetDua .= $huruf;
        }
    }

    $alfabetDua = trim($alfabetDua);

    for ($j = 0; $j < strlen($chiperText); $j++) {
        $huruf = substr($chiperText, $j, 1);
        $posisi = strpos($alfabetDua, $huruf);

        $string .= substr($alfabetSatu, $posisi, 1);
    }

    return $string;
}

//---- Enkripsi Caesar Chipper
// ini untuk convert string menjadi uppercase
function cltn($char)
{
    $char = strtoupper($char);
    $ord = ord($char);
    return ($ord > 64 && $ord < 91) ? ($ord - 64) : false;
}

// Fungsi Enkripsi
// Ambil Value Inputan
function encrypt_cipher($str, $plus)
{
    // Validasi Input Jika Benar Numeric dan String
    if (is_numeric($plus) && $plus <= 26 && is_string($str)) {
        // Membuat Variabel $al dengan Nilai Array (a-z)
        $al = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
            'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w',
            'x', 'y', 'z'
        );
        $nstr = '';
        // Convert Inputan String Ke Array Pake str_split
        foreach (str_split($str) as $i => $v) {
            //convert string menjadi uppercase
            if (cltn($v)) {
                $ltn = cltn($v) - 1;
                if (($ltn + $plus) > 25) {
                    $nstr .= $al[($ltn + $plus) - 25];
                } else {
                    $nstr .= $al[$ltn + $plus];
                }
            } else {
                $nstr .= $v;
            }
        }
        return $nstr;
    } else {
        return false;
    }
}
?>
<!-- Page Loader -->
<?php
function Cipher($ch, $key)
{
    if (!ctype_alpha($ch))
        return $ch;
    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}
//--------------------------------------------------------

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
function Encipher($input, $key)
{
    $output = "";

    $inputArr = str_split($input);
    foreach ($inputArr as $ch)
        $output .= Cipher($ch, $key);

    return $output;
}


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

function Decipher($input, $key)
{
    return Encipher($input, 26 - $key);
}
?>

<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>Dekripsi Pesan</h3>
                    <div class='box box-primary'>
                        <form action="" method="post">
                            <table class='table table-bordered'>
                                <tr>
                                    <td>Kunci </td>
                                    <td><input type="text" class="form-control" name="kunci2" value="<?php echo $_GET['key']; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pesan Enkripsi</td>
                                    <td>
                                        <textarea name="pesan2" id="pesan2" cols="90" rows="10"><?php echo $_GET['msg']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2'><button type="submit" name="klik2" class="btn btn-primary">Dekripsi</button>
                                        <?php if ($_SESSION['level'] == 'master') { ?>
                                            <a href="<?php echo site_url('enkripsi') ?>" class="btn btn-default">Cancel</a>
                                        <?php } else { ?>
                                            <a href="<?php echo site_url('enkripsi/list') ?>" class="btn btn-default">Cancel</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <table class='table table-bordered'>
                            <tr>
                                <td>Detail Proses</td>
                                <td><?php
                                    if (isset($_POST['klik2'])) {
                                        $kunci = $_POST['kunci2'];
                                        $pesan = $_POST['pesan2'];
                                        //Input
                                        $plainText = $pesan;
                                        $chiperkeyText = enkripsi($plainText, $kunci);
                                    ?>
                                        <p style="padding:0px; margin:0 auto;"> Kunci : <?php echo $kunci; ?></p>
                                        <p>Teks Enkripsi : <?php echo $plainText; ?></p>
                                    <?php } else { ?>
                                        <p style="padding:0px; margin:0 auto;">
                                            Menunggu Proses Masukan..</p>
                                    <?php }; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Hasil Dekripsi Pesan</td>
                                <td>
                                    <?php
                                    if (isset($_POST['klik2'])) {
                                        $kunci = $_POST['kunci2'];
                                        $pesan = $_POST['pesan2'];
                                        //Input
                                        $plainText = $pesan;
                                        $cipherText2 = Decipher($plainText, 3); ?>
                                        <p><?php echo dekripsi($cipherText2, $kunci); ?></p>
                                    <?php } else { ?>
                                        <p style="padding:0px; margin:0 auto;">
                                            Menunggu Proses Masukan..</p>
                                    <?php }; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>