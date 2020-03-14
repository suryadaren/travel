@extends('operator.layout')

@section('title','Mobil')
@section('css')
<style>
  td{
    padding-right: 20px
  }
  tr{
    border-bottom: 1px solid black;
  }
</style>
@endsection
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="/operator/dist/img/car.jpg" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">New Ferrari 1409</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum pariatur enim porro sint magni fuga eligendi voluptates, atque excepturi, minima, consectetur aliquid, illo reiciendis non consequuntur nemo eum delectus perferendis!</p>

              <hr>
              <table>
                <tr>
                  <td><h5>Warna </h5></td>
                  <td><h5> : Merah</h5></td>
                </tr>
                <tr>
                  <td><h5>Nomo Plat </h5></td>
                  <td><h5> : N 1490 KJ</h5></td>
                </tr>
                <tr>
                  <td><h5>Sopir </h5></td>
                  <td><h5><ul>
                    <li><a href="/operator/lihat_sopir/1">Yadi</a></li>
                    <li><a href="/operator/lihat_sopir/1">Budi</a></li>
                    <li><a href="/operator/lihat_sopir/1">Ali</a></li>
                  </ul></h5></td>
                </tr>
              </table>

            </div>
          </div>
          <div class="row mt-12">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Review</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">

                <!-- Conversations are loaded here -->
                <div class="">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="/operator/dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque fugit iure voluptatem praesentium commodi voluptatibus temporibus mollitia magnam. Architecto delectus quos ad sunt obcaecati quibusdam, tempore id quam omnis?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="/operator/dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque fugit iure voluptatem praesentium commodi voluptatibus temporibus mollitia magnam. Architecto delectus quos ad sunt obcaecati quibusdam, tempore id quam omnis?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="/operator/dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque fugit iure voluptatem praesentium commodi voluptatibus temporibus mollitia magnam. Architecto delectus quos ad sunt obcaecati quibusdam, tempore id quam omnis?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section('js')

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection