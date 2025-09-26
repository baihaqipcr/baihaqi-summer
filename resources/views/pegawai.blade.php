<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <div id="data-container">
        <p>Memuat data...</p>
    </div>
    <script>
        async function getData() {
            try {
                const response = await fetch('/pegawai');
                const data = await response.json();
                const container = document.getElementById('data-container');
                container.innerHTML = `
                    <p><strong>Nama:</strong> ${data.name}</p>
                    <p><strong>Umur:</strong> ${data.my_age} tahun</p>
                    <p><strong>Hobi:</strong> ${data.hobbies.join(', ')}</p>
                    <p><strong>Tanggal Harus Wisuda:</strong> ${data.tgl_harus_wisuda}</p>
                    <p><strong>Sisa Waktu Studi:</strong> ${data.time_to_study_left} hari</p>
                    <p><strong>Semester:</strong> ${data.current_semester}</p>
                    <p><strong>Pesan:</strong> ${data.semester_info}</p>
                    <p><strong>Cita-cita:</strong> ${data.future_goal}</p>
                `;

            } catch (error) {
                console.error('Error:', error);
                const container = document.getElementById('data-container');
                container.innerHTML = '<p style="color:red;">Gagal memuat data. Pastikan server berjalan.</p>';
            }
        }
        getData();
    </script>
</body>
</html>
