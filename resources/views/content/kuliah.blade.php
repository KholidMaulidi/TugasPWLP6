@extends('master')

@section('parent')
    @parent
@endsection

@section('pengalaman')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="../../dist/img/polinema.png"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Politeknik Negeri Malang</h3>

                    <p class="text-muted text-center">State Polytechnic in Indonesia</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Jumlah Mahasiswa</b> <a class="float-right">9,122</a>
                        </li>
                        <li li class="list-group-item">
                            <b>Jumlah Dosen</b> <a class="float-right">399</a>
                        </li>
                        <li class="list-group-item">
                            <b>Peminat</b> <a class="float-right">26,470</a>
                        </li>
                    </ul>
                    <a href="https://www.polinema.ac.id/" target="_blank" class="btn btn-primary btn-block"><b>Visit Website</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Us</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  Polytechnic State in Malang City
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malang, East Java Province</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>Department</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">IT</span>
                  <span class="tag tag-success">Accounting</span>
                  <span class="tag tag-info">Telecomunication</span>
                  <span class="tag tag-warning">Chemist</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">An education place that aims for the better future</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane">
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/aldin.jpeg" alt="user image">
                                    <span class="username">
                                        <a href="#">Aldin Ariel Pramudya</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                    </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                        <!-- /.user-block -->
                                <p>
                                Pada tanggal 1 Februari 2023, saya mengikuti kelas Workshop Riset Informatika
                                yang membahas mengenai framework full website application dari bahasa C# yaitu .net atau
                                dibaca dotnet
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i> Comments (5)
                                        </a>
                                    </span>
                                </p>

                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/kholid.jpeg" alt="user image">
                                    <span class="username">
                                        <a href="#">Kholid Maulidi</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                    </span>
                                    <span class="description">Shared publicly - 08:25 PM yesterday</span>
                                </div>
                        <!-- /.user-block -->
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <img class="img-fluid" src="../../dist/img/sertif.jpg" alt="Photo">
                                    </div>
                                </div>
                                <p>
                                Akhirnya saya telah menyelesaikan pelatihan pemrograman dengan menggunakan kotlin dalam course online dicoding !<br>
                                Terimakasih banyak dicoding ! 
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i>
                                        </a>
                                    </span>
                                </p>

                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
