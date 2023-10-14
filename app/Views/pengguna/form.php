<form method="post" action="<?=base_url('/pengguna/save')?>">
    <label>Email</label>
        <input type="text" name="email">
    <label>Nama Lengkap</label>
        <input type="text" name="namalengkap">
    <label>Tingkat</label>
        <select name="tingkat">
            <option value=""disabled selected>-</option>
            <option value="ADM">Admin</option>
            <option value="PUS">pustakawan</option>
        </select>
    <label>kata sandi</label>
        <input type="password" name="katasandi"></input>
    <button>save</button>
</form>