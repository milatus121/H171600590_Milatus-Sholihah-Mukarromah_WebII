@csrf
 <div class="form-group row">
    <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-10">
        {!! Form::text('judul', null,['class'=>"form-control",'required','autofocus']); !!}
         @error('judul')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>
     
 <div class="form-group row">
    <label for="kategori_berita_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Berita id') }}</label>

        <div class="col-md-10">
        {!! Form::select('kategori_berita_id',$KategoriBerita,null,['class'=>"form-control","required"] ) !!}

         @error('kategori_berita_id')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>


 <div class="form-group row">
    <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('isi') }}</label>

        <div class="col-md-10">
        {!! Form::select('isi',$KategoriBerita,null,['class'=>"form-control","required"] ) !!}

         @error('isi')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>
 
     
 {!! Form::hidden('users_id', Auth::id() ); !!}

   <div class="form-group row mb-0">
    <div class="col-md-10 offset-md-2">
            <button type="submit" class="btn btn-primary">
            {{ __('Simpan data ')}}
            </button>
            <a href="{!! route('berita.index')!!}" class="btn btn-danger">
            {{ __('Batal ')}}
            </a>
    </div>
    </div>