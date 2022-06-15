<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                    <div class='box box-primary'>
                        <link rel="stylesheet" href="https://cdn.heylook.id/misc/stega/css/style.min.css">
                        <div id="main">
                            <h1>Enkripsi dan Dekripsi</h1>
                            <div id="description">Proses enkripsi dan dekripsi gambar, dilakukan di halaman ini. Untuk menyisipkan pesan, pilih berkas gambar lalu masukkan pesan dan klik enkripsi dan hasilnya bisa di-download untuk disimpan pada repository.<br>Untuk membuka pesan yang disisipkan, buka berkas gambar yang telah disisipkan pesan lalu klik tombol dekripsi.</div>
                            <div id="left">
                                <h2>Gambar:</h2>
                                <input id="file" type="file" /><br />
                                <h2>Teks:<span id="capacity"></span></h2>
                                <textarea id="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</textarea>
                                <div class="buttons">
                                    <button id="hide" class="button">Enkripsi</button>
                                </div>
                                <div class="buttons">
                                    <button id="read" class="button">Dekripsi</button>
                                </div>
                            </div>
                            <div id="right">
                                <div id="original" class="half">
                                    <h2>Gambar Asli:</h2>
                                    <img id="img" src="avatar-6bfd1bf689ea7581997e26adf031af7b.png" />
                                </div>
                                <div id="stego" class="half">
                                    <h2>Hasil:</h2>
                                    <img id="cover" src="" />
                                    <a id="download" class="button small" download="cover.png" rel="nofollow"><strong>D</strong></a>
                                    <div class="note">Klik tombol "D" untuk download</div>
                                </div>
                                <div id="messageArea" class="invisible">
                                    <h2>Pesan:</h2>
                                    <div id="message"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <script type="text/javascript" src="https://cdn.heylook.id/misc/stega/js/steganography.min.js"></script>
                        <script type="text/javascript" src="https://cdn.heylook.id/misc/stega/js/script.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>