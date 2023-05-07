<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style_contact.css">
</head>

<body>
    <div class="container">
            <div class="right">
                <div class="right-container">
                    <form action="https://formspree.io/f/mzbqokbq" method="post">
                        <h2 class="lg-view">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" name ="name" placeholder="Nama">
                        <input type="email" name ="email" placeholder="Alamat Email">
                        <input type="text" name = "barang" placeholder="Barang" autocomplete="off">
                        <input type="text" name = "resi" placeholder="No Resi" autocomplete="off">
                        <input type="phone" name = "nomor" placeholder="Telepone" autocomplete="off">
                        <textarea rows="10" placeholder="Pesan"></textarea>
                        <button type="submit">Kirim</button>
                    </form>
                    <br>
                    <a href="index.php"><button>Kembali</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>