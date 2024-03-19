let frm = document.getElementById('frm');
let listJabatan = ["Manager", "Asisten Manager", "Staff"];
let pilihJabatan = `<option value="">--Pilih Jabatan--</option>`;
for(let s in listJabatan){
    pilihJabatan += `<option value="${listJabatan[s]}">${listJabatan[s]}</option>`;
}


frm.jabatan.innerHTML = pilihJabatan;

function getGajiPokok(jabatan){
    let gajiPokok = 0;
    if(jabatan == listJabatan[0]) gajiPokok = 15_000_000;
    else if(jabatan == listJabatan[1]) gajiPokok = 10_000_000;
    else if(jabatan == listJabatan[2]) gajiPokok = 5_000_000;
    return gajiPokok;
}

function getTunjanganJabatan(gajiPokok){
    let tunjanganJabatan = 0;
    if(gajiPokok != 0) tunjanganJabatan = 0.15 * gajiPokok;
    return tunjanganJabatan;
}

function getTunjanganBPJS(gajiPokok){
    let tunjanganBPJS = 0;
    if(gajiPokok != 0) tunjanganBPJS = 0.10 * gajiPokok;
    return tunjanganBPJS;
}

function getTunjanganKeluarga(status, gajiPokok){
    let tunjanganKeluarga = (status == "Menikah")? 0.20*gajiPokok : 0;
    return tunjanganKeluarga;
}

function getTotalGaji(gajiPokok, tunjanganJabatan, tunjanganBPJS, tunjanganKeluarga){
    let totalGaji = gajiPokok + tunjanganJabatan + tunjanganBPJS + tunjanganKeluarga;
    return totalGaji;
}

function tampilkanData(){
    let nama = frm.nama.value;
    let jabatan = frm.jabatan.value;
    let status = frm.status_.value;

    let gajiPokok = getGajiPokok(jabatan);
    let tunjanganJabatan = getTunjanganJabatan(gajiPokok);
    let tunjanganBPJS = getTunjanganBPJS(gajiPokok);
    let tunjanganKeluarga = getTunjanganKeluarga(status, gajiPokok);
    let totalGaji = getTotalGaji(gajiPokok, tunjanganJabatan, tunjanganBPJS, tunjanganKeluarga);

    let tabelPegawai = `
    <h3 align="center">Tabel Gaji Pegawai</h3>
    <table border="1" align="center" cellspacing="0" cellpadding="15" style="width: 90%; background-color: lavender;">
        <thead>
            <tr>
                <th>Nama pegawai</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Jabatan</th>
                <th>Tunjangan BPJS</th>
                <th>Tunjangan Keluarga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>${nama}</td>
                <td>${jabatan}</td>
                <td>${status}</td>
                <td>${gajiPokok}</td>
                <td>${tunjanganJabatan}</td>
                <td>${tunjanganBPJS}</td>
                <td>${tunjanganKeluarga}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">Total Gaji Rp. ${totalGaji}</th>
            </tr>
        </tfoot>
    </table>
    `;

    if(nama && jabatan && status != "")  document.getElementById("hasil").innerHTML = tabelPegawai;
    else document.getElementById("hasil").innerHTML = `<center>Mohon maaf masih terdapat form yang belum terisi!</center>`;
}
