@extends('master')

@section('parent')
    @parent
@endsection

@section('aldinprofile')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="../../dist/img/aldin-crop.jpeg"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$post->name}}</h3>

                    <p class="text-muted text-center">{{$post->role}}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Born</b> <a class="float-right">April, 23 2003</a>
                        </li>
                        <li li class="list-group-item">
                            <b>Home</b> <a class="float-right">{{$post->address}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phone Number</b> <a class="float-right">{{$post->phone}}</a>
                        </li>
                    </ul>
                    <a href="https://www.instagram.com/aldin.pramudya/" target="_blank" class="btn btn-primary btn-block"><b>Instagram</b></a>
                    <a href="https://www.facebook.com/aldin.a.pramudya/" target="_blank" class="btn btn-primary btn-block"><b>Facebook</b></a>
                    <a href="https://www.twitter.com/aldinpramudya/" target="_blank" class="btn btn-primary btn-block"><b>Twitter</b></a>
                    <a href="https://www.linkedin.com/in/aldin-ariel-pramudya-832037238/" target="_blank" class="btn btn-primary btn-block"><b>Linked In</b></a>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="background-img img-fluid img-rectangle" 
                        src="../../dist/img/background.jpeg" 
                        alt="Background picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <h3 class="profile-username text-center">About Me !</h3>
        </div>
        <div class="card-body">
            <div class="text-center">
                {{$post->about}}
            </div>
        </div>
        <div class="card-footer">
            Mahasiswa tingkat 2 dari kampus vokasi terbaik sejagat malang raya yaitu Politeknik Negeri Malang, Dibekali dengan 
            semangat untuk belajar dan semangat untuk mencari kanojo yang saat ini sedang dalam hubungan
            jauh di mata namun dekat di hati, saya berusaha untuk menggunakan waktu yang ada untuk dapet gacha wangy pada
            setiap permainan yang saya miliki, karena gacha sempurna adalah sebuah mitos bualan semata
        </div>
    </div>
@endsection