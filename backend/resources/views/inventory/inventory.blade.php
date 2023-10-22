@extends('layouts.app')
@section('title', 'Inventory')

@section('content')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

 <!-- Bootstrap CSS link -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- CDN版のBootstrapとVue.jsを読み込み -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


 <!-- Link to Poppins font -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
 <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
 <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>


 <!-- Font Awesome icons -->
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">




<div class="container">
    <!-- inventory part -->
    <h1>Inventory Summary</h1>
    <div class="top-content">

        <div class="row auto align-items-center">

            <!-- Total Products Card -->
            <div class="col mb-3 h-100">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal">
                    <div class="card">
                        <div class="card-body" style="background-color: #003366; color: #fff;">
                            <h3 class="card-title"><i class="fi fi-sr-box"></i>Total Stock Products</h3>
                            <p class="card-text h2">12</p>
                        </div>
                    </div>
                </button>

                <div id="test-modal" class="modal fade auto" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #003366; color: #fff;">
                                <h5 class="modal-title text-light">Total Stock Products</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <table class="table table-hover align-middle border">
                                <table class="small" border="1">
                                    <thead>
                                        <tr>
                                            <th><h4>Products Name</h4></th>
                                            <th><h4>QTY</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                            <!-- 行を10回繰り返し -->
                                            <?php for ($row = 1; $row <= 10; $row++) { ?>
                                                <tr>
                                                    <!-- 列1 -->
                                                    <td>行<?php echo $row; ?>列1</td>
                                                    <!-- 列2 -->
                                                    <td>行<?php echo $row; ?>列2</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </tbody>
                                </table>
                            </table>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Low Stock Products Card -->
            <div class="col mb-3 h-100">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal">
                    <div class="card">
                        <div class="card-body" style="background-color: #336699; color: #fff;">
                            <h3 class="card-title"><i class="fi fi-sr-box-open-full"></i>Low Stock Products</h3>
                            <p class="card-text h2">10</p>
                        </div>
                    </div>
                </button>

                <div id="test-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Low Stock Products Card</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <table class="table table-hover align-middle border">
                                <table class="small" border="1">
                                    <thead>
                                        <tr>
                                            <th><h4>Products Name</h4></th>
                                            <th><h4>QTY</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                            <!-- 行を10回繰り返し -->
                                            <?php for ($row = 1; $row <= 10; $row++) { ?>
                                                <tr>
                                                    <!-- 列1 -->
                                                    <td>行<?php echo $row; ?>列1</td>
                                                    <!-- 列2 -->
                                                    <td>行<?php echo $row; ?>列2</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </tbody>
                                </table>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Out Stock Products Card -->
            <div class="col mb-3 h-100">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal">
                    <div class="card">
                        <div class="card-body" style="background-color: #6699cc; color: #fff;">
                            <h3 class="card-title"><i class="fi fi-sr-box-open"></i>Out of Stock Products</h3>
                            <p class="card-text h2">4</p>
                        </div>
                    </div>
                </button>

                <div id="test-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">タイトル</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <table class="table table-hover align-middle border">
                                <table class="small" border="1">
                                    <thead>
                                        <tr>
                                            <th><h4>Products Name</h4></th>
                                            <th><h4>QTY</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                            <!-- 行を10回繰り返し -->
                                            <?php for ($row = 1; $row <= 10; $row++) { ?>
                                                <tr>
                                                    <!-- 列1 -->
                                                    <td>行<?php echo $row; ?>列1</td>
                                                    <!-- 列2 -->
                                                    <td>行<?php echo $row; ?>列2</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </tbody>
                                </table>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Zero Stock Products Card -->
            <div class="col mb-3 h-100">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal">
                    <div class="card">
                        <div class="card-body" style="background-color: #99CCFF; color: #fff;">
                            <h3 class="card-title"><i class="fi fi-sr-cross-circle"></i>Zero Stock Products</h3>
                            <p class="card-text h2">4</p>
                        </div>
                    </div>
                </button>

                <div id="test-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">タイトル</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <table class="table table-hover align-middle border">
                                <table class="small" border="1">
                                    <thead>
                                        <tr>
                                            <th><h4>Products Name</h4></th>
                                            <th><h4>QTY</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                            <!-- 行を10回繰り返し -->
                                            <?php for ($row = 1; $row <= 10; $row++) { ?>
                                                <tr>
                                                    <!-- 列1 -->
                                                    <td>行<?php echo $row; ?>列1</td>
                                                    <!-- 列2 -->
                                                    <td>行<?php echo $row; ?>列2</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </tbody>
                                </table>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Most Stock Products Card -->
            <div class="col mb-3 h-100">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal">
                    <div class="card">
                        <div class="card-body" style="background-color: #6699cc; color: #fff;">
                            <h3 class="card-title"><i class="fi fi-sr-boxes"></i>Most Stock Products</h3>
                            <p class="card-text h2">4</p>
                        </div>
                    </div>
                </button>

                <div id="test-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">タイトル</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <table class="table table-hover align-middle border">
                                <table class="small" border="1">
                                    <thead>
                                        <tr>
                                            <th><h4>Products Name</h4></th>
                                            <th><h4>QTY</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                            <!-- 行を10回繰り返し -->
                                            <?php for ($row = 1; $row <= 10; $row++) { ?>
                                                <tr>
                                                    <!-- 列1 -->
                                                    <td>行<?php echo $row; ?>列1</td>
                                                    <!-- 列2 -->
                                                    <td>行<?php echo $row; ?>列2</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </tbody>
                                </table>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mx-auto mt-5">
    <div class="bottom-content mt-5">
        <!-- recent part -->
        <h1>Recent purchase products</h1>
        <div class="col-3 justify-content-between data-bs-placement='right'">
          <form action="" method="get">
              <div class="input-group mb-3 ">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" navbar-toggler on rigth>
                      <span class="input-group-text">
                          <i class="fa fa-search"></i>
                      </span>
              </div>
          </form>
        </div>

        <div class="row">
            <table class="table table-hover align-middle bg-white border text-secondary">
                <thead class="small table-primary text-secondary">
                    <tr>
                        <th>Purchase Date</th>
                        <th>Products Name</th>
                        <th>Order Totale</th>
                        <th>Stock List</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>2023/08/29</td>
                        <td>AAAAA</td>
                        <td>45,000</td>
                        <td>450</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row mt-5">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
    </div>
    </div>
</div>
@endsection
