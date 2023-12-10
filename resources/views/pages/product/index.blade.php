@extends('layouts.template')
@section('utama')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table id="produk_table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Stok Awal</th>
                            <th>Stok Akhir</th>
                            <th>Stok Minimal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Stok Awal</th>
                            <th>Stok Akhir</th>
                            <th>Stok Minimal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection

@section('js_script')
    <script type="text/javascript">
        tabelProduk();

        function tabelProduk() {
            var data_produk = $('#produk_tabel').DataTable();
            if (data_produk !== undefined) {
                data_produk.destroy();
            }

            data_produk = $('produk_tabel').DataTable({
                "processing": true,
                "responsive": true,
                "autoWidth": false,
                "stateSave": true,
                "serverSide": true,
                "ajax" : {
                    "url" : "get-produk",
                    "dataSrc" : ''
                },
                "language": {
                    "search": "Pencarian",
                    "info": "Menampilkan halaman ke _PAGE_ dari _PAGES_",
                    "infoEmpty": "File tidak ditemukan",
                    "infoFiltered": "Data difilter dari _MAX_ total data",
                    "lengthMenu": "Menampilkan _MENU_ per hamalan",
                    "zeroRecords": "Tidak ada data yang ditemukan",
                    "loadingRecords": "Memproses",
                    "paginate": {
                        "precious": "Kembali",
                        "next": "Lanjut"
                    }
                    "buttons": {
                        "copyTitle": "Data berhasil disalin ~~",
                        "copyKeys": "Gunakan keyboard atau menu untuk menyalin ~~",
                        "copySuccess": {
                            1: "Menyalin 1 baris ke papan klip",
                            _: "Menyalin %d baris ke papan klip"
                        }
                    },
                },
                "columnDefs": [{

                }],
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data" : "kode_produk"
                    },
                    {
                        "data": "nama_produk"
                    },
                    {
                        "data": "kategori_id"
                    },
                    {
                        "data" : "foto"
                    },
                    {
                        "data" : "harga"
                    },
                    {
                        "data" : "stok_awal"
                    },
                    {
                        "data" : "stok_akhir"
                    },
                    {
                        "data" : "stok_minimal"
                    },
                    {
                        "data" : "status"
                    },
                    {
                        "data": null,
                        "orderable": false,
                        render: function(data, type, row, meta) {
                            return '';
                        }
                    }
                ],
                initComplete: function(){

                },
            });
            data_produk.draw();
        }


        // $('#zero_config').DataTable();
    </script>
@endsection
