<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Keranjang
                    </div>
                    <div class="card-body">
                        {{ $jumlah }}
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header">
                        Belanjaan Saya
                    </div>
                    <div class="card-body">
                         @foreach($datas as $item)
                       <p>{{ $item->nama_barang }}<button class="btn btn-danger" wire:click="destroy({{ $item->id }})">Hapus</button></p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/esteh.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Es Teh</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 10.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Es Teh', '10000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/jussayur.jpeg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Jus Sayur</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 15.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Jus Sayur', '15000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/jusbuah.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Jus Buah</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 15.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Jus Buah', '15000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/kopihitam.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Kopi Hitam</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 10.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Kopi Hitam', '10000')" >BELI</button>  
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
