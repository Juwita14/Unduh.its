@extends('layouts.userlayaout')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Search -->
        <form class="push" action="bd_search.html" method="post">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Cari produk lisensi..">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- END Search -->
        
        <div style="background-color:#F0F2F5;" class="block shadow-none">
                <a href="produk">Produk Lisensi </a>
                <i class="fa fa-angle-right "></i>
                <a > Minitab</a>
        </div>
        <!-- Results -->
        <div class="row">
            <div class="col-sm-3">
                <div class="block">
                    <div class="block-content py-5">
                            <a class="block-rounded" >
                                <img style= "width: 225px; height: 225px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/kisspng-minitab-wikipedia-logo-project-management-5b209eb26c9d48.6518232015288644344449.png" alt="">
                            </a>
                            <div class="ml-20">
                                <div class="border-b">
                                    <p class="font-size-lg font-w700  mb-0">
                                        Minitab Statistical Software
                                    </p>
                                    <p class="font-size-sm  font-w600 text-op  mb-0">
                                        Minitab
                                    </p>
                                </div>
                                <br>
                                <div class="ml-15 mb-20">
                                    <a href="https://www.minitab.com/en-us/products/minitab/" target="_blank"> 
                                        <button style="" type="button" class="btn btn-success shadow min-width-150 ">
                                            <i class="fa fa-globe mr-5"></i>
                                            Visit Website
                                        </button>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="block">
                    <div class="block-content">
                        <div class="block">
                            <ul style="border-width: 2px !important; border-color: #3F9CE8 !important;" class="nav nav-pills nav-justified border-b" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active " href="#search-ringkasan">Ringkasan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-filedownload">File Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-spesifikasi">Spesifikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-preview">Preview</a>
                                </li>
                            </ul>
                            <div class="block-content block-content-full tab-content overflow-hidden">
                                <!-- Ringkasan-->
                                <div class="tab-pane fade show active" id="search-ringkasan" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Minitab Statistical Software</a>
                                            </h4>

                                            @foreach($ringkasan as $r)
                                                <p> {!! html_entity_decode($r->ringkasan) !!}</p>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- END Ringkasan -->

                                <!-- File Download -->
                                <div class="tab-pane fade" id="search-filedownload" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">File Panduan</a>
                                            </h4>
                                            @foreach($file_panduan as $pd)
                                            <a href="/downloadPanduan/{{$pd->id}}">
                                                <i class="fa fa-file-pdf-o" style="color:red"></i>
                                                <div style="display:inline-block;" class="text">
                                                    <p>{{$pd->nama_file_panduan}}</p>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">File Installer</a>
                                            </h4>
                                            <table class="table table-borderless table-hover table-vcenter">
                                            <thead class="thead-light">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th class="d-none d-sm-table-cell">Ukuran</th>
                                                        <th class="text-center" style="width: 80px;">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($file_installer as $fi)
                                                    </tr>
                                                    <td>{{$fi->nama_file_installer}}</td>
                                                    <td>{{$fi->size}}MB</td> 
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <a href="/downloadInstaller/{{$fi->id}}">
                                                                <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                    <i class="fa fa-download"></i>
                                                                </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Photos -->

                                <!-- Spesifikasi -->
                                <div class="tab-pane fade" id="search-spesifikasi" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Persyaratan Sistem</a>
                                            </h4>
                                            @foreach($persyaratan_sistem as $p)
                                                <p> {!! html_entity_decode($p->persyaratan_sistem) !!}</p>
                                            @endforeach

                                        </div>
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Fitur</a>
                                            </h4>
                                                @foreach($fitur as $f)
                                                <p> {!! html_entity_decode($f->fitur) !!}</p>
                                                @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- END Spesifikasi -->

                                <!-- Preview -->
                                <div class="tab-pane fade" id="search-preview" role="tabpanel">
                                    <div style="background-color:#F0F2F5;" class="content">
                                        <a class="block-rounded" >
                                            <img style= ""  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="">
                                        </a>
                                        <br>
                                    </div>
                                    <div style="background-color:#F0F2F5;" class="well text-center">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" class="img-fluid"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Projects -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <!-- END Results -->
    </div>
    <!-- END Page Content -->

@endsection