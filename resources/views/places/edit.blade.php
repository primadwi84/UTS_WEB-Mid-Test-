<x-template-layout>
<div class ="container">
    <div class="row">
        <div class="col-10">
                <h1 class="text-3xl text-black pb-6">Form Ubah Data Inveksi Covid-19 Per-Desa di Indonesia</h1>
                <form method="POST" action="/places/{{$place->id}}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="Desa">Desa</label>
                        <input type="string" class="form-control @error('Desa') is-invalid @enderror" id="Desa" placeholder="Masukkan Nama Desa" name="Desa" value="{{$place->Desa}}">
                        @error('Desa')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Kabupaten">Kabupaten</label>
                        <input type="string" class="form-control @error('Kabupaten') is-invalid @enderror" id="Kabupaten" placeholder="Masukkan Nama Kabupaten" name="Kabupaten" value="{{$place->Kabupaten}}">
                        @error('Kabupaten')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Kabupaten">Provinsi</label>
                        <select class="form-control select2" style="width:100%;" name="provinsi_id" id="provinsi_id">
                        <option disabled value>Pilih Provinsi</option>
                        <option value="{{$place->provinsi_id}}">{{$place->provinsi->provinsi}}</option>
                        @foreach ($provinsis as $item)
                        <option value="{{$item->id}}">{{$item->provinsi}}</option>
                        @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="Sehat">Sehat</label>
                        <input type="integer" class="form-control @error('Sehat') is-invalid @enderror" id="Sehat" placeholder="Masukkan Jumlah Penduduk Sehat" name="Sehat" value="{{$place->Sehat}}">
                        @error('Sehat')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Sakit">Sakit</label>
                        <input type="integer" class="form-control @error('Sakit') is-invalid @enderror" id="Sakit" placeholder="Masukkan Jumlah Penduduk Sakit" name="Sakit" value="{{$place->Sakit}}">
                        @error('Sakit')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Dirawat">Dirawat</label>
                        <input type="integer" class="form-control @error('Dirawat') is-invalid @enderror" id="Dirawat" placeholder="Masukkan Jumlah Penduduk Dirawat" name="Dirawat" value="{{$place->Dirawat}}">
                        @error('Dirawat')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Sembuh">Sembuh</label>
                        <input type="integer" class="form-control @error('Sembuh') is-invalid @enderror" id="Sembuh" placeholder="Masukkan Jumlah Penduduk Sembuh" name="Sembuh" value="{{$place->Sembuh}}">
                        @error('Sembuh')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
<!-- 
                    <div class="form-group">
                        <label for="Zona">Zona</label>
                        <input type="string" class="form-control @error('Zona') is-invalid @enderror" id="Zona" placeholder="Masukkan Zona (Hijau/Merah)" name="Zona" value="{{$place->Zona}}">
                        @error('Zona')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div> -->

                    <div class="form-group">
                        <label for="Zona">Zona</label>
                        <select class="form-control select2" style="width:100%;" name="zona_id" id="zona_id">
                        <option disabled value>Pilih Zona</option>
                        <option value="{{$place->zona_id}}">{{$place->zona->zona}}</option>
                        @foreach ($zonas as $item)
                        <option value="{{$item->id}}">{{$item->zona}}</option>
                        @endforeach
                        </select>
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary">Ubah Data!</button>
                </form>
                </div>
        </div> 
    </div>
</div>  
</x-template-layout>