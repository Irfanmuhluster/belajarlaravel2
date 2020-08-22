<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
           
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
			  <h2>Striped Rows</h2>
			  <p>The .table-striped class adds zebra-stripes to a table:</p>  
			  <form id="pegawai" action="{{ route('public.search') }}">
           {{-- @method('PUT') --}}
			  	{{-- @csrf --}}
			  	 <input type="text" name="search" placeholder="cari"  class="form-control" >
			  	 <button type="submit" class="btn btn-primary btn-block" id="btnpegawai" data-loadingbtnkas="<i class='fa fa-circle-o-notch fa-spin'></i> Loading ...">Cari</button>
        
			  </form>          
			  <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Nama Pegawai</th>
			        <th>Jabatan</th>
			        <th>Tanggal Lahir</th>
			        <th>Alamat</th>
			      </tr>
			    </thead>
			    <tbody>
			    @forelse($pegawai as $d)
			      <tr>
			        <td>{{ $d->nama_pegawai }}</td>
			        <td>{{ $d->jabatan }}</td>
			        <td>{{ showDateTime($d->tanggallahir, 'l, d F Y') }}</td>
			        <td>{{ $d->alamat }}</td>
			      </tr>
			     @empty
			     <tr>
			        <td colspan="4">John</td>
			        
			      </tr>
			      @endforelse
			      
			    </tbody>
			  </table>
        {{ $pegawai->links() }}
			</div>

{{-- {{ route('public.search', ":search") }} --}}
        </div>
    </body>
</html>
<script type="text/javascript">
// let form = document.getElementById('pegawai');
// form.addEventListener('submit', e => {
  
//   let element = event.target;
//   e.preventDefault();
//   const formdata = new FormData(form);
//   let search = formdata.get('search');
  // let value = ""
//   let url = value.replace(':search', search)
//   fetch(`${url}`)
//     .then(response => response.json())
//     .then(data => console.log(JSON.stringify(data))
//     ).catch((err)=>console.log(err))
//   });

</script>
