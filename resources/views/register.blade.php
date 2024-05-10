<form method="POST" action="{{ route('welcome') }}">
    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>
    </div>
    <div>
        <label for="negara">Negara:</label>
        <input type="text" id="negara" name="negara" required>
    </div>
    <div>
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required>
    </div>
    <div>
        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required>
    </div>
    <div>
        <label for="kode_pos">Kode Pos:</label>
        <input type="text" id="kode_pos" name="kode_pos" required>
    </div>
    <div>
        <button type="submit">Daftar</button>
    </div>
</form>
