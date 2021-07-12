@extends('layouts.app')

@section('section-title', 'Ubah UKT Master')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.ukt.index') }}" class="btn btn-warning float-right">Kembali</a>
                    <form action="{{ route('admin.ukt.update', $bill->id) }}" method="post" class="mt-5">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" name="price" id="price"
                                class="form-control @error('price') is-invalid @endif" min="0" value="{{ $bill->price }}"
                                required>
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="years">Tahun</label>
                            <input type="number" name="years" id="years"
                                class="form-control @error('years') is-invalid @endif" min="{{ date('Y')-5 }}" value="{{ $bill->years }}"
                                required>
                            @error('years')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
