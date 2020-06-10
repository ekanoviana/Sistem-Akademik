@extends('template')

@section('main')
<div id="mahasiswa">
    <h2>Data Mahasiswa : </h2>

    @include('_partial/flash_message')
    @include('mahasiswas/form_pencarian')
        @if(!empty($mahasiswa_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($mahasiswa_list as $mahasiswa):?>
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->kelas['nama_kelas'] }}</td>
                        <td>{{ $mahasiswa->tanggal_lahir->format('d-m-Y') }}</td>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        <td>{{ !empty($mahasiswa->telepon['nomor_telepon'])?
                                $mahasiswa->telepon['nomor_telepon'] : '-' }}</td>
                        <td>
                            @foreach($mahasiswa->hobi as $item)
                                <span>{{ $item->nama_hobi }}</span>,
                            @endforeach
                        </td>
                        <td>
                            <div class="box-button"> {{ link_to('mahasiswa/'.$mahasiswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}</div>
                            <div class="box-button">{{ link_to('mahasiswa/'.$mahasiswa->id.'/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}</div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['MahasiswaController@destroy', $mahasiswa->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else:
    <p>Data mahasiswa kosong.</p>
    @endif
        <div class="table-nav">
            <div class="jumlah-data">
                <strong>
                    Jumlah Mahasiswa : {{ $jumlah_mahasiswa }}
                </strong>
            </div>
            <div class="paging">
                {{ $mahasiswa_list->links() }}
            </div>
        </div>

        <div class="tombol-nav">
            <div>
                <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
@endsection


@section('footer')
<div id="footer">
    <p>&copy; Polines 2020</p>
</div>
@stop