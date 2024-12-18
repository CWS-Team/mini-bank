<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Dana BCA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="logo.png" alt="Klik BCA Logo">
            <div class="session-info">
                <p class="date">Tanggal : <strong><?php echo date("d/m/Y"); ?></strong> Jam : <strong><?php echo date("H:i:s"); ?></strong></p>
            </div>
        </header>

        <div class="main-content">
            <div class="left-menu">
                <ul>
                    <li><b>Transfer Dana</b></li>
                    <li>Daftar Rekening Tujuan</li>
                    <li>Transfer ke Rek. BCA</li>
                    <li>Transfer ke BCA Virtual Account</li>
                    <li>Transfer ke Rek. Bank lain Dalam Negeri</li>
                </ul>
                <a href="home.php" class="back-link">Kembali ke Menu Utama</a>
            </div>

            <div class="transfer-form">
                <h2>TRANSFER DANA - TRANSFER KE REK. BCA</h2>
                
                <form>
                    <div class="rekening-asal-container">
                        <div class="radio-group">
                            <div>
                                <label for="daftar-transfer">Dari Rekening</label>
                                <span>:</span>
                                <select>
                                    <option>---Pilih---</option>
                                    <option>BCA</option>
                                    <option>BNI</option>
                                    <option>Mandiri</option>
                                    <option>BRI</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="rekening-tujuan-container">
                        <label>Silakan Pilih Rekening Tujuan</label>
                        <div class="radio-group">
                            <div>
                                <input type="radio" id="rekening-sendiri" name="rekening" checked>
                                <label for="rekening-sendiri">Rekening Sendiri</label>
                                <span>:</span>
                                <input type="text" value="no. rek">
                            </div>
                            <div>
                                <input type="radio" id="daftar-transfer" name="rekening">
                                <label for="daftar-transfer">Dari Daftar Transfer</label>
                                <span>:</span>
                                <select>
                                    <option>---Pilih---</option>
                                    <option>BCA</option>
                                    <option>BNI</option>
                                    <option>Mandiri</option>
                                    <option>BRI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="rekening-asal-container">
                        <div class="radio-group">
                            <div>
                                <label for="daftar-transfer">Jumlah</label>
                                <span>:</span>
                                <input type="text" value="Jumlah">
                            </div>
                        </div>
                    </div>

                    <div class="rekening-asal-container">
                        <div class="radio-group">
                            <div>
                                <label for="daftar-transfer">Berita</label>
                                <span>:</span>
                                <input type="text" value="Keterangan">
                                <input type="text" value="Kode">
                            </div>
                        </div>
                    </div>


                    <div class="rekening-asal-container">
                        <div class="radio-group">
                            <div>
                                <label for="daftar-transfer">Masukkan 8 Angka Ini Pada KeyBCA</label>
                                <span>:</span>
                                <input type="text" value="77 017899">
                            </div>
                        </div>
                    </div>

                    <label for="daftar-transfer">Pastikan 6 Angka Terakhir Sesuai Dengan Nomor Rekening Tujuan Anda</label>

                    <div class="rekening-asal-container">
                        <div class="radio-group">
                            <div>
                                <label for="keybca-response">Respon KeyBCA Appli 2</label>
                                <span>:</span>
                                <input type="password" id="keybca-response" value="******">
                                <a href="#">HELP KEYBCA</a>
                            </div>
                        </div>
                    </div>

                    <label>Jenis Transfer:</label>
                    <div>
                        <input type="radio" id="now" name="transfer-type" checked>
                        <label for="now">Transfer Sekarang</label>
                    </div>

                    <button type="submit" class="submit-button">Transfer Sekarang</button>
                </form>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2000 BCA All Rights Reserved</p>
        </footer>
    </div>
</body>
</html>